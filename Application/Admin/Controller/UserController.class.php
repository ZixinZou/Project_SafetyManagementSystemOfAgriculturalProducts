<?php
/**
 * Created by PhpStorm.
 * User: liu
 * Date: 2016/4/30
 * Time: 9:19
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class UserController extends Controller
{
    public function showAll()
    {
        $user=M('user');
        $this->assign('username',  $_SESSION['username']);
        $username=$_SESSION['username'];
        import('Org.Util.Page');
        $total=$user->count();//记录总数
        $num_pre_page=8;//每页显示8条记录
        $page=new Page($total,8);
        $page->setConfig("header","个用户");
        $pageControl=$page->show();
        $users=$user->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        //处理班级主任年级主任问题
        foreach($users as $k=>$userinfo)
        {
            if ( $userinfo['role']=='0')
                $users[$k]['role']='农户';
            elseif( $userinfo['role']==1)
                $users[$k]['role']='饲料生产企业';

            elseif( $userinfo['role']==2)
                $users[$k]['role']='审查员';
            elseif( $userinfo['role']==null)
                $users[$k]['role']='已注销';

        }

            $this->assign('pageControl', $pageControl);
            $this->assign('users',$users);
            $this->display(showAll);

    }


    public function show()
    {
        $user=M('user');
        $this->assign('username',  $_SESSION['username']);
        import('Org.Util.Page');
        $total=$user->count();//记录总数
        $num_pre_page=8;//每页显示8条记录
        $page=new Page($total,8);
        $page->setConfig("header","个用户");
        $pageControl=$page->show();
        $username=$_SESSION['username'];

        $users=$user->limit("$page->firstRow,$page->listRows")->order("id desc")->where("username='$username'")->select();
        //处理班级主任年级主任问题
        foreach($users as $k=>$userinfo)
        {
            if ( $userinfo['role']==0)
                $users[$k]['role']='农户';
                    elseif( $userinfo['role']==1)
                        $users[$k]['role']='饲料生产企业';

            elseif( $userinfo['role']==2)
                $users[$k]['role']='审查员';
        }
        $this->assign('pageControl', $pageControl);
        $this->assign('users',$users);
        $this->display();

    }




    public function showAdd()
    {
        $this->assign('username',  $_SESSION['username']);

            $this->display('add');
    }
    public function add()
    {
        $stu=M('user');
        $stuinfo['username']=$_POST['username'];
        $stuinfo['name']=$_POST['name'];
        $stuinfo['password']=md5($_POST['password']);
        $stuinfo['role']=$_POST['role'];
        $stuinfo['address']=$_POST['address'];
        $stuinfo['telenumber']=$_POST['telenumber'];
        $stu->add($stuinfo);
        $this->redirect('showAll');
    }
    //实现学生修改功能
    public function update()
    {
        header("Content-Type:text/html;charset=utf-8");
        $stu=M('user');
        $id=$_GET['id'];
        $stu_list=$stu->where("id=$id")->save($_POST);
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法
    }

    public function showUpdate()
    {
        $user=M('user');
        $stu=M('user');
        $id=$_GET['id'];
        $user_list=$stu->where("id=$id")->find();
        $this->assign('user_list',$user_list);
        $this->display('update');
    }


    function showdelete()
    {
        $user=M('user');
        $this->assign('username',  $_SESSION['username']);
        $this->display('delete');
    }


    public function delete()
    {
        $user = M('user');
        $this->assign('username', $_SESSION['username']);
        $username = $_SESSION['username'];
        $result = $user->where("username=$username")->delete();
        if (result) {
        $this->redirect('Admin/admin/logout');//重定向到控制器的方法  display是本控制的方法
        }
        if(!result){
        $this->error('注销失败！！');
        $this->redirect('showPwdUpdate');
    }
    }

    function showPwdUpdate()
    {   $this->assign('username',  $_SESSION['username']);
        $this->display('PwdUpdate');
    }
    function PwdUpdate()
    {    header("Content-Type:text/html;charset=utf-8");
        $user=M('user');
        $username=$_SESSION['username'];
        $userinfo=$user->where("username='$username'")->find();

        //判断原密码是否输入正确
        if($userinfo['password']!=md5($_POST['password']))
        {
            $this->error('原密码输入错误！！');
            $this->redirect('showPwdUpdate');
        }
        if($_POST['passwordNew']!=$_POST['passwordNewq']){
            $this->error('两次新密码输入不一致！！');
            $this->redirect('showPwdUpdate');
        }
        else{
            $userinfo2['password']=md5($_POST['passwordNew']);
            $result= $user->where("username='$username'")->save($userinfo2);

            if($result){
                //   $this->success('修改成功！！');
                //$this->redirect('showAll');
            }else{
                $this->error('修改失败！！');
                $this->redirect('showPwdUpdate');

            }
            $this->redirect('showAll');
        }
    }


}