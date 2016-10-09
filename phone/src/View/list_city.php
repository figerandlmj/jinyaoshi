<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="web/css/phone_base.css">
    <link rel="stylesheet" href="web/css/jinyaoshi.css">
    <link rel="stylesheet" href="web/css/swiper.css">

</head>
<body>
<div class="container">
    <!-- leftMenu-->
    <div class="left-menu">
        <ul class="mui-flex" style="margin-top: 79px;">
            <li class="cell" style="text-align: center">
                <img src="web/images/logo1.png" alt="" width="74">
            </li>
        </ul>
        <div class="nav-wrap">
            <a href="index.php" class="font-white">
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">首页</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=combo" class="font-a0a0a0">
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">套餐介绍</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=list&catid=31" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">最新优惠</li>
                </ul>
            </a>
            <!--<a href="" class="font-a0a0a0">-->
            <ul class="mui-flex nav font-a0a0a0" data-child="0">
                <li class="cell bb-a0a0a0">
                    关于我们
                </li>
            </ul>
            <div class="nav-child hide font-a0a0a0">
                <a href="index.php?c=index&a=detail&catid=57"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            公司简介
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=team"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            团队介绍
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=cooperate"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            合作品牌
                        </li>
                    </ul>
                </a>
            </div>
            <!--</a>-->
            <ul class="mui-flex nav font-a0a0a0" data-child="0">
                <li class="cell bb-a0a0a0">新闻动态</li>
            </ul>
            <div class="nav-child hide font-a0a0a0">
                <a href="index.php?c=index&a=list&catid=41"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            新闻列表
                        </li>
                    </ul>
                </a>
                <a href="index.php?c=index&a=list&catid=43"  class="font-a0a0a0">
                    <ul class="mui-flex nav-child-ul">
                        <li class="cell ">
                            视频展示
                        </li>
                    </ul>
                </a>
            </div>
            <a href="index.php?c=index&a=list&catid=44" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">装修百问</li>
                </ul>
            </a>
            <a href="index.php?c=index&a=city" class="font-a0a0a0" >
                <ul class="mui-flex nav">
                    <li class="cell bb-a0a0a0">我的小区</li>
                </ul>
            </a>
        </div>
    </div>
    <!-- end leftMenu-->



    <!-- 主内容-->
    <div class="main">
        <!-- head-->
        <div class="head">
            <!-- left-menu-->
                <span class="left-menu-icon menu-btn" data-menu="0">

                </span>
            <!-- end left-menu-->
            <span style="margin-left: 45px;font-size: 16px;">我的小区</span>

        </div>
        <!-- end head-->
        <!-- banner-->
        <div class="search-banner">

            <img src="web/images/banner.jpg" alt="" width="100%">

            <!-- search_box-->
            <form action="index.php?c=index&a=search" method="post">
                <div class=" search-wrap">
                    <input class="search-input" type="text" name="q" placeholder="输入小区名查找案例">
                    <input type="submit" class="sub-btn" value="立即查找">
                </div>
            </form>
            <!-- end search_box-->
        </div>
        <!-- end banner-->
        <!-- 数量-->
        <ul class="num-wrap mui-flex">
            <li class="cell" style="text-align: center">
                <span style="color:#00b7ee;font-size: 26px;"><?php echo $city_num['num'] ?></span><br/>
                <span style="color: #707070">小区数</span>
            </li>
        </ul>
        <!-- end数量-->
        <!-- 服务-->
        <ul class="mui-flex" style="padding: 15px 0;background-color: #ffffff">
            <li class="cell" style="text-align: center">
                已有 <span style="color: #eb6100"><?php echo $case_num['num'] ?></span>位业主<br/>
                申请管家服务
                <div class="btn btn-join">申请管家服务</div>
            </li>
            <li class="cell" style="text-align: center">
                欢迎添加您的小区<br/>
                以便我们提供更多的精品案例
                <div class="btn btn-join02">+添加小区</div>
            </li>
        </ul>
        <!-- end 服务-->

        <!-- 小区列表-->
        <div class="city">

            <?php

            //            $arr=[1,2,3,4,5,6,7];
            $i=0;
            echo '<ul class="mui-flex mb8">';
            foreach($data as $value){
                $i++;
                ?>
                <li class="cell fixed" style="width: 50%;">
                    <div class="city-detail">
                        <a href="index.php?c=index&a=show_city&id=<?php echo $value['id'] ?>">
                            <img src="web/images/city1.jpg" alt="" width="100%">
                            <p class="member-name" style="margin-bottom: 8px;margin-top: 8px;"><?php echo $value['title'] ?></p>
                            <ul class="mui-flex">
                                <li class=" fixed" style="width: 25px;text-align: center">
                                    <img src="web/images/address_icon.png" alt="" width="9">
                                </li>
                                <li class="cell " style="text-align: left">
                                    <span class="font-707070"><?php echo $value['address'] ?></span>
                                </li>
                            </ul>
                            <ul class="mui-flex">
                                <li class=" fixed" style="width: 25px;text-align: center">
                                    <img src="web/images/population_icon.png" alt="" width="8">
                                </li>
                                <li class="cell " style="text-align: left">
                                    <span class="font-707070">已有<?php echo $value['population'] ?>位业主加入</span>
                                </li>
                            </ul>
                        </a>
                        <div class="btn btn-join03" style="margin-bottom:0px;">+加入小区</div>
                    </div>
                </li>
                <?php
                if($i==2){
                    echo '</ul>';
                    $i=0;
                    echo '<ul>';
                }



            }
            echo '</ul>';
            ?>
            <!--            <ul class="mui-flex mb8">-->
            <!--                <li class="cell">-->
            <!--                    <div class="city-detail">-->
            <!--                        <img src="web/images/city1.jpg" alt="" width="100%">-->
            <!--                        <p class="member-name" style="margin-bottom: 8px;margin-top: 8px;">碧桂园</p>-->
            <!--                        <ul class="mui-flex">-->
            <!--                            <li class="cell fixed" style="width: 25px;text-align: center">-->
            <!--                                <img src="web/images/address_icon.png" alt="" width="9">-->
            <!--                            </li>-->
            <!--                            <li class="cell " style="text-align: left">-->
            <!--                                <span class="font-707070">三山区龙窝湖旁(峨山西路以北)</span>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                        <ul class="mui-flex">-->
            <!--                            <li class="cell fixed" style="width: 25px;text-align: center">-->
            <!--                                <img src="web/images/population_icon.png" alt="" width="8">-->
            <!--                            </li>-->
            <!--                            <li class="cell " style="text-align: left">-->
            <!--                                <span class="font-707070">已有0位业主加入</span>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </li>-->
            <!--                <li class="cell" style="margin-left: 6px;">-->
            <!--                    <div class="city-detail">-->
            <!--                        <img src="web/images/city1.jpg" alt="" width="100%">-->
            <!--                        <p class="member-name" style="margin-bottom: 8px;margin-top: 8px;">碧桂园</p>-->
            <!--                        <ul class="mui-flex">-->
            <!--                            <li class="cell fixed" style="width: 25px;text-align: center">-->
            <!--                                <img src="web/images/address_icon.png" alt="" width="9">-->
            <!--                            </li>-->
            <!--                            <li class="cell " style="text-align: left">-->
            <!--                                <span class="font-707070">三山区龙窝湖旁(峨山西路以北)</span>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                        <ul class="mui-flex">-->
            <!--                            <li class="cell fixed" style="width: 25px;text-align: center">-->
            <!--                                <img src="web/images/population_icon.png" alt="" width="8">-->
            <!--                            </li>-->
            <!--                            <li class="cell " style="text-align: left">-->
            <!--                                <span class="font-707070">已有0位业主加入</span>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </li>-->
            <!--            </ul>-->


        </div>
        <!-- end 小区列表-->



        <a href="#top">
            <img src="web/images/jys_top-icon.png" alt="" width="30" style="position: absolute;bottom: 0;left: 50%;margin-left: -15px;display: block">
        </a>

    </div>
    <!-- end 联系我们-->

    <!-- footer-->
    <div class="footer">
        Copyright © 2015金钥匙装饰 皖ICP备10011451号-6
    </div>
    <!-- end footer-->
    <!-- 弹框-->
    <div class="mask mask01" data-alert="0">
        <form action="index.php?c=index&a=getplan" method="post">
            <div class="alert-box">
                <input type="text" name="area" class="input-box" placeholder="建筑面积㎡">
                <select name="city_name" id="" class="input-box City_select">
                    <option value="">请选择小区</option>
                    <?php
                    foreach($city_info as $value){

                        ?>
                        <option value="<?php echo $value['city_name'] ?>"><?php echo $value['city_name'] ?></option>

                        <?php

                    }
                    ?>
                </select>
                <input type="text" class="input-box" name="name" placeholder="姓名">
                <input type="text" class="input-box" name="phone" placeholder="手机号">
                <select name="style_name" id="" class="input-box Style_select">
                    <option value="">请选择风格</option>
                    <?php
                    foreach($style_info as $value){

                        ?>
                        <option value="<?php echo $value['style_name'] ?>"><?php echo $value['style_name'] ?></option>

                        <?php

                    }
                    ?>
                </select>
                <input type="submit" class=" btn-red  btn-submit" value="立即提交">
                <input type="button" class=" btn-red  btn-submit cancle" value="取消">
            </div>
        </form>
    </div>
    <!-- end弹框-->
    <!-- 添加小区弹框-->
    <div class="mask mask02" data-alert="0">
        <div class="alert-box">
            <input type="text" name="city_name" class="input-box city_name" placeholder="小区名称">
            <input type="text" class="input-box" name="city_address" placeholder="小区位置">
            <input type="submit" class=" btn-red  btn-submit submit-btn" value="立即提交">
            <input type="button" class=" btn-red  btn-submit cancle02" value="取消">
        </div>
    </div>
    <!-- end弹框-->

</div>
<!-- end 主内容-->

</div>
</body>
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/swiper.min.js"></script>
<script src="web/js/index.js"></script>
<script>
$(function(){

    // 添加小区

    $(".submit-btn").on("click",function(){
        var city_name=$(".city_name").val();
        var city_address=$("input[name='city_address']").val();
        if(city_name==''){
            alert("请输入小区名称！");
            return false;
        }else  if(city_address==''){
            alert("请输入小区位置！");
            return false;
        }
        $.ajax({
            type:'post',
            url: "index.php?c=index&a=addcity",
            data:{
                city_name:city_name,
                city_address:city_address
            },
            dataType: 'json',
            success: function(result) {
                alert(result.content);
                if(result.tag==1){
                    location.href=window.location.href;
                }
            }
        })

    })

    //banner滑动
    var banner = new Swiper('.banner', {
        autoplay: 3000,//可选选项，自动滑动
        loop : true,//是否循环
        pagination : '.swiper-pagination',//分页器
        autoHeight:true,//内容高度自适应
        paginationClickable :true,//分页是否可以点击
    })
    //样式滑动
    var swiper = new Swiper('.style-display', {
        pagination: '.style-pagination',
        paginationClickable: true,
        autoplay:3000,
    });
    //合作品牌滑动
    var swiper = new Swiper('.brand-swiper', {
        pagination: '.style-pagination',
        paginationClickable: true,
        autoplay:3000,
    });

    //优秀团队滑动
    var swiper = new Swiper('.team-swiper', {
        pagination: '.style-pagination',
        paginationClickable: true,
        autoplay:3000,
    });

    //照片墙图片高度
    var imgHeight= $('#img').height();

    $('#img1').height(imgHeight);

})

</script>
</html>