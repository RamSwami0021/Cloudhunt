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
<?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin">
    <div class="container">
        <div class="row">
            <h2>Our Blog</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Blog</li>
            </ul>
        </div>
    </div>
</div>
 


  
  <div class="blog container-fluid">
      <div class="container">
           <div class="section-title row">
              <h2>Our Latest Blog</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. </p>
          </div>
          <div class="row blog-row mt-5">
            <?php $__currentLoopData = $blogData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                  <div class="blogcol">
                      <img src="assets/images/blog/b1.png" alt="">
                      <!-- <img src="<?php echo e($blog->img); ?>" alt=""> -->
                        <span><?php echo e($blog->date); ?></span> 
                        <h4><?php echo e($blog->title); ?></h4> 
                        <a type="button" target="_blank" class="btn btn-primary" href="\blogDetails\<?php echo e($blog->id); ?>">View</a>
                  </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
  </div>





<!--  ************************* Footer Start Here ************************** --> 
     
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
</html><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/blog.blade.php ENDPATH**/ ?>