<?php include("includes/header.php"); ?>
<style>
    .pb-120 {
        padding-bottom: 60px !important;
    }
    .pt-120 {
        padding-top: 60px !important;
    }
    .table thead th,
    .table td,
    .table th {
        border: none;
        padding: 18px;
    }
    .icon-table {
        height: 35px;
    }
    .button-deposit {
        background-color: #F5C06D;
        height: 30px;
        width: 165px;
        border-radius: 7px;
    }
    .button-deposit>a {
        color: black;
        font-size: 15px;
        font-weight: 600;
    }
    .button-deposit-get {
        background-color: #F5C06D;
        height: 30px;
        width: 175px;
        border-radius: 7px;
    }
    .button-deposit-get>a {
        color: black;
        font-size: 15px;
        font-weight: 600;
    }
    th {
        display: table-cell;
        justify-content: center;
        align-items: center;
    }
    tr {
        text-align: center;
    }
</style>
<section class="banner-section pt-2 pb-1">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h1 class="mb-4">Withdrawal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Withdrawal</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="company-story position-relative z-0  pt-120 pb-120 ">
    <div class="animation position-absolute w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute top-0 end-0 pt-10 pe-20 me-20 d-none d-xxl-flex previewSkew" class="lazyload" >
    </div>
    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="container my-5 table-div">
                <table id="Record" class="table table-striped table-dark my-3">
                    <thead>
                        <tr>
                            <th scope="col" style="    background-color: #9ad953;
                                color: black;
                                text-align: center;
                                font-size: 16px;padding:20px;display: table-cell;">PAYMENT METHOD</th>
                                                        <th scope="col" style="    background-color: #9ad953;
                                color: black;
                                text-align: center;
                                font-size: 16px;padding:20px;display: table-cell;">MINIMUM AMOUNT</th>
                                                        <th scope="col" style="    background-color: #9ad953;
                                color: black;
                                text-align: center;
                                font-size: 16px;padding:20px;display: table-cell;">COMMISSION</th>
                                                        <th scope="col" style="    background-color: #9ad953;
                                color: black;
                                text-align: center;
                                font-size: 16px;padding:20px;display: table-cell;">EXECUTION TIME</th>
                                                        <th scope="col" style="    background-color: #9ad953;
                                color: black;
                                text-align: center;
                                font-size: 16px;padding:20px;display: table-cell;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo neteller.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>5.00 USD</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 5 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo skrill.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>5.00 USD</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 5 minutes to transfer the funds.</td>
                            <td><button class="button-deposit" class="lazyload"
                            ><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo India Cash.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>350.00 INR</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 1 hour to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo liotecoin.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>0.11000000 LTC </td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                                    
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Dogecoin.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>75.00000000 DOGE</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Tether ERC-20.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>10.00000000 USDTE</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Tether ERC-20.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>10.00000000 USDTT</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Ethereum 2.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>0.00500000 ETH</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo bitcoin.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>0.00009000 BTC</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit-get"><a href="https://trading.tradersera.com/login">
                                        WITHDRAW </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo India Cash.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>2000000.00 INR</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 1 hour to transfer the funds.</td>
                            <td><button class="button-deposit-get"><a href="https://trading.tradersera.com/login">
                                        WITHDRAW </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Tether ERC-20.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>10.00000000 USDTE</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="assets/images/icon-dw/a  logo Tether ERC-20.png" alt="mastercard"
                                    class="icon-table" class="lazyload"
                                    ></th>
                            <td>50.00000000 USDTT</td>
                            <td>Free</td>
                            <td>1-3 hours to approve the withdrawal and up to 30 minutes to transfer the funds.</td>
                            <td><button class="button-deposit"><a href="https://trading.tradersera.com/login"> WITHDRAW
                                    </a></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>