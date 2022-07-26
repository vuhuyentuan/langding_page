<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Basic - SaaS Landing Page</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="{{ asset('free-lite/assets/images/favicon.png') }}"
      type="image/png"
    />
    <meta name="description"
    content="Website cung cấp thông tin về hạt giống hoa đậu lupin" />
    {{-- Facebook share --}}
    <meta property="og:url" content="#"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Điểm bán hạt giống chất lượng - uy tín"/>
    <meta property="og:description" content="Website cung cấp thông tin về hạt giống hoa đậu lupin"/>
    <meta property="og:image" content="#"/>
    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Điểm bán hạt giống chất lượng - uy tín">
    <meta name="twitter:description" content="Website cung cấp thông tin về hạt giống hoa đậu lupin">
    <meta name="twitter:image" content="#">

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="{{ asset('free-lite/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('free-lite/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('free-lite/assets/css/lineIcons.css') }}" />
    <link rel="stylesheet" href="{{ asset('free-lite/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('free-lite/assets/css/style.css') }}" />
  </head>

  <body>
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
      <div class="navbar-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="{{ asset('free-lite/assets/images/logo/logo.svg') }}" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#facts">Why</a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0)">Team</a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0)">Blog</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->

                <div class="navbar-btn d-none d-sm-inline-block">
                  <a
                    class="main-btn"
                    data-scroll-nav="0"
                    href="https://uideck.com/templates/basic/"
                    rel="nofollow"
                  >
                    Download Now
                  </a>
                </div>
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->

      <div
        id="home"
        class="header-hero bg_cover"
        style="background-image: url({{ asset('free-lite/assets/images/header/banner-bg.svg') }})"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="header-hero-content text-center">
                <h3
                  class="header-sub-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.2s"
                >
                  Basic - SaaS Landing Page
                </h3>
                <h2
                  class="header-title wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.5s"
                >
                  Kickstart Your SaaS or App Site
                </h2>
                <p
                  class="text wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.8s"
                >
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  diam nonumy eirmod tempor
                </p>
                <a
                  href="javascript:void(0)"
                  class="main-btn wow fadeInUp"
                  data-wow-duration="1.3s"
                  data-wow-delay="1.1s"
                >
                  Get Started
                </a>
              </div>
              <!-- header hero content -->
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-12">
              <div
                class="header-hero-image text-center wow fadeIn"
                data-wow-duration="1.3s"
                data-wow-delay="1.4s"
              >
                <img src="{{ asset('free-lite/assets/images/header/header-hero.png') }}" alt="hero" />
              </div>
              <!-- header hero image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->

    <!--====== BRAND PART START ======-->
    <div class="brand-area pt-90">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div
              class="
                brand-logo
                d-flex
                align-items-center
                justify-content-center justify-content-md-between
              "
            >
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <img src="{{ asset('free-lite/assets/images/brands/uideck.svg') }}" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s"
              >
                <img src="{{ asset('free-lite/assets/images/brands/ayroui.svg') }}" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.3s"
              >
                <img src="{{ asset('free-lite/assets/images/brands/graygrids.svg') }}" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.4s"
              >
                <img src="{{ asset('free-lite/assets/images/brands/lineicons.svg') }}" alt="brand" />
              </div>
              <!-- single logo -->
              <div
                class="single-logo mt-30 wow fadeIn"
                data-wow-duration="1.5s"
                data-wow-delay="0.5s"
              >
                <img
                  src="{{ asset('free-lite/assets/images/brands/ecommerce-html.svg') }}"
                  alt="brand"
                />
              </div>
              <!-- single logo -->
            </div>
            <!-- brand logo -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--====== BRAND PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title text-center pb-40">
              <div class="line m-auto"></div>
              <h3 class="title">
                Clean and simple design,
                <span> Comes with everything you need to get started!</span>
              </h3>
            </div>
            <!-- section title -->
          </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.2s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="{{ asset('free-lite/assets/images/services/services-shape.svg') }}"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="{{ asset('free-lite/assets/images/services/services-shape-1.svg') }}"
                  alt="shape"
                />
                <i class="lni lni-baloon"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Clean</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="{{ asset('free-lite/assets/images/services/services-shape.svg') }}"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="{{ asset('free-lite/assets/images/services/services-shape-2.svg') }}"
                  alt="shape"
                />
                <i class="lni lni-cog"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Robust</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
          <div class="col-lg-4 col-md-7 col-sm-8">
            <div
              class="single-services text-center mt-30 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="services-icon">
                <img
                  class="shape"
                  src="{{ asset('free-lite/assets/images/services/services-shape.svg') }}"
                  alt="shape"
                />
                <img
                  class="shape-1"
                  src="{{ asset('free-lite/assets/images/services/services-shape-3.svg') }}"
                  alt="shape"
                />
                <i class="lni lni-bolt-alt"> </i>
              </div>
              <div class="services-content mt-30">
                <h4 class="services-title">
                  <a href="javascript:void(0)">Powerful</a>
                </h4>
                <p class="text">
                  Lorem ipsum dolor sit amet,consetetur sadipscing elitr,
                  seddiam nonu eirmod tempor invidunt labore.
                </p>
                <a class="more" href="javascript:void(0)"
                  >Learn More <i class="lni lni-chevron-right"> </i>
                </a>
              </div>
            </div>
            <!-- single services -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <section id="about">
      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    Quick & Easy <span>to Use Bootstrap Template</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="{{ asset('free-lite/assets/images/about/about1.svg') }}" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="{{ asset('free-lite/assets/images/about/about-shape-1.svg') }}" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="about-shape-2">
          <img src="{{ asset('free-lite/assets/images/about/about-shape-2.svg') }}" alt="shape" />
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last">
              <div
                class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    Modern design <span> with Essential Features</span>
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6 order-lg-first">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="{{ asset('free-lite/assets/images/about/about2.svg') }}" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!--====== ABOUT PART ENDS ======-->

      <!--====== ABOUT PART START ======-->
      <div class="about-area pt-70">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="about-content mt-50 wow fadeInLeftBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">
                    <span>Crafted for</span> SaaS, App and Software Landing Page
                  </h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua. At vero eos et accusam et
                  justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                  sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                  ipsum dolor sit amet, consetetur sadipscing.
                </p>
                <a href="javascript:void(0)" class="main-btn">Try it Free</a>
              </div>
              <!-- about content -->
            </div>
            <div class="col-lg-6">
              <div
                class="about-image text-center mt-50 wow fadeInRightBig"
                data-wow-duration="1s"
                data-wow-delay="0.5s"
              >
                <img src="{{ asset('free-lite/assets/images/about/about3.svg') }}" alt="about" />
              </div>
              <!-- about image -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
          <img src="{{ asset('free-lite/assets/images/about/about-shape-1.svg') }}" alt="shape" />
        </div>
      </div>
      <!--====== ABOUT PART ENDS ======-->
    </section>

    <!--====== VIDEO COUNTER PART START ======-->
    <section id="facts" class="video-counter pt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-lg-last">
            <div
              class="counter-wrapper mt-50 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.8s"
            >
              <div class="counter-content">
                <div class="section-title">
                  <div class="line"></div>
                  <h3 class="title">Cool facts <span> about this app</span></h3>
                </div>
                <!-- section title -->
                <p class="text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam
                  nonumy eirmod tempor invidunt ut labore et dolore magna
                  aliquyam erat, sed diam voluptua.
                </p>
              </div>
              <!-- counter content -->
              <div class="row no-gutters">
                <div class="col-4">
                  <div
                    class="
                      single-counter
                      counter-color-1
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <div class="counter-items text-center">
                      <span
                        class="count countup text-uppercase"
                        cup-end="125"
                      ></span>

                      <p class="text">Downloads</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
                <div class="col-4">
                  <div
                    class="
                      single-counter
                      counter-color-2
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <div class="counter-items text-center">
                      <span
                        class="count countup text-uppercase"
                        cup-end="87"
                      ></span>
                      <p class="text">Active Users</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
                <div class="col-4">
                  <div
                    class="
                      single-counter
                      counter-color-3
                      d-flex
                      align-items-center
                      justify-content-center
                    "
                  >
                    <div class="counter-items text-center">
                      <span
                        class="count countup text-uppercase"
                        cup-end="59"
                      ></span>
                      <p class="text">User Rating</p>
                    </div>
                  </div>
                  <!-- single counter -->
                </div>
              </div>
              <!-- row -->
            </div>
            <!-- counter wrapper -->
          </div>
          <div class="col-lg-6">
            <div
              class="video-content mt-50 wow fadeIn"
              data-wow-duration="1s"
              data-wow-delay="0.5s"
            >
              <img class="dots" src="{{ asset('free-lite/assets/images/video/dots.svg') }}" alt="dots" />
              <div class="video-wrapper">
                <div class="video-image">
                  <img src="{{ asset('free-lite/assets/images/video/video.png') }}" alt="video" />
                </div>
                <div class="video-icon">
                  <a
                    href="https://www.youtube.com/watch?v=r44RKWyfcFw"
                    class="video-popup glightbox"
                  >
                    <i class="lni lni-play"> </i>
                  </a>
                </div>
              </div>
              <!-- video wrapper -->
            </div>
            <!-- video content -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area pt-120">
      <div class="container">
        <div
          class="subscribe-area wow fadeIn"
          data-wow-duration="1s"
          data-wow-delay="0.5s"
        >
          <div class="row">
            <div class="col-lg-6">
              <div class="subscribe-content mt-45">
                <h2 class="subscribe-title">
                  Subscribe Our Newsletter <span>get reguler updates</span>
                </h2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="subscribe-form mt-50">
                <form action="#">
                  <input type="text" placeholder="Enter eamil" />
                  <button class="main-btn">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div
                class="footer-about mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <a class="logo" href="javascript:void(0)">
                  <img src="{{ asset('free-lite/assets/images/logo/logo.svg') }}" alt="logo" />
                </a>
                <p class="text">
                  Lorem ipsum dolor sit amet consetetur sadipscing elitr,
                  sederfs diam nonumy eirmod tempor invidunt ut labore et dolore
                  magna aliquyam.
                </p>
                <ul class="social">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-facebook-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-twitter-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-instagram-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-linkedin-original"> </i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- footer about -->
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
              <div class="footer-link d-flex mt-50 justify-content-sm-between">
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.4s"
                >
                  <div class="footer-title">
                    <h4 class="title">Quick Link</h4>
                  </div>
                  <ul class="link">
                    <li><a href="javascript:void(0)">Road Map</a></li>
                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)">Refund Policy</a></li>
                    <li><a href="javascript:void(0)">Terms of Service</a></li>
                    <li><a href="javascript:void(0)">Pricing</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.6s"
                >
                  <div class="footer-title">
                    <h4 class="title">Resources</h4>
                  </div>
                  <ul class="link">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Page</a></li>
                    <li><a href="javascript:void(0)">Portfolio</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
              </div>
              <!-- footer link -->
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12">
              <div
                class="footer-contact mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="title">Contact Us</h4>
                </div>
                <ul class="contact">
                  <li>+809272561823</li>
                  <li>info@gmail.com</li>
                  <li>www.yourweb.com</li>
                  <li>
                    123 Stree New York City , United <br />
                    States Of America 750.
                  </li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright d-sm-flex justify-content-between">
                <div class="copyright-content">
                  <p class="text">
                    Designed and Developed by
                    <a href="https://uideck.com" rel="nofollow">UIdeck</a>
                  </p>
                </div>
                <!-- copyright content -->
              </div>
              <!-- copyright -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2"></div>
    </footer>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Javascript Files ======-->
    <script src="{{ asset('free-lite/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('free-lite/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('free-lite/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('free-lite/assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('free-lite/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('free-lite/assets/js/main.js') }}"></script>
  </body>
</html>
