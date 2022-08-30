<?php
    $pageName = "研發實力";
    $pagePic = "./public/img/intro-banner.png";
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
              <li class="breadcrumb-item"><a>和大集團</a></li>
              <li class="breadcrumb-item"><a href="competition.php">核心競爭力</a></li>
              <li class="breadcrumb-item active" aria-current="page">研發實力</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="compete_content mb-footer">
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/invent-1.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                        積極培育堅實的專業研發團隊
                    </h3>
                    <p>
                        強大的競爭力，來自於卓越的研發團隊。深知只有堅強的研發團隊，才能創造出高品質及具競爭力的新產品，因此和大每年不吝於編列龐大的研發預算，不斷培訓新研發人才及聘請專業的顧問團隊，讓研發技術不斷層、提升自我研發能力，成為國際大廠信賴的廠商。
                    </p>
                </div>
            </div>
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/invent-2.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                        持續同業及產學合作<br>
                        精煉最新資訊及技能
                    </h3>
                    <p>
                        與歐、日同步，引進知名高精密生產及檢驗設備，並與國內外知名汽、機車大廠建立長期良好關係，保持領先同業研發地位，近年來更與工業技術研究院及國立中正大學長期合作，針對國內無產製的滾齒機及符合未來趨勢的電動傳動系統積極開發，強化生產製程之軟、硬實力。
                    </p>
                </div>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>