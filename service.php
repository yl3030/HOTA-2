<?php
    $pageName = "服務代理資訊與窗口";
    $pagePic = "./public/img/service-banner.png";
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
             <li class="breadcrumb-item"><a>投資人關係</a></li>
             <li class="breadcrumb-item active" aria-current="page">服務代理資訊與窗口</li>
           </ol>
       </nav>
       <div class="stock d-md-none">和大股價（公司代碼 1536）</div>

       <?php include("./include/pageTitle.php") ?>


        <div class="mb-footer">
            <div class="container">
                <div class="service_item" data-aos="fade-up" data-aos-duration="800">
                    <h2>和大投資人關係聯繫窗口</h2>
                    <ul class="service_text">
                        <li>
                            <span class="person">發言人</span>
                            <span class="name">陳俊智 總經理</span>
                        </li>
                        <li>
                            <span class="person">代理發言人</span>
                            <span class="name">沈千慈 董事執行長</span>
                        </li>
                    </ul>
                    <ul class="service_inform">
                        <li>
                            <img src="./public/img/icon-phone.svg" alt="">
                            <span>+886-4-25692299 #1234</span>
                        </li>
                    </ul>
                </div>
                <div class="service_item agency" data-aos="fade-up" data-aos-duration="800">
                    <h2>股務代理機構</h2>
                    <ul class="service_text">
                        <li>
                            <span class="name">元富證券股份有限公司 股務代理部</span>
                        </li>
                    </ul>
                    <ul class="service_inform">
                        <li>
                            <img src="./public/img/icon-home.svg" alt="">
                            <span>台北市光復北路11巷35號B1</span>
                        </li>
                        <li>
                            <img src="./public/img/icon-phone.svg" alt="">
                            <span>02-27686668</span>
                        </li>
                        <li>
                            <img src="./public/img/icon-earth2.svg" alt="">
                            <span>www.masterlink.com.tw</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>


    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>