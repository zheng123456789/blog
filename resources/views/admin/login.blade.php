﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录后台管理系统</title>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/cloud.js') }}" type="text/javascript"></script>
<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
</script> 
</head>
<body style="background-color:#1c77ac; background-image:url{{ ('images/light.png') }}; background-repeat:no-repeat; background-position:center top; overflow:hidden;">
    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  
<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
    </div>
    <div class="loginbody">
    <span class="systemlogo"></span> 
    <div class="loginbox">
    <form action="{{ url('admin/dologin') }}" id="formOne" method="post" >
        <ul>
        <!-- 提示 -->
        @if(session('msg'))
            <p style="color:red">{{ session('msg') }}</p>
        @else
        @endif
        <!-- 用户名 -->
        <li><input name="username" id="username" type="text" class="loginuser" autofocus placeholder="请输入账号" /></li>
        <!-- 密码 -->
        <li><input name="password" id="psd" type="password" class="loginpwd" placeholder="请输入密码" /></li>
        <!-- 登录按钮 -->
       <!--  <li><input name="submit" type="submit" class="loginbtn" value="登录" /><label><input name="" type="checkbox" value="" checked="checked" />记住密码</label><label><a href="#">忘记密码？</a></label></li> -->
       {{csrf_field()}}
        <input type="submit" value="登录" id="submit" name="submit" class="loginbtn">
        </ul>
    </form>
    </div>
    </div>
    <div class="loginbm">版权所有  2014  <a href="http://www.uimaker.com">uimaker.com</a>  仅供学习交流，勿用于任何商业用途</div>
</body> 
</html>