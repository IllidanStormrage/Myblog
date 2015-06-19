@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增 Blog</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ URL('admin/pages') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p>Please input your blog's title</p>
                            <input type="text" name="Blog_title" class="form-control" required="required">
                            <br>
                            <textarea name="Blog_type" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <p>请输入你博客的简介：</p>
                            <textarea name="Blog_abstract" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <p>请输入你博客的正文：</p>
                            <textarea name="Blog_content" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <p>请输入你书写博客的年份：(例如2015)</p>
                            <input type="text" name="Blog_year" class="form-control" required="required">
                            <br>
                            <p>请输入你书写博客的月份：（形如01,12等）</p>
                            <input type="text" name="Blog_month" class="form-control" required="required">
                            <br>
                            <p>请输入你希望的发表人名字，不输入将默认当前用户名</p>
                            <input type="text" name="Blog_user" class="form-control" required="required">
                            <br>
                            <button class="btn btn-lg btn-info">新增 Blog</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection