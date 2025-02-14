<?php include("includes/header.php"); ?>
<section class="banner-section  pt-2 pb-1">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h1 class="mb-4">IB Partner</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Partners</li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>IB Partner</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<style>
    .slider {
        margin: 0 auto;
        max-width: auto;
    }

    .slide_viewer {
        height: 760px;
        overflow: hidden;
        position: relative;
        margin-top: -45px;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .slide:first-child {
        display: block;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active,
    .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    }

    .directional_nav {
        height: 0px;
        margin: 0 auto;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 100px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 100px;
        top: 0;
    }

    .previous_btn,
    .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 0.5;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover,
    .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }
    }

    .fs-three,
    h3,
    h3>a {
        font-size: 22px;
    }

    .company-story__part {
        border: solid 1px white;
        padding: 30px;
        border-radius: 19px;
    }

    .p1-xxl-bg2 {
        background-color: #f5c06d;
    }

    /* > Process Styles */
    .process-wrap {
        width: 55%;
        margin: 100px auto;
        margin-left: -50px
    }

    .process-main {
        width: 100%;
        min-width: 320px;
        display: flex;
    }

    .col-3 {
        width: 50%;
        position: relative;
    }

    .col-3:first-child .process-step:before {
        content: '1';
    }

    .col-3:nth-child(2) .process-step:before {
        content: '2';
    }

    .col-3:nth-child(3) .process-step:before {
        content: '3';
    }

    .col-3:last-child .process-step:before {
        content: '4';
    }

    .process-main .col-3:not(:first-child):before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 4px;
        top: 17.5px;
        left: calc(-50% + 17px);
        right: 0;
        background: #ebebeb;
        border: 2px #ebebeb solid;
        -o-transition: .8s;
        -ms-transition: .8s;
        -moz-transition: .8s;
        -webkit-transition: .8s;
        transition: .8s;
    }

    .process-step-cont {
        font-family: sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: space-between;
    }

    .process-step {
        border: 5px #ebebeb solid;
        border-radius: 100%;
        line-height: 0;
        background: #959595;
        text-align: center;
        align-items: center;
        justify-content: center;
        align-self: center;
        display: flex;
        color: #fff;
        width: 35px;
        height: 35px;
        font-weight: 700;
        margin-bottom: 7px;
        z-index: 4;
        cursor: pointer;
    }

    .process-label {
        color: #959595;
        font-weight: 600;
        width: 100%;
        text-align: center;
    }

    .process-dots {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ebebeb;
        cursor: pointer;
    }

    .process-dot-cont {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        width: 60%;
        padding-top: 5px;
    }

    .active-step1 .col-3:first-child .process-step,
    .active-step1 .col-3:first-child .process-dots:first-child,
    .active-step1-mini2 .col-3:first-child .process-step,
    .active-step1-mini2 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini3 .col-3:first-child .process-step,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+3),
    .active-step1-mini4 .col-3:first-child .process-step,
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+4) {
        background-color: #f89828;
    }

    .active-step1-mini2 .col-3:first-child .process-dots:first-child,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+3) {
        background-color: #fbcb93;
    }

    .active-step1 .col-3:first-child .process-label,
    .active-step1-mini3 .col-3:first-child .process-label,
    .active-step1-mini2 .col-3:first-child .process-label,
    .active-step1-mini4 .col-3:first-child .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:first-child,
    .active-step3 .col-3:nth-child(-n+2),
    .active-step4 .col-3:nth-child(-n+3) {
        opacity: 0.5;
        /*pointer-events: none;*/
    }

    .active-step2 .col-3:first-child .process-step:before,
    .active-step3 .col-3:nth-child(-n+2) .process-step:before,
    .active-step4 .col-3:nth-child(-n+3) .process-step:before {
        content: '\2713';
        padding: 7px;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-step,
    .active-step2 .col-3:nth-child(-n+2) .process-dots,
    .active-step3 .col-3:nth-child(-n+3) .process-step,
    .active-step3 .col-3:nth-child(-n+3) .process-dots,
    .active-step4 .col-3:nth-child(-n+4) .process-step,
    .active-step4 .col-3:nth-child(-n+4) .process-dots {
        background-color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-label,
    .active-step3 .col-3:nth-child(-n+3) .process-label,
    .active-step4 .col-3:nth-child(-n+4) .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2):before,
    .active-step3 .col-3:nth-child(-n+3):before,
    .active-step4 .col-3:nth-child(-n+4):before {
        background: #f89828 !important;
    }

    @media screen and (max-width: 640px) {
        .process-main {
            flex-wrap: wrap;
        }

        .col-3 {
            width: 50%;
        }

        .process-main .col-3:nth-of-type(3):not(:first-child):before {
            top: -19.5px;
            left: calc(-50% + 145px);
            transform: rotate(150deg);
        }
    }

    .our-clients .container {
        width: 100%;
        height: 35%;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .our-clients .container ul {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        transition: 0.3s;
    }

    .our-clients .container ul li {
        list-style: none;
        width: 40%;
        height: 100px;
        flex-shrink: 0;
        box-sizing: border-box;
        padding: 0 8px;
        margin-top: 25px;
    }

    .our-clients .container ul li p {
        background: #58585a;
        text-align: center;
        color: #fff;
        line-height: 100px;
        border-radius: 8px;
    }

    .our-clients {
        margin-top: 10px;
    }

    .get-started::after {
        position: relative;
        content: "\2192";
        display: flex;
        float: right;
        bottom: 111px;
        font-size: 70px;
        left: 80px;
        color: #9ad953;
    }

    .nice-select:focus,
    .nice-select:hover {
        background-color: transparent;
        box-shadow: none;
    }

    .nice-select .list {
        background-color: #000;
    }

    .pb-120 {
        padding-bottom: 60px !important;
    }

    .pt-120 {
        padding-top: 60px !important;
    }

    .nice-select {
        background-color: black;
        padding: 6px 10px;
    }

    .nice-select:focus,
    .nice-select:hover {
        background-color: black;
        box-shadow: none;
    }
</style>
<section class="provide-world pt-120 position-relative z-0 mb-10 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xxl-10">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">Become An IB

                    </h2>
                    <!-- <h4 class="mb-5 mb-lg-6">Where to begin
                    </h4> -->
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-1.png" alt="time" class="lazyload">
                    </span>
                    <h3 class="mt-5 mb-5">Register </h3>
                    <p>Enroll in an IB program with a major international multi-asset broker.
                        <br><br>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/two.png" alt="wallet" class="lazyload">
                    </span>
                    <h3 class="mt-5 mb-5">Refer
                    </h3>
                    <p>Bring in more business by bringing new customers to Vantage for trading.
                        <br>
                    </p>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-3.png" alt="customer" class="lazyload">
                    </span>
                    <h3 class="mt-5 mb-5">Acquire
                    </h3>
                    <p>Receive volume-based commissions on each deal that customers you have recommended make.

                    </p>

                </div>
            </div>
        </div>
        <br>
        <br>
</section>
<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8"
            class="lazyload">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets\images\IB-partner.png"
                        alt="TradersEra's Global markets, liquidity, low spreads, swap-free" class="lazyload">
                </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">Introducing Brokers and Linking Traders

                    </h2>
                    <h3 class="mb-4 mb-lg-5">An Introducing Broker
                    </h3>
                    <p>In between individual traders and forex brokers, an introducing broker acts as a mediator. In
                        exchange for compensation, introducing brokers, as the name implies, introduces new customers to
                        a forex brokers. </p>
                    <br>
                    <p>You will get volume-based commissions on each transaction placed by the customers you refer to
                        the broker as an IB partner.</p>
                </div>
                
            </div>
        </div>
</section>

<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0" style="background-color: #000;">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <!-- <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8" class="lazyload"> -->
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">Advantages for introducing brokers
                    </h2>
                </div>
                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Collaborate with a reputable company that
                        you can rely on. We are committed to transparency at the highest level.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Stay updated on your commission payments and
                        your customers' trading activity with our real-time monitoring and reporting feature in your
                        personalized area within our system.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>When you become an Introducing Broker,
                        you'll have a dedicated IB manager who will offer you personalized assistance.
                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Attractive earning potential for IBs – earn
                        up to 5% of the FTD and 20% of RevShare.
                    </li>
                </ul>
            </div>
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/advantages for introducing broker.png"
                        alt="Become an Introducing Broker with TradersEra" class="lazyload">
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<section class=" pt-120 pb-120">
    <div class="container ">
        <div class="row gy-18 justify-content-between">
            <div class="col-12 col-lg-5 col-xl-5">
                <div class="submissions-area d-flex flex-column gap-8 gap-lg-10">
                    <div class="submissions">

                        <img src="assets/images/IB Partner FORM.png" alt="Sign Up to Become an Introducing Broker"
                            class="lazyload">
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7 col-xl-6 nb3-bg">
                <form action="become-an-ib-form.php" method="POST" autocomplete="off"
                    class="contact__form alt_form px-4 px-lg-8">
                    <h3 class="contact__title  mb-lg-7 mt-8">Sign Up Today</h3>
                    <h6 class="mb-lg-7">
                    </h6>
                    <div class="d-flex gap-3 gap-sm-5 gap-lg-8 flex-column">
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-6 ">
                                <div class="single-input">
                                    <label for="fname"><b>First Name</b></label>
                                    <input type="text" class="fs-six-up" name="fname" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <label for="lname"><b>Last Name</b></label>
                                    <input type="text" class="fs-six-up" name="lname" placeholder="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-6 ">
                                <div class="single-input">
                                    <label for="email"><b>Email</b></label>
                                    <input type="email" class="fs-six-up" name="email" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <label for="phone"><b>Phone</b></label>
                                    <input type="tel" class="fs-six-up" name="phone" placeholder="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 gap-sm-0 d-flex">
                            <div class="col-sm-12">
                                <div class="single-input">
                                    <label for="introducing-broker"><b>Are you an Introducing Broker with any other
                                            brokers?</b></label>
                                    <select id="introducing-broker" name="introducing-broker" class="mt-4">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-input">
                                    <br>
                                    <br>
                                    <label for="monthly-traders"><b>Number of monthly new traders:
                                        </b></label>
                                    <select id="monthly-traders" name="monthly-traders" class="mt-4">
                                        <option value="1-5">1-5</option>
                                        <option value="6-20">6-20</option>
                                        <option value="21-50">21-50</option>
                                        <option value="51+">51 and more</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-12 ">
                                <div class="single-input">
                                    <br>
                                    <label for="monthly-traders"><b>Which countries will most of your clients come from?
                                        </b></label>
                                    <select id="monthly-traders" name="countries" class="mt-4">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of
                                            the</option>
                                        <option value="Congo, Republic of the">Congo, Republic of the</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, North">Korea, North</option>
                                        <option value="Korea, South">Korea, South</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North Macedonia">North Macedonia</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-input">
                                    <br>
                                    <br>
                                    <label for="average-deposit-per-client"><b>Average deposit per client</b></label>
                                    <input type="number" class="fs-six-up" name="average-deposit-per-client"
                                        placeholder="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 gap-sm-0 ">
                            <div class="col-sm-12">
                                <div class="single-input">
                                    <label for="client-average-volume"><b>client average volume</b></label>
                                    <input type="number" class="fs-six-up" name="client-average-volume" placeholder=""
                                        required="">
                                </div>
                            </div>

                        </div>
                        <div class="input-single">
                            <label for="message"><b>Message(Freetext)</b></label>
                            <textarea class="fs-six-up" name="message" rows="4" placeholder="" required=""></textarea>
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfpCBMqAAAAANY7agf35xO_uqYdcGWOn9xeDwy3"></div>
                    <span id="msg"></span>
                    <button type="submit" class="cmn-btn py-3 px-5 px-lg-6  d-flex ms-auto" name="submit"
                        id="submit">Become An IB Now<i class="bi bi-arrow-up-right"></i><span></span></button>
                    <br>
                    <br>



                </form>
               
            </div>
        </div>
</section>
<br><br><br>


<!-- schema -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "IB Partner",
  "alternateName": "IB Partner",
  "url": "https://tradersera.com/IB-partner.php",
  "logo": "https://tradersera.com/assets/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1 9142684555",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "AE",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/TradersEra/",
    "https://x.com/TradersEraFX",
    "https://www.instagram.com/tradersera_fxbroker/"
  ]
}
</script>


<?php include("includes/footer.php"); ?>