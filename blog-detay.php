<?php 
include 'inc/head.php';
include 'inc/menu.php';
$blogsor=$db->prepare("SELECT * from blog where blog_id=:blog_id");
$blogsor->execute(array(
 'blog_id' => $_GET['blog_id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $blogcek['blog_title'] ?></title>
<meta name="description" content="<?php echo $blogcek['blog_descr'] ?>">
<meta name="keywords" content="<?php echo $blogcek['blog_keyword'] ?>">
</head>
<!-- Page Title Section
    ==================================================================== -->
    <div class="page-title-section page-title-section-wide grey-background-color">
        <!-- Section Container -->
        <div class="section-container">


            <!-- Breadcrumb Title -->
            <div class="breadcrumb-title">
                <!-- container -->
                <div class="container">

                    <h1 class="breadcrumb-main-title">Haber / Duyuru</h1>

                </div><!-- /End container -->
            </div><!-- /End Breadcrumb Title -->


            <!-- Breadcrumb Block -->
            <div class="breadcrumb-block">
                <!-- container -->
                <div class="container">

                    <ol class="breadcrumb">
                        <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                        <li class="active"><?php echo $blogcek['blog_baslik'] ?></li>
                    </ol>

                </div><!-- /End container -->
            </div><!-- /End Breadcrumb block -->


        </div><!-- /End Section Container -->
    </div><!-- /End Page Title Section -->


            <!-- Page Body
                ==================================================================== -->
                <div class="page-body">


                <!-- Main Content
                    ================================================================ -->
                    <div class="main-content">
                        <!-- Main Content Container -->
                        <div class="main-content-container">



           <!-- Page Body (Left Sidebar)
            ==================================================================== -->
            <div class="page-body page-left-sidebar">


                <!-- Main Content
                    ================================================================ -->
                    <div class="main-content">
                        <!-- Main Content Container -->
                        <div class="main-content-container">


                            <!-- gfort Section -->
                            <div class="gfort-section">
                                <!-- Section Container -->
                                <div class="section-container">
                                    <!-- container -->
                                    <div class="container">
                                        <!-- row -->
                                        <div class="row">


                                            <!-- col-md-12 -->
                                            <div class="col-md-12">


                                                <!-- Blog items Wrapper -->
                                                <div class="blog-items-wrapper blog-single-item">


                                                    <!-- Blog item -->
                                                    <article class="blog-item format-standard">
                                                        <!-- Blog item Container -->
                                                        <div class="blog-item-container">

                                                            <!-- Blog item Body -->
                                                            <div class="blog-item-body">


                                                                <!-- Blog item Title -->
                                                                <h2 class="blog-item-title"><?php echo $blogcek['blog_baslik'] ?></h2><!-- /End Blog item Title -->
                                                                <!-- Blog item Description -->
                                                                <div class="blog-item-description">
                                                                    <img src="trex/<?php echo $blogcek['blog_resim']; ?>" class="img-responsive" alt="" />
                                                                    <p><?php echo $blogcek['blog_detay']; ?></p>
                                                                </div><!-- /End Blog item Description -->


                                                            </div><!-- /End Blog item Body -->


                                                        </div><!-- /End Blog item Container -->
                                                    </article><!-- /End Blog item -->
                                                    <!-- col-md-12 -->
                                                    <div class="col-md-12">
                                                        <!-- Social Icons Block -->
                                                        <div class="social-icons-block icons-text icons-lg icons-style-2 text-center">
                                                            <ul>

                                                                <li>
                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>" title="Facebook">
                                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>">
                                                                        <span>Paylaş</span>
                                                                        <span>Facebook</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://plus.google.com/share?url=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>" target="_blank" title="Google Plus">
                                                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="https://plus.google.com/share?url=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>" target="_blank">
                                                                        <span>Paylaş</span>
                                                                        <span>Google</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="https://twitter.com/intent/tweet?url=http://<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>" title="Twitter">
                                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="https://twitter.com/intent/tweet?url=http://<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>">
                                                                        <span>Paylaş</span>
                                                                        <span>Twitter</span>
                                                                    </a>
                                                                </li>


                                                                <li>
                                                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>" title="linkedin">
                                                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<? echo $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'REQUEST_URI' ]; ?>">
                                                                        <span>Paylaş</span>
                                                                        <span>Linkedin</span>
                                                                    </a>
                                                                </li>



                                                            </ul>
                                                        </div><!-- /End Social Icons Block -->
                                                    </div><!-- /End col-md-12 -->

                                                </div><!-- /End Blog items Wrapper -->



                                            </div><!-- /End col-md-12 -->


                                        </div><!-- /End row -->
                                    </div><!-- /End container -->
                                </div><!-- /End Section Container -->
                            </div><!-- /End gfort Section -->


                        </div><!-- /End Main Content Container -->
                    </div><!-- /End Main Content -->

                    <?php include 'inc/sayfasidebar.php'; ?>


                </div><!-- /End Main Content Container -->
            </div><!-- /End Main Content -->

            <!-- gfort Section -->
            <div style="margin-top: -50px;" class="gfort-section">
                <!-- Section Container -->
                <div class="section-container">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">


                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- Section Title -->
                                <div class="section-title text-center">
                                    <h2 class="section-main-title">Benzer Konular</h2>
                                </div><!-- /End Section Title -->
                            </div><!-- /End col-md-12 -->


                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- gfort owl Slider -->
                                <div class="gfort-owl-slider recent-blog-posts owl-carousel owl-theme wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.25s" data-slider-items="5" data-slider-items-md="3" data-slider-items-sm="2" data-slider-arrows="true" data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="10">

                                   <?php 
                                   $blog=$db->prepare("SELECT * from blog order by blog_id");
                                   $blog->execute();
                                   while($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) { ?>
                                   <!-- gfort owl Slider Item -->
                                   <div class="gfort-owl-slider-item">
                                    <!-- Blog item -->
                                    <div class="blog-item format-standard">
                                        <!-- Blog item Container -->
                                        <div class="blog-item-container">


                                            <!-- Blog item Media -->
                                            <div class="blog-item-media">
                                                <a href="<?=seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"]?>" title="If opportunity doesn't knock, build a door" class="overlay-hover-2x scale-hover">
                                                    <img style="height: 157px; width: 278px;" src="trex/<?php echo $blogcek['blog_resim']; ?>" alt="Article Image" />
                                                </a>
                                            </div><!-- /End Blog item Media -->


                                            <!-- Blog item Body -->
                                            <div class="blog-item-body">


                                                <!-- Blog item Meta -->
                                                <div class="blog-item-meta">
                                                    <span class="item-meta-format">
                                                        <a href="#">
                                                            <i class="fa fa-file-text-o"></i>
                                                            <i class="fa fa-file-text-o"></i>
                                                        </a>
                                                    </span>
                                                    <span class="item-meta-date">
                                                        <time datetime="2016-05-17"><?php echo substr($blogcek['blog_tarih'], 0,10); ?></time>
                                                    </span>
                                                </div><!-- /End Blog item Meta -->


                                                <!-- Blog item Title -->
                                                <p style="height: 80px;" class="blog-item-title">
                                                    <a href="<?=seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"]?>" title="<?php echo $blogcek['blog_baslik']; ?>"><?php 
                                                    $karakter = strlen( $blogcek['blog_baslik'] );
                                                    if ( $karakter > 35 )
                                                    {
                                                        echo mb_substr( $blogcek['blog_baslik'], 0, 35, 'UTF-8' ) . '...';
                                                    }
                                                    else
                                                    {
                                                        echo $blogcek['blog_baslik'];
                                                    }
                                                    ?></a>
                                                </p><!-- /End Blog item Title -->

                                                <!-- Blog item Read More Button -->
                                                <div class="blog-item-read-btn">
                                                    <a href="<?=seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"]?>">Yazıyı Oku <i class="fa fa-long-arrow-right"></i></a>
                                                </div><!-- /End Blog item Read More Button -->


                                            </div><!-- /End Blog item Body -->


                                        </div><!-- /End Blog item Container -->
                                    </div><!-- /End Blog item -->
                                </div><!-- /End gfort owl Slider Item -->

                                <?php } ?>
                                <!-- gfort owl Slider Item -->

                            </div><!-- /End gfort owl Slider -->
                        </div><!-- /End col-md-12 -->


                    </div><!-- /End row -->
                </div><!-- /End container -->
            </div><!-- /End Section Container -->
        </div><!-- /End gfort Section -->
    </div><!-- /End Page Body -->


    <?php include 'inc/footer.php'; ?>    