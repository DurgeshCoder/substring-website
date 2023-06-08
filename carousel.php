<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Slider</title>
    <style>
       .btn-carousel{
        background: #e84545;
        color: #fff;
         transition: 0.3s;
       }
       .btn-carousel:hover{
        background: rgba(232, 69, 69, 0.85);
        color: #fff;
       }
       .carousel{
        height: 50vh;
       }
       @media (max-width: 800px) {
        .carousel{
        height: 70vh;
       }
        }
       h2{
        font-weight: 600;
       }
    </style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel carousel-dark slide " data-bs-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active "  data-bs-interval="10000">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-6 content text-center" data-aos="fade-up" data-aos-delay="200">
            <h2>Welcome to Learn Programming?</h2>
            <p data-aos="fade-up" data-aos-delay="500">Here we provide best quality content in Hindi</p>
            <a href="" class="btn btn-carousel" data-aos="fade-up" data-aos-delay="800">Start Learning</a>
          </div>
          <div class="col-xl-6">
          <img src="images/svgs/banner1_logo.svg" width="500px">
          </div>
        </div>
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
        <div class="col-xl-6">
          <img src="images/svgs/banner9_logo.svg"  width="500px">
          </div>
          <div class="col-xl-6 content text-center" data-aos="fade-up" data-aos-delay="200">
            <h2>We provide Software Solutions</h2>
            <p data-aos="fade-up" data-aos-delay="300">Automate thinking into in easy way</p>
            <a href="" class="btn btn-carousel" data-aos="fade-up" data-aos-delay="400">Start Learning</a>
          </div>

        </div>
    </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden text-dark">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>
















