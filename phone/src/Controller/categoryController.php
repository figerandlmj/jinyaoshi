<?php

//require_once 'getCaptcha.php';

class categoryController extends Controller
{


    //成功案例列表
    public function caseListAction(){

        $data =$this->_model('data')->getlist(0,5,10);

        $this->_view('caseList.tpl.php',array('data'=>$data));
    }


    //ajax加载更多
    public function moreAction(){

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

        $catid = isset($_POST['catid']) ? intval($_POST['catid']) : 0;

        $data = $this -> _model('data') -> getlist($id,5,$catid);

        foreach($data as $k=>$val ){

            $data[$k]["inputtime"] = date('Y-m-d', $val['inputtime']);
        }

        exit(json_encode($data));

    }

    //车辆展示
    public function carListAction(){

        $data = $this->_model('data')->getlist(0,5,8);

        $this->_view('carList.tpl.php',array('data'=>$data));

    }

    //木箱展示
    public function boxListAction(){

        $data = $this->_model('data')->getlist(0,5,9);

        $this->_view('boxList.tpl.php',array('data'=>$data));

    }

}