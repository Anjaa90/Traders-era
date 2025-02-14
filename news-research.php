<?php include("includes/header.php"); ?>
<section class="banner-section  pt-2 pb-1">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h1 class="mb-4">News & Research</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>News & Research</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<style>
    .pb-120 {
        padding-bottom: 60px !important;
    }
    .pt-120 {
        padding-top: 60px !important;
    }
    .tradingview-widget-container {
        margin-top: 50px;
    }
</style>
<section class="pt-60 pb-60">
    <div class="container">
        <section class="provide-world   position-relative z-0">
            <div class="container">
                <div class="row gy-6 gy-xxl-0  pt-120">
                    <h2 class=" mb-lg-5 d-flex justify-content-center">Forex Market Updates</h2>
                    <center>
                        <h3 class="mb-7"> Stay Ahead of Market Trends and Opportunities with Regular, Timely Updates on
                            Forex Developments.</h3>
                    </center>
                </div>
            </div>
        </section>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
                async>
                    {
                        "feedMode": "all_symbols",
                            "isTransparent": false,
                                "displayMode": "regular",
                                    "width": "100%",
                                        "height": "1000",
                                            "colorTheme": "dark",
                                                "locale": "en"
                    }
                </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</section>
<section class="pt-120 pb-60">
    <div class="container">
        <section class="provide-world pt-120  position-relative z-0" style="padding-bottom: 25px;">
            <div class="container">
                <div class="row gy-6 gy-xxl-0">
                    <h2 class=" mb-lg-5 d-flex justify-content-center">Forex Heat Map </h2>
                    <center>
                        <h3 class="mb-7"> Experience Real-time Currency Strength Visualization for Immediate Market
                            Analysis and Informed Trading Decisions.</h3>
                    </center>
                </div>
            </div>
        </section>
        <!-- TradingView Widget BEGIN -->
        <!-- TradingView Widget BEGIN -->
        <div class="pb-120">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
                src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                    {
                        "width": "100%",
                            "height": 1000,
                                "currencies": [
                                    "EUR",
                                    "USD",
                                    "JPY",
                                    "GBP",
                                    "CHF",
                                    "AUD",
                                    "CAD",
                                    "NZD",
                                    "CNY"
                                ],
                                    "isTransparent": false,
                                        "colorTheme": "dark",
                                            "locale": "en",
                                                "backgroundColor": "#1D222D"
                    }
                </script>
        </div>
        <!-- TradingView Widget END -->
</section>
<?php include("includes/footer.php"); ?>