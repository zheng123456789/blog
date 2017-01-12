<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    //显示增加页面
    public function index()
    {
    	return view('admin/add');
    }
    //添加信息
    // public function create()
    // {
    //     // //1.链接数据库查询所属类(下拉)
    //     // $list = \DB::table("cates")->where('pid','0')->get();
    //     // return view("admin.add.add")->with('list',$list);
    // }
    //
    public function show()
    {
        //1.链接数据库查询所属类(下拉)
        $list = \DB::table("cates")->where('pid','0')->get();
        // return 4543;
        return view("admin.add")->with('list',$list);
    }
}

