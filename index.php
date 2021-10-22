<?php 
include 'inc/head.php';
include 'inc/menu.php';
include 'inc/slider.php'; 
?>
<title><?php echo $settingsprint['ayar_title'] ?></title>
<meta name="description" content="<?php echo $settingsprint['ayar_description'] ?>">
<meta name="keywords" content="<?php echo $settingsprint['ayar_keywords'] ?>">
<!-- gfort Section -->
<div class="gfort-section fullwidth-section pt-0 pb-0">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <?php if ($widgetprint['widget_welcome1']==1) { ?>
                <!-- col-md-12 -->
                <div class="col-md-12">
                    <!-- Call To Action Block -->
                    <div class="cta-block cta-block-main mb-0">
                        <!-- Call To Action Block Container -->
                        <div class="cta-block-container">


                            <!-- Call To Action Block Body -->
                            <div class="cta-block-body">
                                <h3><?php echo $widgetprint['widget_bwelcome1']; ?></h3>
                            </div><!-- /End Call To Action Block Body -->

                        </div><!-- /End Call To Action Block Container -->
                    </div><!-- /End Call To Action Block -->
                </div><!-- /End col-md-12 -->
                <?php } ?>
            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
<?php
if ($widgetprint['widget_hizmet']==1) { ?>
<!-- gfort Section -->
<div class="gfort-section">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

              <!-- col-md-12 -->
              <div style="margin-top: -50px;" class="col-md-12">
                <!-- Section Title -->
                <div class="section-title text-center">
                    <h3 class="section-main-title"><?php echo $widgetprint['widget_bhizmet']; ?></h3>
                </div><!-- /End Section Title -->
            </div><!-- /End col-md-12 -->
            <?php 
            $hizmetarticle=$db->prepare("SELECT * from hizmetler where hizmet_vitrin=1 Limit 8");
            $hizmetarticle->execute(array(0));
            while ($hizmetarticleprint=$hizmetarticle->fetch(PDO::FETCH_ASSOC)) { 
                $hizmeticerik=mb_substr(strip_tags($hizmetarticleprint['hizmet_icerik']), 0, 60, 'UTF-8')."...";?>

                <!-- col-md-4 col-sm-6 -->
                <div class="col-md-3 col-sm-4">
                    <!-- Image Block -->
                    <div class="gfort-block image-block">
                        <!-- gfort Block Container -->
                        <div class="gfort-block-container">


                            <!-- gfort Block Head -->
                            <div class="gfort-block-head">
                                <a href="<?=seo('hizmet-'.$hizmetarticleprint["hizmet_baslik"]).'-'.$hizmetarticleprint["hizmet_id"]?>" class="scale-hover overlay-hover-2x">
                                    <img style="height: 160px; width: 300px;" src="trex/<?php echo $hizmetarticleprint['hizmet_resim']; ?>" alt="<?php echo $hizmetarticleprint['hizmet_baslik'] ?>">
                                </a>
                            </div><!-- /End gfort Block Head -->


                            <!-- gfort Block Body -->
                            <div class="gfort-block-body">


                                <!-- gfort Block Title -->
                                <div class="gfort-block-title">
                                    <h4><?php echo $hizmetarticleprint['hizmet_baslik']; ?></h4>
                                </div><!-- /End gfort Block Title -->


                                <!-- gfort Block Content -->
                                <div class="gfort-block-content">
                                    <p><?php echo $hizmeticerik; ?></p>
                                </div><!-- /End gfort Block Content -->

                            </div><!-- /End gfort Block Body -->
                        </div><!-- /End gfort Block Container -->
                    </div><!-- /End Image Block -->
                </div><!-- /End col-md-4 col-sm-6 -->
                <!-- col-md-4 col-sm-6 -->
                <div class="mobile-clearfix"></div>

                <?php } ?>

            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End Section Container -->

</div><!-- /End gfort Section -->
<div style="margin-bottom: 0px; margin-top: -50px;" class="text-center">
    <a href="hizmetler" class="btn btn-gfort btn-gfort-md">TÜM HİZMETLER</a>
</div>

<?php } ?> 
<!-- gfort Section -->
<div style="padding-top: 20px;" class="gfort-section">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
               <!-- col-md-8 -->
               <div class="col-md-12">


                   <!-- Text Block -->
                   <div class="gfort-block text-block">
                    <!-- gfort Block Container -->
                    <div class="gfort-block-container">

                        <!-- gfort Block Body -->
                        <div class="gfort-block-body">


                            <!-- gfort Block Content -->
                            <div class="gfort-block-content">

                                <p><?php echo $widgetprint['widget_html']; ?></p>

                            </div><!-- /End gfort Block Content -->


                        </div><!-- /End gfort Block Body -->

                    </div><!-- /End gfort Block Container -->
                </div><!-- /End Text Block -->



            </div><!-- /End col-md-8 -->


        </div><!-- /End row -->
    </div><!-- /End container -->
</div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
<?php 
if ($widgetprint['widget_urun']==1) { ?>
<!-- gfort Section -->
<div style="margin-top: -20px; margin-bottom: 20px;padding-top: 0px;" class="gfort-section">
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
                        <h2 class="section-main-title"><?php echo $widgetprint['widget_burun']; ?></h2>
                    </div><!-- /End Section Title -->
                </div><!-- /End col-md-12 -->


                <!-- col-md-12 -->
                <div class="col-md-12">
                    <!-- gfort owl Slider -->
                    <div class="gfort-owl-slider recent-portfolio-projects owl-carousel owl-theme" data-slider-items="5" data-slider-items-md="3" data-slider-items-sm="2" data-slider-arrows="true" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="30">
                      <?php 
                      $urunsor=$db->prepare("SELECT * from urunler where urun_vitrin=1 order by urun_id DESC Limit 10");
                      $urunsor->execute();
                      while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { 

                        $resimsor=$db->prepare("SELECT * from resim where resim_urun=:resim_urun");
                        $resimsor->execute(array(
                         'resim_urun' => $uruncek['urun_id']
                     ));
                        $resimcek=$resimsor->fetch(PDO::FETCH_ASSOC);
                        ?>

                        <!-- gfort owl Slider Item -->
                        <div class="gfort-owl-slider-item">
                            <!-- Shop item -->
                            <div class="shop-item">
                                <!-- Shop item Container -->
                                <div class="shop-item-container">


                                    <!-- Shop item Media -->
                                    <div class="shop-item-media">
                                        <a href="<?=seo('urunler-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"]?>" title="Handcrafted Watch" class="scale-hover">
                                            <img src="trex/<?php echo $resimcek['resim_link'] ?>" alt="Article Image" />
                                        </a>
                                    </div><!-- /End Shop item Media -->


                                    <!-- Shop item Body -->
                                    <div class="shop-item-body">


                                        <!-- Shop item Title -->
                                        <h2 style="height: 50px;" class="shop-item-title">
                                            <a href="<?=seo('urunler-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"]?>" title="<?php echo $uruncek['urun_baslik']; ?>"><?php 
                                            $urunkarakter = strlen( $uruncek['urun_baslik'] );
                                            if ( $urunkarakter > 30 )
                                            {
                                                echo mb_substr($uruncek['urun_baslik'], 0,30, 'UTF-8')."...";
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

                        <?php } ?>

                    </div><!-- /End gfort owl Slider -->
                </div><!-- /End col-md-12 -->


            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
<?php }
if ($widgetprint['widget_galeri']==1) { ?>
<!-- gfort Section -->
<div style=" padding-top: 0;" class="gfort-section">
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

                        <h2 class="section-main-title"><?php echo $widgetprint['widget_bproje']; ?></h2>

                    </div><!-- /End Section Title -->
                </div><!-- /End col-md-12 -->


                <!-- col-md-12 -->
                <div class="col-md-12">
                    <!-- Gallery items Wrapper -->
                    <div class="gallery-items-wrapper gallery-col-4 isotope-masonry">
                      <?php 
                      $resimgaleri=$db->prepare("SELECT * from resimgaleri order by resim_id Limit 8");
                      $resimgaleri->execute();
                      while($resimgalericek=$resimgaleri->fetch(PDO::FETCH_ASSOC)) { ?>

                      <!-- Gallery item -->
                      <div class="gallery-item isotope-item wow" data-wow-duration="1.5s" data-wow-delay="0.25s">
                        <a href="trex/<?php echo $resimgalericek['resim_link'] ?>" class="scale-hover overlay-hover-2x" data-gfort-lightbox data-gfort-lightbox-group="gallery-3" title="<?php echo $resimgalericek['resim_baslik'] ?>">
                            <img style="height: 200px;" src="trex/<?php echo $resimgalericek['resim_link'] ?>" alt="<?php echo $resimgalericek['resim_baslik'] ?>" />
                        </a>
                    </div><!-- /End Gallery item -->
                    <?php } ?>
                </div><!-- /End Gallery items Wrapper -->
            </div><!-- /End col-md-12 -->


        </div><!-- /End row -->
    </div><!-- /End container -->
</div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
<?php } ?>
<!-- gfort Section -->
<div style="margin-top:-30px;margin-bottom:-50px; padding-top: 0;" class="gfort-section">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
               <!-- gfort Section -->
               <div class="gfort-section">
                <!-- Section Container -->
                <div class="section-container">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">

                            <?php if ($widgetprint['widget_blog']==1) { ?>
                            <!-- col-md-4 -->
                            <div class="col-md-4">


                                <!-- Section Title -->
                                <div class="section-title section-title-md">

                                    <h2 class="section-main-title"><?php echo $widgetprint['widget_bblog']; ?></h2>

                                </div><!-- /End Section Title -->


                                <!-- gfort owl Slider -->
                                <div class="gfort-owl-slider recent-blog-posts owl-carousel owl-theme" data-slider-items="1" data-slider-items-md="3" data-slider-items-sm="2" data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="10">

                                 <?php 
                                 $blog=$db->prepare("SELECT * from blog order by blog_id Limit 5");
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
                                                    <img style="height: 157px; width: 100%;" src="trex/<?php echo $blogcek['blog_resim']; ?>" alt="Article Image" />
                                                </a>
                                            </div><!-- /End Blog item Media -->


                                            <!-- Blog item Body -->
                                            <div class="blog-item-body">
                                                <!-- Blog item Title -->
                                                <p>
                                                    <a style="font-size: 15px;" href="<?=seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"]?>" title="<?php echo $blogcek['blog_baslik']; ?>"><?php echo $blogcek['blog_baslik'];
                                                    ?></a>
                                                </p><!-- /End Blog item Title -->
                                            </div><!-- /End Blog item Body -->


                                        </div><!-- /End Blog item Container -->
                                    </div><!-- /End Blog item -->
                                </div><!-- /End gfort owl Slider Item -->

                                <?php } ?>
                                <!-- gfort owl Slider Item -->

                            </div><!-- /End gfort owl Slider -->


                        </div><!-- /End col-md-4 -->

                        <?php }
                        if ($widgetprint['widget_yorum']==1) {  ?>
                        <!-- col-md-4 -->
                        <div class="col-md-8">


                            <!-- Section Title -->
                            <div class="section-title section-title-md">

                                <h2 class="section-main-title"><?php echo $widgetprint['widget_byorum']; ?></h2>

                            </div><!-- /End Section Title -->


                            <!-- gfort owl Slider -->
                            <div class="gfort-owl-slider owl-carousel owl-theme" data-slider-items="2" data-slider-items-md="2"  data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="30">
                                <?php 
                                $yorum=$db->prepare("SELECT * from yorumlar order by yorum_id");
                                $yorum->execute();
                                while($yorumcek=$yorum->fetch(PDO::FETCH_ASSOC)) { ?>
                                <!-- gfort owl Slider Item -->
                                <div class="gfort-owl-slider-item">
                                    <!-- Testimonials item -->
                                    <div class="testimonials-item">
                                        <!-- Testimonials item Container -->
                                        <div class="testimonials-item-container">


                                            <!-- Testimonials item Body -->
                                            <div style="padding: 15px;" class="testimonials-item-body">
                                                <p style="font-size: 12px;"><?php echo $yorumcek['yorum_icerik']; ?></p>
                                            </div><!-- /End Testimonials item Body -->


                                            <!-- Testimonials item Footer -->
                                            <div class="testimonials-item-footer">

                                                <!-- Testimonials item Avatar -->
                                                <div class="testimonials-item-avatar">
                                                    <img src="trex/<?php echo $yorumcek['yorum_resim']; ?>" alt="Client Avatar" />
                                                </div><!-- /END Testimonials item Avatar -->

                                                <!-- Testimonials item Meta -->
                                                <div class="testimonials-item-meta">
                                                    <!-- Testimonials item Meta Container -->
                                                    <div class="testimonials-item-meta-container">

                                                        <h5 style="font-size: 20px;" class="testimonials-item-name"><?php echo $yorumcek['yorum_isim']; ?></h5>
                                                        <p style="font-size: 15px;" class="testimonials-item-subtitle"><a href="<?php echo $yorumcek['yorum_link']; ?>"><?php echo $yorumcek['yorum_link']; ?></a></p>

                                                    </div><!-- /End Testimonials item Meta Container -->
                                                </div><!-- /End Testimonials item Meta -->

                                            </div><!-- /End Testimonials item Footer -->


                                        </div><!-- /End Testimonials item Container -->
                                    </div><!-- /End Testimonials item -->
                                </div><!-- /End gfort owl Slider Item -->

                                <?php } ?>
                            </div><!-- /End gfort owl Slider -->


                        </div><!-- /End col-md-4 -->

                    </div><!-- /End row -->
                </div><!-- /End container -->
            </div><!-- /End Section Container -->
        </div><!-- /End gfort Section -->
        <?php } ?>
    </div><!-- /End row -->
</div><!-- /End container -->
</div><!-- /End Section Container -->
</div><!-- /End gfort Section -->

<!-- gfort Section -->


<?php include 'inc/footer.php'; ?>
