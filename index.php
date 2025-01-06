<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking BY Kshitij</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        
            @media screen and (max-width: 575px){
                .availability-form{
                margin-top: 25px;
                padding: 0 35px;

            }
        }

    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <div class="d-flex">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
        </div>
    </div>
    </nav>
 
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>            
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title"><i class="bi bi-person-circle fs-3 me-2"></i> User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none"">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none"">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>            
                    <div class="modal-header">
                        <h5 class="modal-title  d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note:Your details must match with you ID (Aadhar Card, Passport,driving license, etc.)
                        that will be required during  check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0" mb-3>
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>  
                        </div>
                    </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block" />
      </div>
    </div>
    
    </div>
    </div>

    <!-- Check availability form -->
     <div class="container availability-form">
        <div class="row">
            <div class="col-lg 12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500; ">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500; ">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500; ">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500; ">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mt-2 mb-lg-3">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>


    <!-- Our Rooms -->

     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

     <div class="container">
        <div class="row">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5>Simple Room Name</h5>
                          <h6 class="mb-4 ">₹200 per night</h6>
                          <div class="features mb-4">
                            <h6 class="mb-1 ">Features</h6>
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
                            <h6 class="mb-1 ">Facilites</h6>
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
                          <div class="ratings mb-4">
                            <h6 class="mb-1 ">Ratings</h6>
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
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5>Simple Room Name</h5>
                          <h6 class="mb-4 ">₹200 per night</h6>
                          <div class="features mb-4">
                            <h6 class="mb-1 ">Features</h6>
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
                            <h6 class="mb-1 ">Facilites</h6>
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
                          <div class="ratings mb-4">
                            <h6 class="mb-1 ">Ratings</h6>
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
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5>Simple Room Name</h5>
                          <h6 class="mb-4 ">₹200 per night</h6>
                          <div class="features mb-4">
                            <h6 class="mb-1 ">Features</h6>
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
                            <h6 class="mb-1 ">Facilites</h6>
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
                          <div class="ratings mb-4">
                            <h6 class="mb-1 ">Ratings</h6>
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

                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>

                </div>
        </div>
     </div>

    <!-- Our Facilities -->


     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

     <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_43553.svg" width="80px">
                <h1 class="mt-3">WIFI</h1>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_49949.svg" width="80px">
                <h1 class="mt-3">AC</h1>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px">
                <h1 class="mt-3">Telivision</h1>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" width="80px">
                <h1 class="mt-3">Massaga</h1>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_96423.svg" width="80px">
                <h1 class="mt-3">Heater</h1>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilites>>></a>
            </div>
        </div>
     </div>

    <!-- Tesimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

              <div class="swiper-slide  bg-white p-4">
                <div class="d-flex p-4">
                    <img src="images/facilities/IMG_96423.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ut quos atque beatae obcaecati similique corporis 
                     magni voluptatum, soluta amet quae.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>

              <div class="swiper-slide  bg-white p-4">
                <div class="d-flex align-items-center p-4">
                    <img src="images/facilities/IMG_27079.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ut quos atque beatae obcaecati similique corporis 
                     magni voluptatum, soluta amet quae.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>

              <div class="swiper-slide  bg-white p-4">
                <div class="d-flex align-items-center p-4">
                    <img src="images/facilities/IMG_27079.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ut quos atque beatae obcaecati similique corporis 
                     magni voluptatum, soluta amet quae.
                </p>
                <div class="rating">
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
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
          </div>
    </div>

         <!-- Reach us -->


     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

     <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <iframe class="w-100 rounded" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61102.86356312166!2d75.67633780185618!3d16.829879351239978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6557d98aa706f%3A0xedd4a1794e8fe8d2!2sVijayapura%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1736074469592!5m2!1sen!2sin"    loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call US</h5>
                        <a href="tel: +919272501980" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919272501980
                        </a>
                        <br>
                        <a href="tel: +919272501980" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+919272501980
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow US</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                            </span>
                        </a>
                        
                    </div>

            </div>
        </div>
     </div>

     <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="h-font fw-bold fs-3 mb-2">TJ Hotel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Id deserunt minus ratione pariatur illum 
                    voluptas aliquam suscipit sapiente, debitis vero, saepe
                     similique vel, 
                    quas impedit numquam excepturi unde fugit modi!
                </p>
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-bolck mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-bolck mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-bolck mb-2 text-dark text-decoration-none">Facilites</a><br>
                <a href="#" class="d-inline-bolck mb-2 text-dark text-decoration-none">Contact US</a><br>
                <a href="#" class="d-inline-bolck mb-2 text-dark text-decoration-none">About</a><br>

            </div>
            <div class="col-lg-4">
                <h5 class="mb-3">Follow US</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-twitter me-1"></i>Twitter
                </a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a><br>
                <a href="#" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a><br>
            </div>
        </div>

     </div>

     <h6 class="text-center bg-dark text-white p-3 m-0">Designed & Developed By Kshitij-rm</h6>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
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
      breakpoints:{
            320:{
                slidesPerView:1,
            },
            640:{
                slidesPerView:2,
            },
            768:{
                slidesPerView:3,
            }
      }
    });
    
</script>
</body>
</html>