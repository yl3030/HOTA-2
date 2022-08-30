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
              <li class="breadcrumb-item active" aria-current="page">永續委員會</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <!-- tab -->
        <div class="tab" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link" href="responsibility.php">環安衛政策</a>
            <a class="tab_link active" href="sustainable-committee.php">永續委員會</a>
            <a class="tab_link" href="sustain-report.php">永續報告書</a>
        </div>
        
        <div class="resp_intro" data-aos="fade-up" data-aos-duration="800">
            <div class="resp_intro_pic cover-box">
                <img class="cover-box_img" src="./public/img/commitee-pic1.png" alt="">
            </div>
            <div class="resp_intro_text">
                <p>和大多年來持續與積極推動公司治理、發展永續環境及促進社會公益等，為了讓企業社會責任推行順遂，設置「企業社會責任委員會」為專責單位，由總經理擔任主任委員，各部門主管擔任執行委員，負責統籌及規劃公司整體企業社會責任政策、策略、主題、目標，以及負責年度CSR報告書的編製及發行等事宜。</p>
            </div>
        </div>

        <img src="./public/img/commitee-pic2.svg" alt="" class="policy-pic mb-footer" data-aos="fade-up" data-aos-duration="800">
        

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>