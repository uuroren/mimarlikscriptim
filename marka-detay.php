<?php 
include 'inc/head.php';
include 'inc/menu.php';
$hizmetsor=$db->prepare("SELECT * from markalar where hizmet_id=:hizmet_id order by hizmet_id ASC limit 25");
$hizmetsor->execute(array(
   'hizmet_id' => $_GET['hizmet_id']
));
$hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $hizmetcek['hizmet_title'] ?></title>
<meta name="description" content="<?php echo $hizmetcek['hizmet_descr'] ?>">
<meta name="keywords" content="<?php echo $hizmetcek['hizmet_keyword'] ?>">
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

                    <h1 class="breadcrumb-main-title">Hizmet Verdiğimiz Markalar</h1>

                </div><!-- /End container -->
            </div><!-- /End Breadcrumb Title -->


            <!-- Breadcrumb Block -->
            <div class="breadcrumb-block">
                <!-- container -->
                <div class="container">

                    <ol class="breadcrumb">
                        <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                        <li class="active"><?php echo $hizmetcek['hizmet_baslik']; ?></li>
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
                                                                <h2 class="blog-item-title"><?php echo $hizmetcek['hizmet_baslik']; ?></h2><!-- /End Blog item Title -->
                                                                <!-- Blog item Description -->
                                                                <div class="blog-item-description">
                                                                    <img style="width: 100%;" src="trex/<?php echo $hizmetcek['hizmet_resim']; ?>" class="img-responsive" alt="" />
                                                                    <p><?php echo $hizmetcek['hizmet_icerik']; ?></p>
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
                                    <h2 class="section-main-title">Diğer Markalar</h2>
                                </div><!-- /End Section Title -->
                            </div><!-- /End col-md-12 -->


                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- gfort owl Slider -->
                                <div class="gfort-owl-slider recent-blog-posts owl-carousel owl-theme wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.25s" data-slider-items="5" data-slider-items-md="3" data-slider-items-sm="2" data-slider-arrows="true" data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="10">

                                  <?php 
                                  $hizmetarticle=$db->prepare("SELECT * from markalar");
                                  $hizmetarticle->execute(array(0));
                                  while ($hizmetarticleprint=$hizmetarticle->fetch(PDO::FETCH_ASSOC)) { ?>

                                  <!-- Image Block -->
                                  <div class="gfort-block image-block gfort-block-style-5" data-wow-duration="1.5s" data-wow-delay="0.25s">
                                    <!-- gfort Block Container -->
                                    <div class="gfort-block-container">


                                        <!-- gfort Block Head -->
                                        <div class="gfort-block-head">
                                            <a href="<?=seo('hizmet-'.$hizmetarticleprint["hizmet_baslik"]).'-'.$hizmetarticleprint["hizmet_id"]?>" class="scale-hover overlay-hover-2x">
                                                <img style="height: 170px;" src="trex/<?php echo $hizmetarticleprint['hizmet_resim']; ?>" alt="<?php echo $hizmetarticleprint['hizmet_baslik'] ?>">
                                            </a>
                                        </div><!-- /End gfort Block Head -->


                                        <!-- gfort Block Body -->
                                        <div style="    
                                        left: 0;
                                        bottom: 0;
                                        z-index: 10;
                                        margin: 7px;
                                        border-radius: 2px;
                                        padding: 4px 5px;
                                        position: absolute;
                                        background-color: #fff;" class="gfort-block-body">
                                        <!-- gfort Block Title -->
                                        <div class="gfort-block-title">
                                            <h4><?php echo $hizmetarticleprint['hizmet_baslik'] ?></h4>
                                        </div><!-- /End gfort Block Title -->
                                    </div><!-- /End gfort Block Body -->


                                </div><!-- /End gfort Block Container -->
                            </div><!-- /End Image Block -->
                            <?php } ?>

                        </div><!-- /End gfort owl Slider -->
                    </div><!-- /End col-md-12 -->


                </div><!-- /End row -->
            </div><!-- /End container -->
        </div><!-- /End Section Container -->
    </div><!-- /End gfort Section -->
</div><!-- /End Page Body -->


<?php include 'inc/footer.php'; ?>    