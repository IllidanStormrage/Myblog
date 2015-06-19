<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function(Blueprint $table)
		{
            $table->increments('id') ;
            //定义表中的id
            $table->string('Blog_title');
            //每一篇博客的题目
            $table->string('Blog_type') ;
            //博客的分类：php,nginx一类的
            $table->text('Blog_abstract') ;
            //博客的简介
            $table->text('Blog_content') ;
            //博客的内容
            $table->integer('Blog_year') ;
            //博客中的年
            $table->integer('Blog_month') ;
            //博客中的月
            $table->string('Blog_user') ;
            //发表人的名字
            $table->timestamps() ;
            //发表的时间
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogs');
	}

}
