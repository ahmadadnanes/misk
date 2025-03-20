<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="theme/css/CodecPro.css">
    <link rel="stylesheet" href="/theme/css/main.css">
    <title><?php echo $title ?></title>
</head>
<body>
  <section class="page-container">
    <div class="banner position-relative d-flex flex-column align-self-stretch">
      <div class="rectangle position-absolute top-0 start-0 w-100"></div>
      <div class="hero-title z-1">
          <h2 class="display-2">
              Admissions  
          </h2>
      </div>
      <section class="group-banner z-1">
        <div class="info bg-primary-hover">
          <div class="date">
              16 March 2022
          </div>
          <div class="social d-flex gap-3">
            <img src="/theme/images/facebook.svg" alt="">
            <img src="/theme/images/instegram.svg" alt="">
            <img src="/theme/images/linkdin.svg" alt="">
            <img src="/theme/images/twitter.svg" alt="">
          </div>
        </div>
        <div class="image-container">
          <img src="theme/images/banner.png" alt="">
        </div>
      </section>
      <?php include(__DIR__ . "/components/_header.php"); ?>
    </div>
    <section class="form d-flex justify-content-between">
      <h2>Apply Now</h2>
      <form action="" class="d-flex flex-column gap-3">
        <div class="input-box">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" required id="name">
        </div>
        <div class="input-box">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" required id="email">
        </div>
        <div class="input-box">
          <label for="" class="form-label">Age</label>
          <select type="text" class="form-control" id="age">
          </select>
        </div>
        <div class="input-box">
          <label for="message" class="form-label">Message</label>
          <textarea name="" id="message" class="form-control" required cols="30" rows="10"></textarea>
        </div>
      </form>
    </section>
    <section class="fees d-flex flex-column">
      <h2>Admission Fees</h2>
      <p>
        Fees at Misk Schools cover tuition and are fully inclusive of all student materials and services. 
      </p>
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
          </tr>
          <tr>
            <td>Text</td>
            <td>Text</td>
            <td>Text</td>
          </tr>
          <tr>
            <td>Text</td>
            <td>Text</td>
            <td>Text</td>
          </tr>
          <tr>
            <td>Text</td>
            <td>Text</td>
            <td>Text</td>
          </tr>
        </table>
      </div>
      <div class="fees-details d-flex flex-column gap-2">
        <h5>What Fees Include</h5>
        <div class="lists d-flex gap-3">
          <ul>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
          </ul>
          <ul>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
          </ul>
      </div>
        <p>
          * Personal use while a Misk Schools’ studentz
        </p>
    </section>
    <?php include(__DIR__ . "/components/_footer.html") ?>
  </section>
   <script src="/npm/@popperjs/core/dist/umd/popper.min.js"></script>
   <script src="/npm/bootstrap/dist/js/bootstrap.min.js"></script>
   <script src="/js/nav.js"></script>
</body>
</html>