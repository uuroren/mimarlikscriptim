<?php 
include 'inc/head.php';
include 'inc/menu.php';
$sayfasor=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id order by sayfa_id ASC limit 25");
$sayfasor->execute(array(
   'sayfa_id' => $_GET['sayfa_id']
));
$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $sayfacek['sayfa_title'] ?></title>
<meta name="description" content="<?php echo $sayfacek['sayfa_descr'] ?>">
<meta name="keywords" content="<?php echo $sayfacek['sayfa_keyword'] ?>">
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

                                <h1 class="breadcrumb-main-title">Sayfa</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active"><?php echo $sayfacek['sayfa_baslik']; ?></li>
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
                                                                <h2 class="blog-item-title"><?php echo $sayfacek['sayfa_baslik']; ?></h2><!-- /End Blog item Title -->
                                                                <!-- Blog item Description -->
                                                                <div class="blog-item-description">

                                                                    <p><?php echo $sayfacek['sayfa_icerik']; ?></p>

                                                                </div><!-- /End Blog item Description -->


                                                            </div><!-- /End Blog item Body -->


                                                        </div><!-- /End Blog item Container -->
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
                                                    </article><!-- /End Blog item -->


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


        </div><!-- /End Page Body -->


        <?php include 'inc/footer.php'; ?>    