<?php
    $pageName = "最新消息";
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
              <li class="breadcrumb-item active" aria-current="page">最新消息</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <!-- tab -->
        <div class="tab" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link active" href="news.php">最新消息</a>
            <a class="tab_link" href="video.php">新聞集錦</a>
        </div>
        
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic1.png" alt="">
                                <div class="news_tag">媒體報導</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜109-12-26</p>
                                <h2>部署台美啖特斯拉商機 和大沈國榮安排么女接棒</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic2.png" alt="">
                                <div class="news_tag">媒體報導</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-09-22</p>
                                <h2>嘉義縣科學園區來了 翁章梁做好準備</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic3.png" alt="">
                                <div class="news_tag">媒體報導</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>特斯拉減速齒輪箱獨家供應商和大工業集團 新建員工社區住宅動土</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 news_itemBox" data-aos="fade-up" data-aos-duration="800">
                        <a class="news_item" href="news-content.php">
                            <div class="news_item_pic">
                                <img src="./public/img/news-pic4.png" alt="">
                                <div class="news_tag">企業消息</div>
                            </div>
                            <div class="news_item_text">
                                <p class="news_date">日期｜110-01-18</p>
                                <h2>文章標題</h2>
                                <p class="news_more">詳全文 》</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include("./include/pagination.php") ?>
        

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>