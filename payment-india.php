<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment - TradersEra</title>
    <meta name="description" content="<?php echo $description ?> " />
    <meta name="keywords" content="<?php echo $keywords ?> " />
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/tradersera faveicon black.png" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="assets/cdn.jsdelivr.net/npm/%40tabler/icons-webfont%402.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
</head>
<style>
    .payment-section {
        background-color: ;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }
    .payment-section h1 {
        font-size: 2em;
        margin-bottom: 10px;
    }
    .payment-section p {
        font-size: 1.2em;
        margin-bottom: 20px;
    }
    .payment-section button {
        padding: 10px 20px;
        font-size: 1.2em;
        background-color: #007bff;
        
    .payment-section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            /* Center horizontally */
    }
        .payment-section h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .payment-section p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .payment-section button {
            padding: 10px 20px;
            font-size: 1.2em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .payment-section button:hover {
            background-color: #0056b3;
        }
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .payment-section button:hover {
        background-color: #0056b3;
    }
    .logo img {
        max-width: 20%;
        height: auto;

    }
</style>
<body>
    <header>
        <div class="logo" style="margin-bottom:200px;">
            <img src="assets/images/logo.png" alt="TradersEra Logo">
        </div>
    </header>
    <main>
        <section class="payment-section" style="margin-bottom:200px;">
            <h1>Online Payment Page</h1>
            <p>Please use Card, Netbanking and UPI Payment via this Link.
                For Current Conversion Rates, please speak to our Support Team</p>
            <p>For any support, please feel free to contact us via email support@tradersera.com</p>
            <button id="payButton" style="color:white;">Pay Now</button>
        </section>
    </main>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("payButton").addEventListener("click", function () {
                makePayment();
            });
        });
        function makePayment() {
            console.log("Loading...");
            fetch('payment.php', {
                method: 'POST'
            })
                .then(response => response.json())
                .then(data => {
                    if (data.url) {
                        console.log("URL:", data.url);
                        window.open(data.url, "_blank");
                    } else if (data.error) {
                        console.error("Error:", data.error);
                    } else {
                        console.error("Unexpected response format");
                    }
                })
                .catch(error => {
                    console.error("Fetch error:", error);
                });
        }
    </script>
</body>
<?php include("includes/footer.php") ?>
</html>