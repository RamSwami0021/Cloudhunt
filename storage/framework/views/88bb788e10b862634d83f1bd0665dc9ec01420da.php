<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CloudHunt</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="/assets/plugins/testimonial/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/plugins/testimonial/css/owl.theme.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin">
        <div class="container">
            <div class="row">
                <h2>Blog Details</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Blog Details</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog container-fluid">
        <div class="container">
            <div class="section-title row">
                <h2>Our Latest Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat
                    bibendum. </p>
            </div>
            <div class="row blog-row mt-5">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                    rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                    rel="stylesheet" />

                <div id="main-content" class="blog-page">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 left-box">
                                <div class="card single_post">
                                    <div class="body">
                                        <div class="img-post">
                                            <img class="d-block img-fluid"
                                                src="https://www.bootdey.com/image/800x280/87CEFA/000000"
                                                alt="First slide">
                                        </div>
                                        <h6><a href="#"><?php echo e($blogData->date); ?></a></h6>
                                        <h3><a href="#"><?php echo e($blogData->title); ?></a></h3>
                                        <p><?php echo e($blogData->description); ?> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 right-box">
                                <div class="card">
                                    <div class="body search">
                                        <div class="input-group m-b-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search...">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="header">
                                        <h2>Categories Clouds</h2>
                                    </div>
                                    <div class="body widget">
                                        <ul class="list-unstyled categories-clouds m-b-0">
                                            <li><a href="javascript:void(0);">eCommerce</a></li>
                                            <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                            <li><a href="javascript:void(0);">Creative UX</a></li>
                                            <li><a href="javascript:void(0);">Wordpress</a></li>
                                            <li><a href="javascript:void(0);">Angular JS</a></li>
                                            <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                            <li><a href="javascript:void(0);">Website Design</a></li>
                                            <li><a href="javascript:void(0);">HTML5</a></li>
                                            <li><a href="javascript:void(0);">Infographics</a></li>
                                            <li><a href="javascript:void(0);">Wordpress Development</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--  ************************* Footer Start Here ************************** -->

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




</body>

<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/assets/js/script.js"></script>

</html>

<style>
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}

.card .body {
    color: #444;
    padding: 20px;
    font-weight: 400;
}

.card .header {
    color: #444;
    padding: 20px;
    position: relative;
    box-shadow: none;
}

.single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.single_post .body {
    padding: 30px
}

.single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px;
    margin-bottom: 30px
}

.single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.single_post .img-post:hover .social_share {
    display: block
}

.single_post .footer {
    padding: 0 30px 30px 30px
}

.single_post .footer .actions {
    display: inline-block
}

.single_post .footer .stats {
    cursor: default;
    list-style: none;
    padding: 0;
    display: inline-block;
    float: right;
    margin: 0;
    line-height: 35px
}

.single_post .footer .stats li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    display: inline-block;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1;
    margin: 0 0 0 2em;
    padding: 0 0 0 2em;
    text-transform: uppercase;
    font-size: 13px
}

.single_post .footer .stats li a {
    color: #777
}

.single_post .footer .stats li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0
}

.single_post h3 {
    font-size: 20px;
    text-transform: uppercase
}

.single_post h3 a {
    color: #242424;
    text-decoration: none
}

.single_post p {
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    margin: 0
}

.single_post .blockquote p {
    margin-top: 0 !important
}

.single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.single_post2 {
    overflow: hidden
}

.single_post2 .content {
    margin-top: 15px;
    margin-bottom: 15px;
    padding-left: 80px;
    position: relative
}

.single_post2 .content .actions_sidebar {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 60px
}

.single_post2 .content .actions_sidebar a {
    display: inline-block;
    width: 100%;
    height: 60px;
    line-height: 60px;
    margin-right: 0;
    text-align: center;
    border-right: 1px solid #e4eaec
}

.single_post2 .content .title {
    font-weight: 100
}

.single_post2 .content .text {
    font-size: 15px
}

.right-box .categories-clouds li {
    display: inline-block;
    margin-bottom: 5px
}

.right-box .categories-clouds li a {
    display: block;
    border: 1px solid;
    padding: 6px 10px;
    border-radius: 3px
}

.right-box .instagram-plugin {
    overflow: hidden
}

.right-box .instagram-plugin li {
    float: left;
    overflow: hidden;
    border: 1px solid #fff
}

.comment-reply li {
    margin-bottom: 15px
}

.comment-reply li:last-child {
    margin-bottom: none
}

.comment-reply li h5 {
    font-size: 18px
}

.comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.comment-reply .list-inline li a {
    font-size: 13px
}

@media (max-width: 640px) {
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }

    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }

    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }

    .blog-page .single_post .footer .stats {
        float: none;
        margin-top: 10px
    }

    .blog-page .single_post .body,
    .blog-page .single_post .footer {
        padding: 30px
    }
}
</style><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/blogDetails.blade.php ENDPATH**/ ?>