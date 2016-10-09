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

    <!-- header-->
    <div class="header">

        <a href="index.php"><span class="back-arrow"></span></a>
        <span style="margin-left: 55px;color: #ffffff">合作品牌</span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6">
<!--        --><?php //var_dump($data); ?>
<!--        --><?php
//
//        $arr=[1,2,3,4,5,6,7];
//        $i=0;
//
//        foreach($arr as $value){
//            $i++;
//            if($i==1){
//
//                echo '<ul><li>'.$value.'</li>';
//
//            }
//            if($i>1&&$i<4){
//                echo '<li>'.$value.'</li>';
//            }
//            if($i==4){
//                echo '</ul><ul><li>'.$value.'</li>';
//            }
//            if($i>4&&$i<6){
//                echo '<li>'.$value.'</li>';
//            }
//            if($i==6){
//                echo '</ul>';
//                $i=0;
//            }
//
//
//        }
//        echo '</ul>';
//        ?>

        <ul class="mui-flex">
            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%"
                                                              src="web/images/jys_empty.png" alt="" width="100%"></li>
            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%"
                                                              src="web/images/jys_empty.png" alt="" width="100%"></li>
            <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" width="100%"></li>
        </ul>

        <?php

        $i=0;

        foreach($data as $value){
            $i++;
            if($i==1){

               ?>
                <ul class="mui-flex " style="margin-top: -34%;">
                    <li class=" fixed" style="width: 33%;"><img src="<?php echo $value['thumb'] ?>" alt="" width="100%"></li>
                <?php

            }
            if($i>1&&$i<4){
//                echo '<li>'.$value.'</li>';
                ?>
                <li class=" fixed" style="width: 33%;"><img src="<?php echo $value['thumb'] ?>" alt="" width="100%"></li>
                <?php
            }
            if($i==4){
//                echo '</ul><ul><li>'.$value.'</li>';
                ?>
                    </ul>
                    <ul class="mui-flex">
                        <li class=" fixed"  style="position: relative;width: 33%;" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="<?php echo $value['thumb'] ?>" alt="" width="100%"></li>

                        <?php
            }
            if($i==5){
                ?>
                <li class=" fixed" style="position: relative;width: 33%;"><img style="position: absolute;left: 50%;top: -50%" src="<?php echo $value['thumb'] ?>" alt="" width="100%"></li>
                <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" style="top: -50%;" width="100%"></li>
                </ul>
                <?php
                $i=0;
            }


        }
//        echo '</ul>';
        ?>

<!--        <ul class="mui-flex" style="margin-top: -34%;">-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--        </ul>-->
<!--        <ul class="mui-flex">-->
<!--            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" style="top: -50%;" width="100%"></li>-->
<!--        </ul>-->
<!--        <ul class="mui-flex" style="margin-top: -34%;">-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell"><img src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--        </ul>-->
<!--        <ul class="mui-flex">-->
<!--            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell" style="position: relative;"><img style="position: absolute;left: 50%;top: -50%" src="web/images/brand1.png" alt="" width="100%"></li>-->
<!--            <li class="cell" style="position: relative;"><img src="web/images/jys_empty.png" alt="" style="top: -50%;" width="100%"></li>-->
<!--        </ul>-->

        <a href="#top">
            <img src="web/images/jys_top-icon.png" alt="" width="30" style="position: absolute;bottom: 0;left: 50%;margin-left: -15px;display: block">
        </a>

    </div>
    <!-- end 内容-->

    <!-- footer-->
    <div class="footer">
        Copyright © 2015金钥匙装饰 皖ICP备10011451号-6
    </div>
    <!-- end footer-->

</div>

</body>
</html>