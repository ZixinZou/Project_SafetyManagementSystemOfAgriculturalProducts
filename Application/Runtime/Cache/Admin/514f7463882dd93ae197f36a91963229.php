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
            <p></p><p></p><p></p><p></p><p></p><div id="profile-links"> Hello,企业 <?php echo ($username); ?> <br />
            <br />
            <a href="<?php echo U('Admin/Admin/index');?>" title="帮助">帮助</a>
            <a href="<?php echo U('Admin/Admin/logout');?>" title="退出">退出</a> </div>
            <ul id="main-nav">
                <!-- Accordion Menu -->
                <li> <a href="<?php echo U('Admin/stu/index_qy');?>" class="nav-top-item"> 首页 </a>
                </li>
                <li> <a href="#" class="nav-top-item ">
                    <!-- Add the class "current" to current menu item -->
                    表格管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/stu/showAll_qy');?>">查看已录入表格</a></li>
                        <li><a href="<?php echo U('Admin/stu/add_qy');?>">录入新表格</a></li>

                    </ul>
                </li>
                </li>
                <li> <a href="#" class="nav-top-item"> 个人中心 </a>
                    <ul>
                        <li><a href="<?php echo U('Admin/User/PwdUpdate_qy');?>">修改密码</a></li>
                        <li><a href="<?php echo U('Admin/User/show_qy');?>">个人信息</a></li>
                        <li><a href="<?php echo U('Admin/User/delete_qy');?>">注销</a></li>
                    </ul>
                </li>
                <!-- End #main-nav -->
                <!-- End #messages -->
            </ul>
        </div>
    </div>
    <!-- End #sidebar -->
    <div id="main-content">
        <!-- End .shortcut-buttons-set -->
        <div class="clear"></div>
        <!-- End .clear -->
        <div class="content-box">
            <!-- Start Content Box -->
            <div class="content-box-header">
                <h3>录入新表格</h3>
                <ul class="content-box-tabs">
                    <li><a href="#tab1" class="default-tab">Table</a></li>
                    <!-- href must be unique and match the id of target div -->

                </ul>
                <div class="clear"></div>
            </div>
            <!-- End .content-box-header -->
            <div class="content-box-content">
                <div class="tab-content default-tab" id="tab1">
                    <table>
                        <tr><td><a href="<?php echo U('Admin/stu/c_an1');?>">动物源性饲料产品生产企业生产经营状况年度备案表之生产情况</a></td></tr>
                        <tr><td><a href="#">动物源性饲料产品生产企业生产经营状况年度备案表之产品质量检验情况</a></td></tr>
                        <tr> <td>动物源性饲料产品生产企业生产经营状况年度备案表之变更情况</td></tr>
                        <tr><td><a href="#">饲料车间生产记录表</a></td></tr>
                        <tr><td>饲料和饲料添加剂经营企业联系表</td></tr>
                        <tr><td>饲料生产企业年度备案表之生产情况</td></tr>
                        <tr><td>饲料生产企业年度备案表之型式检验情况</td></tr>
                        <tr><td>饲料生产企业年度备案表之变更情况及说明</td></tr>
                        <tr><td>饲料生产企业油脂使用情况登记表</td></tr>
                        <tr><td>饲料生产企业油脂使用情况汇总表</td></tr>
                        <tr><td>企业无害化处理记录表</td></tr>
                        <tr><td>销售记录表</td></tr>
                        <tr><td>企业蓄水设施清洗记录表</td></tr>
                    </table>
                </div>
                <!-- End #tab1 -->

            </div>
            <!-- End .content-box-content -->
        </div>

        <div class="clear"></div>

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