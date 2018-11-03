<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simpla Admin by www.865171.cn</title>
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
    <!-- jQuery Datepicker Plugin -->
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.datePicker.js"></script>
    <script type="text/javascript" src="/cms2/Public/scripts/jquery.date.js"></script>
</head>
</head>
<body>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <!-- Sidebar with logo and menu -->
            <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
            <!-- Logo (221px wide) -->
            <!-- Sidebar Profile links -->
            <div id="profile-links"> Hello, <?php echo ($username); ?> <br />
                <br />
                <a href="http://localhost/cms2/index.php/home/user/logout" title="退出">退出</a> </div>            <ul id="main-nav">
                <!-- Accordion Menu -->

                <li> <a href="#" class="nav-top-item  ">
                    <!-- Add the class "current" to current menu item -->
                    学生管理 </a>
                    <ul>
                        <li><a href="http://localhost/cms/index.php/home/user/showAll">学员列表</a></li>
                        <li><a href="http://localhost/cms/index.php/home/user/showAdd">添加学生</a></li>

                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item current ">
                    <!-- Add the class "current" to current menu item -->
                    个人管理 </a>
                    <ul>

                        <li><a href="http://localhost/cms/index.php/home/user/showPwdUpdate">修改密码</a></li>

                    </ul>
                </li>
                <!-- End #main-nav -->
                <!-- End #messages -->
            </ul>
        </div>
    </div>
    <!-- End #sidebar -->
    <div id="main-content">

        <!-- Page Head -->
        <h2>修改用户密码</h2>
        <div class="content-box">

            <form action="http://localhost/cms/index.php/home/user/PwdUpdate" method="post">
                <table>
                    <tr><td>用户名</td><td><input type="text" name="name" value="<?php echo ($username); ?>" readonly/></td></tr>
                    <tr><td>请输入原密码</td><td><input type="password" name="password"/></td></tr>
                    <tr><td>请输入新密码</td><td><input type="password" name="passwordNew"/></td></tr>
                    <tr><td>请再次输入新密码</td><td><input type="password" name="passwordNewq"/></td></tr>
                          <tr><td cols="5"></td><td><input type="submit" name="update" value="提交"/></td></tr>
                </table>
            </form>
        </div>

        <!-- End .shortcut-buttons-set -->
        <div class="clear"></div>
        <!-- End .clear -->

        <div id="footer"> <small>
            <!-- Remove this notice or replace it with whatever you want -->
            &#169; Copyright 2010 Your Company | Powered by <a href="http://www.865171.cn">admin templates</a> | <a href="#">Top</a> </small> </div>
        <!-- End #footer -->
    </div>
    <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>