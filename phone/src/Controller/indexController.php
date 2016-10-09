<?php

//require_once 'getCaptcha.php';

class indexController extends Controller 
{

     //首页
    public function indexAction()
    {
        //获取首页banner信息
       $banner = $this->_model('data')->all("SELECT n.*,nd.* FROM jys_news n LEFT JOIN jys_news_data nd ON n.id = nd.id WHERE n.catid= 36 ORDER BY n.listorder DESC,n.inputtime DESC LIMIT 0,5");

        //获取新闻列表

        $news = $this->_model('data')->all("SELECT n.*,nd.* FROM jys_news n LEFT JOIN jys_news_data nd ON n.id = nd.id WHERE n.catid = 41 ORDER BY n.listorder DESC ,n.inputtime DESC LIMIT 0,3");

         //获取视频信息


        $video = $this->_model('data')->all("SELECT v.*,vd.* FROM jys_video v LEFT JOIN jys_video_data vd ON v.id= vd.id WHERE v.catid =43 ORDER BY v.listorder DESC ,v.inputtime DESC LIMIT 1");


        //获取合作品牌

        $cooperate = $this->_model('data')->all("SELECT n.*,nd.* FROM jys_news n LEFT JOIN jys_news_data nd ON n.id = nd.id WHERE n.catid =37 ORDER BY n.listorder DESC ,n.inputtime DESC LIMIT 0,10");

         //获取合作团队

        $team = $this->_model('data')->all("SELECT t.*,td.* FROM  jys_team t LEFT jys_team_data td ON t.id = td.id WHERE t.catid = 38 ORDER BY t.listorder DESC,t.inputtime DESC LIMIT 0,3");


        //获取导航信息
        $nav = $this->_model('data')->all("SELECT c.* FROM jys_category c WHERE c.ismenu=1 ");

     $this->_view('index.tpl.php',array('banner'=>$banner,'news'=>$news,'video'=>$video,'cooperate'=>$cooperate,'team'=>$team,'nav'=>$nav));
    }


     //合作列表

    public function cooperateAction(){


        $cooperate = $this->_model('data')->all("SELECT n.*,nd.* FROM jys_news n LEFT JOIN jys_news_data nd ON n.id = nd.id WHERE n.catid =37 ORDER BY n.listorder DESC ,n.inputtime DESC");

        $this->_view('list_cooperate.php',array('data'=>$cooperate));
    }

    //优秀团队列表

    public function teamAction(){

        $team = $this->_model('data')->all("SELECT t.*,td.* FROM  jys_team t LEFT JOIN jys_team_data td ON t.id = td.id WHERE t.catid = 38 ORDER BY t.listorder DESC,t.inputtime DESC ");



        $this->_view('list_team.php',array('data'=>$team));

    }


//    //套餐详情页
//
//    public function showteamAction(){
//
//
//        $id = $_GET['id'];
//
//        $data = $this->_model('data')->one("SELECT td.*,t.* FROM jys_team_data td LEFT JOIN jys_team t ON td.id = t.id  WHERE td.id = ".$id);
//
////        $catname = $this->_model('data')->one("SELECT catname FROM jys_category WHERE  catid = ".$data['catid']);
//
//
//        $this->_view('show_team.php',array('data'=>$data));
//    }

   //通用列表

    public function listAction(){

        $catid = $_GET['catid'];



//        $hits = $this->_model('data')->all("SELECT * FROM jys_hits WHERE catid= ".$catid."");

//        foreach ($hits as $k => $val) {
//
//            $data[$k]["views"] = $val['views'];
//        }

        if($catid==32){

            $data = $this->_model('data')->all("SELECT c.*,cd.* FROM  jys_mycity c LEFT JOIN jys_mycity_data cd ON c.id = cd.id WHERE c.catid = 32 ORDER BY c.listorder DESC,c.inputtime DESC LIMIT 0,8");

            $date = date('y-m-d', time());

            $case_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_plan WHERE create_time = '".$date."'   ");

            $city_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_mycity WHERE 1");

            $city_info = $this->_model('data')->all("SELECT city_name,id FROM jys_city WHERE 1");

            $style_info = $this->_model('data')->all("SELECT style_name ,id FROM jys_style WHERE 1");

            $this->_view('list_city.php',array('data'=>$data,'case_num'=>$case_num,'city_num'=>$city_num,'city_info'=>$city_info,'style_info'=>$style_info));
        }else{

            $data = $this->_model('data')->all("SELECT n.*,nd.*,h.views FROM jys_news n LEFT JOIN jys_news_data nd ON n.id = nd.id LEFT JOIN jys_hits h ON n.id= substring(h.hitsid,5) WHERE n.catid = ".$catid." AND h.hitsid like '%c-1-%' GROUP BY n.id ORDER BY n.listorder DESC ,n.inputtime DESC LIMIT 0,8");

            $catname = $this->_model('data')->one("SELECT catname FROM jys_category WHERE  catid = ".$catid);
            $this->_view('list.php',array('data'=>$data,'catname'=>$catname));

        }



    }

    //套餐列表

    public function comboAction(){


        $data = $this->_model('data')->all("SELECT c.*,cd.* FROM  jys_combo c LEFT JOIN jys_combo_data cd ON c.id = cd.id WHERE c.catid = 42 ORDER BY c.listorder DESC,c.inputtime DESC LIMIT 0,8");

        $this->_view('list_combo.php',array('data'=>$data));

    }


     //套餐详情页

    public function showcomboAction(){


        $id = $_GET['id'];

        $data = $this->_model('data')->one("SELECT cd.*,c.*,cd.style FROM jys_combo_data cd LEFT JOIN jys_combo c ON cd.id = c.id  WHERE cd.id = ".$id);

//        $catname = $this->_model('data')->one("SELECT catname FROM jys_category WHERE  catid = ".$data['catid']);

//        var_dump($data);
        $this->_view('show_combo.php',array('data'=>$data));
    }

    // 视频详情页
    public function show_videoAction()
    {
        $id = $_GET['id'];
        $data = $this->_model('data')->one("SELECT v.*,vd.* FROM jys_video v LEFT JOIN jys_video_data vd ON v.id= vd.id WHERE v.catid =43 AND v.id = ".$id." ORDER BY v.listorder DESC ,v.inputtime DESC");
        // $data = $this->_model('data')->one("SELECT * FROM jys_video WHERE id = ".$id." LIMIT 1");
        $this->_view('show_video.php',array('data'=>$data));
        // var_dump($data);

    }
    //小区列表

    public function cityAction(){


        $data = $this->_model('data')->all("SELECT c.*,cd.* FROM  jys_mycity c LEFT JOIN jys_mycity_data cd ON c.id = cd.id WHERE c.catid = 32 ORDER BY c.listorder DESC,c.inputtime DESC LIMIT 0,8");

//        $date = date('y-m-d', time());

//        $case_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_plan WHERE create_time = '".$date."'   ");
        $case_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_plan WHERE 1");

        $city_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_mycity WHERE 1");

        $city_info = $this->_model('data')->all("SELECT city_name,id FROM jys_city WHERE 1");

        $style_info = $this->_model('data')->all("SELECT style_name ,id FROM jys_style WHERE 1");

        $this->_view('list_city.php',array('data'=>$data,'case_num'=>$case_num,'city_num'=>$city_num,'city_info'=>$city_info,'style_info'=>$style_info));

    }

   //小区详情页

    public function show_cityAction(){

        $id = $_GET['id'];


        $data = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_mycity_data nd LEFT JOIN jys_mycity n ON nd.id = n.id  WHERE nd.id = ".$id." ORDER BY n.listorder DESC,n.inputtime DESC");


        $hitsid = 'c-1-'.$id;

        $hits = $this->_model('data')->one("SELECT views FROM jys_hits WHERE hitsid = '".$hitsid."'");

        $catname = $this->_model('data')->one("SELECT catname,catid FROM jys_category WHERE  catid = ".$data['catid']);
        $pre = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_mycity_data nd LEFT JOIN jys_mycity n ON nd.id = n.id  WHERE nd.id < ".$id." AND n.catid= ".$catname['catid']." ORDER BY n.listorder DESC,n.inputtime DESC");
        $next = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_mycity_data nd LEFT JOIN jys_mycity n ON nd.id = n.id  WHERE nd.id > ".$id." AND n.catid= ".$catname['catid']." ORDER BY n.listorder ASC,n.inputtime ASC");


        $this->_view('show.php',array('data'=>$data,'catname'=>$catname,'hits'=>$hits,'pre'=>$pre,'next'=>$next));

    }
     //通用单页面

    public function pageAction($catid){


        $data = $this->_model('data')->one("SELECT FROM jys_page WHERE catid =".$catid." ");


        $this->_view('show_page.php',array('data'=>$data));


    }

    //通用详情页

    public function showAction(){

        $id = $_GET['id'];

        $data = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_news_data nd LEFT JOIN jys_news n ON nd.id = n.id  WHERE nd.id = ".$id." ORDER BY n.listorder DESC,n.inputtime DESC");
        $hitsid = 'c-1-'.$id;

        $hits = $this->_model('data')->one("SELECT views FROM jys_hits WHERE hitsid = '".$hitsid."'");

        $catname = $this->_model('data')->one("SELECT catname,catid FROM jys_category WHERE  catid = ".$data['catid']);
        $pre = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_news_data nd LEFT JOIN jys_news n ON nd.id = n.id  WHERE nd.id < ".$id." AND n.catid= ".$catname['catid']." ORDER BY n.listorder DESC,n.inputtime DESC");
        $next = $this->_model('data')->one("SELECT nd.*,n.* FROM jys_news_data nd LEFT JOIN jys_news n ON nd.id = n.id  WHERE nd.id > ".$id." AND n.catid= ".$catname['catid']." ORDER BY n.listorder ASC,n.inputtime ASC");
        $this->_view('show.php',array('data'=>$data,'catname'=>$catname,'hits'=>$hits,'pre'=>$pre,'next'=>$next));

    }
    // 公司简介
    public function detailAction(){

        $catid = $_GET['catid'];

        $data = $this->_model('data')->one("SELECT * FROM jys_page WHERE catid = ".$catid." LIMIT 1");
       

       
        $this->_view('detail.php',array('data'=>$data));



    }

    //ajax获取城市列表

    public function getcityAction(){

        $data =$this->_model('data')->all("SELECT city_name,id FROM jys_city WHERE 1");

        exit(json_encode($data));

    }

   //ajax获取风格列表

    public function getstyleAction(){

        $data =$this->_model('data')->all("SELECT style_name ,id FROM jys_style WHERE 1");
        exit(json_encode($data));

    }

     //获取今天记录数

    public function get_todayAction(){

        //获取当前年月日
        $date = date('Y-m-d', time());

        $sql = "SELECT COUNT(*) AS num FROM jys_plan WHERE create_time = '".$date."'   ";


        $data = $this->_model('data')->all($sql);

        exit(json_encode($data));

    }

   //搜索我的小区

    public function searchAction(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $keyword  = isset($_POST['q']) ? $_POST['q'] : '';

            $sql = "SELECT nd.*,n.*  FROM jys_keyword k LEFT JOIN jys_keyword_data kd ON k.id =kd.tagid LEFT JOIN jys_mycity_data nd ON kd.contentid = nd.id LEFT JOIN jys_mycity n ON nd.id = n.id WHERE k.keyword LIKE '%".$keyword."%' AND n.catid = 32 GROUP BY nd.id ORDER BY listorder DESC";

            $data = $this->_model('data')->all($sql);

            $case_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_plan WHERE 1");

            $city_num = $this->_model('data')->one("SELECT COUNT(*) AS num FROM jys_mycity WHERE 1");

            $city_info = $this->_model('data')->all("SELECT city_name,id FROM jys_city WHERE 1");

            $style_info = $this->_model('data')->all("SELECT style_name ,id FROM jys_style WHERE 1");

//            $this->_view('list_city.php',array('data'=>$data,'case_num'=>$case_num,'city_num'=>$city_num,'city_info'=>$city_info,'style_info'=>$style_info));


        }
        $this->_view('search.php',array('data'=>$data,'case_num'=>$case_num,'city_num'=>$city_num,'city_info'=>$city_info,'style_info'=>$style_info));


//        $this->_view('search.php',array('data'=>$data));

    }

     //获取匹配方案

    public function getplanAction(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $info['city_name']  = isset($_POST['city_name']) ? $_POST['city_name'] : '';
            $info['style_name']  = isset($_POST['style_name']) ? $_POST['style_name'] : '';
            $info['name']  = isset($_POST['name']) ? $_POST['name'] : '';
            $info['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
            $info['area']  = isset($_POST['area']) ? $_POST['area'] : '';

            $info['create_time'] = date("Y-m-d",time());

            $r= $this->_model('data')->insert('jys_plan',$info);

            $sql = "SELECT nd.*,n.*  FROM jys_keyword k LEFT JOIN jys_keyword_data kd ON k.id =kd.tagid LEFT JOIN jys_combo_data nd ON kd.contentid = nd.id LEFT JOIN jys_combo n ON nd.id = n.id WHERE k.keyword LIKE '%".$info['style_name']."%' AND n.catid = 42 GROUP BY nd.id ORDER BY listorder DESC";

            $data = $this->_model('data')->all($sql);

//            var_dump($data);

        }

        $this->_view('match_combo.php',array('data'=>$data));
    }


    //用户添加小区

    public function addcityAction(){
        $error = array();
        $error['tag'] = 0;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $info['city_name']  = isset($_POST['city_name']) ? $_POST['city_name'] : '';
            $info['city_address']  = isset($_POST['city_address']) ? $_POST['city_address'] : '';

            if(empty($info['city_name'])){

                $error['content'] = '输入不能为空';

            }else{


                $r = $this->_model('data')->is_exit('jys_city',"where city_name = '".$info['city_name']."' ");

                if(!empty($r)){

                    $error['content'] = '数据已存在';

                }else{


                    $this->_model('data')->insert('jys_city',$info);

                    $error['tag'] = 1;
                    $error['content'] = '添加成功';

                }

            }

            echo json_encode($error);

        }
    }


}