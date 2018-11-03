<?php
/**
 * Created by PhpStorm.
 * User: 成思
 * Date: 2016/7/12
 * Time: 11:31
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class InvestController extends Controller
{

    public function notcheck()
    {
        $this->assign('username',  $_SESSION['username']);
        $this->display();
    }
    public function showAll()
    {
        $this->assign('username',  $_SESSION['username']);
        $this->display();
    }

    public function nvdshow(){
        $nvd_model=M('nvd');
        $this->assign('username',  $_SESSION['username']);
        $per=$_SESSION['username'];
        //导入分页助手类
        import('Org.Util.Page');
        $total= $nvd_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'条记录');
        $pageControl=$page->show();
        $nvd=$nvd_model->where("result is Null")->select();
        $this-> assign('nvd',$nvd);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }
    public function nvdAll(){
        $nvd_model=M('nvd');
        $this->assign('username',  $_SESSION['username']);
        $per=$_SESSION['username'];
        //导入分页助手类
        import('Org.Util.Page');
        $total= $nvd_model->count();//记录总数
        $page=new Page($total,8);
        $page->setConfig("header",'条记录');
        $pageControl=$page->show();
        $nvd=$nvd_model->select();
        $this-> assign('nvd',$nvd);
        $this-> assign('pageControl', $pageControl);
        $this-> display();

    }
    public function showname(){


        $scc=M('scc');

        $list=$scc->where('username is not Null')->group("username")->select();
        $this-> assign('list',$list);

        $this->display();
        echo $_POST['scc'] ;
        $un=$_POST['username'];
        $sccd=$scc->where("username='$un'")->select();
        $this->assign('sccd',$sccd);
        $this->display('dateshow');

        // dump($list);
    }


    public function nvdcheck(){

        $nvd=M('nvd');
        $this->assign('username',  $_SESSION['username']);
        $id=$_GET['id'];
        $per=$_SESSION['username'];
        $nvd=$nvd->where("ID=$id")->select();
        $this-> assign('nvd',$nvd);
        $this-> display();
    }

    public function nvdok()
    {
        header("Content-Type:text/html;charset=utf-8");
        $nvd=M('nvd');
        $id=$_GET['id'];
        $nvdd['result']=0;
        $result=$nvd->where("ID=$id")->save($nvdd);
        if(   $result)
        {
            $this->redirect('nvdshow');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }
    public function nvdfail()
    {
        header("Content-Type:text/html;charset=utf-8");
        $nvd=M('nvd');
        $id=$_GET['id'];
        $nvdd['result']=1;
        $result=$nvd->where("ID=$id")->save($nvdd);
        if($result)
        {
            $this->redirect('nvdshow');
        }
        if( !$result)
        {
            $this->error('添加失败！！');
        }
    }

}