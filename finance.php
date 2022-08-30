<?php
    $pageName = "財務資訊";
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
             <li class="breadcrumb-item"><a>財務資訊</a></li>
             <li class="breadcrumb-item active" aria-current="page">財務報表</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
       <div class="tab tab-resp invest-tab revenue-tab" data-aos="fade-up" data-aos-duration="800">
           <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link" href="revenue.php">每月營收報告</a>
                <a class="tab_link active" href="finance.php">財務報表</a>
                <a class="tab_link" href="year-report.php">公司年報</a>
           </div>
       </div>

       <div class="finance_list finance_merge">
            <div class="container">
                <div class="finance_list_title">
                    <h2>合併財務報表</h2>
                </div>
                <div>
                    <div class="invest_list_item">
                        <div class="invest_list_title">
                            <div class="invest_list_icon">
                                <div class="bar vertical"></div>
                                <div class="bar horizontal"></div>
                            </div>
                            <h2>111年度</h2>
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
                            <h2>1110年度</h2>
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
                            <h2>1110年度</h2>
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
                            <h2>108年度</h2>
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
                            <h2>107年度</h2>
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
                            <h2>106年度</h2>
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
                            <h2>105年度</h2>
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
                            <h2>104年度</h2>
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
            </div>
       </div>

       <div class="finance_list mb-footer">
            <div class="container">
                <div class="finance_list_title">
                    <h2>個體財務報表</h2>
                </div>
                <div>
                    <a class="report_item">
                        <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                        <p>111年度和大工業CSR報告書</p>
                        <img class="report_download" src="./public/img/icon-download.svg" alt="">
                    </a>
                    <a class="report_item">
                        <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                        <p>111年度和大工業CSR報告書</p>
                        <img class="report_download" src="./public/img/icon-download.svg" alt="">
                    </a>
                    <a class="report_item">
                        <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                        <p>111年度和大工業CSR報告書</p>
                        <img class="report_download" src="./public/img/icon-download.svg" alt="">
                    </a>
                    <a class="report_item">
                        <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                        <p>111年度和大工業CSR報告書</p>
                        <img class="report_download" src="./public/img/icon-download.svg" alt="">
                    </a>
                    <a class="report_item">
                        <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                        <p>111年度和大工業CSR報告書</p>
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