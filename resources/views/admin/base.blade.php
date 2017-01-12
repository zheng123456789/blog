<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>博客后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css' ) }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/simditor.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/simditor-emoji.css') }}" />

    <script type="text/javascript" src="{{ asset('scripts/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/module.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/uploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/simditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/simditor-emoji.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('scripts/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/libs/modernizr.min.js') }}"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="{{ url('admin/index') }}">后台首页</a></li>
                <li><a href="{{ url('/') }}" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <!-- <li><a href="#">管理员</a></li> -->
                <li><a href="#">修改密码</a></li>
                <li><a href="{{ url('admin/logout') }}">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎登陆博客后台管理系统</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="{{ url('admin/index') }}"><i class="icon-font">&#xe041;</i>全部博文</a>
                    <a href="{{ url('admin/add') }}"><i class="icon-font">&#xe001;</i>新增博文</a>
                    <a href="#"><i class="icon-font">&#xe041;</i>新增博客分类</a>
                    <!-- <a href="#"><i class="icon-font">&#xe01e;</i>作品评论</a> -->
                </div>
            </div>
        </div>
        @yield("content")
       