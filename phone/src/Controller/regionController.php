<?php

/*
 * 地区controller
 */

class regionController extends Controller
{


    //获取省

    public function provinceAction(){

        $data = $this->_model('data')->getprovince();

        exit(json_encode($data));

    }

    //获取市

    public function cityAction(){

        $province_id = $_GET['id'];


        $data = $this->_model('data')->getcity($province_id);


        exit(json_encode($data));
    }


    //计算
    public function countAction(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //获取到达地省市区
            $end_province_id  = isset($_POST['end_province_id']) ? $_POST['end_province_id'] : '';
            $end_city_id  = isset($_POST['end_city_id']) ? $_POST['end_city_id'] : '';


            //获取货物重量
            $price['weight']  = isset($_POST['weight'])?$_POST['weight']:'';

            //获取货物体积
            $price['volume']  = isset($_POST['volume'])?$_POST['volume']:'';

            //获取派送类型
            $is_self = isset($_POST['type'])?$_POST['type']:'';//type=1 是自提，=0 是派送

            //重量与体积比较，按重的算
            $new_weight = $price['volume']*230;

            if($new_weight>=$price['weight']){
                $price['new_weight'] = $new_weight;//体积换算的大 重量等于体积换算的重量
            }else{
                $price['new_weight'] = $price['weight'];  //体积换算的小 重量等于原本的重量
            }



            //从数据库获取单价信息 参数分别是：目的地省id，目的地市id，目的地区id,派送类型
            $sql = "SELECT * FROM dh_city_price  WHERE to_province_id = '".$end_province_id."' AND  to_city_name = '".$end_city_id."'";

//            var_dump($sql);

            $data = $this->_model('data')->getprice($sql);

            $price['to_province_name'] = $data['to_province_name'];
            $price['to_city_name'] = $data['to_city_name'];
            $price['to_area_name'] = $data['to_area_name'];
            $price['lowest_price'] = $data['lowest_price'];
            $price['is_self'] = $is_self;

            if($is_self==0){
                $price['send_price'] = $data['item_self_price'] + $data['item_send_price'];//配送价
            }else{
                $price['send_price'] = $data['item_self_price'];//自提价
            }

            $price['total_price'] = $price['new_weight']*$price['send_price']; //计算出价格

            if($price['total_price']<$data['lowest_price'])  //计算价格与最低价格比较
            {
                $price['total_price'] = $data['lowest_price'];
            }


            $info['to_province_name']=$data['to_province_name'];
            $info['to_city_name']=$data['to_city_name'];
            $info['volume']=$price['volume'];
            $info['weight']= $price['weight'];
            $info['is_self']=$is_self;
            $info['created_at']=date('y-m-d h:i:s',time());
            $info['price']=$price['send_price'];
            $info['count_weight']=$price['new_weight'];
            $info['total_price']=$price['total_price'];
            $this->_model('data')->inser_online($info);




        }
        $this->_view('xjky.tpl.php',array('data'=>$price));

    }
}