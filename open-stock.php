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
             <li class="breadcrumb-item active" aria-current="page">公開股市觀測站</li>
           </ol>
       </nav>
       <div class="stock d-md-none">和大股價（公司代碼 1536）</div>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
       <div class="tab tab-resp invest-tab revenue-tab" data-aos="fade-up" data-aos-duration="800">
           <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link" href="stockholder.php">股東會/法說會</a>
                <a class="tab_link" href="stock-inform.php">股利資訊</a>
                <a class="tab_link active" href="open-stock.php">公開股市觀測站</a>
           </div>
       </div>

        <div class="mb-footer">
            <div class="container">
                <div class="stock_open">
                    <p>
                        親愛的投資人您好：<br>
                        以下提供公開資訊觀測站操作指引，請依循以下步驟選擇您欲查閱之項目。<br>
                        ※進入公開資訊觀測站後，於「公司代號」輸入本公司股票代碼：<span>1536</span>，並點選欲查詢之年度、月份即可顯示。
                    </p>
                    <ul>
                        <li><span>・企業永續報告：</span>點選「公司治理/企業社會責任相關資訊－企業社會責任報告書」即可取得相關報告。</li>
                        <li><span>・每月營收：</span>點選「最新資料」即為當月資訊，或「歷史資料」並輸入欲查詢之年度即可顯示。</li>
                        <li><span>・歷年股利分派情形：</span>點選「股東會及股利/股利分派情形－經董事會通過及經股東會通過」即可取得相關股利資訊。</li>
                        <li><span>・點選「最新資料」：</span>即為當月資料</li>
                        <li><span>・點選「歷史資料」：</span>輸入欲查詢年度即可顯示</li>
                    </ul>
                    <button data-bs-toggle="modal" data-bs-target="#leaveModal">
                        <img src="./public/img/icon-link.svg" alt="">
                        <span>前往公開股市觀測站</span>
                    </button>
                </div>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>

    <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="leaveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="leaveModalLabel">您正離開本站！</h5>
            </div>
            <div class="modal-body">
                    您現在欲前往的網站並非和大工業所有，而是各由其所屬之第三人所有、操縱及控制。 本站對第三人所有之網站亦無任何操縱或控制的權限。本站上之網路指示連結功能僅為提供您的便利而設。本站及本公司對該第三人所有之網站上的內容品質、效力、正確性、完整性、即時性、適法性，及該網站上之任何言論或聯結不負任何責任。 本站及本公司亦無調查、監視第三人所有的網站上的內容之品質、效力、正確性、完整性、即時性、適法性的義務。本站上之網路指示連結功能無論於任何情形下，不能解釋成為對任何第三人網站的保證、背書、推薦或相類的聲明。本站及本公司特於此明確宣示對於任何第三人所有網站之內容的品質、效力、正確性、完整性、即時性及適法性不負任何明示或默示的擔保責任。
            </div>
            <div class="modal-footer">
                <a class="btn-leave" href="https://mops.twse.com.tw/mops/web/index">確定</a>
                <button type="button" class="btn-cancel" data-bs-dismiss="modal">取消</button>
            </div>
            </div>
        </div>
    </div>

    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>