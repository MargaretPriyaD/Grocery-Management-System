<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARM FRESH</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Lightbox Pupup -->
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 5 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">

    <link rel="php" href="php/index.php">
    <link rel="php" href="php/login_register.php">

</head>

<body>
    <!-- Navbar Section Start -->
    <header id="full_nav">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img decoding="async" src="./images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="product.html">Product</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.html">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_right">
                        <div class='sign-in-up'>
                            <button type='button' onclick="popup('login-popup')">LOGIN</button>
                            <button type='button' onclick="popup('register-popup')">REGISTER</button>
                          </div>
                    </div>
                    <div class="popup-container" id="login-popup">
                        <div class="popup">
                          <form method="POST" action="php/login_register.php">
                            <h2>
                              <span>USER LOGIN</span>
                              <button type="reset" onclick="popup('login-popup')">X</button>
                            </h2>
                            <input type="text" placeholder="E-mail or Username" name="email_username">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="login-btn" name="login">LOGIN</button>
                          </form>
                        </div>
                      </div>
                    
                      <div class="popup-container" id="register-popup">
                        <div class="register popup">
                          <form method="POST" action="php/login_register.php">
                            <h2>
                              <span>USER REGISTER</span>
                              <button type="reset" onclick="popup('register-popup')">X</button>
                            </h2>
                            <input type="text" placeholder="Full Name" name="fullname">
                            <input type="text" placeholder="Username" name="username">
                            <input type="email" placeholder="E-mail" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="register-btn" name="register">REGISTER</button>
                          </form>
                        </div>
                      </div>

                </nav>
            </div>
        </div>
    </header>
    <!-- Navbar Section Exit -->

    <!-- banner Section start -->
    <section class="banner_section">
        <div class="container">
            <div id="banner-carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <div class="banner-content">
                                <h1>100% Organic</h1>
                                <h3>Fresh & Natural Farm Food</h3>
                                <p>Experience the purity of farm-fresh goodness in every bite. We bring the farm to you, ensuring freshness and flavor.</p>
                                <a href="product.html" class="btn main-btn">ALL PRoducts</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <div class="banner-content">
                                <h1>100% Organic</h1>
                                <h3>Fresh & Natural Farm Food</h3>
                                <p>Experience the purity of farm-fresh goodness in every bite. We bring the farm to you, ensuring freshness and flavor.</p>
                                <a href="product.html" class="btn main-btn">ALL PRoducts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section exit -->

    <!-- Features Section start -->
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card features-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img decoding="async" src="./images/feature-icon/ui-chat.svg">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>24/07 Support</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card features-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img decoding="async" src="./images/feature-icon/truck-loaded.svg">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>Free Shipping</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card features-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img decoding="async" src="./images/feature-icon/wheat.svg">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>Fresh & Healthy</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card features-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img decoding="async" src="./images/feature-icon/lemon.svg">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>From our farm</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section Exit -->

    <!--About Section start -->
    <section class="landing_about_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-sm-8">
                    <div class="about-content">
                        <h2>We have been proudly providing services since 1841.</h2>
                        <div class="about-details">
                            <p class="fw-bold">Since 1841, we have been dedicated to delivering the freshest, highest-quality produce from our farm to your table. Our commitment to sustainable farming practices ensures that our crops are grown in harmony with nature, preserving the land for future generations. Over the years, we have built a legacy of trust and reliability, consistently providing our customers with farm-fresh goodness. From our humble beginnings to our present-day operations, we take pride in maintaining the same values of quality, integrity, and community that have been the cornerstone of our success.</p>
                            <p>At our farm, we believe in the importance of transparency and fostering a strong connection with our customers. We invite you to experience the difference that comes from knowing ....</p>

                            <a href="about.html" class="btn main-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section Exit -->

    <!--Product Section start -->
    <section class="landing_product_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Our Best Seller Product</h2>
                    <p class="section-subtitle">The Passage Experienced A Surge In Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers</p>
                </div>
            </div>

            <div class="row mx-0">
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card product-card">
                        <div class="product-img">
                            <img decoding="async" src="./images/products/product-1.jpg" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h3>Musk Melon</h3>
                            <span>$45 KG</span>
                        </div>
                        <div class="product-detail">
                            <a href="product.html" class="btn main-btn">View PRoducts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card product-card">
                        <div class="product-img">
                            <img decoding="async" src="./images/products/product-2.jpg" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h3>Orange</h3>
                            <span>$70 KG</span>
                        </div>
                        <div class="product-detail">
                            <a href="product.html" class="btn main-btn">View PRoducts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card product-card">
                        <div class="product-img">
                            <img decoding="async" src="./images/products/product-3.jpg" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h3>Apple</h3>
                            <span>$70 KG</span>
                        </div>
                        <div class="product-detail">
                            <a href="product.html" class="btn main-btn">View PRoducts</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card product-card">
                        <div class="product-img">
                            <img decoding="async" src="./images/products/product-4.jpg" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h3>Dragon</h3>
                            <span>$70 KG</span>
                        </div>
                        <div class="product-detail">
                            <a href="product.html" class="btn main-btn">View PRoducts</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Product Section Exit -->

    <!-- testimonial Section start -->
    <section class="testimonial_section">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Our Happy Customers</h2>
                    <p class="section-subtitle">The Passage Experienced A Surge In Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div id="testimonial-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button data-bs-target="#testimonial-slider" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button data-bs-target="#testimonial-slider" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button data-bs-target="#testimonial-slider" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img decoding="async" src="./images/testimonial/testimonial-1.png" class="img-fluid">
                                    </div>
                                    <div class="card  col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was customer support
                                                very fast, but the
                                                design is very professional. Will definitely be
                                                looking for new products
                                                in the future from this author.</p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img decoding="async" src="./images/testimonial/qoutes.svg" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img decoding="async" src="./images/testimonial/testimonial-1.png" class="img-fluid">
                                    </div>
                                    <div class="card  col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was customer support
                                                very fast, but the
                                                design is very professional. Will definitely be
                                                looking for new products
                                                in the future from this author.</p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img decoding="async" src="./images/testimonial/qoutes.svg" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img decoding="async" src="./images/testimonial/testimonial-1.png" class="img-fluid">
                                    </div>
                                    <div class="card  col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was customer support
                                                very fast, but the
                                                design is very professional. Will definitely be
                                                looking for new products
                                                in the future from this author.</p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img decoding="async" src="./images/testimonial/qoutes.svg" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
    </section>
    <!--testimonial Section Exit -->

    <!-- Gallery Section Start-->
    <section class="gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Our Gallery</h2>
                    <p class="section-subtitle">The Passage Experienced A Surge In Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-1.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-1.jpg" class="img-fluid rounded-3">
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-2.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-2.jpg" class="img-fluid rounded-3">
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-3.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-3.jpg" class="img-fluid rounded-3">
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-4.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-4.jpg" class="img-fluid rounded-3">
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-5.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-5.jpg" class="img-fluid rounded-3">
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a href="images/gallery/g-6.jpg" data-lightbox="image" data-title="Lemon">
                        <img decoding="async" src="images/gallery/g-6.jpg" class="img-fluid rounded-3">
                    </a>
                </div>

                <div class="col-sm-12 text-center mt-4">
                    <a href="gallery.html" class="btn main-btn">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section Exit -->

    <!-- Footer section Start-->
    <section class="footer_wrapper mt-3 mt-md-0">
        <div class="container px-5 px-lg-0">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Farm Fresh</h5>
                    <p class="mb-4 ps-0 company_details">Experience the purity of farm-fresh goodness in every bite. We bring the farm to you, ensuring freshness and flavor.....</p>
                    <div class="contact-info">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-home me-3"></i> No. 96, Bangalore, India</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+1 222 3333</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Customer Support</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Product Returns</a></li>
                        <li><a href="#">Wholesale Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Term Of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="btn main-btn">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p>Copyright <a href="#">© FARMFRESH.</a> All Rights Reserved</p>
        </div>
    </section>
    <!-- Footer Section Exit  -->

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Lightbox Pupup -->
    <script src="js/lightbox.js"></script>

    <!-- Bootstrap 5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>

</html>







        