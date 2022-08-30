<?php
    $pageName = "股東專區";
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
             <li class="breadcrumb-item"><a>股東專區</a></li>
             <li class="breadcrumb-item active" aria-current="page">股東會/法說會</li>
             <li class="stock d-md-block d-none">和大股價（公司代碼 1536）</li>
           </ol>
       </nav>
       <div class="stock d-md-none">和大股價（公司代碼 1536）</div>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
       <div class="tab tab-resp invest-tab revenue-tab" data-aos="fade-up" data-aos-duration="800">
           <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link active" href="stockholder.php">股東會/法說會</a>
                <a class="tab_link" href="stock-inform.php">股利資訊</a>
                <a class="tab_link" href="open-stock.php">公開股市觀測站</a>
           </div>
       </div>

       <div class="mb-footer container">
        <div class="invest_list_item">
            <div class="invest_list_title">
                <div class="invest_list_icon">
                    <div class="bar vertical"></div>
                    <div class="bar horizontal"></div>
                </div>
                <h2>開會通知書</h2>
            </div>
            <div class="invest_list_content">
                <a class="report_item" download="111年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度前三季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度前三季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度上半年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度上半年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度第一季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度第一季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
            </div>
        </div>
        <div class="invest_list_item">
            <div class="invest_list_title">
                <div class="invest_list_icon">
                    <div class="bar vertical"></div>
                    <div class="bar horizontal"></div>
                </div>
                <h2>議事手冊</h2>
            </div>
            <div class="invest_list_content">
                <a class="report_item" download="111年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度前三季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度前三季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度上半年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度上半年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度第一季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度第一季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
            </div>
        </div>
        <div class="invest_list_item">
            <div class="invest_list_title">
                <div class="invest_list_icon">
                    <div class="bar vertical"></div>
                    <div class="bar horizontal"></div>
                </div>
                <h2>議事錄</h2>
            </div>
            <div class="invest_list_content">
                <a class="report_item" download="111年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度前三季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度前三季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度上半年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度上半年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度第一季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度第一季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
            </div>
        </div>
        <div class="invest_list_item">
            <div class="invest_list_title">
                <div class="invest_list_icon">
                    <div class="bar vertical"></div>
                    <div class="bar horizontal"></div>
                </div>
                <h2>法說會簡報</h2>
            </div>
            <div class="invest_list_content">
                <a class="report_item" download="111年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度前三季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度前三季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度上半年度">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度上半年度</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a class="report_item" download="110年度第一季">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>110年度第一季</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
            </div>
        </div>
       </div>

        <?php include("./include/contact.php") ?>
    </main>



    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>