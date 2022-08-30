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
             <li class="breadcrumb-item active" aria-current="page">股利資訊</li>
           </ol>
       </nav>
       <div class="stock d-md-none">和大股價（公司代碼 1536）</div>

       <?php include("./include/pageTitle.php") ?>

       <!-- tab -->
       <div class="tab tab-resp invest-tab revenue-tab" data-aos="fade-up" data-aos-duration="800">
           <div class="container d-flex flex-wrap justify-content-between">
                <a class="tab_link" href="stockholder.php">股東會/法說會</a>
                <a class="tab_link active" href="stock-inform.php">股利資訊</a>
                <a class="tab_link" href="open-stock.php">公開股市觀測站</a>
           </div>
       </div>

        <div class="year-select d-flex align-items-center justify-content-center">
            <select name="" id="">
                <option value="">所有</option>
                <option value="">2022</option>
                <option value="">2021</option>
                <option value="">2020</option>
                <option value="">2019</option>
            </select>
        </div>

        <div class="stock_table mb-footer">
            <div class="container">
                <table class="table-invest">
                    <tr>
                        <td class="table-invest_title" rowspan="2">期間<br>（年度）</td>
                        <td class="table-invest_title" colspan="2">每股股利（普通股）</td>
                        <td class="table-invest_title" rowspan="2">除權息交易日</td>
                        <td class="table-invest_title" rowspan="2">配息基準日</td>
                        <td class="table-invest_title" rowspan="2">現金股利交付日</td>
                        <td class="table-invest_title" rowspan="2">股東會日期</td>
                    </tr>
                    <tr>
                        <td class="table-invest_title">股票股利</td>
                        <td class="table-invest_title br">現金股利<br>（新台幣）</td>
                    </tr>
                    <tr>
                        <td class="stock_year">111</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">-</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">110</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">109</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">108</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">107</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">106</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">105</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
                    <tr>
                        <td class="stock_year">104</td>
                        <td class="stock_stockDividend">0</td>
                        <td class="stock_cashDividend">NT$1.12345678</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                        <td class="stock_day">2022/01/01</td>
                    </tr>
               </table>

            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>



    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>


</body>
</html>