<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Blog;

use Redirect, Input, Auth;

class PagesController extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'Blog_title' => 'required|unique:blogs|max:255',
        'Blog_type' => 'required',
        'Blog_abstract' => 'required',
        'Blog_content' => 'required' ,
        'Blog_year' => 'required',
        'Blog_month' => 'required' ,
        'Blog_user' => 'required' ,
    ]);

        $blog = new Blog;
        //Input::get 后面填写对应的create.blade.php中的内容
        $blog->Blog_title = Input::get('Blog_title');
        $blog->Blog_type = Input::get('Blog_type');
        $blog->Blog_abstract = Input::get('Blog_abstract');//Auth::user()->id;
        $blog->Blog_content = Input::get('Blog_content');
        $blog->Blog_year = Input::get('Blog_year');
        $blog->Blog_month = Input::get('Blog_month');
        $blog->Blog_user = Input::get('Blog_user');
        if ($blog->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }
    /**
     * 定义用来生成一个新的BLog
     * 从create.blade.php中获取所需要的信息
     * 通过新建对象blog进行写入
     *
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.pages.edit')->withBlog(Blog::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'Blog_title' => 'required|unique:pages,title,'.$id.'|max:255',
            'Blog_type' => 'required',
            'Blog_abstract' => 'required',
            'Blog_content' => 'required' ,
            'Blog_year' => 'required',
            'Blog_month' => 'required' ,
            'Blog_user' => 'required' ,
        ]);

        $blog = Blog::find($id);
        $blog->Blog_title = Input::get('Blog_title');
        $blog->Blog_type = Input::get('Blog_type');
        $blog->Blog_abstract = Input::get('Blog_abstract');//Auth::user()->id;
        $blog->Blog_content = Input::get('Blog_content');
        $blog->Blog_year = Input::get('Blog_year');
        $blog->Blog_month = Input::get('Blog_month');
        $blog->Blog_user = Input::get('Blog_user');
        if ($blog->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return Redirect::to('admin');
    }

}