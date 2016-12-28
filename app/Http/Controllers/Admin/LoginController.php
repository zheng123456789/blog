<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录
    public function Login()
    {
    	return view('admin.login');
    }
	
	// 验证登录
	public function dologin(Request $request)
	{
		// return 123;
		$user = $request->input('username');
		$psd = $request->input('password');
		// dd($psd);
		$ob = \DB::table('users')->where('username',$user)->first();	
		// dd($ob);
		if($ob){
			if($ob->password == $psd){
				session()->set("adminuser",$ob);
				return redirect('admin/index');
			}else{
				return back()->with("msg","账号或密码错误");
			}
		}
		return back()->with("msg","账号或密码错误");
	}    

	 //4 执行退出
    public function logout()
    {
        
        // 忘记session
        session()->forget("adminuser");
        //重定向
        // return 456;
        return redirect("admin/login");
    }
}
