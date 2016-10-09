<?php

//require_once 'getCaptcha.php';

class pageController extends Controller
{

    //单页面
    public function pageAction(){

        $catid = isset($_GET['catid']) ? intval($_GET['catid']) : 0;


        $data = $this->_model('data')->getpage($catid);

        $nav = $this->_model('data')->getnav();
        $carbanner = $this->_model('data')->getbanners(0,100,8);
        $boxbanner = $this->_model('data')->getbanners(0,100,9);
        $casebanner = $this->_model('data')->getbanners(0,100,10);
        $news =$this->_model('data')->getnews(0,5,7);


        $company_info = $this->_model('data')->getpage(16);
        $join_info = $this->_model('data')->getpage(17);
        $fengcai_info = $this->_model('data')->getpage(18);
        $case =$this->_model('data')->getlist(0,5,10);
        $newsall =$this->_model('data')->getnews(0,5,7);

        $carall = $this->_model('data')->getlist(0,5,8);

        $boxall = $this->_model('data')->getlist(0,5,9);
        //关于我们
        if($catid==16){
            $this->_view('aboutUsCompany.tpl.php',array('data'=>$data,'nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$company_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
        }
        //招商加盟
        else if($catid==17){
            $this->_view('join.tpl.php',array('data'=>$data,'nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$join_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
        }
        //企业风采
        else if($catid==18){
            $this->_view('fengcai.tpl.php',array('data'=>$data,'nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$fengcai_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
        }
        else{
            $this->_view('page.tpl.php',array('data'=>$data));
        }

    }

    //联系我们
    public function contactAction(){

        $this->_view('contact.tpl.php');
    }

    //小件快运
    public function xjkyAction(){


        $data = $this->_model('data')->getpage(20);

        $this->_view('xjky.tpl.php',array('data'=>$data));
    }
}