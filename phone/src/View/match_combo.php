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
            <span style="margin-left: 45px;font-size: 16px;">套餐介绍</span>

        </div>
        <!-- end head-->

        <!-- 风格展示-->
        <div class="style-display swiper-container" style="padding-bottom: 20px;margin-top: 12px;">


            <div class="swiper-wrapper">
                <div class="swiper-slide padding-0-43">
                    <ul class="mui-flex">
                        <li class="cell"><img src="web/images/jys_s1.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"><img src="web/images/jys_s2.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s3.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s4.jpg" alt="" width="100%"></li>
                    </ul>

                </div>
                <div class="swiper-slide padding-0-43">
                    <ul class="mui-flex">
                        <li class="cell"><img src="web/images/jys_s5.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"><img src="web/images/jys_s6.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s7.jpg" alt="" width="100%"></li>
                        <li class="cell" style="margin-left: 5px;"> <img src="web/images/jys_s8.jpg" alt="" width="100%"></li>
                    </ul>
                </div>
            </div>
            <div class="swiper-pagination style-pagination" style="bottom: 0px;"></div>
        </div>
        <!-- end 风格展示-->
        <!-- 套餐列表-->
        <div class="combo-list">

            <?php



            foreach($data as $value){

                if($value['posids']){

                    ?>
                    <a href="index.php?c=index&a=showcombo&id=<?php echo $value['id'] ?>">
                        <ul class="mui-flex" style="background-color: #ffffff;margin-bottom:8px;">
                            <li class="cell" style="position: relative;">
                                <img src="<?php echo $value['thumb'] ?>" alt="" width="100%">
                                <img src="web/images/mark.png" alt="" width="18" style="position: absolute;top: 0px;left: 5px;">
                            </li>
                            <li class="cell" >
                                <div style="padding: 10px;">
                                    <p class="member-name line2"><?php echo $value['title'] ?></p>
                                    <div class="member-intro">
                                        <?php echo $value['description'] ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </a>

                    <?php

                }else{

                    ?>

                    <a href="index.php?c=index&a=showcombo&id=<?php echo $value['id'] ?>">
                        <ul class="mui-flex" style="background-color: #ffffff;margin-bottom:8px;">
                            <li class="cell" style="position: relative;">
                                <img src="<?php echo $value['thumb'] ?>" alt="" width="100%">
                            </li>
                            <li class="cell" >
                                <div style="padding: 10px;">
                                    <p class="member-name line2"><?php echo $value['title'] ?></p>
                                    <div class="member-intro">
                                        <?php echo $value['description'] ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </a>

                    <?php

                }

//


            }
            ?>




            <a href="#top">
                <img src="web/images/jys_top-icon.png" alt="" width="30" style="position: absolute;bottom: 0;left: 50%;margin-left: -15px;display: block">
            </a>
        </div>
        <!-- end 套餐列表-->

        <!-- footer-->
        <div class="footer">
            Copyright © 2015金钥匙装饰 皖ICP备10011451号-6
        </div>
        <!-- end footer-->

    </div>
    <!-- end 主内容-->

</div>
</body>
<script src="web/js/jquery-2.1.4.min.js"></script>
<script src="web/js/swiper.min.js"></script>
<script src="web/js/index.js"></script>
<script>
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

</script>
</html>