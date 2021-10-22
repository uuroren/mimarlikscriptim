<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=9");
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $metakeyprint['meta_title'] ?></title>
<meta name="description" content="<?php echo $metakeyprint['meta_descr'] ?>">
<meta name="keywords" content="<?php echo $metakeyprint['meta_keyword'] ?>">
</head>
<?php 
$hizmetsor=$db->prepare("SELECT * from markalar Limit 10");
$hizmetsor->execute();
?>
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
                                    <li class="active">Markalar</li>
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
            <div class="page-body">


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


                                                <!-- Portfolio Section -->
                                                <div class="portfolio-section">

                                                    <!-- Portfolio items Wrapper -->
                                                    <div class="portfolio-items-wrapper portfolio-col-4 portfolio-no-margin isotope-masonry">

                                                     <?php 
                                                     $hizmetarticle=$db->prepare("SELECT * from markalar");
                                                     $hizmetarticle->execute(array(0));
                                                     while ($hizmetarticleprint=$hizmetarticle->fetch(PDO::FETCH_ASSOC)) { ?>

                                                     <!-- Portfolio item -->
                                                     <article style="margin-bottom: -60px;" class="portfolio-item isotope-item isotope-design">
                                                        <!-- Portfolio item Container -->
                                                        <div class="gfort-block image-block gfort-block-style-5" data-wow-duration="1.5s" data-wow-delay="0.25s"">
                                                            <!-- gfort Block Container -->
                                                            <div class="portfolio-item-container">


                                                                <!-- gfort Block Head -->
                                                                <div class="gfort-block-head">
                                                                    <a href="<?=seo('markalar-'.$hizmetarticleprint["marka_baslik"]).'-'.$hizmetarticleprint["marka_id"]?>" class="scale-hover overlay-hover-2x">
                                                                        <img style="height: 170px;" src="trex/<?php echo $hizmetarticleprint['marka_resim']; ?>" alt="<?php echo $hizmetarticleprint['marka_baslik'] ?>">
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
                                                                background-color: #ffffffba;" class="gfort-block-body">
                                                                <!-- gfort Block Title -->
                                                                <div class="gfort-block-title">
                                                                    <h4><?php echo $hizmetarticleprint['marka_baslik'] ?></h4>
                                                                </div><!-- /End gfort Block Title -->
                                                            </div><!-- /End gfort Block Body -->


                                                        </div><!-- /End gfort Block Container -->
                                                    </div><!-- /End Portfolio item Container -->
                                                </article><!-- /End Portfolio item -->
                                                <?php } ?>
                                            </div><!-- /End Portfolio items Wrapper -->


                                        </div><!-- /End Portfolio Section -->

                                    </div><!-- /End col-md-12 -->


                                </div><!-- /End row -->
                            </div><!-- /End container -->
                        </div><!-- /End Section Container -->
                    </div><!-- /End gfort Section -->

                </div><!-- /End Main Content Container -->
            </div><!-- /End Main Content -->



        </div><!-- /End Main Content Container -->
    </div><!-- /End Main Content -->


</div><!-- /End Page Body -->


<?php include 'inc/footer.php'; ?>    