<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simpla Admin | Sign In by www.865171.cn</title>
    <!--                       CSS                       -->
    <!-- Reset Stylesheet -->
    <link rel="stylesheet" href="/cms2/Public/css/reset.css" type="text/css" media="screen" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/cms2/Public/css/style.css" type="text/css" media="screen" />
    <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
    <link rel="stylesheet" href="/cms2/Public/css/invalid.css" type="text/css" media="screen" />
    <!--                       Javascripts                       -->
    <!-- jQuery -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery-1.3.2.min.js"></script>
    <!-- jQuery Configuration -->
    <script type="text/javascript" src="/cms2/Public/scripts/simpla.jquery.configuration.js"></script>
    <!-- Facebox jQuery Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/facebox.js"></script>
    <!-- jQuery WYSIWYG Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
    <div id="login-top">
        <h1>Simpla Admin</h1>
        <!-- Logo (221px width) -->
        <a style="align:center;font-size: 24px;"><span>通州区农产品安全管理系统</span></a>
          <!-- End #logn-top -->
    <div id="login-content">
        <form  method="post" action="<?php echo U('Home/User/login');?>">
          <br> <br> <br> <br>
            <p>
                <label>用户名</label>
                <input class="text-input" type="text" name="username"/>
            </p>
            <div class="clear"></div>
            <p>
                <label>密码</label>
                <input class="text-input" type="password" name="password" />
            </p>
            <div class="clear"></div>
            <p id="remember-password">
                <input type="checkbox" />
                记住我 </p>
            <div class="clear"></div>
            <p>
                <input class="button" type="button" value="注册"  onclick="toReg('http://localhost/cms2/index.php/home/user/showReg')"/>
                <input class="button" type="submit" value="登录" name="login" />
<script type="text/javascript">
    function toReg(str)
    {   alert(str);
        var url=str;
        window.location.href=url;//js中的跳转
    }
</script>
            </p>
        </form>
    </div>
    <!-- End #login-content -->
</div>
    </div>
<!-- End #login-wrapper -->
</body>
</html>