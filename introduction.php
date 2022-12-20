<?php
    $pageName = "集團簡介";
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
              <li class="breadcrumb-item active" aria-current="page">集團簡介</li>
            </ol>
        </nav>

        <?php include("./include/pageTitle.php") ?>

        <div class="container">
            <p class="text-common">
                和大公司創立超過半個世紀以來，克服種種艱難與挑戰，跨越世紀的高牆，從一間小小的家庭工廠起家，建立精密齒輪傳動王國，成為臺灣隱形冠軍，創造另類台灣之光；和大年產近二千萬個傳動齒輪，是全球大型專業汽車傳動齒輪製造廠；產品約4.32%內銷、95.68%外銷，主要客戶多為歐美大型車廠及其一階供應商，為目前臺灣最大汽車齒輪傳動零件公司。
            </p>
        </div>
        
        <div class="intro_content">
            <div class="container">
                <div class="intro_item" data-aos="fade-up" data-aos-duration="800">
                    <div class="intro_item_pic"><img src="./public/img/intro-pic1.png" alt=""></div>
                    <div class="intro_item_text">
                        <h3>經濟創新</h3>
                        <p class="text-common">積極推展生產線智慧製造並配合政府五大創新產業政策及產業技術趨勢，持續精進智能聯網、智能製造、智能檢測、智能輸送之智能產線，大大提升製程效率與成本節約。並於2020年執行經濟部科專計畫，精進智能生產與檢驗，提升技術創新。</p>
                    </div>
                </div>
        
                <div class="intro_item" data-aos="fade-up" data-aos-duration="800">
                    <div class="intro_item_pic"><img src="./public/img/intro-pic2.png" alt=""></div>
                    <div class="intro_item_text">
                        <h3>綠能發展</h3>
                        <p class="text-common">和大於2020年各廠廠房屋頂太陽光電系統建置容量累積已達3,279.95kWp，並且提供4,277.025仟度電力，二氧化碳減量約2,177,005.725kgCO2e，各廠區皆已建置屋頂太陽光電系統，優於主管機關規範標準並通過ISO50001能源管理系統證。</p>
                    </div>
                </div>
        
                <div class="intro_item" data-aos="fade-up" data-aos-duration="800">
                    <div class="intro_item_pic"><img src="./public/img/intro-pic3.png" alt=""></div>
                    <div class="intro_item_text">
                        <h3>社會公益</h3>
                        <p class="text-common">由和大主導捐助的高和春貴慈善基金會，2020年起持續致力於推動社會公益與關懷弱勢，讓社會充滿溫暖的愛，同時因應新冠肺炎疫情，集資捐助中部地區醫院防疫基金，年度捐助金額為8,181,998元。</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="history pb-footer">
            <h1 class="title-page" data-aos="fade-up" data-aos-duration="800">企業沿革</h1>
            <div class="container">
                <div class="history_slider">
                    <div class="swiper-container history_swiper swiper-thumbs">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="history_point" data-target="#history_content2010">
                                <div class="history_point_circle">
                                    <div class="history_point_circle_inner"></div>
                                </div>
                                <div class="history_point_text">
                                    2010
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_point" data-target="#history_content2000">
                                <div class="history_point_circle">
                                    <div class="history_point_circle_inner"></div>
                                </div>
                                <div class="history_point_text">
                                    2000
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_point" data-target="#history_content1990">
                                <div class="history_point_circle">
                                    <div class="history_point_circle_inner"></div>
                                </div>
                                <div class="history_point_text">
                                    1990
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_point" data-target="#history_content1980">
                                <div class="history_point_circle">
                                    <div class="history_point_circle_inner"></div>
                                </div>
                                <div class="history_point_text">
                                    1980
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_point" data-target="#history_content1960">
                                <div class="history_point_circle">
                                    <div class="history_point_circle_inner"></div>
                                </div>
                                <div class="history_point_text">
                                    1960
                                </div>
                            </div>
                          </div>
                        </div>     
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="history_content">
                    <div class="swiper-container history_content_swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="history_list">
                                <div class="history_item">
                                    <p class="year">2010/</p>
                                    <ul>
                                        <li>與比利時知名變速箱大廠合作，進軍大陸汽車CVT無段變速市場。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2011/</p>
                                    <ul>
                                        <li>獲頒EATON 2011亞太區最佳供應商獎。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2012/</p>
                                    <ul>
                                        <li>獲頒經濟部第20屆臺灣精品獎。</li>
                                        <li>連續兩年獲頒EATON 2012 亞太區最佳供應商獎。</li>
                                        <li>獲頒TESLA 2012卓越品質獎。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2013/</p>
                                    <ul>
                                        <li>獲頒AGCO 2013最佳交期獎。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2014/</p>
                                    <ul>
                                        <li>通過ISO14064溫室氣體盤查認證。</li>
                                        <li>通過PAS 2050碳足跡認證。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2015/</p>
                                    <ul>
                                        <li>發行首本企業社會責任報告書。</li>
                                        <li>榮獲經濟部2015臺灣創新企業20強。</li>
                                        <li>通過OHSAS 18001 & TOSHMS職業安全衛生管理系統驗證。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2016/</p>
                                    <ul>
                                        <li>成立嘉義分公司。</li>
                                        <li>獲頒AGCO 2016最佳交期獎。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2017/</p>
                                    <ul>
                                        <li>獲頒AGCO 2017愛科中國供應商大會持續發展獎。</li>
                                        <li>榮獲2016年度出口績優廠商前500名。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2018/</p>
                                    <ul>
                                        <li>榮獲大型企業中科科學園區2018 TOP5000。</li>
                                        <li>榮獲哈佛商業評論臺灣執行長50強。</li>
                                        <li>獲頒BSI永續實踐獎。</li>
                                        <li>通過IATF 16949：2016品質管理系統認證。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2019/</p>
                                    <ul>
                                        <li>榮獲108年經濟部國家產業創新獎。</li>
                                        <li>榮獲BorgWarner年度最佳供應商獎。</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_list">
                                <div class="history_item">
                                    <p class="year">2000/</p>
                                    <ul>
                                        <li>股票在臺灣證券交易所上櫃。</li>
                                        <li>成立美國洛杉磯分公司Hotatech, Inc.，開發並維護美國市場。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2001/</p>
                                    <ul>
                                        <li>股票上市，並於同年成立「和佳工業股份有限公司」，以生產及銷售引擎閥為主要業務。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2002/</p>
                                    <ul>
                                        <li>進行手排變速箱之研發。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2003/</p>
                                    <ul>
                                        <li>成立日本大阪分公司Global Technos Ltd.，開發並維護日本市場。</li>
                                        <li>轉投資「聚勇機電工業股份有限公司」，以生產沙灘車為主要業務，並於同年銷售至世界各地。</li>
                                        <li>榮獲ISO 14001 環境管理系統之認證。</li>
                                        <li>榮獲ISO/TS16949品質系統認證。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2004/</p>
                                    <ul>
                                        <li>成立美國底特律分公司Hotatech, Inc.，就近開發並服務美東地區客戶。</li>
                                        <li>因應車廠訂單需求，正式動土新建中科廠。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2005/</p>
                                    <ul>
                                        <li>成立歐洲商務代表，開拓歐洲市場。</li>
                                        <li>轉投資「聚大機械股份有限公司」，以生產及銷售工具機為主要業務，全臺唯一刮齒機製造商。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2006/</p>
                                    <ul>
                                        <li>中科廠生產線啟用，GM產品正式量產，成為GM一階供應。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2007/</p>
                                    <ul>
                                        <li>正式入主「高鋒工業股份有限公司」，引進日本技術顧問團隊，精進其工具機研發及生產能力。</li>
                                        <li>同年把聚勇機電及聚大機械納入和大事業體，成為動力事業部及機械事業部，變速箱零組件業務</li>
                                        <li>則成為其傳動事業部。</li>
                                        <li>獲頒GM 2006年GM全球最佳供應商。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2008/</p>
                                    <ul>
                                        <li>設立熱處理廠並投資相關熱處理設備。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">2009/</p>
                                    <ul>
                                        <li>成功開發全臺第一臺自製精密滾齒機。</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_list">
                                <div class="history_item">
                                    <p class="year">1990/</p>
                                    <ul>
                                        <li>公司更名為「和大工業股份有限公司」。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1991/</p>
                                    <ul>
                                        <li>成立「和嬴精工股份有限公司」，以生產及銷售活塞環為主要業務。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1995/</p>
                                    <ul>
                                        <li>榮獲英國標準協會 (B.S.I.) 之ISO 9002品質保證制度雙重認證通過；為全國首家具世界品質認可之齒輪專業製造廠商。</li>
                                        <li>成功進軍美國汽、機、卡車OEM市場。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1996/</p>
                                    <ul>
                                        <li>榮獲經濟部商品檢驗局暨英國標準協會(B.S.I.)之QS 9000雙重認證通過；為全國生產齒輪界首家具美國三大汽車廠品質認可之齒輪專業製造廠。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1998/</p>
                                    <ul>
                                        <li>轉投資「無錫和大精密齒輪有限公司」。</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_list">
                                <div class="history_item">
                                    <p class="year">1980/</p>
                                    <ul>
                                        <li>再度獲得經濟部商檢局1980年中部地區機械品管示範工廠。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1981/</p>
                                    <ul>
                                        <li>三度榮獲經濟部1981年度中區機械類品管示範工廠。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1982/</p>
                                    <ul>
                                        <li>與日本齒輪工業株式會社簽訂技術合作，進行技術合作。</li>
                                        <li>與工業技術研究院機械工業研究所簽訂技術合作，開發由齒曲離合器。</li>
                                        <li>膺選經濟部商檢局品質優良工廠。</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="history_list">
                                <div class="history_item">
                                    <p class="year">1966/</p>
                                    <ul>
                                        <li>創立和大工業的前身「和興工業社」，加工各種機械、機車及農機之齒輪、軸類零件為主。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1975/</p>
                                    <ul>
                                        <li>公司變更為「和大工業開發股份有限公司」，開發生產汽車零件。</li>
                                    </ul>
                                </div>
                                <div class="history_item">
                                    <p class="year">1979/</p>
                                    <ul>
                                        <li>榮獲經濟部商品檢驗局評選為1979年度中部首家機械類工廠品保示範工廠。</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>

        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        var swiperList = new Swiper(".history_content_swiper", {
            slidesPerView: 1,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            effect: "fade",
            simulateTouch:false,
            fadeEffect: {
                crossFade: true,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        })

        var swiper = new Swiper(".history_swiper", {
            slidesPerView: 1,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiperList,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                420: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 5,
                }
            }
        })
        swiper.on('click',function(){
            // console.log('click!');
            let year = $(this).find(".history_point").data("target");
            // console.log(year);
        })

        // $(".history_point").click(function(){
        //    $(this).parents(".swiper-slide").removeClass("swiper-slide").addClass("swiper-slide-active");
        // })
    </script>
</body>
</html>