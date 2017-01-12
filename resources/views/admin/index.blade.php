@extends("admin.base")
@section('content')
     <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">浏览器</label><span class="res-info">
                        <?php
                            if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 8.0"))

                            echo "Internet Explorer 8.0"; // 这里可以写其他的执行命令
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0"))
                            echo "Internet Explorer 7.0";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0"))
                            echo "Internet Explorer 6.0";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"Firefox/3"))
                            echo "Firefox 3";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"Firefox/2"))
                            echo "Firefox 2";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"Chrome"))
                            echo "Google Chrome";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"Safari"))
                            echo "Safari";
                            else if(strpos($_SERVER["HTTP_USER_AGENT"],"Opera"))
                            echo "Opera";
                            else echo $_SERVER["HTTP_USER_AGENT"];
                         ?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">
                            <?php
                                echo php_sapi_name();
                            ?>span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">静静设计-版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">
                            <?php
                                date_default_timezone_set("Asia/Shanghai");
                                echo date("Y年m月d日 h:i:sa"); 
                            ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">
                        <?php
                            echo $_SERVER['HTTP_HOST'];
                        ?></span>
                    </li>
                    <li>
                        <label class="res-lab">主机名</label><span class="res-info">
                        <?php
                            echo $_SERVER['SERVER_NAME']
                        ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://user.qzone.qq.com/1065628795/main" target="_blank">QQ主页</a></span>
                    </li>
                    <li>
                        <label class="res-lab">官方交流QQ群：</label><span class="res-info"><a class="qq-link" target="_blank" href="https://jq.qq.com/?_wv=1027&k=43KXvZP"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="小郑瞎侃" title="小郑瞎侃"></a> </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
