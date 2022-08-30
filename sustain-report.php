<?php
    $pageName = "環境保護與社會責任";
    $pagePic = "./public/img/sustain-banner.png";
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
              <li class="breadcrumb-item"><a>關於和大</a></li>
              <li class="breadcrumb-item"><a>永續經營</a></li>
              <li class="breadcrumb-item"><a>環境保護與社會責任</a></li>
              <li class="breadcrumb-item active" aria-current="page">永續報告書</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <!-- tab -->
        <div class="tab" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link" href="responsibility.php">環安衛政策</a>
            <a class="tab_link" href="sustainable-committee.php">永續委員會</a>
            <a class="tab_link active" href="sustain-report.php">永續報告書</a>
        </div>
        
        <div class="report mb-footer">
            <div class="container">
                <a href="" class="report_item" download="111年度和大工業CSR報告書">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度和大工業CSR報告書</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a href="" class="report_item" download="111年度和大工業CSR報告書">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度和大工業CSR報告書</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a href="" class="report_item" download="111年度和大工業CSR報告書">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度和大工業CSR報告書</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a href="" class="report_item" download="111年度和大工業CSR報告書">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度和大工業CSR報告書</p>
                    <img class="report_download" src="./public/img/icon-download.svg" alt="">
                </a>
                <a href="" class="report_item" download="111年度和大工業CSR報告書">
                    <img class="report_pdf" src="./public/img/icon-pdf.svg" alt="">
                    <p>111年度和大工業CSR報告書</p>
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