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
        <h1>通州区农产品安全管理系统</h1>
        <!-- Logo (221px width) -->
    <!-- End #logn-top -->
    <div id="login-content">
        <form action="<?php echo U('Admin/Admin/login');?>" method="post">
            <div class="notification information png_bg">
            </div>
            <p>
                <label>用户名</label>
                <input class="text-input" type="text" name="username"/>
            </p>
            <div class="clear"></div>
            <p>
                <label>密&emsp;码</label>
                <input class="text-input" type="password" name="password" />
            </p>
            <div class="clear"></div>
            <p id="remember-password">
                <input type="checkbox" />
                记住我</p>
            <div class="clear"></div>

            <div class="clear"></div>
            <p>
                <input class="button" type="submit" value="登录" name="login"/>
            </p>
        </form>
    </div>
    <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>