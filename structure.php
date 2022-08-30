<?php
    $pageName = "公司治理";
    $pagePic = "./public/img/invest-banner.png";
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
             <li class="breadcrumb-item"><a>公司治理</a></li>
              <li class="breadcrumb-item active" aria-current="page">公司組織架構</li>
            </ol>
        </nav>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
        <div class="tab tab-resp invest-tab" data-aos="fade-up" data-aos-duration="800">
            <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link" href="director.php">董事會</a>
                <a class="tab_link active" href="structure.php">公司組織架構</a>
                <a class="tab_link" href="committee.php">委員會</a>
                <a class="tab_link" href="operate.php">公司治理運作情形</a>
            </div>
        </div>
        
        <div class="report mb-footer">
            <div class="container">
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>109年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>108年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>107年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>106年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>105年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" href="" download="111年度公司組織架構">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>104年度公司組織架構</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>



    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>