<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=1");
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

                                <h1 class="breadcrumb-main-title">Ürünler</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Ürünler</li>
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


                                            <!-- Portfolio Section -->
                                            <div class="portfolio-section">


                                                <!-- isotope Filter -->
                                                <div class="isotope-filter">
                                                    <!-- isotope Filter Container -->
                                                    <div class="isotope-filter-container">

                                                       <a href="#" title="All" data-filter="*" class="active-item">Hepsi</a>
                                                       <?php 
                                                       $kategori=$db->prepare("SELECT * from kategoriler order by kategori_sira");
                                                       $kategori->execute();
                                                       while($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) {
                                                           ?>
                                                           <a href="#" title="<?php echo $kategoricek['kategori_ad'] ?>" data-filter=".isotope-<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></a>
                                                           <?php } ?>

                                                       </div><!-- /End isotope Filter Container -->
                                                   </div><!-- /End isotope Filter -->


                                                   <!-- Portfolio items Wrapper -->
                                                   <div class="portfolio-items-wrapper portfolio-col-5 isotope-masonry">
                                                       <?php while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { 
                                                        $resimsor=$db->prepare("SELECT * from resim where resim_urun=:resim_urun");
                                                        $resimsor->execute(array(
                                                           'resim_urun' => $uruncek['urun_id']
                                                       ));
                                                       $resimcek=$resimsor->fetch(PDO::FETCH_ASSOC);?>

                                                       <!-- Portfolio item -->
                                                       <article class="portfolio-item isotope-item isotope-<?php echo $uruncek['urun_kategori'] ?>">
                                                        <!-- gfort owl Slider Item -->
                                                        <div class="gfort-owl-slider-item">
                                                            <!-- Shop item -->
                                                            <div class="shop-item">
                                                                <!-- Shop item Container -->
                                                                <div class="shop-item-container">


                                                                    <!-- Shop item Media -->
                                                                    <div class="shop-item-media">
                                                                        <a href="<?=seo('urunler-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"]?>" title="H<?php echo $uruncek['urun_baslik'] ?>" class="scale-hover">
                                                                            <img src="trex/<?php echo $resimcek['resim_link'] ?>" alt="<?php echo $uruncek['urun_baslik'] ?>" />
                                                                        </a>
                                                                    </div><!-- /End Shop item Media -->


                                                                    <!-- Shop item Body -->
                                                                    <div class="shop-item-body">


                                                                        <!-- Shop item Title -->
                                                                        <h2 style="height: 40px;" class="shop-item-title">
                                                                            <a style="font-size: 15px;" href="<?=seo('urunler-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"]?>" title="<?php echo $uruncek['urun_baslik']; ?>"><?php 
                                                                            $urunkarakter = strlen( $uruncek['urun_baslik'] );
                                                                            if ( $urunkarakter > 40 )
                                                                            {
                                                                                echo mb_substr($uruncek['urun_baslik'], 0,40, 'UTF-8')."...";
                                                                            } else {
                                                                                echo $uruncek['urun_baslik']; 
                                                                            } ?></a>
                                                                        </h2><!-- /End Shop item Title -->
                                                                        <!-- Shop item Button -->
                                                                        <div class="shop-item-button">
                                                                            <a href="<?=seo('urunler-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"]?>"><i class="fa fa-plus"></i>İncele</a>
                                                                        </div><!-- /End Shop item Button -->


                                                                    </div><!-- /End Shop item Body -->


                                                                </div><!-- /End Shop item Container -->
                                                            </div><!-- /End Shop item -->
                                                        </div><!-- /End gfort owl Slider Item -->
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

                <?php include 'inc/sayfasidebar.php'; ?>


            </div><!-- /End Main Content Container -->
        </div><!-- /End Main Content -->


    </div><!-- /End Page Body -->


    <?php include 'inc/footer.php'; ?>    