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
            <h1 id="sidebar-title"><a href="#">通州区农产品安全管理系统</a></h1>
            <!-- Logo (221px wide) -->
            <!-- Sidebar Profile links -->
            <p></p><p></p><p></p><p></p><p></p><div id="profile-links"> Hello,农户 <?php echo ($username); ?> <br />
            <br />
            <a href="<?php echo U('Admin/Admin/login');?>" title="帮助">帮助</a>
            <a href="<?php echo U('Admin/Admin/logout');?>" title="退出">退出</a> </div>
            <ul id="main-nav">
                <!-- Accordion Menu -->
                <li> <a href="<?php echo U('Admin/Admin/index');?>" class="nav-top-item"> 首页 </a>
                </li>
                <li> <a href="#" class="nav-top-item ">
                    <!-- Add the class "current" to current menu item -->
                    表格管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/stu/showAll');?>">查看已录入表格</a></li>
                        <li><a href="<?php echo U('Admin/stu/showAdd');?>">录入新表格</a></li>

                    </ul>
                </li>
                </li>
                <li> <a href="#" class="nav-top-item"> 个人中心 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/User/showPwdUpdate');?>">修改密码</a></li>
                        <li><a href="<?php echo U('Admin/User/show');?>">个人信息</a></li>
                        <li><a href="<?php echo U('Admin/User/showdelete');?>">注销</a></li>
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
        <div class="content-box">
            <div class="content-box-header">
                <h3>免疫接种记录表</h3>
                <ul class="content-box-tabs">
                    <li><a href="#tab1" class="default-tab">Table</a></li>
                    <!-- href must be unique and match the id of target div -->

                </ul>
                <div class="clear"></div>
            </div>
            <form action="<?php echo U('Admin/stu/addn_myjz');?>" method="post">
                <table>
                    <tr><td>畜别</td><td><input type="text" name="Sort"/></td></tr>
                    <tr><td>日龄</td><td><input type="text" name="Age"/></td></tr>
                    <tr><td>栋别</td><td><input type="text" name="Build" /></td></tr>
                    <tr><td>栏号</td><td><input type="text" name="Fence"/></td></tr>
                    <tr><td>预防疾病</td><td><input type="text" name="Disease"/></td></tr>
                    <tr><td>前次时间：年</td><td><input type="text" name="LastYear"/></td></tr>
                    <tr><td>        ：月</td><td><input type="text" name="LastMonth"/></td></tr>
                    <tr><td>        ：日</td><td><input type="text" name="LastDay"/></td></tr>
                    <tr><td>本次时间：年</td><td><input type="text" name="NowYear"/></td></tr>
                    <tr><td>        ：月</td><td><input type="text" name="NowMonth"/></td></tr>
                    <tr><td>        ：日</td><td><input type="text" name="NowDay"/></td></tr>
                    <tr><td>免疫次数</td><td><input type="text" name="ImmTime" /></td></tr>
                    <tr><td>选用疫苗</td><td><input type="text" name="Vaccine"/></td></tr>
                    <tr><td>接种剂量</td><td><input type="text" name="Dosage"/></td></tr>
                    <tr><td>接种途径</td><td><input type="text" name="Way"/></td></tr>
                    <tr><td>接种头数</td><td><input type="text" name="Number" /></td></tr>
                    <tr><td>反应情况</td><td><input type="text" name="Reaction"/></td></tr>
                    <tr><td>执行者</td><td><input type="text" name="Man"/></td></tr>

                    <tr><td cols="5"></td><td><input type="submit" name="add" value="添加"/></td></tr>
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