<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {

    public function index()
    {
        $this->display('login');
    }
    public function login()
    {
        $username = $_POST['username'];
        $password =md5($_POST['password']);
        $user=M('user');
        $ls=$user->where("username='$username'&&password='$password'")->find();
        if ( $ls) {
            // $this->success('用户登录成功！');
            //记住用户的登录session
            $_SESSION['username']= $_POST['username'];
            $_SESSION['address']=$ls['address'];
            $_SESSION['name']=$ls['name'];
            $_SESSION['telenumber']=$ls['telenumber'];
            $_SESSION['role']=$ls['role'];
            $this->assign('username',  $_SESSION['username']);
            $this->assign('role',$_SESSION['role']);
            $this->assign('address',$_SESSION['address']);
            $this->assign('telenumber',$_SESSION['telenumber']);
            $this->assign('name',$_SESSION['name']);
            if ( $_SESSION['role']!=2)
                $ls['role']= $_SESSION['role']==1?'饲料生产企业':'农户';
            else
                $ls['role']='审查员';
            switch($_SESSION["role"]) {
                case 0:
                    $this->display('index');//display下面跟模板
                    break;
                case 1:
                    $this->display('index_qy');//display下面跟模板
                    break;
                case 2:
                    $this->display('index_sc');//display下面跟模板
                    break;
            }
        } else {
            $this->error('用户名或密码错误！');
            $this->redirect('index/index'); //redirect下面跟控制器
        }
    }
    public function logout()
    {
            $this->redirect('index');//重定向到控制器的方法  display是本控制的方法

    }
}