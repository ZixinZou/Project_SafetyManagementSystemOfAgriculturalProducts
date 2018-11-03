<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class stuController extends Controller {

    public function showAddscc()
    {
        $this->assign('username',  $_SESSION['username']);
        $this->display('scc');
    }
    public function addscc()
    {
        I('psot');
        $stu=M('scc');
        header("Content-Type:text/html;charset=utf-8");
        $stuscc['Samplename']=$_POST['Samplename'];
        $stuscc['Trademark']=$_POST['Trademark'];
        $stuscc['Casing']=($_POST['Casing']);
        $stuscc['Grade']=$_POST['Grade'];
        $stuscc['Identifi']=$_POST['Identifi'];
        $stuscc['Typandspe']=$_POST['Typandspe'];
        $stuscc['Opstand']=($_POST['Opstand']);
        $stuscc['Prodateorbn']=$_POST['Prodateorbn'];
        $stuscc['Approve']=$_POST['Approve'];
        $stuscc['Cernumber']=$_POST['Cernumber'];
        $stuscc['Checknumber']=($_POST['Checknumber']);
        $stuscc['Checkspace']=$_POST['Checkspace'];
        $stuscc['Samplenum']=$_POST['Samplenum'];
        $stuscc['date']=date("y-m-d",time());
        $stuscc['username']=$_SESSION['username'];
        $result=$stu->add($stuscc);
        if(   $result)
        {
            $this->redirect('showAll_sc');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }

    public function sccshow(){
        $scc_model=M('scc');
        $this->assign('username',  $_SESSION['username']);
        $per=$_SESSION['username'];
        //导入分页助手类
        import('Org.Util.Page');
        $total= $scc_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'条记录');
        $pageControl=$page->show();
        $scc=$scc_model->where("date is not Null" )->where("username='$per'")->select();
        $this-> assign('scc',$scc);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }


    public function showAll(){
        $stu_model=M('scc');
        $this->assign('username',  $_SESSION['username']);
        import('Org.Util.Page');
        $total= $stu_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $stus=$stu_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('stus',$stus);
        $this-> assign('pageControl', $pageControl);
        $this-> display();
    }


    public function sccdetail(){

        $scc=M('scc');
        $this->assign('username',  $_SESSION['username']);
        $id=$_GET['id'];
        $per=$_SESSION['username'];
        $sccd=$scc->where("ID=$id")->select();
        $this-> assign('sccd',$sccd);
        $this-> display();
    }

    public function showAddn_myjz()
    {
        $this->assign('username',  $_SESSION['username']);
        $this->display('n_myjz');
    }
    public function addn_myjz()
    {
        I('psot');
        $stu=M('n_myjz');
        header("Content-Type:text/html;charset=utf-8");
        $stun_myjz['Sort']=$_POST['Sort'];
        $stun_myjz['Age']=$_POST['Age'];
        $stun_myjz['Build']=($_POST['Build']);
        $stun_myjz['Fence']=$_POST['Fence'];
        $stun_myjz['Disease']=$_POST['Disease'];
        $stun_myjz['LastYear']=$_POST['LastYear'];
        $stun_myjz['LastMonth']=($_POST['LastMonth']);
        $stun_myjz['LastDay']=$_POST['LastDay'];
        $stun_myjz['NowYear']=$_POST['NowYear'];
        $stun_myjz['NowMonth']=$_POST['NowMonth'];
        $stun_myjz['NowDay']=($_POST['NowDay']);
        $stun_myjz['ImmTime']=$_POST['ImmTime'];
        $stun_myjz['Vaccine']=$_POST['Vaccine'];
        $stun_myjz['Dosage']=$_POST['Dosage'];
        $stun_myjz['Way']=$_POST['Way'];
        $stun_myjz['Number']=$_POST['Number'];
        $stun_myjz['Reaction']=$_POST['Reaction'];
        $stun_myjz['Man']=$_POST['Man'];
        $stun_myjz['date']=date("y-m-d",time());
        $stun_myjz['username']=$_SESSION['username'];
        $result=$stu->add($stun_myjz);
        if($result)
        {
            $this->redirect('showAll');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }

    public function n_myjzshow(){
        $n_myjz_model=M('n_myjz');
        $this->assign('username',  $_SESSION['username']);
        $per=$_SESSION['username'];
        //导入分页助手类
        import('Org.Util.Page');
        $total= $n_myjz_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'条记录');
        $pageControl=$page->show();
        $n_myjz=$n_myjz_model->where("date is not Null" )->where("username='$per'")->select();
        $this-> assign('n_myjz',$n_myjz);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }


    public function n_myjzshowAll(){
        $stu_model=M('n_myjz');
        $this->assign('username',  $_SESSION['username']);
        import('Org.Util.Page');
        $total= $stu_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $stus=$stu_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('stus',$stus);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }


    public function n_myjzdetail(){
        $n_myjz=M('n_myjz');
        $this->assign('username',  $_SESSION['username']);
        $id=$_GET['id'];
        $per=$_SESSION['username'];
        $n_myjzd=$n_myjz->where("ID=$id")->select();
        $this-> assign('n_myjzd',$n_myjzd);
        $this-> display();
    }

    public function showAddc_an1()
    {
        $this->assign('username',  $_SESSION['username']);
        $this->display('c_an1');
    }
    public function addc_an1()
    {
        I('psot');
        $stu=M('c_an1');
        header("Content-Type:text/html;charset=utf-8");
        $stuc_an1['name']=$_POST['name'];
        $stuc_an1['ability']=$_POST['ability'];
        $stuc_an1['output']=$_POST['output'];
        $stuc_an1['salecount']=($_POST['salecount']);
        $stuc_an1['sale']=$_POST['sale'];
        $stuc_an1['date']=date("y-m-d",time());
        $stuc_an1['username']=$_SESSION['username'];
        $result=$stu->add($stuc_an1);
        if($result)
        {
            $this->redirect('showAll_qy');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }

    public function c_an1show(){
        $c_an1_model=M('c_an1');
        $this->assign('username',  $_SESSION['username']);
        $per=$_SESSION['username'];
        //导入分页助手类
        import('Org.Util.Page');
        $total= $c_an1_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'条记录');
        $pageControl=$page->show();
        $c_an1=$c_an1_model->where("date is not Null" )->where("username='$per'")->select();
        $this-> assign('c_an1',$c_an1);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }


    public function c_an1showAll(){
        $stu_model=M('c_an1');
        $this->assign('username',  $_SESSION['username']);
        import('Org.Util.Page');
        $total= $stu_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'个用户');
        $pageControl=$page->show();
        $stus=$stu_model->limit("$page->firstRow,$page->listRows")->order("id desc")->select();
        $this-> assign('stus',$stus);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }


    public function c_an1detail(){
        $c_an1=M('c_an1');
        $this->assign('username',  $_SESSION['username']);
        $id=$_GET['id'];
        $per=$_SESSION['username'];
        $c_an1d=$c_an1->where("ID=$id")->select();
        $this-> assign('c_an1d',$c_an1d);
        $this-> display();
    }

    public function update()
    {
        header("Content-Type:text/html;charset=utf-8");
        $stu=M('stu');
        $this->assign('name',  $_SESSION['name']);
        $sql = "SHOW TABLES";
        $userinfo=$stu->where("name='$sql'")->select();
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法

    }

    public function showUpdate()
    {

        $stu=M('stu');
        $id=$_GET['id'];
        $stu_list=$stu->where("id=$id")->find();
        $this->assign('stu_list',$stu_list);
        $this->display('update');
    }

    //实现学生删除功能
    public function del()
    {
        $stu=M('stu');
        $id=$_GET['id'];
        $stu->where("id=$id")->delete();
        $this->redirect('showAll');//重定向到控制器的方法  display是本控制的方法
    }
    //实现学生添加功能
    public function add()
    {   $stu=M('stu');
        $this->assign('username',  $_SESSION['username']);
        $stuinfo['name']=$_POST['name'];
        $stuinfo['sex']=$_POST['sex'];
        $stuinfo['age']=$_POST['age'];
        $stuinfo['score']=$_POST['score'];
        $stuinfo['grade']=$_POST['grade'];
        $stuinfo['class']=$_POST['class'];
        $result = $stu->add($stuinfo);
        if(   $result)
        {
            $this->success('添加成功！！');
            $this->redirect('showAll');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }

    public function showAdd()
    {
        $stu=M('stu');
        $this->assign('username',  $_SESSION['username']);
        $this->display('add');

    }

}