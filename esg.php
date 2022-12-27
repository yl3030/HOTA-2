<?php
    $pageName = "ESG願景與政策目標";
    $pagePic = "./public/img/esg-banner.png";
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
              <li class="breadcrumb-item active" aria-current="page">ESG願景與政策目標</li>
            </ol>
        </nav>

        

        <div class="esg_content">
            <div class="container">
                <h1 class="title-page"><?php echo $pageName ?></h1>
                <h3 class="title-page_second">科技轉動生活  智能落實永續</h3>
                <p class="text-common" data-aos="fade-up" data-aos-duration="800">
                    和大集團秉持創新、獨特的模式致力於產業發展，積極投入良好公司治理與環境永續解決方案，運用科技落實智慧生活，持續研製綠能傳動產品，在快速成長的市場上實踐HOTA ESG，發揮正向影響力以期轉動世界，轉動生活，未來和大集團將繼續鞏固企業優勢及提升整體競爭力，維繫與各利害關係人之良好互動，確保企業經營效率及節能管理，實踐環境、社會、經濟共好價值，達成對股東、員工、社會永續之經營責任。
                </p>
            </div>
        </div>
        <div class="esg_content">
            <div class="container">
                <h1 class="title-page">六大政策</h1>
                <h3 class="title-page_second">和大持續轉動  創造永續美好</h3>
                <p class="text-common" data-aos="fade-up" data-aos-duration="800">
                和大集團訂出環境保護、社會責任與公司治理/經濟之三大永續主軸，展開符合SDGs八項指標、六大具體政策作為企業永續發展藍圖，除關注國內外相關企業社會責任準則及全球環境氣候變遷等議題，也省思、改善因應制度與成效，以回應全球日益關切的環境議題與社會共融趨勢，務實達成永續政策之短中長程目標。
                </p>
            </div>
                <div class="esg_round">
                    <div class="esg_round_inner">
                        <div class="esg_round_envi esg_round_item" id="round-environment"></div>
                        <div class="esg_round_soci esg_round_item" id="round-social"></div>
                        <div class="esg_round_comp esg_round_item" id="round-company"></div>
                        <div class="esg_round_title esg_round_item">
                            <div class="esg_round_title_text">
                                <h4>ESG</h4>
                                <p>
                                    Six<br>
                                    major<br>
                                    policies
                                </p>
                            </div>
                        </div>
                        <div class="esg_round_icon">
                            <div class="esg_round_icon_img" style="--i:2">
                                <img style="--i:-2" src="./public/img/round_icon-1.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:3">
                                <img style="--i:-3" src="./public/img/round_icon-2.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:4">
                                <img style="--i:-4" src="./public/img/round_icon-3.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:5">
                                <img style="--i:-5" src="./public/img/round_icon-4.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:6">
                                <img style="--i:-6" src="./public/img/round_icon-5.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:7">
                                <img style="--i:-7" src="./public/img/round_icon-6.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:8">
                                <img style="--i:-8" src="./public/img/round_icon-7.svg" alt="">
                            </div>
                            <div class="esg_round_icon_img" style="--i:1">
                                <img style="--i:-1" src="./public/img/round_icon-8.svg" alt="">
                            </div>
                            
                        </div>
                        <div class="esg_round_text d-lg-block d-none">
                            <div class="esg_round_text_item esg_round_text_envi">
                                <img class="esg_round_text_line" src="./public/img/esg-line-environment.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-environment"><span class="highlight">環境</span>保護</h5>
                                    <ul>
                                        <li>
                                            <h6>●綠能企業</h6>
                                            <p>
                                                持續淨零減碳,落實綠電環保<br>
                                                執行技術轉型,推動綠能製造
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●循環經濟</h6>
                                            <p>
                                                提升資源使用率,增進循環經濟
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="esg_round_text_item esg_round_text_soci">
                                <img class="esg_round_text_line" src="./public/img/esg-line-social.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-social"><span class="highlight">社會</span>責任</h5>
                                    <ul>
                                        <li>
                                            <h6>●和大永續</h6>
                                            <p>
                                                優化供應體系,夥伴永續共好<br>
                                                創造股東獲利,保障企業營運
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●和大治理</h6>
                                            <p>
                                                參與工商團體,促進產業升級<br>
                                                結合客戶需求,強化競爭優勢
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="esg_round_text_item esg_round_text_comp">
                                <img class="esg_round_text_line" src="./public/img/esg-line-company.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-company"><span class="highlight">公司</span>治理</h5>
                                    <ul>
                                        <li>
                                            <h6>●良善環境</h6>
                                            <p>
                                                照顧同仁福祉,營造友善職場<br>
                                                強化工安環保,消除職災事故
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●共好共榮</h6>
                                            <p>
                                                致力社會和諧,推廣公益事務<br>
                                                慈善公益實踐,履行社會責任
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="esg_round_text d-lg-none row">
                            <div class="col-sm-4 esg_round_text_item esg_round_text_envi">
                                <img class="esg_round_text_line" src="./public/img/esg-line-environment.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-environment"><span class="highlight">環境</span>保護</h5>
                                    <ul>
                                        <li>
                                            <h6>●綠能企業</h6>
                                            <p>
                                                持續淨零減碳,落實綠電環保<br>
                                                執行技術轉型,推動綠能製造
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●循環經濟</h6>
                                            <p>
                                                提升資源使用率,增進循環經濟
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 esg_round_text_item esg_round_text_soci">
                                <img class="esg_round_text_line" src="./public/img/esg-line-social.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-social"><span class="highlight">社會</span>責任</h5>
                                    <ul>
                                        <li>
                                            <h6>●和大永續</h6>
                                            <p>
                                                優化供應體系,夥伴永續共好<br>
                                                創造股東獲利,保障企業營運
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●和大治理</h6>
                                            <p>
                                                參與工商團體,促進產業升級<br>
                                                結合客戶需求,強化競爭優勢
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 esg_round_text_item esg_round_text_comp">
                                <img class="esg_round_text_line" src="./public/img/esg-line-company.svg" alt="">
                                <div class="esg_round_text_inner">
                                    <h5 class="esg_round_text_title" data-round="#round-company"><span class="highlight">公司</span>治理</h5>
                                    <ul>
                                        <li>
                                            <h6>●良善環境</h6>
                                            <p>
                                                照顧同仁福祉,營造友善職場<br>
                                                強化工安環保,消除職災事故
                                            </p>
                                        </li>
                                        <li>
                                            <h6>●共好共榮</h6>
                                            <p>
                                                致力社會和諧,推廣公益事務<br>
                                                慈善公益實踐,履行社會責任
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <div class="esg_content esg_target">
            <div class="container">
                <h2 class="title-page">永續長程目標</h2>
                <div class="position-relative">
                    <div class="swiper-container esg_target_slider">   
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">

                            <!-- <div class="swiper-slide">
                                <div class="d-flex flex-wrap esg_target_bg mena">
                                    <div class="esg_target_left">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="esg_target_right d-flex flex-wrap">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>0件</h4>
                                                <p>
                                                    重大違法事項
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>1:1</h4>
                                                <p>
                                                    相同職位男女同仁基本薪酬比
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4><span id="menaNum-1">100</span>%</h4>
                                                <p>
                                                    供應鏈道德規範暨法遵教育<br>
                                                    （含營業秘密保護）<br>
                                                    宣導達成率
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>≥<span id="menaNum-2">100</span>億</h4>
                                                <p>
                                                    2026年合併營收<br>
                                                    2021年較2020年成長22.06%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="swiper-slide">
                                <div class="d-flex flex-wrap esg_target_bg envi">
                                    <div class="esg_target_left">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>▲ <span id="enviNum-1">30</span>％</h4>
                                                <p>
                                                水資源使用率<span class="highlight">提升30%</span><br>
                                                降低耗用自來水量<br>
                                                規劃水資源回用
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="esg_target_right d-flex flex-wrap">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>≥ <span id="enviNum-2">60</span>％</h4>
                                                <p>
                                                廢棄物資源回用比例
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>0件</h4>
                                                <p>
                                                重大環境污染事故
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4><span id="enviNum-3">30</span>噸</h4>
                                                <p>
                                                資源循環量
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>> 1.1％</h4>
                                                <p>累計平均年節電率</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-wrap esg_target_bg soci">
                                    <div class="esg_target_left">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>≤ 2.5次/百萬工時</h4>
                                                <p>
                                                    設定員工失能傷害頻率目標
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="esg_target_right d-flex flex-wrap">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>OHSAS 18001<br>&TOSHMS</h4>
                                                <p>
                                                    持續改進職業安全<br>衛生管理取得驗證
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4><span id="sociNum-1">8</span>場/年</h4>
                                                <p>
                                                    辦理員工諮詢或<br>紓壓健康促進活動
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4><span id="sociNum-2">20</span>人/年</h4>
                                                <p>
                                                    媒合產學合作人才數
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>公益捐贈<span id="sociNum-3">858</span>仟元</h4>
                                                <p>2021年社會支出含公益捐贈</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex flex-wrap esg_target_bg mena">
                                    <div class="esg_target_left">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="esg_target_right d-flex flex-wrap">
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>0件</h4>
                                                <p>
                                                    重大違法事項
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>1:1</h4>
                                                <p>
                                                    相同職位男女同仁基本薪酬比
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4><span id="menaNum-1">100</span>%</h4>
                                                <p>
                                                    供應鏈道德規範暨法遵教育<br>
                                                    （含營業秘密保護）<br>
                                                    宣導達成率
                                                </p>
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="esg_target_text">
                                                <h4>≥<span id="menaNum-2">100</span>億</h4>
                                                <p>
                                                    2026年合併營收<br>
                                                    2021年較2020年成長22.06%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="esg_target_prev esg_arrow">
                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.29 65.01"><defs><style>.cls-1{fill:none;stroke:#007934;stroke-linecap:round;stroke-miterlimit:10;stroke-width:4px;}</style></defs><g id="_說明"><polyline class="cls-1" points="32.37 2 2.83 31.55 34.29 63.01"/></g></svg>
                    </div>
                    <div class="esg_target_next esg_arrow">
                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.29 65.01"><defs><style>.cls-1{fill:none;stroke:#007934;stroke-linecap:round;stroke-miterlimit:10;stroke-width:4px;}</style></defs><g id="_說明"><polyline class="cls-1" points="3.92 63.01 33.46 33.46 2 2"/></g></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="esg_content esg_prize">
            <div class="container">
                <h2 class="title-page">榮耀與肯定</h2>
                <div class="position-relative esg_prize_content">
                    <div class="swiper-container esg_prize_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>出進口<br>績優廠商</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        連續四年度出進口<br>
                                        績優廠商前500名<br>
                                        (2017-2020)
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>CRIF TOP<br>5000</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        中華徵信所TOP5000
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI品質<br>管理系統驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        ISO/IATF 16949：2016品質管理系統驗證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI醫材<br>品質管理驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        ISO 13485：2016醫材品質管理驗證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BorgWarner<br>最佳供應商</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2018 BorgWarner最佳供應商
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>中科大型<br>企業前十名</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2021中部科學園區大型企業第四名
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI永續<br>實踐獎</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2018英國標準協會永續實踐獎
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>哈佛<br>商業評論</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2018台灣執行長50強
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>經濟部國家<br>產業創新獎</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        第六屆經濟部國家產業創新獎(績優創新企業-一般企業組)
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>哈佛<br>商業評論</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2020 HBR台灣CEO 100強
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI永續<br>韌性領航獎</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2021英國標準協會永續韌性領航獎
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>經濟部卓越<br>中堅企業獎</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        第六屆卓越中堅企業獎
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI職業安全<br>衛生管理驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        OHSAS 18001&TOSHMS：2018
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI職業安全<br>衛生管理驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        ISO 45001：2018
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>臺中市政府<br>社會局評鑑</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2018財團法人社福慈善事業基金會評鑑優等
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>教育部<br>愛心楷模</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2020教育部愛心楷模廠商
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>衛生署健康<br>職場認證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2020健康啟動標章、健康促進標章認證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>中科捐助</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2021中科管理局快篩站建置捐助
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>衛生部<br>捐助</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        2021臺鐵太魯閣號事故捐助
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI環境管理<br>系統認證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        ISO 14001：2015環境管理系統認證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI溫室<br>氣體查證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        ISO 14064-1：2006溫室氣體查證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI碳足<br>跡驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        「電動車齒輪箱之最終齒輪」產品通過ISO/TS14067：2013碳足跡驗證
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="esg_prize_item">
                                    <div class="esg_prize_pic">
                                        <div class="esg_prize_pic_inner">
                                            <img src="./public/img/star.svg" alt="">
                                            <div class="line"></div>
                                            <p>BSI能源管理<br>系統驗證</p>
                                        </div>
                                    </div>
                                    <div class="esg_prize_text">
                                        連續二年ISO 50001：2018能源管理系統驗證(2020-2021)<br>
                                        經濟類、永續治理類、社會類、環境類
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="esg_prize_prev esg_arrow">
                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.29 65.01"><defs><style>.cls-1{fill:none;stroke:#007934;stroke-linecap:round;stroke-miterlimit:10;stroke-width:4px;}</style></defs><g id="_說明"><polyline class="cls-1" points="32.37 2 2.83 31.55 34.29 63.01"/></g></svg>
                    </div>
                    <div class="esg_prize_next esg_arrow">
                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.29 65.01"><defs><style>.cls-1{fill:none;stroke:#007934;stroke-linecap:round;stroke-miterlimit:10;stroke-width:4px;}</style></defs><g id="_說明"><polyline class="cls-1" points="3.92 63.01 33.46 33.46 2 2"/></g></svg>
                    </div>
                </div>
            </div>
        </div>





        <?php include("./include/contact.php") ?>
    </main>
    <?php include("./include/footer.php") ?>
    <?php include("./include/script.php") ?>

    <script>
        $(".esg_round_text_title").click(function(){
            let round = $(this).data("round");
            // $(this).parents(".esg_round_text_inner").find("ul").slideDown(300);
            $(this).parents(".esg_round_text_item").addClass("active");
            $(this).parents(".esg_round_text_item").siblings(".esg_round_text_item").removeClass("active");
            // $(this).parents(".esg_round_text_item").siblings(".esg_round_text_item").find("ul").slideUp(300);
            $(round).addClass("active");
            $(round).siblings(".esg_round_item").removeClass("active");
        })
        $(document).click(function (event) {
            var roundTitle = $(".esg_round_inner");
            if (!roundTitle.is(event.target) && roundTitle.has(event.target).length === 0) {
                $(".esg_round_text_inner").each(function(){
                    // $(this).find("ul").slideUp(300);
                    $(".esg_round_text_item").removeClass("active");
                    $(".esg_round_item").removeClass("active");
                })
            }
        });
        var envi_1={
            smartEasingAmount:20,
        }
        var envi_2={
            smartEasingAmount:50,
        }
        var envi_3={
            smartEasingAmount:20,
        }
        var soci_1={
            smartEasingAmount:4,
        }
        var soci_2={
            smartEasingAmount:10,
        }
        var m_1={
            startVal: 90,
            smartEasingAmount:10,
        }
        var m_2={
            startVal: 90,
            smartEasingAmount:10,
        }
        var soci_3={
            startVal: 800,
            smartEasingAmount:860,
        }
        new Waypoint({
            element: document.querySelector(".esg_target_slider"),
            handler: function () {
                var numAnimM1 = new countUp.CountUp('menaNum-1', 100,m_1);
                numAnimM1.start();
                var numAnimM2 = new countUp.CountUp('menaNum-2', 100,m_2);
                numAnimM2.start();
                var numAnimEnvi1 = new countUp.CountUp('enviNum-1', 30,envi_1);
                numAnimEnvi1.start();
                var numAnimEnvi2 = new countUp.CountUp('enviNum-2', 60,envi_2);
                numAnimEnvi2.start();
                var numAnimEnvi3 = new countUp.CountUp('enviNum-3', 30,envi_3);
                numAnimEnvi3.start();
                var numAnimSoci1 = new countUp.CountUp('sociNum-1', 8,soci_1);
                numAnimSoci1.start();
                var numAnimSoci2 = new countUp.CountUp('sociNum-2', 20,soci_2);
                numAnimSoci2.start();
                var numAnimSoci3 = new countUp.CountUp('sociNum-3', 858,soci_3);
                numAnimSoci3.start();
            },
            offset: '40%',
        });
        var swiper = new Swiper(".esg_target_slider", {
            slidesPerView: 1,
            navigation: {
                nextEl: ".esg_target_next",
                prevEl: ".esg_target_prev",
            },
            observeParents:true,
            observer:true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    let title;
                    if(index == 0) {
                        title = "環境";
                    }else if (index == 1) {
                        title = "社會";
                    }else if (index == 2) {
                        title = "公司治理";
                    }
                    return '<div class="' + className + '"><span>' + title + "</span></div>";
                },
            },
            loop: true,
            speed: 800,
        });
        var swiper = new Swiper(".esg_prize_slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            slidesPerGroup: 1,
            navigation: {
                nextEl: ".esg_prize_next",
                prevEl: ".esg_prize_prev",
            },
            loop: true,
            speed: 800,
            breakpoints: {
                576: {
                    spaceBetween: 10,
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                },
                768: {
                    spaceBetween: 50,
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                },
                1200: {
                    spaceBetween: 50,
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                },
                1400: {
                    spaceBetween: 100,
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                },
            },
        })

    </script>


</body>
</html>