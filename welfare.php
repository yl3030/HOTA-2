<?php
    $pageName = "人才招募";
    $pagePic = "./public/img/recruit-banner.png";
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
              <li class="breadcrumb-item"><a>人才招募</a></li>
              <li class="breadcrumb-item active" aria-current="page">福利制度</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <p class="work_text">我們致力於改善工作條件，並提高同仁的福利及人權保障</p>

        <!-- tab -->
        <div class="tab tab-rescuit" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link" href="work.php">工作機會</a>
            <a class="tab_link active" href="welfare.php">福利制度</a>
        </div>

        <div class="welfare mb-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-1.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>獎金福利</h2>
                                <ul>
                                    <li>年終獎金</li>
                                    <li>季績效獎金</li>
                                    <li>激勵獎金</li>
                                    <li>三節禮金/禮品</li>
                                    <li>勞動節獎金/禮品</li>
                                    <li>生日禮金/禮品</li>
                                    <li>視年度營運發放員工現金紅利</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-2.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>休假福利</h2>
                                <ul>
                                    <li>休假福利</li>
                                    <li>陪産假</li>
                                    <li>週休二日(部份職務、現場人員需依各單位情形輪班)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-3.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>補助福利</h2>
                                <ul>
                                    <li>結婚禮金</li>
                                    <li>生育津貼</li>
                                    <li>員工進修補助</li>
                                    <li>住院慰問金</li>
                                    <li>退職金提撥</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-4.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>保險福利</h2>
                                <ul>
                                    <li>勞保</li>
                                    <li>健保</li>
                                    <li>職災保險</li>
                                    <li>團保</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-5.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>制度福利</h2>
                                <ul>
                                    <li>員工制服</li>
                                    <li>完整的教育訓練</li>
                                    <li>職涯升遷管道</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-6.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>設備福利</h2>
                                <ul>
                                    <li>員工宿舍</li>
                                    <li>員工餐廳</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="welfare_item" data-aos="fade-up" data-aos-duration="800">
                            <div class="welfare_pic">
                                <img src="./public/img/welfare-7.png" alt="">
                            </div>
                            <div class="welfare_text">
                                <h2>其他福利</h2>
                                <ul>
                                    <li>員工停車位</li>
                                    <li>健康檢查</li>
                                    <li>特約商店</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>