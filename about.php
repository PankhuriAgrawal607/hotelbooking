<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>TJ Hotel-ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
    <style>
        .info-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            height: 240px; /* Set a fixed height */
        }
        .info-card img {
            width: 150px; /* Set a specific width for the images */
            height: 150px; /* Set a specific height for the images */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 50%; /* Make the images circular */
        }
        .info-card h4 {
            margin-top: 10px;
            font-size: 18px;
        }
        .content-section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
        <div class="content-section">
            <h2 class="fw-bold h-font text-center">About us</h2>
            <hr>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-5 mb-4">
                        <p>This distinguished hotel was meticulously crafted by renowned architects, embodying timeless elegance since its founding in 1980 by Mr Solomon Kerzner. Experience a legacy of luxury and hospitality that continues to redefine standards in accommodation.</p>
                    </div>
                    <div class="col-lg-5 col-md-5 mb-4">
                        <img src="images/owner.jpg" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center info-card">
                        <img src="images/room2.jpg">
                        <h4 class="mt-3">100+ Rooms</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center info-card">
                        <img src="images/customer.jpg">
                        <h4 class="mt-3">200+ Customers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center info-card">
                        <img src="images/rating.jpg">
                        <h4 class="mt-3">150+ Ratings</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center info-card">
                        <img src="images/staff.jpg">
                        <h4 class="mt-3">100+ Staff</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="content-section">
            <?php require('inc/footer.php'); ?>
        </div>
    </div>
</body>
</html>