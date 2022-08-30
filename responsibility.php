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
              <li class="breadcrumb-item active" aria-current="page">環安衛政策</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <!-- tab -->
        <div class="tab tab-resp" data-aos="fade-up" data-aos-duration="800">
            <a class="tab_link active" href="responsibility.php">環安衛政策</a>
            <a class="tab_link" href="sustainable-committee.php">永續委員會</a>
            <a class="tab_link" href="sustain-report.php">永續報告書</a>
        </div>
        
        <div class="resp_intro" data-aos="fade-up" data-aos-duration="800">
            <div class="resp_intro_pic cover-box">
                <img class="cover-box_img" src="./public/img/policy-pic1.png" alt="">
            </div>
            <div class="resp_intro_text">
                <h3>讓生活更進步，同時愛地球</h3>
                <p>和大相信在追求企業成長的同時，企業是需要永續的環境才能永續發展，為符合綠色企業的展望，和大力行環保節能減碳、重建地球環境、促進永續發展，特設置「綠色節能委員會」，和大相信在追求企業成長的同時，需要生態環境共榮才能永績發展。面對當前與未來的氣候議題，和大勵行環保節能減碳、重建地球環境。特設置「綠色節能委員會」努力精進環境績效，以實現綠色企業的願景。</p>
            </div>
        </div>

        <img src="./public/img/policy-pic2.png" alt="" class="policy-pic mb-footer" data-aos="fade-up" data-aos-duration="800">
        

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>