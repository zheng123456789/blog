<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>郑勇的个人博客</title>
<meta name="keywords" content="free css template, orange bar, XHTML, CSS" />
<meta name="description" content="Orange Bar is a free CSS template from cssMoban.com" />
<link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
<script language="javascript" src="{{ asset('js/templatemo_image_fader.js') }}" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
    <div class="templatemo_container">
        <div id="templatemo_header">
            <div id="templatemo_logo_area">
                <div id="templatemo_logo">
                    <a href="http://www.cssmoban.com" target="_blank">H1标题</a></div>
              <div id="templatemo_slogan">
                    小标题
              </div>
                <div class="cleaner"></div>
            </div>
            
            <div id="templatemo_search">
                <form action="#" method="post">
                    <input type="text" value="请输入搜索关键字" name="q" class="field"  title="email" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="submit" name="search" value = "搜索" alt="Search" class="button" title="Subscribe" />
            </form>
            </div>
        
            <div id="templatemo_menu">
                <ul>
                    <li><!-- <a href="#">Home</a> -->这里是黄框里面的字</li>
                    <!-- <li class="current"><a href="#">Gallery/导航</a></li>
                    <li><a href="#">Archives/档案</a></li>
                    <li><a href="#">Wallpapers/壁纸</a></li>                        
                    <li><a href="#">Downloads/下载</a></li>
                    <li><a href="http://www.cssmoban.com" target="_parent">Templates/模板</a></li>   
                    <li><a href="#">Contact/联系</a></li>    -->   
                </ul>
            </div>
            
        </div><!-- end of header -->
        
        <div id="templatemo_image_fader">
            <script type="text/javascript">
                //new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
                new fadeshow(fadeimages, 960, 240, 1, 2000, 1, "R")
            </script>
        </div>
         <!-- 大框        -->
        <div id="templatemo_content_area">
            <!-- 左部分 -->
            <div id="templatemo_left">
                <!-- 文章遍历开始 -->
                @foreach($list as $posts)
                <div class="templatemo_post">
                    <!-- 文章标题 -->
                    <div class="templatemo_post_title">
                        <a href="#">{{ $posts->title }}</a></div>
                    <!-- 文章内容 -->
                    <div class="templatemo_post_text">
                        <a href="#"><img src="{{ $posts->img }}" alt="Flower" width="150" height="150" /></a>
                        <!-- <p>This is a free CSS template provided by <a href="http://www.cssmoban.com" target="_parent">缃戦〉妯℃澘</a> website. You may download and apply this  layout for  your personal or commercial websites. Credit goes to <a href="#" target="_blank">PhotoVaco.com</a> for photos used in this template. </p>
                        <p>Vivamus ultricies bibendum viverra. Sagittis vel puru and aien ai dofneonsets srci. In vulputate, felis vitae ultrices dapibus, leo nulla ornare erat, eu tincidunt magna ipm sit amet massdtess vivamus sed condimentum ipsum. Quisque ut tortor in elit luctus.</p> -->
                        <p>{{ $posts->content }}</p>
                        <p>这里是文章</p>
                        <p>这里是文章</p>
                        <p>这里是文章</p>
                        <p>这里是文章</p>
                        <p>{{ $posts->updated_at }}</p> 
                    </div>
                    
                        <div class="templatemo_post_bottom">
                            <a href="#">{{ $posts->created_at }}</a></div>
                            <!-- <a href="#">24 comments</a></div> -->
                        </div> 
                        @endforeach
                </div>
            </div><!-- End Of left-->
            
            <div id="templatemo_right">
                <div class="templatemo_section">
                    <div class="templatemo_section_title">
                        Categories
                    </div>
                    <div class="templatemo_section_bottom">
                        <ul class="templatemo_list">
                            <li><a href="#">Amet massdtess vivamus sed condimentum ipsum</a></li>
                           <!--  <li><a href="#">Donec nec justo eget felis facilisis fermentum</a></li>
                            <li><a href="#">Fusce lobortis lorem at ipsum sem</a></li>
                            <li><a href="#">Nulla vitae mau ris non felis mollis fau cibus</a></li>
                            <li><a href="#">Cras ornare tristique elit conval lis</a></li> -->
                        </ul>
                    </div>
                </div>
            </div><!-- End Of right-->
            
            <div class="cleaner"></div>
        
        </div><!-- End Of Content area -->
    </div><!-- End Of Container -->
    
    <div id="templatemo_bottom_area">
        <div class="templatemo_container">
            <div class="templatemo_section_1">
                <h1>Resource Links</h1>
                <ul class="templatemo_list templatemo_gray_list">
                    <li><a href="http://www.cssmoban.com" target="_parent">Free Web Templates</a></li>
                </ul>
            </div>
            
            <div class="templatemo_section_1">
                <h1>Recent Posts</h1>  
                <ul class="templatemo_list templatemo_gray_list">
                    <li><a href="#">Phasellus ultrices nulla</a></li> 
                </ul>
            </div>
            <div class="templatemo_section_2">
                <h1>W3C Validations</h1>
                <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum.</p>
          <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
            </div>
            <div class="cleaner"></div>
            <div id="templatemo_footer">
                <!-- Copyright 漏 2024 <a href="#">Your Company Name</a> | from <a href="http://www.cssmoban.com/" target="_parent">缃戠珯妯℃澘</a>         -->
                版权归<a href="#" style=color:blue;><b>郑勇</b></a> <!-- | from --> <a href="http://www.cssmoban.com/" target="_parent">所有,盗版必究</a>        
            </div>  
        </div>
    </div>
<!--  缃戠珯妯℃澘 from cssMoban.com  -->
</body>
</html>