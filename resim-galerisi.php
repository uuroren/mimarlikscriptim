<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=6");
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

                                <h1 class="breadcrumb-main-title">PROJE RESİMLERİ</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">PROJE RESİMLERİ</li>
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



             <!-- Page Body
                ==================================================================== -->
                <div class="page-body">


                <!-- Main Content
                    ================================================================ -->
                    <div class="main-content">
                        <!-- Main Content Container -->
                        <div class="main-content-container">


                            <!-- gfort Section -->
                            <div style="margin-top: -60px;" class="gfort-section grey-background-color">
                                <!-- Section Container -->
                                <div class="section-container">
                                    <!-- container -->
                                    <div class="container">
                                        <!-- row -->
                                        <div class="row">

                                            <!-- col-md-12 -->
                                            <div class="col-md-12">
                                                <!-- Gallery items Wrapper -->
                                                <div class="gallery-items-wrapper gallery-col-5 isotope-masonry">

                                                 <?php 
                                                 $resimgaleri=$db->prepare("SELECT * from resimgaleri order by resim_id");
                                                 $resimgaleri->execute();
                                                 while($resimgalericek=$resimgaleri->fetch(PDO::FETCH_ASSOC)) { ?>
                                                 <!-- Gallery item -->
                                                 <div class="gallery-item isotope-item">
                                                    <a href="trex/<?php echo $resimgalericek['resim_link'] ?>" class="scale-hover overlay-hover-2x" data-gfort-lightbox data-gfort-lightbox-group="gallery-4" title="<?php echo $resimgalericek['resim_baslik'] ?>">
                                                        <img style="height: 130px;" src="trex/<?php echo $resimgalericek['resim_link'] ?>" alt="<?php echo $resimgalericek['resim_baslik'] ?>" />
                                                    </a>
                                                </div><!-- /End Gallery item -->
                                                <?php } ?>
                                            </div><!-- /End Gallery items Wrapper -->
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


    </div><!-- /End Page Body -->


    <?php include 'inc/footer.php'; ?>    