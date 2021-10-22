<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=3");
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $metakeyprint['meta_title'] ?></title>
<meta name="description" content="<?php echo $metakeyprint['meta_descr'] ?>">
<meta name="keywords" content="<?php echo $metakeyprint['meta_keyword'] ?>">
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

                                <h1 class="breadcrumb-main-title">HİZMET BÖLGELERİ</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">HİZMET BÖLGELERİ</li>
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
                                                    <div class="portfolio-items-wrapper portfolio-col-5 portfolio-no-margin isotope-masonry">

                                                      <?php 
                                                      $projearticle=$db->prepare("SELECT * from projeler");
                                                      $projearticle->execute(array(0));
                                                      while ($projearticleprint=$projearticle->fetch(PDO::FETCH_ASSOC)) {
                                                         ?>

                                                         <!-- col-md-4 col-sm-6 -->
                                                         <div style="padding-right:2px;padding-left:2px;" class="col-md-3 col-sm-3">
                                                            <!-- Image Block -->
                                                            <div style="margin-bottom: 0px" class="gfort-block image-block">
                                                                <!-- gfort Block Container -->
                                                                <div class="gfort-block-container">


                                                                    <!-- gfort Block Head -->
                                                                    <div style="margin-bottom: 2px;" class="gfort-block-head">
                                                                        <a href="<?=seo('bolge-'.$projearticleprint["proje_baslik"]).'-'.$projearticleprint["proje_id"]?>" class="scale-hover overlay-hover-2x">
                                                                            <img style="height: 160px; width: 300px;" src="trex/<?php echo $projearticleprint['proje_resim']; ?>" alt="<?php echo $projearticleprint['proje_baslik'] ?>">
                                                                        </a>
                                                                    </div><!-- /End gfort Block Head -->


                                                                    <!-- gfort Block Body -->
                                                                    <div class="gfort-block-body">


                                                                        <!-- gfort Block Title -->
                                                                        <div style="margin-bottom: 5px;height: 41px;" class="gfort-block-title">
                                                                            <h4><?php echo $projearticleprint['proje_baslik'] ?></h4>
                                                                        </div><!-- /End gfort Block Title -->
                                                                    </div><!-- /End gfort Block Body -->
                                                                </div><!-- /End gfort Block Container -->
                                                            </div><!-- /End Image Block -->
                                                        </div><!-- /End col-md-4 col-sm-6 -->
                                                        <!-- col-md-4 col-sm-6 -->
                                                        <div class="mobile-clearfix"></div>
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