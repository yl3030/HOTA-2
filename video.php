<?php
    $pageName = "新聞集錦";
    $pagePic = "./public/img/news-banner.png";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <?php include("./include/meta.php") ?>
</head>

<body>
    <?php include("./include/header.php") ?>
    <main>
        <?php include("./include/banner.php") ?>

         <!-- breadcrumb -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb container d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
              <li class="breadcrumb-item"><a>新聞中心</a></li>
              <li class="breadcrumb-item active" aria-current="page">新聞集錦</li>
            </ol>
        </nav>
        
        <?php include("./include/pageTitle.php") ?>

        <!-- tab -->
        <div class="tab" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link" href="news.php">最新消息</a>
            <a class="tab_link active" href="video.php">新聞集錦</a>
        </div>
        
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic5.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜109-12-26</p>
                                <h2>和大工業股份有限公司</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic5.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-09-22</p>
                                <h2>Hota Industrial Mfg. Co., Ltd.</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic5.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>特和大工業股份有限公司 簡介</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic6.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic6.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic6.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic5.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic6.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item news_video" data-bs-toggle="modal" data-bs-target="#newsModal" onclick="onPlayer(event)">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic5.png" alt="">
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>訂單排到2024年! 和大:但"新三缺"問題未解...巧新今年營收戰...</h2>
                                <p class="news_more">播放影片 》</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include("./include/pagination.php") ?>
        

        <?php include("./include/contact.php") ?>
    </main>

    <?php include("./include/videoPopup.php") ?>

    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>