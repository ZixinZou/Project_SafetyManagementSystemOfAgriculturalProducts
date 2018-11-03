<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<body>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <!-- Sidebar with logo and menu -->
            <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
            <!-- Logo (221px wide) -->
            <a href="http://www.865171.cn"><img id="logo" src="/cms2/Public/images/logo.png" alt="Simpla Admin logo" /></a>
            <!-- Sidebar Profile links -->
            <div id="profile-links"> Hello, 管理员 <br />
                <br />
                <a href="<?php echo U('Admin/Admin/logout');?>" title="退出">退出</a> </div>
            <ul id="main-nav">
                <!-- Accordion Menu -->

                <li> <a href="#" class="nav-top-item ">
                    <!-- Add the class "current" to current menu item -->
                    学生管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/stu/showAll');?>">学员列表</a></li>
                        <li><a href="<?php echo U('Admin/stu/showAdd');?>">添加学生</a></li>

                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> 用户管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/User/showAll');?>">用户列表</a></li>
                        <li><a href="<?php echo U('Admin/User/showAdd');?>">用户添加</a></li>
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
        <h2>修改用户信息</h2>
        <div class="content-box">

            <form action="<?php echo U('Admin/user/update',array('id'=>$user_list['id']));?>" method="post">
                <table>
                    <tr><td>姓名</td><td><input type="text" name="username" value="<?php echo ($user_list['username']); ?>" readonlys/></td></tr>
                    <tr><td>角色</td><td><input type="text" name="role" value="<?php echo ($user_list['role']); ?>"/></td></tr>
                     <tr><td>班级</td><td><input type="text" name="class"  value="<?php echo ($user_list['class']); ?>"/></td></tr>
                    <tr><td>年级</td><td><input type="text" name="grade"  value="<?php echo ($user_list['grade']); ?>"/></td></tr>
                    <tr><td cols="5"></td><td><input type="submit" name="update" value="修改"/></td></tr>
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