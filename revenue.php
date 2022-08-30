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
             <li class="breadcrumb-item active" aria-current="page">每月營收報告</li>
           </ol>
       </nav>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
       <div class="tab tab-resp invest-tab revenue-tab" data-aos="fade-up" data-aos-duration="800">
           <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link active" href="revenue.php">每月營收報告</a>
                <a class="tab_link" href="finance.php">財務報表</a>
                <a class="tab_link" href="year-report.php">公司年報</a>
           </div>
       </div>

       <div class="year-select d-flex align-items-center justify-content-center">
            <span>選擇年份</span>
            <select name="" id="">
                <option value="">2022</option>
                <option value="">2021</option>
                <option value="">2020</option>
                <option value="">2019</option>
                <option value="">2018</option>
            </select>
       </div>

       <div class="revenue_report">
           <div class="container">
            <div class="revenue_report_title">
                 <h2>2022年每月營業額報告</h2>
                 <p>單位：新台幣百萬元</p>
                 <a href="" class="revenue_download d-flex align-items-center" download="歷年月營業額報告">
                         <div class="revenue_download_icon">
                            <img class="normal" src="./public/img/icon-pdf-black.svg" alt="">
                            <img class="hover" src="./public/img/icon-pdf.svg" alt="">
                        </div>
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.56 31.38"><defs><style>.cls-1{fill:#231815;}</style></defs><g id="圖層_2" data-name="圖層 2"><g id="內容"><g id="Layer_2" data-name="Layer 2"><g id="Layer_86" data-name="Layer 86"><path id="_64" data-name=" 64" class="cls-1" d="M20.36,17.52c-1.1-1.15-4.12-.68-4.84-.6a12.28,12.28,0,0,1-2-2.68,12.62,12.62,0,0,0,.68-3.52c0-1.07-.43-2.21-1.62-2.21a1.23,1.23,0,0,0-1,.59c-.51.89-.3,2.68.51,4.51A31.07,31.07,0,0,1,10,18.45c-1.23.51-3.83,1.7-4,3a1.14,1.14,0,0,0,.34,1.06,1.61,1.61,0,0,0,1.06.38c1.58,0,3.11-2.16,4.17-4a26.7,26.7,0,0,1,3.7-1A5.84,5.84,0,0,0,19,19.56c1,0,1.41-.43,1.53-.81A1.08,1.08,0,0,0,20.36,17.52Zm-1.06.72c0,.3-.43.6-1.11.42A5.75,5.75,0,0,1,16,17.56a8.94,8.94,0,0,1,2.67,0C19,17.6,19.38,17.81,19.3,18.24ZM12.2,9.48a.45.45,0,0,1,.34-.21c.38,0,.47.47.47.85a9.22,9.22,0,0,1-.51,2.64A4.65,4.65,0,0,1,12.2,9.48Zm-.08,8.25a23.53,23.53,0,0,0,1-2.38,11.12,11.12,0,0,0,1.36,1.74S13.14,17.39,12.12,17.73Zm-2.51,1.7c-1,1.62-2,2.64-2.55,2.64A.67.67,0,0,1,6.8,22a.31.31,0,0,1-.12-.38C6.8,21,7.91,20.2,9.61,19.43Z"/></g></g><path class="cls-1" d="M26.44,8,18.57.12a.42.42,0,0,0-.3-.12H.43A.43.43,0,0,0,0,.43V31a.43.43,0,0,0,.43.43H26.14a.42.42,0,0,0,.42-.43V8.3A.43.43,0,0,0,26.44,8Zm-7.61-6.4L25,7.79h-6.2Zm6.88,28.94H.85V.85H18V8.22a.42.42,0,0,0,.43.42h7.3Z"/></g></g></svg> -->
                        <span>歷年月營業額報告</span>
                 </a>
            </div>
            <div class="revenue_table mb-footer">
                <table class="table-invest">
                     <tr>
                         <td class="table-invest_title table-invest_month" rowspan="2">月份</td>
                         <td class="table-invest_title" colspan="2">合併營收</td>
                     </tr>
                     <tr>
                         <td class="table-invest_title">營收金額</td>
                         <td class="table-invest_title">年度增(減)比率</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">一月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">二月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">三月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">四月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">五月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">六月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">七月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">八月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">九月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">十月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">十一月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">十二月</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                     <tr>
                         <td class="table-invest_month">本年累計</td>
                         <td>0</td>
                         <td>0</td>
                     </tr>
                </table>
                <ul>
                    <li>*2022年之數字係內部結算，未經會計師查核。</li>
                    <li>*本公司配合主管機關法規修正，自2013年元月起，僅公告合併財務數字。</li>
                </ul>
            </div>

           </div>
       </div>

        <?php include("./include/contact.php") ?>
    </main>



    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>