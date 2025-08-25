@extends('fronted.layouts.main')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid p-0 hero-header bg-light mb-5">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 hero-header-text py-5">
                    <div class="py-5 px-3 ps-lg-0">
                        <h1 class="font-dancing-script text-primary animated slideInLeft">Welcome</h1>
                        <h1 class="display-1 mb-4 animated slideInLeft">RajaEvent Video & Photo Graphics</h1>
                        <div class="row g-4 animated slideInLeft">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-phone text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Call Us</h5>
                                        <p class="fs-5 text-dark mb-0">+9102806987</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-envelope text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Mail Us</h5>
                                        <p class="fs-5 text-dark mb-0">info@rajaevents.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="{{asset('fronted/img/hero-slider-1.jpg')}}" alt="">
                        <img class="img-fluid" src="{{asset('fronted/img/hero-slider-2.jpg')}}" alt="">
                        <img class="img-fluid" src="{{asset('fronted/img/hero-slider-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid mb-3" src="{{asset('fronted/img/about.jpg')}}" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>+9102806987</h3>
                            <span>Call us direct 24/7 for Booking</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script text-primary">About Us</h1>
                    <h1 class="mb-5">Why People Choose Us!</h1>
                    <p class="mb-4"><strong>हम हर प्रकार के इवेंट्स जैसे शादी,पूजा,सालगिरह, बर्थडे ,कॉलेज फंक्शन,अवार्ड फंक्शन एंड कॉर्पोरेट इवेंट्स के लिए उच्च एंड गुणवत्ता वाली विडियो शुटिंग और वृत्तिक फोटोग्राफी के सुबिधा प्रदान करते है | आपकी हर मुस्कान, हर पल और हर भवनों को हम कैमरे मे कैद करते है.</strong></p>
                    <div class="row g-3 mb-5">
                        <div class="col-sm-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">25</h1>
                                <p class="text-dark text-uppercase mb-0">Years experience</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-light text-center p-4">
                                <i class="fas fa-users fa-4x text-primary"></i>
                                <h1 class="display-5" data-toggle="counter-up">999</h1>
                                <p class="text-dark text-uppercase mb-0">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-uppercase px-5 py-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script text-primary">Our Services</h1>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{asset('fronted/img/Weddings.jpg')}}" alt="">
                        <h3 class="mb-3">Weddings</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-end wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="{{asset('fronted/img/Anniversaries.jpg')}}" alt="">
                        <h3 class="mb-3">Anniversaries</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end border-lg-end-0 wow fadeIn"
                        data-wow-delay="0.5s">
                        <img class="img-fluid" src="{{asset('fronted/img/Family.jpg')}}" alt="">
                        <h3 class="mb-3">Family Shoots</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase my-2" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-bottom-0 border-lg-end wow fadeIn"
                        data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{asset('fronted/img/Birthday.jpg')}}" alt="">
                        <h3 class="mb-3">Birthday parties</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-end wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="{{asset('fronted/img/Cradleshoots.jpg')}}" alt="">
                        <h3 class="mb-3">Cradle Shoots</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid" src="{{asset('fronted/img/Awads.jpg')}}" alt="">
                        <h3 class="mb-3">Award ceremonies</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Start -->
    <div class="container-fluid price px-0 py-5">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="d-flex align-items-center h-100 bg-primary p-5">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="font-dancing-script text-white">Pricing</h1>
                        <h1 class="mb-0">Best Photo Grapher</h1>
                        <h1 class="display-1 text-uppercase mb-5" style="letter-spacing: 10px;">Pricing</h1>
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <div class="text-center bg-dark p-5">
                                    <h4 class="text-white">Enjoy</h4>
                                    <h1 class="display-1 font-work-sans text-white">20%</h1>
                                    <p class="fs-2 text-white mb-0">Off</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Maecenas eget libero lobortis,
                                    auctor nisi quis, aliquet nunc. Nam dapibus lacus.</p>
                                <a class="btn btn-dark" href="">Get 20% Off</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 bg-dark p-5">
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Weddings.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Weddings</h6>
                            <h3 class="text-white font-work-sans mb-0">$49</h3>
                        </div>
                    </div>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.2s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Anniversaries.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Anniversaries</h6>
                            <h3 class="text-white font-work-sans mb-0">$79</h3>
                        </div>
                    </div>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Family.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Family Shoots</h6>
                            <h3 class="text-white font-work-sans mb-0">$59</h3>
                        </div>
                    </div>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.4s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Birthday.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Birthday parties</h6>
                            <h3 class="text-white font-work-sans mb-0">$49</h3>
                        </div>
                    </div>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Cradleshoots.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Cradle Shoots</h6>
                            <h3 class="text-white font-work-sans mb-0">$39</h3>
                        </div>
                    </div>
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.6s">
                        <img class="img-fluid flex-shrink-0" src="{{asset('fronted/img/Awads.jpg')}}" alt="">
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">Award ceremonies</h6>
                            <h3 class="text-white font-work-sans mb-0">$99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Gallery</h1>
                <h1 class="mb-5">Explore Our Gallery</h1>
            </div>
            <div class="row g-0">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-1.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-1.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-1"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-2.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-2.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-2"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-3.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-3.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-3"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-4.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-4.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-4"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-5.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-5.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-5"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item h-100">
                        <img src="{{asset('fronted/img/gallery-6.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{asset('fronted/img/gallery-6.jpg')}}" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-6"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Team Members</h1>
                <h1 class="mb-5">Our Experienced Specialists</h1>
            </div>
            <div class="row g-4 team">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('fronted/img/team-1.jpg')}}" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Video Specialist</p>
                            <h4>Lily Taylor</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('fronted/img/team-2.jpg')}}" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Photo Designer</p>
                            <h4>Olivia Smith</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('fronted/img/team-3.jpg')}}" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Drone Specialist</p>
                            <h4>Ava Brown</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('fronted/img/team-4.jpg')}}" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Photo Specialist</p>
                            <h4>Amelia Jones</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Testimonial</h1>
                <h1 class="mb-5">What Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="{{asset('fronted/img/testimonial-1.jpg')}}" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="{{asset('fronted/img/testimonial-2.jpg')}}" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="{{asset('fronted/img/testimonial-3.jpg')}}" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="{{asset('fronted/img/testimonial-4.jpg')}}" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid blog p-0 mt-5">
        <div class="row g-0">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                    <p class="mb-2"><i class="fa fa-calendar-alt text-dark me-1"></i>Jan 01, 2045 | <i
                            class="fa fa-folder-open text-dark me-1"></i>Weddings</p>
                    <h3 class="mb-3">How to Extend The Life of Your Camera</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget libero lobortis, auctor
                        nisi quis, aliquet nunc. Nam dapibus interdum lacus.</p>
                    <a class="btn btn-dark align-self-start text-uppercase" href="">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100">
                    <img class="img-fluid w-100 h-100" src="{{asset('fronted/img/blog-1.jpg')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                    <p class="mb-2"><i class="fa fa-calendar-alt text-dark me-1"></i>Jan 01, 2045 | <i
                            class="fa fa-folder-open text-dark me-1"></i>Anniversaries</p>
                    <h3 class="mb-3">Hottest Photo and Video Designer in 2045</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget libero lobortis, auctor
                        nisi quis, aliquet nunc. Nam dapibus interdum lacus.</p>
                    <a class="btn btn-dark align-self-start text-uppercase" href="">Read More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="h-100">
                    <img class="img-fluid w-100 h-100" src="{{asset('fronted/img/blog-2.jpg')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
