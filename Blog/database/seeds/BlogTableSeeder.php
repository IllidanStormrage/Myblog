<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2015/6/4
 * Time: 23:02
 */
use Illuminate\Database\Seeder;
use App\Blog;

class BlogTableSeeder extends Seeder {

    public function run()
    {
        DB::table('blogs')->delete();

        for ($i=0; $i < 10; $i++) {
            Blog::create([
                'Blog_title'   => 'Title '.$i,
                'Blog_type'    => 'php',
                'Blog_abstract'    => 'I love you , Li Dunfeng ! ',
                'Blog_content'    => 'I love you , Li Dunfeng ! There is no thing called my life ,unless I am shared it with you !',
                'Blog_year'    => 2015 ,
                'Blog_month'    => 06 ,
                'Blog_user' => 'A\mer’s Arch ' ,
            ]);
        }
    }

}