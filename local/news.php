<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/news.css">
</head>

<body class="lang_tw">
    <?php
    include "quote/template/added.php";
    // include "quote/template/nav.php";
    ?>
    <main>
        <section class="search-section">
            <div class="container">
                <div class="search-box">
                    <select name="" id="category" required>
                        <option value="1">全部</option>
                        <option value="2">日期</option>
                        <option value="3">標題</option>
                        <option value="4">公告單位</option>
                        <option value="5">公告人員</option>
                        <option value="6">地區</option>
                    </select>
                    <form>
                        <input type="text" name="search">
                        <a class="btn" href="search.php"></a>
                    </form>
                </div>
            </div>
        </section>
        <section class="topmenu-section">
            <div class="container">
                <div id="topmenu1" class="top-menu-ul">
                    <div class="item_Menu">
                        <div class="item_menu_Box">
                            <ul class="item_menu_list slides">
                                <li class="active">
                                    <a href="javascript:;">
                                        <div>
                                            全部消息
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div>
                                            一級督(輔)導
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div>
                                            資安月報
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div>
                                            資安通報
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="f20-16">
                                            作業規定
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="f20-16">
                                            作業規定作業規定作業規定作業規定
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-direction-nav">
                        <a href="javascript:;" class="lbtn flex-prev">
                            <div></div>
                        </a>
                        <a href="javascript:;" class="rbtn flex-next">
                            <div></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="lists-section">
            <div class="container">
                <ul class="list-title">
                    <li class="l1">發布日期</li>
                    <li class="l2">類別</li>
                    <li class="l3">標題</li>
                    <li class="l4">公告單位</li>
                    <li class="l5">公告人員</li>
                    <li class="l6">地區</li>
                    <li class="l7"></li>
                </ul>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">一級督(輔)導</div>
                        </li>
                        <li class="l3">Mars Stealer惡意軟體潛藏於Google上之OpenOffice廣告</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
                <a class="list-wrap" href="news-detail.php">
                    <ul class="list-content">
                        <li class="l1">2022/05/10</li>
                        <li class="l2">
                            <div class="tag">資安新聞</div>
                        </li>
                        <li class="l3">0509每日資安新聞</li>
                        <li class="l4">資通安全處</li>
                        <li class="l5">陳玉佩士官長</li>
                        <li class="l6">高雄市</li>
                        <li class="l7"></li>
                        <li class="l8">
                            <p>
                                Morphisec研究人員發現Mars Stealer利用Google Ads，於加拿大之搜尋結果放置假冒OpenOffice網頁之惡意網址，因其位於Google搜尋結果之第一位，將誘導使用者點選並下載惡意軟體。該惡意軟體實際上為Mars Stealer之執行檔加上Babadeda加密程式或Autoit載入程式，使用...將不自覺被感染，且個人資料遭竊取，包括瀏覽器自動填入資料、瀏覽器擴充資料、信用卡資料、IP位置、國家代碼及時區等資料。此外，Morphisec表示被盜最多之瀏覽器擴充程式為MetaMask，其次為Coinbase Wallet、Binance Wallet及Math錢包，都是用於管理加密貨幣之錢包。
                            </p>
                        </li>
                    </ul>
                </a>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <dl class="page">
                    <!-- 若沒有上一則或下一則請使用 nopage -->
                    <dt class="ltbn nopage">
                        <a href="javascript:;">
                            <span></span>
                        </a>
                    </dt>
                    <dd class="active"><a href="#">1</a></dd>
                    <dd><a href="#">2</a></dd>
                    <dd><a href="#">3</a></dd>
                    <dd><a href="#">4</a></dd>
                    <dd><a href="#">5</a></dd>
                    <dt class="rtbn"><a href="javascript:;">
                            <span></span>
                        </a></dt>
                </dl>
            </div>
        </section>
    </main>
    <?php
    // include "quote/template/footer.php";
    // include "quote/template/top_btn.php";
    ?>
    <script src="dist/js/main.js"></script>
    <script src="dist/js/news.js"></script>
</body>

</html>