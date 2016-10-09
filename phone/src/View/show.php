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

        <a href="index.php?c=index&a=list&catid=<?php echo $catname['catid'] ?>"><span class="back-arrow"></span></a>
        <span style="margin-left: 55px;color: #ffffff"><?php echo $catname['catname'] ?></span>
    </div>
    <!-- end header-->
    <!-- 内容-->
    <div class="content" style="background-color: #e6e6e6;padding-bottom: 42px;">

        <div class="content-panel" style="padding-bottom: 42px;">

            <div class="content-title">
                <?php echo $data['title'] ?>
            </div>

            <ul class="title-detail mui-flex" style="padding-bottom: 12px;">

                <li class="cell" style="text-align: right;margin-right: 5px;color: #707070">
                    <img src="web/images/hit_icon.png" alt="">
                    点击<?php echo $hits['views'] ?>
                </li>
                <li class="cell" style="text-align: left;margin-left: 5px;color: #707070">
                    <img src="web/images/time_icon.png" alt="">
                    <?php echo date('Y-m-d',$data['inputtime']) ?>
                </li>

            </ul>

            <!-- 视频内容-->
            <div class="video-text">
                <?php echo $data['content'] ?>
            </div>
            <!-- end 视频内容-->
            <!-- 分页-->
            <div class="pagination">
                <?php

                if(empty($pre)){
                    ?>

                    <ul class="mui-flex ">
                        <li class="cell">
                            上一条: 没有了
                        </li>

                    </ul>

                    <?php
                }else{
                    ?>

                    <a href="index.php?c=index&a=show&id=<?php echo $pre['id'] ?>">
                        <ul class="mui-flex ">
                            <li class="cell">
                                上一条: <?php echo $pre['title'] ?>
                            </li>

                        </ul>
                    </a>
                    <?php

                }
                ?>
                <?php

                if(empty($next)){
                    ?>

                        <ul class="mui-flex ">
                            <li class="cell">
                                下一条: 没有了
                            </li>

                        </ul>

                <?php
                }else{
                    ?>

                    <a href="index.php?c=index&a=show&id=<?php echo $next['id'] ?>">
                        <ul class="mui-flex ">
                            <li class="cell">
                                下一条: <?php echo $next['title'] ?>
                            </li>

                        </ul>
                    </a>
                    <?php

                }
                ?>

            </div>
            <!-- end 分页-->

        </div>
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