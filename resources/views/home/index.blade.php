<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CompanyProfile</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/user.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  </style>

  <body>


    <!--    Main Content-->

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top p-0" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/PiZi-logos_transparent.png" width="80" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#ourservice">Our Services</a></li>
              <li class="nav-item"><a class="nav-link fw-bold" aria-current="page" href="#portofolio">Portofolio</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

        
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

          <div class="container">
            @foreach ($headers as $index => $header)
            <div class="row align-items-center py-lg-8 py-6" {{ $index === 0 ? 'active' : ''}}>
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6">{{ $header->title }}</h1>
                <p class="text-white py-lg-3 py-2">{{ $header->description }}</p>
                <div class="d-sm-flex align-items-center gap-3">
                  <button class="py-3 w-lg-50 w-75 hover-2">Get Started</button>
                </div>
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="assets/img/hero/{{ $header->image }}" alt="" /></div>
            </div>
            @endforeach

            <div class="swiper">
              <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                <div class="swiper-wrapper">
                  @foreach ($technologies as $index => $technologie)
                  <div class="swiper-slide text-center mx-5"><img src="assets/img/tech/{{ $technologie->image }}" alt="" /></div>
                  @endforeach 
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="container">
          <div class="row p-0  mt-5">
          <!-- <img class="img-fluid w-50 imgS" src="assets/img/blog/business-people-pointing-tablet.jpg" alt="" /> -->
          <h1 class="fw-bold text-center text-dark" id="ourservice">Our Serice</h1>
          <div class="container-service" >
            <div class="icon">
                <div class="imgbx active" style="--i:1;" data-id="content1">
                    <img src="img/application.png" alt="">
                </div>
                <div class="imgbx" style="--i:2;" data-id="content2">
                    <img src="img/mobile-app.png" alt="">
                </div>
                <div class="imgbx" style="--i:3;" data-id="content3">
                    <img src="img/analysis.png" alt="">
                </div>
                <div class="imgbx" style="--i:4;" data-id="content4">
                    <img src="img/dashboard.png" alt="">
                </div>
                <div class="imgbx" style="--i:5;" data-id="content5">
                    <img src="img/global-network.png" alt="">
                </div>
                <div class="imgbx" style="--i:6;" data-id="content6">
                    <img src="img/ai.png" alt="">
                </div>
            </div>
            
            <div class="content">
                <div class="contentbx active" id="content1">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/application.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">Web Application<br></h2>
                        </div>
                    </div>
                </div>
                <div class="contentbx" id="content2">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/mobile-app.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">Mobile Application<br></h2>
                        </div>
                    </div>
                </div>
                <div class="contentbx" id="content3">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/analysis.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">Data Platform<br></h2>
                        </div>
                    </div>
                </div>
                <div class="contentbx" id="content4">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/dashboard.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">Data Analytics<br></h2>
                        </div>
                    </div>
                </div>
                <div class="contentbx" id="content5">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/global-network.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">infrastructure<br></h2>
                        </div>
                    </div>
                </div>
                <div class="contentbx" id="content6">
                    <div class="card">
                        <div class="imgbx">
                            <img src="img/ai.png" alt="">
                        </div>
                        <div class="textbx">
                            <h2 class="text-dark">AR/VR<br></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
          <!-- end of .container-->
  
        </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-dark pt-6">

        <div class="container" id="portofolio">
          <div class="col-md-6">
            <h1 class="text-white fs-lg-5 fs-md-3 fs-2">This is a collection of portfolios we've worked on</h1>
          </div>
          <div class="swiper mt-7">
            <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":20},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":true,"freeMode":true,"loopedSlides":3}'>
              <div class="swiper-wrapper">
                @foreach ($portfolios as $index => $portfolio)
                <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <figure>
                      <img src="assets/img/port/{{ $portfolio->image }}" class="w-100" style="height: 250px;" alt="Mountains">
                      <figcaption>{{ $portfolio->title }}<p class="text-dark">{{ $portfolio->description }}</p></figcaption>
                  </figure>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
            <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pb-0">
          <div class="container">
            <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">Partners : </h2>
            <div class="row mt-7 gx-xl-7">
              @foreach ($partners as $index => $partner)
                  
              <div class="col-md-4 text-center text-md-start h-auto mb-5">
                <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/{{ $partner->image }}" alt="" /></a>
                  <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3">
                    <h4 class="mb-0">{{ $partner->title }}</h4>
                  </div><a href="#">
                    <h5 class="mt-1 mb-3 fs-0 fs-md-1">{{ $partner->description }}</h5>
                  </a>
                </div>
              </div>
              @endforeach
    
              </div>
            </div>
            <div class="text-center mb-3"><button class="btn btn-outline-dark">Load More</button></div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
      
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0">

        <div class="container">
          <p class="text-center text-gray fs-1">Our Blog</p>
          <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">Value proposition accelerator product management venture</h2>
          <div class="row mt-7 gx-xl-7">
            <div class="col-md-4 text-center text-md-start h-auto mb-5">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/1.png" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">Category</p>
                  </a>
                  <p class="mb-0">November 22, 2021</p>
                </div><a href="#">
                  <h5 class="mt-1 mb-3 fs-0 fs-md-1">Pitch termsheet backing validation focus release.</h5>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" /><a href="#">
                    <p class="mb-0 text-gray">Chandler Bing</p>
                  </a></div>
              </div>
            </div>
            <div class="col-md-4 text-center text-md-start h-auto mb-5">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/2.png" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">Category</p>
                  </a>
                  <p class="mb-0">November 22, 2021</p>
                </div><a href="#">
                  <h5 class="mt-1 mb-3 fs-0 fs-md-1">Seed round direct mailing non-disclosure agreement graphical user interface rockstar.</h5>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3"><img class="img-fluid" src="assets/img/blog/profile2.png" alt="" /><a href="#">
                    <p class="mb-0 text-gray">Rachel Green</p>
                  </a></div>
              </div>
            </div>
            <div class="col-md-4 text-center text-md-start h-auto mb-5">
              <div class="d-flex justify-content-between flex-column h-100"><a href="#"><img class="w-75 w-md-100 rounded-2" src="assets/img/blog/3.png" alt="" /></a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3"><a href="#">
                    <p class="fw-bold mb-0 text-black">Category</p>
                  </a>
                  <p class="mb-0">November 22, 2021</p>
                </div><a href="#">
                  <h5 class="mt-1 mb-3 fs-0 fs-md-1">Beta prototype sales iPad gen-z marketing network effects value proposition</h5>
                </a>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3"><img class="img-fluid" src="assets/img/blog/profile3.png" alt="" /><a href="#">
                    <p class="mb-0 text-gray">Monica Geller</p>
                  </a></div>
              </div>
            </div>
          </div>
          <div class="text-center mb-3">
            <button class="btn btn-outline-dark">Load More</button>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>

    <!--    End of Main Content-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

      <div class="container bg-dark overflow-hidden rounded-1">
        <div class="bg-holder" style="background-image:url(assets/img/promo/promo-bg.png);">
        </div>
        <!--/.bg-holder-->

        <div class="px-5 py-7 position-relative">
          <h1 class="text-center w-lg-75 mx-auto fs-lg-6 fs-md-4 fs-3 text-white">If you want to give suggestions or criticism, send it here</h1>
          <div class="row justify-content-center mt-5">
            <div class="col-auto w-100 w-lg-50">
              <form action="">
                <input class="form-control mb-2 border-light fs-1" type="email" placeholder="Your email address" />
                <textarea class="form-control" placeholder="feedback or comment" id="floatingTextarea"></textarea>
            </div>
            <div class="col-auto mt-2 mt-lg-0">
              <a class="btn btn-success text-dark fs-1 mt-lg-5">Send</a>
            </div>
              </form>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">

      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-sm-12"><a href="index.html"><img src="assets/img/PiZi-logos_transparent.png" width="100" alt="" /></a>
            <p class="w-lg-75 text-gray text-dark-opacity">Hardware & Software Provider and System Integrator Company based on Jakarta, Indonesia.</p>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Useful Links</h3>
            <ul class="list-unstyled">
              <li class="my-3 col-md-4"><a class="text-dark-opacity" href="#">Home</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">About us</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Our Services</h3>
            <ul class="list-unstyled">
              <li class="my-3"><a class="text-dark-opacity" class="text-dark-opacity" href="#">Web Application</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Mobile Application</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Data Platform</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">Data Analytics</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">infrastructure</a></li>
              <li class="my-3"><a class="text-dark-opacity" href="#">AR/VR</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4">
            <h3 class="fw-bold fs-1 mt-5 mb-4 text-dark">Contact us</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-dark-opacity" href="#">EightyEight@Kasablanka</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">Office Tower, 10th Floor Unit E</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">Jalan Casablanca Kav.88</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#">DKI Jakarta, Indonesia</a></li>
              <li class="mb-3 mt-5"><a class="text-dark-opacity" href="#"><b>Phone:</b> 021 29631657</a></li>
              <li class="mb-3"><a class="text-dark-opacity" href="#"><b>Email:</b> natanael@bisakan.id</a></li>
            </ul>
          </div>
        </div>
        <p class="text-gray text-dark-opacity">All rights reserved.</p>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!--    JavaScripts-->
    <script>
      let imgbx = document.querySelectorAll('.imgbx');
      let contentbx = document.querySelectorAll('.contentbx');

      for (let i=0; i<imgbx.length; i++){
          imgbx[i].addEventListener('mouseover', function(){
              for(let i=0; i<contentbx.length; i++){
                  contentbx[i].className = 'contentbx';
              }
              document.getElementById(this.dataset.id).className = 'imgbx';

              for (let i=0; i<imgbx.length; i++){
                  imgbx[i].className = 'imgbx';
              }
              this.className ='imgbx active';
          })
      }
  </script>
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>