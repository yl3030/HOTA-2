<?php
    $pageName = "品質保證";
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
              <li class="breadcrumb-item active" aria-current="page">品質保證</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="compete_content mb-footer">
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/promise-1.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                        貫徹5S、TPM、TPS等<br>
                        品質管理制度
                    </h3>
                    <p>
                        沒有品管就沒有企業，公司生存命脈牽繫於品質，針對品質仍由人與機械製造所致，遂不遺餘力於機械性能之改善與設備汰舊更新，導入全面預防保養（Total Productive Maintenance, TPM）與５Ｓ（整理、整頓、清掃、清潔及紀律）活動，加強同仁在職訓練，實施全員品管，另增置高精密度之檢驗儀器設備，嚴格執行品質測試與檢驗，徹底實施進料、製程及成品之品質管制，在同仁配合貫徹執行下，和大產品品質履獲得顧客肯定與信賴。
                    </p>
                </div>
            </div>
            <div class="compete_content_item" data-aos="fade-up" data-aos-duration="800">
                <div class="compete_content_item_pic">
                    <img src="./public/img/promise-2.png" alt="">
                </div>
                <div class="compete_content_item_text">
                    <h3>
                        品管制度化，企業全球化
                    </h3>
                    <p>
                        和大作為世界十大汽車廠品質認可之汽車零組件製造廠，陸續取得 ISO／TS 16949 品質管理系統、AS 9100D 航空工業品質管理系統、ISO 13485 醫療器材品質系統管理等認證，為企業全球化佈局奠定良好基礎。
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