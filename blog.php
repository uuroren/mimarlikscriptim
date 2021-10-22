<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=4");
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);
?>
<title><?php echo $metakeyprint['meta_title'] ?></title>
<meta name="description" content="<?php echo $metakeyprint['meta_descr'] ?>">
<meta name="keywords" content="<?php echo $metakeyprint['meta_keyword'] ?>">
</head>
<?php 
$sayfada = 12; // sayfada gösterilecek içerik miktarını belirtiyoruz.
$sorgu=$db->prepare("SELECT * from blog");
$sorgu->execute();
$toplam_icerik=$sorgu->rowCount();
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
                  // eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
                // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1; 
                // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
$limit = ($sayfa - 1) * $sayfada;
$blogsor1=$db->prepare("SELECT * from blog order by blog_tarih DESC limit $limit,$sayfada");
$blogsor1->execute();

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

                                <h1 class="breadcrumb-main-title">Haber / Duyuru</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Haber / Duyuru</li>
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
                                            <div class="blog-items-wrapper blog-col-3">

                                                <?php 
                                                while($blogcek1=$blogsor1->fetch(PDO::FETCH_ASSOC)) { 
                                                    $blogicerik=mb_substr(strip_tags($blogcek1['blog_detay']), 0, 350, 'UTF-8')."...";
                                                    ?>
                                                    <!-- Blog item -->
                                                    <article class="blog-item format-standard">
                                                        <!-- Blog item Container -->
                                                        <div class="blog-item-container">


                                                            <!-- Blog item Media -->
                                                            <div class="blog-item-media">
                                                                <a href="<?=seo('blog-'.$blogcek1["blog_baslik"]).'-'.$blogcek1["blog_id"]?>" title="<?php echo $blogcek1['blog_baslik']; ?>" class="overlay-hover-2x scale-hover">
                                                                    <img src="trex/<?php echo $blogcek1['blog_resim']; ?>" alt="<?php echo $blogcek1['blog_baslik']; ?>e" />
                                                                </a>
                                                            </div><!-- /End Blog item Media -->
                                                            <!-- Blog item Body -->
                                                            <div style="padding: 0 21px 4px;" class="blog-item-body">
                                                                <!-- Blog item Title -->
                                                                <h2 style="font-size: 14px; margin: 5px auto 0;" class="blog-item-title">
                                                                    <a href="<?=seo('blog-'.$blogcek1["blog_baslik"]).'-'.$blogcek1["blog_id"]?>" title="You must do the things you think you can't do"><?php 
                                                                    $karakter = strlen( $blogcek1['blog_baslik'] );
                                                                    if ( $karakter > 45 )
                                                                    {
                                                                        echo mb_substr( $blogcek1['blog_baslik'], 0, 45, 'UTF-8' ) . '...';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo $blogcek1['blog_baslik'];
                                                                    } ?></a>
                                                                </h2><!-- /End Blog item Title -->
                                                            </div><!-- /End Blog item Body -->
                                                        </div><!-- /End Blog item Container -->
                                                    </article><!-- /End Blog item -->
                                                    <?php } ?>
                                                </div><!-- /End Blog items Wrapper -->

                                                <!-- Navigation Block -->
                                                <div class="gfort-navigation-block">
                                                    <nav aria-label="Page navigation">
                                                       <ul class="pagination">
                                                        <?php
                                                        $s=0;
                                                        while ($s < $toplam_sayfa) {
                                                            $s++; ?>
                                                            <?php 
                                                            if ($s==$sayfa) {?>
                                                            <li class="active">
                                                                <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                                            </li>
                                                            <?php } else {?>
                                                            <li>
                                                                <a href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                                                            </li>
                                                            <?php   }
                                                        }
                                                        ?>
                                                    </ul>
                                                </nav>
                                            </div><!-- /End Navigation Block -->


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