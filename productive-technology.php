<?php
    $pageName = "生產技術";
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
              <li class="breadcrumb-item"><a href="./index.php">首頁</a></li>
              <li class="breadcrumb-item"><a>關於和大</a></li>
              <li class="breadcrumb-item"><a>和大集團</a></li>
              <li class="breadcrumb-item"><a href="competition.php">核心競爭力</a></li>
              <li class="breadcrumb-item active" aria-current="page">生產技術</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="compete_content mb-footer">
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/tech-1.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                    強化精密設備之投入<br>
                    提供客戶最佳產品
                    </h3>
                    <p>
                    從德國、瑞士、日本、美國等先進工業國家引進最新自動化精密生產與量測設備，從事精密傳動零組件的製造與組裝，包含拉內齒機、冷擠內齒機(Felss)、齒輪研磨機、電子束焊接機、熱處理設備等。此外，建置最先進的智能化自動生產線。由桁架式機器人及關節型機器手臂所組成的一線流生產線，整合了線上感測設備，可即時發現品質異常，以及在加工中進行自動補正。生產線上使用RFID來記錄每個工件的生產履歷，以確保可溯性。
                    </p>
                </div>
            </div>
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/tech-2.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                    首創國內齒輪工業技術的<br>
                    垂直整合及開發
                    </h3>
                    <p>
                        和大為國內首創齒輪工業技術垂直整合，陸續開發自製刮齒機、倒角機及國內無產製的滾齒機等機密專用工具機，以利高彈性、高效率、高效能的生產，並且積極進軍全球市場，已成功銷售至日、韓等其他國家，並顯露和大技術為齒輪界第一把交椅。
                    </p>
                </div>
            </div>
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/tech-3.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                        製程技術精進
                    </h3>
                    <p>
                        建立全新智慧生產線，整合智能化設備及生產技術，實現智能化聯網系統。<br>
                        1.全線設備連網控制與監測、全線機械人搬運。<br>
                        2.建立派工、更換參數、線上檢測、稼動監控數位化技術。<br>
                        3.導入智慧製造模式，結合虛實整合的MES系統，做到產品品質預警系統、數據可追朔性，以建構未來智慧工廠的典範。
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