<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Taj - Home</title>

    <?php require('inc/links.php') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .availiblity-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availiblity-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">


    <?php require('inc/header.php') ?>



    <!-- Carousel Part Start -->
    <div class="container-fluid mt-4 px-lg-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/carousel/1.png" class="w-100 d-block" alt="Image 1" /></div>
                <div class="swiper-slide"><img src="images/carousel/2.png" class="w-100 d-block" alt="Image 2" /></div>
                <div class="swiper-slide"><img src="images/carousel/3.png" class="w-100 d-block" alt="Image 3" /></div>
                <div class="swiper-slide"><img src="images/carousel/4.png" class="w-100 d-block" alt="Image 4" /></div>
                <div class="swiper-slide"><img src="images/carousel/5.png" class="w-100 d-block" alt="Image 4" /></div>
                <div class="swiper-slide"><img src="images/carousel/6.png" class="w-100 d-block" alt="Image 4" /></div>
            </div>
        </div>
    </div>
    <!-- Carousel Part End -->

    <!-- Check Availiblity Part Start -->
    <div class="container availiblity-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availiblity</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Check Availiblity Part Ends Here -->

    <!-- Our Rooms Part Start -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms>></h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-2">Facilities</h6>
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
                                Room Heater
                            </span>
                        </div>


                        <div class="guests mb-2">
                            <h6 class="mb-2">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adult
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>





                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
            <!--Card 2 ends-->
            <!--Card 2-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-2">Facilities</h6>
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
                                Room Heater
                            </span>
                        </div>

                        <div class="guests mb-2">
                            <h6 class="mb-2">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adult
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>


                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
            <!--Card 2 ends-->
            <!--Card 3-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 Per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-2">Facilities</h6>
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
                                Room Heater
                            </span>
                        </div>


                        <div class="guests mb-2">
                            <h6 class="mb-2">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adult
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>


                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
            <!--Card 3 ends-->

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
            </div>
        </div>
    </div>
    <!--Our Rooms ends here-->

    <!--Our FACILITIES STARTS here-->


    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/Wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/Heater.svg" width="80px">
                <h5 class="mt-3">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/IMG_27079.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/AC.svg" width="80px">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/TV.svg" width="80px">
                <h5 class="mt-3">TV</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!--Our FACILITIES ends here-->

    <!--Our TESTIMONIALS STARTS here-->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/IMG_27079.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Autem pariatur aperiam sed voluptates! Repellendus aperiam
                        doloribus deleniti alias recusandae porro?
                    </p>
                    <div class="raing">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/IMG_27079.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Autem pariatur aperiam sed voluptates! Repellendus aperiam
                        doloribus deleniti alias recusandae porro?
                    </p>
                    <div class="raing">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">

                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/IMG_27079.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Autem pariatur aperiam sed voluptates! Repellendus aperiam
                        doloribus deleniti alias recusandae porro?
                    </p>
                    <div class="raing">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More>></a>
        </div>
    </div>

    <!--Our TESTIMONIALS ENDS here-->


    <!--Our Reach US STARTS here-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100948.20287500341!2d86.03672007417525!3d23.667603146219683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4230341010871%3A0xf89f21d9001d5036!2sBokaro%20Steel%20City%2C%20Jharkhand!5e1!3m2!1sen!2sin!4v1730183079641!5m2!1sen!2sin"
                    loading="lazy"></iframe>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call US</h5>
                    <a href="tell: +91880427666" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91880427666
                    </a>
                    <br>
                    <a href="tell: +91880427666" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +91880427666
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow US</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Our Reach US ENDS here-->

    <!--Our Footer STARTS here-->



    <?php require('inc/footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            }
        });


        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

</body>

</html>