<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/theme/css/CodecPro.css">
  <link rel="stylesheet" href="/npm/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="/npm/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="/theme/css/main.css">
  <title><?php echo $title ?></title>
</head>
<body class="overflow-x-hidden"> 
  <?php include (__DIR__ ."/components/_header.php"); ?>
  <!-- start hero -->
  <div id="hero" class="carousel slide hero position-relative" data-bs-ride="carousel">
    <div class="hero-content position-absolute bottom-0 z-1">
      <h2 class="hero-title text-white">
        Setting Trends for a Nation on the Move
      </h2>
      <div class="carousel-indicators position-static justify-content-start ms-2 start-100 end-100 gap-2">
        <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active">
          <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.52872 0.928826L13.131 9.00721L0.528719 17.0856L0.52872 0.928826Z" stroke="white"/>
          </svg>
        </button>
        <button type="button" data-bs-target="#hero" data-bs-slide-to="1">
          <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.52872 0.928826L13.131 9.00721L0.528719 17.0856L0.52872 0.928826Z" stroke="white"/>
          </svg>
        </button>
        <button type="button" data-bs-target="#hero" data-bs-slide-to="2">
          <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.52872 0.928826L13.131 9.00721L0.528719 17.0856L0.52872 0.928826Z" stroke="white"/>
          </svg>
        </button>
      </div>
    </div>
  
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100">
        <img src="/theme/images/hero.png" class="d-block w-100 object-fit-cover  h-100" alt="...">
      </div>
      <div class="carousel-item h-100">
        <img src="/theme/images/hero-2.jpeg" class="d-block w-100 object-fit-cover h-100" alt="...">
      </div>
      <div class="carousel-item h-100">
        <img src="/theme/images/hero-3.png" class="d-block w-100 object-fit-cover h-100" alt="...">
      </div>
    </div>
  </div>

  <!-- end hero -->

  <section class="page-container home-container">
    <!-- start glance -->
    <section class="glance container">
      <div class="bg-primary text-white rounded-4">
          <div class="stats text-center">
              <h2 class="stats-title text-white">At a Glance</h2>
              <div class="stats-body d-flex justify-content-between align-items-center flex-column flex-md-row">
                  <div>
                      <p class="display-1 text-primary-hover counter">9</p>
                      <p class="display-6">
                          School Buildings
                      </p>
                  </div>
                  <div>
                      <p class="display-1 text-primary-hover counter">15</p>
                      <p class="display-6">
                          School Max Class Sizes
                      </p>
                  </div>
                  <div>
                      <p class="display-1 text-primary-hover counter">100+</p>
                      <p class="display-6">
                          Co-curricular Activities
                      </p>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- end glance -->
    <?php include (__DIR__ .  "/components/_featured.html") ?>
      <!-- start text and image -->
      <section class="text-and-image d-flex text-white flex-column flex-lg-row overflow-hidden ">
        <img src="theme/images/image-4.png" alt="" class="image">
        <div class="text bg-primary d-flex flex-column position-relative">
            <h2 class="text-white">
              Leaders in the Making
            </h2>

            <p>
              Teaching young people what it means to be a leader is a community responsibility, not simply a subject on a timetable. <br><br>
              Leadership is a set of behaviours and a way of thinking and young people can learn when they are surrounded by positive role models, an d actively mentored to recognize, interpret, and emulate what they observe. These are the skills and attributes we foster.
            </p>
            <div class="d-flex align-items-center gap-1">
                <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow opacity-0">
                  <path d="M9.36011 6.5L0.000108194 12.5L0.000108719 0.5L9.36011 6.5Z" fill="white"/>
                </svg>
                <a href="" class="text-white">Learn More</a>
                <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="arrow">
                  <path d="M9.36011 6.5L0.000108194 12.5L0.000108719 0.5L9.36011 6.5Z" fill="white"/>
                </svg>
            </div>
            <div class="arrows-group position-absolute end-0 top-0 d-flex flex-column">
              <img src="/theme/images/Group.svg" alt="">
              <img src="/theme/images/Group.svg" alt="">
              <img src="/theme/images/Group.svg" alt="">
              <img src="/theme/images/Group.svg" alt="">
            </div>
        </div>
      </section>
      <!-- end text and image -->

      <!-- start partners -->
      <section class="partners d-flex justify-content-center align-items-center flex-column">
        <h2 class="text-center">Our Partners</h2>
        <div class="container d-flex justify-content-center align-items-center">
          <div class="logos d-flex justify-content-center flex-wrap">
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 7.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 6.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 8.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 11.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 10.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 9.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 17.png" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <img src="theme/images/image 18.png" alt="">
            </div>
          </div>
        </div>
        <button class="btn fw-semibold">
          Load More
        </button>
      </section>
      <!-- end partners -->
      <?php include(__DIR__ . "/components/_footer.html"); ?>
  </section>
</body>
<script src="/npm/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/nav.js"></script>
<script src="/js/counter.js" type="module"></script>
<script src="/js/hero-slider.js"></script>
<script src="/npm/jquery/dist/jquery.min.js"></script>
<script src="/npm/slick-carousel/slick/slick.min.js"></script>
<script src="/js/carousel.js"></script>
</html>