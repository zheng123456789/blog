<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // 
    public function index()
    {
    	//获取所有信息
    	$list = \DB::table('posts')->where('elite',1)->get();
    	// dd($list);
    	//加载主页精华博文视图
    	return view('welcome',["list"=>$list]);
    }
}
