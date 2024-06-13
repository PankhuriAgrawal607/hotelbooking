<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel-ROOMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
                            <form method="POST" action="rooms.php">
                                <div class="border bg-light p-3 rounded mn-3">
                                    <h5 class="mb-3">CHECK AVAILABILITY</h5>
                                    <label class="form-label">Check-in</label>
                                    <input type="date" class="form-control shadow-none mb-3" name="checkin" required>
                                    <label class="form-label">Check-out</label>
                                    <input type="date" class="form-control shadow-none" name="checkout" required>
                                </div>
                                <div class="border bg-light p-3 rounded mn-3">
                                    <h5 class="mb-3">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3" name="facilities[]" value="Spa">
                                        <label class="form-check-label" for="f1">Spa</label><br>
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3" name="facilities[]" value="Swimming pool">
                                        <label class="form-check-label" for="f2">Swimming pool</label><br>
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3" name="facilities[]" value="AC">
                                        <label class="form-check-label" for="f3">AC</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3">GUESTS</h5>
                                    <div class="d-flex">
                                        <div>
                                            <label class="form-label">Adults</label>
                                            <input type="number" class="form-control shadow-none" name="adults" required>
                                        </div>
                                        <div>
                                            <label class="form-label">Children</label>
                                            <input type="number" class="form-control shadow-none" name="children" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $checkin = $_POST['checkin'];
                    $checkout = $_POST['checkout'];
                    $facilities = isset($_POST['facilities']) ? $_POST['facilities'] : [];
                    $adults = $_POST['adults'];
                    $children = $_POST['children'];

                    // Placeholder for rooms data (This should be fetched from your database)
                    $rooms = [
                        [
                            'title' => 'Simple room',
                            'price' => 2000,
                            'image' => 'images/room1.jpg',
                            'rooms' => 2,
                            'bathrooms' => 1,
                            'balcony' => 1,
                            'sofa' => 3,
                            'facilities' => ['Wifi', 'Television', 'AC', 'Room heater'],
                        ],
                        [
                            'title' => 'Semi Deluxe room',
                            'price' => 4000,
                            'image' => 'images/room2.jpg',
                            'rooms' => 3,
                            'bathrooms' => 2,
                            'balcony' => 1,
                            'sofa' => 3,
                            'facilities' => ['Wifi', 'Television', 'AC', 'Room heater'],
                        ],
                        [
                            'title' => 'Deluxe room',
                            'price' => 6000,
                            'image' => 'images/room3.jpg',
                            'rooms' => 4,
                            'bathrooms' => 2,
                            'balcony' => 1,
                            'sofa' => 3,
                            'facilities' => ['Wifi', 'Television', 'AC', 'Room heater'],
                        ],
                    ];

                    // Filter logic based on user input
                    $filtered_rooms = array_filter($rooms, function($room) use ($facilities) {
                        foreach ($facilities as $facility) {
                            if (!in_array($facility, $room['facilities'])) {
                                return false;
                            }
                        }
                        return true;
                    });

                    if (!empty($filtered_rooms)) {
                        foreach ($filtered_rooms as $room) {
                            echo "
                            <div class='card mb-4 border-0 shadow'>
                                <div class='row g-0 p-3 align-items-center'>
                                    <div class='col-md-5'>
                                        <img src='{$room['image']}' class='img-fluid rounded'>
                                    </div>
                                    <div class='col-md-5 px-lg-5'>
                                        <h5 class='mb-3'>{$room['title']}</h5>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap'>{$room['rooms']} Rooms</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap'>{$room['bathrooms']} Bathroom</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap'>{$room['balcony']} Balcony</span>
                                        <span class='badge rounded-pill bg-light text-dark text-wrap'>{$room['sofa']} Sofa</span>
                                        <div class='facilities mb-3'>
                                            <h6 class='mb-2'>Facilities</h6>";
                                            foreach ($room['facilities'] as $facility) {
                                                echo "<span class='badge rounded-pill bg-light text-dark text-wrap'>{$facility}</span> ";
                                            }
                                            echo "
                                        </div>
                                    </div>
                                    <div class='col-md-2 text-center'>
                                        <h6 class='mb-4'>₹{$room['price']} per night</h6>
                                        <a href='#' class='btn btn-primary mb-2'>Book Now</a>
                                        <a href='#' class='btn btn-primary'>More Details</a>
                                    </div>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "<p>No rooms available with the selected filters.</p>";
                    }
                } else {
                    // Display all rooms if no filters are applied
                    echo "<p>Please apply filters to see available rooms.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>
</html>
