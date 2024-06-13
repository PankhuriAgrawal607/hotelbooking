<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>TJ Hotel-HOME</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
       {
         font-family: "Merienda", cursive;
         font-optical-sizing: auto;
         font-weight: <weight>;
         font-style: normal;
       }
       .custom-bg{
        background: color:#279e8c;
       }
       .custom-bg:hover{
        background-color:#279e8c;
       }
    </style>
</head>

<?php require('inc/header.php'); ?>

   <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/image4.jpg " class="w-100 d-block"/></div>
      <div class="swiper-slide"><img src="images/image2.jpg" class="w-100 d-block"/></div>
      <div class="swiper-slide"><img src="images/image5.jpg" class="w-100 d-block"/></div>
      
    </div>
     <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div> 


  
  <!-- check availability form -->
  

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight:500">Check-in</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight:500">Check-out</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight:500">Adult</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight:500">Children</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>



<!-- our room  -->
<style>
    .card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .card-img-top {
      height: 200px; /* Adjust this value as needed */
      object-fit: cover;
    }
    .card-body {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .card-body > div {
      flex-grow: 1;
    }
    .card-body h5,
    .card-body .rating,
    .card-body .d-flex {
      margin-bottom: 1rem;
    }
    .card-body .d-flex {
      margin-top: auto;
    }
  </style>
   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="images/room1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple Room</h5>
          <h5 class="mb-4">₹2000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-primary">Book Now</a>
            <a href="#" class="btn btn-primary">More Details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="images/room2.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Semi Deluxe Room</h5>
          <h5 class="mb-4">₹4000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Bathrooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-primary">Book Now</a>
            <a href="#" class="btn btn-primary">More Details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="images/room4.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Deluxe Room</h5>
          <h5 class="mb-4">₹6000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Bathrooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Room heater
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Swimming Pool
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-primary">Book Now</a>
            <a href="#" class="btn btn-primary">More Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


     <!-- facility -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
      <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/wifi.jpg" width="80px">
            <h5 class="mt-3">Wifi</h5>
           </div>
           <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/pool.jpg" width="80px">
            <h5 class="mt-3">Swimming pool</h5>
            </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/bar.jpg" width="80px">
            <h5 class="mt-3">Bar</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/spa.jpg" width="80px">
            <h5 class="mt-3">Spa</h5>
  </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/tv.jpg" width="80px">
            <h5 class="mt-3">Television</h5>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
  </div>

  <!-- testimonial -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonial</h2>
<div class="container">
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
    
    <h6 >Random user1</h6>
  </div>
  <p>
  From the moment we stepped into the grand lobby, we were swept away by the sheer opulence and sophistication of the surroundings. Every detail, from the plush furnishings to the exquisite décor, exuded luxury. The attentive staff made us feel like royalty, ensuring our stay was nothing short of perfection. Truly, a haven of comfort and elegance
  </p>
  <div class="rating">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
  </div>
  </div>
  <div class="swiper-pagination"></div>
  </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more</a>
  </div>

<!-- reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded"  >
    <iframe class="w-100" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.8692412711!2d81.80158454999999!3d25.402263750000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1717303748137!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-lg-4 col-md-4">
    <div class="bg-white">
      <h5>Call us</h5>
      <a href="tel:+919090678945" class="d-inline-block mb-2 text-decoration-none text-dark">+919090678945</a>
<br>
<a href="tel:+919336787090" class="d-inline-block mb-2 text-decoration-none text-dark">+919336787090</a>
    </div>
    </div>



    

<!-- footer -->/
<?php require('inc/footer.php'); ?>
  





  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay:{
        delay:2500,
        disableOnInteraction:false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // },
    });


  </script>

<script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>



  
  



 


 


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html> 