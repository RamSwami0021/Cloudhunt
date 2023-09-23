<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudHunt</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
@include('components.nav')

    <!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin">
    <div class="container">
        <div class="row">
            <h2>About Us</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>
 

<!--  ************************* About Us Start Here ************************** --> 

 <section class="container-fluid pt-0 about-coo">
  <div class="container">
   
      <div class="row about-row">
          <div class="col-md-5 about-img">
              <img src="assets/images/about.png" alt="">
          </div>
          <div class="col-md-6 about-text">
              <h1>We are the Leading Cloud Service Provider</h1>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has.</p>
              <div class="about-featur">
                  <ul>
                      <li><i class="fa fa-check"></i> Boost SEO Sharing</li>
                      <li><i class="fa fa-check"></i> Social Sharing</li>
                      <li><i class="fa fa-check"></i> Marketing</li>
                      <li><i class="fa fa-check"></i> Retention</li>
                      <li><i class="fa fa-check"></i> Visual Review</li>
                      <li><i class="fa fa-check"></i> Review Generation</li>

                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>  


 <!--################### Testimonial Starts Here #######################--->

      <section class="testimonial-container">
        <div class="container">
           <div class="section-title row">
                <h2>Testimonial</h2>
                <p>Take a look at what people say about us</p>
            </div>
            <div class="row mt-5">
                <div class="col-md-offset-2 float-auto col-md-10">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/images/testimonial/member-01.jpg" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                            </p>
                            <h3 class="title">Ram
                                <span class="post"> -  Developer</span>
                            </h3>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="assets/images/testimonial/member-02.jpg" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                            </p>
                            <h3 class="title">Gourav
                                <span class="post"> - Teacher</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
   




<!--  ************************* Footer Start Here ************************** --> 
     

    @include('components.footer')




</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
</html>