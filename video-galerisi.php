<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=7");
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

                                <h1 class="breadcrumb-main-title">PROJE VİDEOLARI</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">PROJE VİDEOLARI</li>
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
                         <div class="gfort-section">
                            <!-- Section Container -->
                            <div class="section-container">
                                <!-- container -->
                                <div class="container">
                                    <!-- row -->
                                    <div class="row">
                                        <?php 
                                        $vidsor=$db->prepare("SELECT * from videogaleri order by video_id DESC");
                                        $vidsor->execute(array(0)); 
                                        while ($vidprint=$vidsor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <!-- col-md-6 -->
                                        <div class="col-md-4">

                                            <!-- Multimedia Block -->
                                            <div class="gfort-block multimedia-block">
                                                <!-- gfort Block Container -->
                                                <div class="gfort-block-container">


                                                    <!-- gfort Block Head -->
                                                    <div class="gfort-block-head">
                                                        <iframe src="https://www.youtube.com/embed/<?php echo $vidprint['video_link']; ?>" allowfullscreen></iframe>
                                                    </div><!-- /End gfort Block Head -->


                                                </div><!-- /End gfort Block Container -->
                                            </div><!-- /End Multimedia Block -->


                                        </div><!-- /End col-md-6 -->
                                        <?php } ?>

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