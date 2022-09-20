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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-1">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-2">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-3">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-4">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-5">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-6">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-7">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-8">
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
                        <a class="news_item news_video video-item" data-bs-toggle="modal" data-bs-target="#newsModal" data-video="#news_video-9">
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

    <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" onclick="stop()">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="news_videoBox">
                        <div>
                            <div id="news_video-1" class="news_video_main"></div>
                            <div id="news_video-2" class="news_video_main"></div>
                            <div id="news_video-3" class="news_video_main"></div>
                            <div id="news_video-4" class="news_video_main"></div>
                            <div id="news_video-5" class="news_video_main"></div>
                            <div id="news_video-6" class="news_video_main"></div>
                            <div id="news_video-7" class="news_video_main"></div>
                            <div id="news_video-8" class="news_video_main"></div>
                            <div id="news_video-9" class="news_video_main"></div>
                        </div>
                        <p data-bs-dismiss="modal" class="close_btn">close</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        var video1, video2, video3, video4, video5, video6, video7, video8, video9;
        function onYouTubeIframeAPIReady() {
            video1 = new YT.Player("news_video-1", {
                videoId: "SgUjftmFB4U",
                events: {
                    onReady: stopVideo,
                },
            });
            video2 = new YT.Player("news_video-2", {
                videoId: "IzVqamf7XhE",
                events: {
                    onReady: stopVideo,
                },
            });
            video3 = new YT.Player("news_video-3", {
                videoId: "cCZ-QTGgcko",
                events: {
                    onReady: stopVideo,
                },
            });
            video4 = new YT.Player("news_video-4", {
                videoId: "ASxOA4vPBVg",
                events: {
                    onReady: stopVideo,
                },
            });
            video5 = new YT.Player("news_video-5", {
                videoId: "GjMWlZkwZt8",
                events: {
                    onReady: stopVideo,
                },
            });
            video6 = new YT.Player("news_video-6", {
                videoId: "UCIsDJgHdlA",
                events: {
                    onReady: stopVideo,
                },
            });
            video7 = new YT.Player("news_video-7", {
                videoId: "j9lFfiMqs-c",
                events: {
                    onReady: stopVideo,
                },
            });
            video8 = new YT.Player("news_video-8", {
                videoId: "Q5Zdj2R4_lE",
                events: {
                    onReady: stopVideo,
                },
            });
            video9 = new YT.Player("news_video-9", {
                videoId: "OlzCgM_kZ8A",
                events: {
                    onReady: stopVideo,
                },
            });
        }

        function stop() {
            video1.stopVideo();
            video2.stopVideo();
            video3.stopVideo();
            video4.stopVideo();
            video5.stopVideo();
            video6.stopVideo();
            video7.stopVideo();
            video8.stopVideo();
            video9.stopVideo();
        }
    </script>


</body>
</html>