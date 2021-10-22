<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=5");
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $metakeyprint['meta_title'] ?></title>
<meta name="description" content="<?php echo $metakeyprint['meta_descr'] ?>">
<meta name="keywords" content="<?php echo $metakeyprint['meta_keyword'] ?>">
</head>
<?php $urunsor=$db->prepare("SELECT * from urunler order by urun_id DESC");
$urunsor->execute(); ?>
            <!-- Page Title Section
                ==================================================================== -->
                <div class="page-title-section page-title-section-wide grey-background-color">
                    <!-- Section Container -->
                    <div class="section-container">


                        <!-- Breadcrumb Title -->
                        <div class="breadcrumb-title">
                            <!-- container -->
                            <div class="container">

                                <h1 class="breadcrumb-main-title">SSS</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">SIK SORULAN SORULAR</li>
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


                                        <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <!-- gfort Accordion -->
                                            <div class="gfort-accordion gfort-accordion-style-1">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                                    <?php 
                                                    $ssssor=$db->prepare("SELECT * from sss order by sss_sira ASC");
                                                    $ssssor->execute();
                                                    while($ssscek=$ssssor->fetch(PDO::FETCH_ASSOC)) { ?> 
                                                    <!-- Panel 1 -->
                                                    <div class="panel panel-default">

                                                        <div class="panel-heading" role="tab" id="heading<?php echo $ssscek['sss_id']; ?>">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $ssscek['sss_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $ssscek['sss_id']; ?>"><?php echo $ssscek['sss_soru']; ?></a>
                                                            </h4>
                                                        </div>

                                                        <div id="collapse<?php echo $ssscek['sss_id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $ssscek['sss_id']; ?>">
                                                            <div class="panel-body">
                                                                <p> <?php echo $ssscek['sss_cevap']; ?></p>
                                                            </div>
                                                        </div>

                                                    </div><!-- /End Panel 1 -->
                                                    <?php } ?>
                                                </div>
                                            </div><!-- /End gfort Accordion -->
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