<?php include("includes/header.php"); ?>

<section class="banner-section pt-2 pb-1">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h2 class="mb-4">Web App</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Trading</li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Web App</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">TradersEra Web App</h2>
                </div>
            </div>
        </div>

        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
            <div class="col-sm-6 col-lg-3 col-xxl-3 text-center">
                <div class="company-story__part1 mb-lg-6">
                    <div class="mt-4">
                        <h1 class="mb-3">WEB APP</h1>
                        <br>
                        <h3 class="mb-3">No Download, Trade Anytime, Anywhere</h3>
                        <br>
                    </div>
                </div>

                <div class="button-container">
                    <a href="https://workspace.tradersera.xyz/" target="_blank" class="button-link">
                        <button class="first-btn">
                            <i class="fa-solid fa-desktop"></i> <b>Web App for Desktop</b>
                        </button>
                    </a>
                    <br>
                    <button class="first-btn" id="for-android" onclick="scrollToSection('android')">
                        <i class="fa-brands fa-android"></i> <b>Web App for Android</b>
                    </button>
                    <br>
                    <button class="second-btn" id="for-ios" onclick="scrollToSection('ios')">
                        <i class="fa-brands fa-apple"></i> <b>Web App for iOS</b>
                    </button>
                    <br>

                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xxl-6 text-center">
                <img src="assets/images/download web app  tradersera.png" class="img-fluid medium-image"
                    alt="Middle Image">
            </div>
        </div>
    </div>
</section>

<script>
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
</script>

<style>
    .button-container {
        display: flex;
        flex-direction: column;

    }

    .first-btn {
        background-color: #9ad953;
        color: rgb(0, 0, 0);
        padding: 20px 25px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid #fff;
        box-sizing: border-box;
    }

    .first-btn:hover {
        background-color: #d0a460;
        transform: scale(1.05);
    }

    .second-btn {
        background-color: #9ad953;
        color: rgb(0, 0, 0);
        padding: 20px 25px;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid #fff;
        box-sizing: border-box;
    }

    .second-btn:hover {
        background-color: #d0a460;
        transform: scale(1.05);
    }
</style>



<!-- Android Section -->
<section class="pt-120 pb-120" style="background-color: black;" id="android">
    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
         

    

<!-- Content for tablets and desktops, hidden on mobile -->
<div class="col-sm-6 col-lg-6 col-xxl-6 text-center d-none d-sm-block">
    <div class="image-display mt-4">
        <img id="step-image" src="assets/images/download androids 1.png" alt="Step Image" />
    </div>
</div>

<div class="col-sm-6 col-lg-6 col-xxl-6 text-center d-none d-sm-block">
    <h2 class="mb-3">How to Download the Web App on Android Device?</h2>
    <br>
    <h4 class="mb-3" style="color: #9ad953;">Click on a step to see the preview</h4>
    <br>
    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 1.png', 'android', this)">
        Step 1</h3>
    <span>Please copy and open <a href="https://m-workspace.tradersera.xyz/">https://m-workspace.tradersera.xyz/</a> in Chrome</span>
    <br><br>

    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 2.png', 'android', this)">
        Step 2</h3>
    <span>Tap the button in the top right corner of Chrome</span>
    <br><br>

    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 3.png', 'android', this)">
        Step 3</h3>
    <span>Tap "Add to Home screen" Option</span>
    <br><br>

    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 4.png', 'android', this)">
        Step 4</h3>
    <span>Install TradersEra on your device</span>
    <br><br>

    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 5.png', 'android', this)">
        Step 5</h3>
    <span>Confirm and click install</span>
    <br><br>

    <h3 class="mb-3 step" onclick="changeImage('assets/images/download androids 6.png', 'android', this)">
        Step 6</h3>
    <span>The app is now available on your Home Screen!</span>
</div>




            <!-- Slider for mobile view -->
            <div class="col-sm-6 col-lg-6 col-xxl-6 d-block d-sm-none text-center">
                <h2 class="mb-3">How to Download the Web App on Android Device?</h2>
                <br>
                <h4 class="mb-3" style="color: #9ad953;">Swipe through steps</h4>
                <br>
                <div id="stepCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Step 1 -->
                        <div class="carousel-item active">
                            <h3 class="mb-3">Step 1</h3>
                            <span>Please copy and open <a
                                    href="https://m-workspace.tradersera.xyz/">https://m-workspace.tradersera.xyz/</a>
                                in Chrome</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 1.png" alt="Step 1 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 2</h3>
                            <span>Tap the button in the top right corner of Chrome</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 2.png" alt="Step 2 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 3</h3>
                            <span>Tap "Add to Home screen" Option</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 3.png" alt="Step 3 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 4</h3>
                            <span>Install TradersEra on your device</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 4.png" alt="Step 4 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 5 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 5</h3>
                            <span>Confirm and click install</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 5.png" alt="Step 5 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 6 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 6</h3>
                            <span>The app is now available on your Home Screen!</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download androids 6.png" alt="Step 6 Image"
                                    class="d-block w-100" />
                            </div>
                        </div>

                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#stepCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#stepCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .step {
        cursor: pointer;
        transition: color 0.3s, opacity 0.3s;
    }

    .step.active {
        color: #9ad953;
        /* Highlight color */
        font-weight: bold;
    }

    .step.inactive {
        opacity: 0.5;
        /* Faded color */
    }
</style>


<script>
    function changeImage(imageName, section, clickedStep) {
        const imageElement = document.getElementById(section === 'ios' ? 'step-image-ios' : 'step-image');
        const steps = document.querySelectorAll(`#${section} .step`);

        if (imageElement) {
            imageElement.src = imageName;
            console.log(`Image changed to: ${imageName}`);

            // Remove active class from all steps and add inactive class
            steps.forEach(step => {
                step.classList.remove('active');
                step.classList.add('inactive');
            });

            // Add active class to the clicked step
            clickedStep.classList.add('active');
            clickedStep.classList.remove('inactive');
        } else {
            console.error('Image element not found');
        }
    }

</script>


<!-- iOS Section -->
<section class="pt-120 pb-120" id="ios">
    <div class="container">
        <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
          
            <div class="col-sm-6 col-lg-6 col-xxl-6 text-center d-none d-sm-block">
                <h2 class="mb-3">How to Download the Web App on iOS Device?</h2>
                <br>
                <h4 class="mb-3" style="color: #9ad953;">Click on a step to see the preview</h4>
                <br>
                <h3 class="mb-3 step" onclick="changeImage('assets/images/download ios 1.png', 'ios', this)">Step 1</h3>
                <span>Please copy and open <a
                        href="https://m-workspace.tradersera.xyz/">https://m-workspace.tradersera.xyz/</a> in
                    Safari</span>
                <br><br>
                <h3 class="mb-3 step" onclick="changeImage('assets/images/download ios 2.png', 'ios', this)">Step 2</h3>
                <span>Click on the below button</span>
                <br><br>
                <h3 class="mb-3 step" onclick="changeImage('assets/images/download ios 3.png', 'ios', this)">Step 3</h3>
                <span>Tap "Add to Home screen" Option</span>
                <br><br>
                <h3 class="mb-3 step" onclick="changeImage('assets/images/download ios 4.png', 'ios', this)">Step 4</h3>
                <span>Install TradersEra on your device</span>
            </div>

            <!-- Desktop image section (hidden on mobile) -->
            <div class="col-sm-6 col-lg-6 col-xxl-6 text-center d-none d-sm-block">
                <div class="image-display mt-4">
                    <img id="step-image-ios" src="assets/images/download ios 1.png" alt="Step Image" />
                </div>
            </div>

            <!-- Slider for mobile view -->
            <div class="col-sm-6 col-lg-6 col-xxl-6 d-block d-sm-none text-center">
                <h2 class="mb-3">How to Download the Web App on iOS Device?</h2>
                <br>
                <h4 class="mb-3" style="color: #9ad953;">Swipe through steps</h4>
                <br>
                <div id="stepCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Step 1 -->
                        <div class="carousel-item active">
                            <h3 class="mb-3">Step 1</h3>
                            <span>Please copy and open <a
                                    href="https://m-workspace.tradersera.xyz/">https://m-workspace.tradersera.xyz/</a>
                                in Safari</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download ios 1.png" alt="Step 1 Image" class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 2</h3>
                            <span>Click on the below button</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download ios 2.png" alt="Step 2 Image" class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 3</h3>
                            <span>Tap "Add to Home screen" Option</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download ios 3.png" alt="Step 3 Image" class="d-block w-100" />
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="carousel-item">
                            <h3 class="mb-3">Step 4</h3>
                            <span>Install TradersEra on your device</span>
                            <div class="image-display mt-4">
                                <img src="assets/images/download ios 4.png" alt="Step 4 Image" class="d-block w-100" />
                            </div>
                        </div>
                    </div>

                    <!-- Carousel controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#stepCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#stepCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("includes/footer.php"); ?>