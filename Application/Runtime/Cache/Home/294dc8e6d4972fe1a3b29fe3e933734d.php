<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
</head>
<body>
<div id="body-wrapper">
    <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
        <div id="sidebar-wrapper">
            <!-- Sidebar with logo and menu -->
            <h1 id="sidebar-title"><a href="#">Simpla Home</a></h1>
            <!-- Logo (221px wide) -->
            <!-- Sidebar Profile links -->
            <p></p><p></p><p></p><p></p><p></p><div id="profile-links"> Hello, <?php echo ($username); ?> <br />
            <br />
            <a href="<?php echo U('Home/Home/index');?>" title="帮助">帮助</a>
            <a href="<?php echo U('Home/Home/logout');?>" title="退出">退出</a> </div>
            <ul id="main-nav">
                <!-- Accordion Menu -->

                <li> <a href="#" class="nav-top-item ">
                    <!-- Add the class "current" to current menu item -->
                    表格管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Home/stu/showAll');?>">查看已录入表格</a></li>
                        <li><a href="<?php echo U('Home/stu/showAdd');?>">录入新表格</a></li>

                    </ul>
                </li>
                <li> <a href="#" class="nav-top-item"> 用户管理 </a>
                    <ul>
                        <li><a href="<?php echo U('Home/User/showAll');?>">用户列表</a></li>
                        <li><a href="<?php echo U('Home/User/showAdd');?>">用户添加</a></li>
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

        <!-- End .shortcut-buttons-set -->
        <div class="clear"></div>
        <!-- End .clear -->
        <div class="content-box">
            <!-- Start Content Box -->
            <div class="content-box-header">
                <h3>用户列表</h3>
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
                        <thead>
                        <tr>
                            <th>

                            </th>

                            <th>用户名</th>
                            <th>姓名</th>
                            <th>身份</th>
                            <th>地址</th>
                            <th>电话</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="pagination"><?php echo ($pageControl); ?> </div>
                                <!-- End .pagination -->
                                <div class="clear"></div>
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>

                                <td>

                                </td>
                                <td><?php echo ($user['username']); ?></td>
                                <td><?php echo ($user['name']); ?></td>
                                <td><?php echo ($user['role']); ?></td>
                                <td><?php echo ($user['address']); ?></td>
                                <td><?php echo ($user['telenumber']); ?></td>


                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                </div>
                <!-- End #tab1 -->

            </div>
            <!-- End .content-box-content -->
        </div>

        <div class="clear"></div>

        <div id="footer"> <small>
            <!-- Remove this notice or replace it with whatever you want -->
            &#169; Copyright 2010 Your Company | Powered by <a href="http://www.865171.cn">Home templates</a> | <a href="#">Top</a> </small> </div>
        <!-- End #footer -->
    </div>
    <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>