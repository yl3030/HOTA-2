<?php
    $pageName = "競爭優勢";
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
              <li class="breadcrumb-item active" aria-current="page">核心競爭力</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="compete mb-footer">
            <div class="container">
                <div class="compete_item">
                    <div class="compete_item_pic">
                        <img src="./public/img/compete-1.png" alt="">
                    </div>
                    <div class="compete_item_text">
                        <div>
                            <h3>生產技術</h3>
                            <ul>
                                <li>引進德國、瑞士、日本等最新生產及檢驗設備，相較同業規模，和大產線設備及檢驗儀器完整，自主性強。</li>
                                <li>陸續引進自動化設備提高生產效率及持續提升產能，完整供應鏈體系，提供客戶一條龍服務。</li>
                            </ul>
                        </div>
                        <a href="productive-technology.php">
                            <span>了解更多</span>
                            <img src="./public/img/arrow-white-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="compete_item">
                    <div class="compete_item_pic">
                        <img src="./public/img/compete-2.png" alt="">
                    </div>
                    <div class="compete_item_text">
                        <div>
                            <h3>研發實力</h3>
                            <ul>
                                <li>與客戶共同設計及研發出最符合客戶需求且具有生產效益的產品，並快速提供客戶有效支援及高品質之新產品。</li>
                                <li>OEM、ODM及逆向工程技術領先國内其他同業。</li>
                                <li>具關鍵機器設備開發能力，有助於生產設備客製化及降低成本。</li>
                            </ul>
                        </div>
                        <a href="research.php">
                            <span>了解更多</span>
                            <img src="./public/img/arrow-white-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="compete_item">
                    <div class="compete_item_pic">
                        <img src="./public/img/compete-3.png" alt="">
                    </div>
                    <div class="compete_item_text">
                        <div>
                            <h3>品質保證</h3>
                            <ul>
                                <li>通過各汽車大廠嚴格稽核及認證，為主要一階供應商。</li>
                                <li>引進多項高精密度之檢驗儀器設備，嚴格執行品質測試與檢驗，徹底實施進料、製程及成品之品質管制，在同仁配合貫徹執行下，和大產品品質履獲得顧客肯定與信賴。</li>
                            </ul>
                        </div>
                        <a href="promise.php">
                            <span>了解更多</span>
                            <img src="./public/img/arrow-white-right.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            
        </div>

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>