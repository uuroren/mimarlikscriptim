<?php  if ($widgetprint['widget_welcome']==1) {  ?>
<!-- gfort Section -->
<div class="gfort-section fullwidth-section pt-0 pb-0">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">


                <!-- col-md-12 -->
                <div class="col-md-12">
                    <!-- Call To Action Block -->
                    <div class="cta-block cta-block-main mb-0">
                        <!-- Call To Action Block Container -->
                        <div style="padding: 0px 20px;" class="cta-block-container">


                            <!-- Call To Action Block Body -->
                            <div class="cta-block-body">
                                <p><?php echo $widgetprint['widget_bwelcome']; ?></p>
                            </div><!-- /End Call To Action Block Body -->


                            <!-- Call To Action Block Button -->
                            <div class="cta-block-btn">
                                <a href="tel:<?php echo $settingsprint['ayar_tel']; ?>" class="btn btn-gfort-white">Tıkla ARA!</a>
                            </div><!-- /End Call To Action Block Button -->


                        </div><!-- /End Call To Action Block Container -->
                    </div><!-- /End Call To Action Block -->
                </div><!-- /End col-md-12 -->


            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
<?php } ?>
 <!-- Footer Section
    ==================================================================== -->
    <footer style="background-image: url(trex/assets/img/genel/21226.jpg);" class="footer-section">
        <?php echo $settingsprint['ayar_kod']; 
        ?>
        <!-- Footer Top Section -->
        <div style="background-color: #191919e0;" class="footer-top-section">
            <!-- Footer Top Section Container -->
            <div class="footer-top-section-container">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">


                        <!-- col-md-4 -->
                        <div class="col-md-3">


                            <!-- Widget Block ( Text ) -->
                            <div class="widget-block widget-block-text">
                                <!-- Widget Block Container -->
                                <div class="widget-block-container">


                                    <!-- Widget Block Title -->
                                    <div class="widget-block-title">
                                        <h6>Hakkımızda</h6>
                                    </div><!-- /End Widget Block Title -->


                                    <!-- Widget Block Body -->
                                    <div class="widget-block-body">

                                        <p><?php echo $settingsprint['ayar_description']; ?></p>

                                        <div class="social-icons-block icons-style-2">
                                            <ul>
                                               <?php 
                                               $socialfo=$db->prepare("SELECT * from sosyal");
                                               $socialfo->execute();
                                               while($socialprint=$socialfo->fetch(PDO::FETCH_ASSOC)) { ?>
                                               <li>
                                                <a href="<?php echo $socialprint['sosyal_link']; ?>">
                                                    <i class="fa <?php echo $socialprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                                    <i class="fa <?php echo $socialprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Text ) -->


                    </div><!-- /End col-md-4 -->


                    <!-- col-md-2 -->
                    <div class="col-md-3">


                        <!-- Widget Block ( Link ) -->
                        <div class="widget-block widget-block-link">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Menüler</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Links Block -->
                                    <ul class="links-block">
                                       <?php 
                                       $footermenu=$db->prepare("SELECT * from fmenu order by fmenu_sira");
                                       $footermenu->execute();
                                       while($footermenuprint=$footermenu->fetch(PDO::FETCH_ASSOC)) { ?>             
                                       <li><a href="<?php echo $footermenuprint['fmenu_link'] ?>"><?php 
                                       $projelerkarakter = strlen( $footermenuprint['fmenu_ad'] );
                                       if ( $projelerkarakter > 30 )
                                       {

                                        echo mb_substr($footermenuprint['fmenu_ad'], 0,30, 'UTF-8')."...";
                                    } else {
                                        echo $footermenuprint['fmenu_ad'];
                                    }

                                    ?></a></li>
                                    <?php } ?>

                                </ul><!-- /End Links Block -->

                            </div><!-- /End Widget Block Body -->


                        </div><!-- /End Widget Block Container -->
                    </div><!-- /End Widget Block ( Link ) -->


                </div><!-- /End col-md-2 -->


                <!-- col-md-3 -->
                <div class="col-md-3">


                    <!-- Widget Block ( Latest Posts ) -->
                    <div class="widget-block widget-block-posts">
                        <!-- Widget Block Container -->
                        <div class="widget-block-container">


                            <!-- Widget Block Title -->
                            <div class="widget-block-title">
                                <h6>Haber / Duyuru</h6>
                            </div><!-- /End Widget Block Title -->


                            <!-- Widget Block Body -->
                            <div class="widget-block-body">

                                <!-- Blog Posts -->
                                <ul class="blog-posts">
                                 <?php 
                                 $blogsor1=$db->prepare("SELECT * from blog limit 2");
                                 $blogsor1->execute();
                                 while($blogcek1=$blogsor1->fetch(PDO::FETCH_ASSOC)) { ?>

                                 <!-- Blog Item -->
                                 <li>

                                    <!-- Item image -->
                                    <a href="<?=seo('blog-'.$blogcek1["blog_baslik"]).'-'.$blogcek1["blog_id"]?>" title="You must do the things you think you can't do" class="item-image overlay-hover scale-hover-2x">
                                        <img style="height: 70px;" src="trex/<?php echo $blogcek1['blog_resim']; ?>" alt="Article Image" />
                                    </a>

                                    <!-- Blog Item Body -->
                                    <div class="blog-item-body">

                                        <!-- Title -->
                                        <a href="<?=seo('blog-'.$blogcek1["blog_baslik"]).'-'.$blogcek1["blog_id"]?>" title="You must do the things you think you can't do" class="blog-item-small-title"><?php $blogkarakter = strlen( $blogcek1['blog_baslik'] );
                                        if ( $blogkarakter > 35 )
                                        {

                                            echo mb_substr($blogcek1['blog_baslik'], 0,35, 'UTF-8')."...";
                                        } else {
                                          echo $blogcek1['blog_baslik'];
                                      } ?></a>

                                      <!-- Blog item Meta -->
                                      <div class="blog-item-meta">
                                        <span class="item-meta-date">
                                            <time datetime="2016-05-17"><?php echo substr($blogcek1['blog_tarih'], 0,10); ?></time>
                                        </span>
                                    </div><!-- /End Blog item Meta -->

                                </div><!-- /End Blog Item Body -->

                            </li><!-- /End Blog Item -->

                            <?php } ?>


                        </ul><!-- /End Blog Posts -->

                    </div><!-- /End Widget Block Body -->


                </div><!-- /End Widget Block Container -->
            </div><!-- /End Widget Block ( Latest Posts ) -->


        </div><!-- /End col-md-3 -->


        <div class="col-md-3">

            <div class="widget-block widget-block-text">

                <div class="widget-block-container">

                    <div class="widget-block-title">
                        <h6>Bize Ulaşın</h6>
                    </div>

                    <div class="widget-block-body">
                        <strong>Eposta:</strong>
                        <p><a href="mailto:<?php echo $settingsprint['ayar_mail']; ?>" ><?php echo $settingsprint['ayar_mail']; ?></a></p>
                        <strong>Tel:</strong>
                        <p><a href="tel:<?php echo $settingsprint['ayar_tel']; ?>" title="<?php echo $settingsprint['ayar_tel']; ?>"><?php echo $settingsprint['ayar_tel']; ?></a></p>
                        <strong>Adres:</strong>
                        <p><?php echo $settingsprint['ayar_adres']; ?> <br /> <?php echo $settingsprint['ayar_il']." / ".$settingsprint['ayar_ilce']; ?></p>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- /End row -->
</div><!-- /End container -->
</div><!-- /End Footer Top Section Container -->
</div><!-- /End Footer Top Section -->


</footer><!-- /End Footer Section -->
<!-- gfort Section -->
<div class="gfort-section fullwidth-section pt-0 pb-0">
    <!-- Section Container -->
    <div class="section-container">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">


                <!-- col-md-12 -->
                <div class="col-md-12">
                    <!-- Call To Action Block -->
                    <div class="cta-block cta-block-main mb-0">
                        <!-- Call To Action Block Container -->
                        <div class="cta-block-container">

                            <div class="links-block col-md-12">
                                <?php 
                                $flink=$db->prepare("SELECT * from flink");
                                $flink->execute();
                                while($flinkprint=$flink->fetch(PDO::FETCH_ASSOC)) { ?>  
                                <a style="color: #fff; display: block;" class="col-md-2 col-sm-12 text-centre" target="new" href="<?php echo $flinkprint['flink_link'] ?>"><?php echo $flinkprint['flink_ad'] ?></a>
                                <?php } ?>
                            </div>


                        </div><!-- /End Call To Action Block Container -->
                    </div><!-- /End Call To Action Block -->
                </div><!-- /End col-md-12 -->


            </div><!-- /End row -->
        </div><!-- /End container -->
    </div><!-- /End Section Container -->
</div><!-- /End gfort Section -->
            <!-- Footer Section
                ==================================================================== -->
                <footer class="footer-section">


                    <!-- Footer copyright Section -->
                    <div style="background-color: #ffffff00;border-top: 1px solid #ffffff00;" class="footer-copyright-section">
                        <!-- Footer copyright Section Container -->
                        <div class="footer-copyright-section-container">
                            <!-- container -->
                            <div class="container">
                                <!-- row -->
                                <div class="row">


                                    <!-- copyright Widget ( Left ) -->
                                    <div class="copyright-widget widget-left-side">
                                        <!-- copyright Widget Container -->
                                        <div class="copyright-widget-container">


                                            <!-- Info Block -->
                                            <div class="info-block">
                                                <!-- Info Block Container -->
                                                <div class="info-block-container">

                                                    <p>&copy; 2021 <a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="<?php echo $settingsprint['ayar_firmaadi'] ?>" target="_blank"><?php echo $settingsprint['ayar_firmaadi'] ?></a>, Tüm hakkı saklıdır.</p>

                                                </div><!-- /End Info Block Container -->
                                            </div><!-- /End Info Block -->


                                        </div><!-- /End copyright Widget Container -->
                                    </div><!-- /End copyright Widget ( Left ) -->


                                    <!-- copyright Widget ( Right ) -->
                                    <div class="copyright-widget widget-right-side">
                                        <!-- copyright Widget Container -->
                                        <div class="copyright-widget-container">


                                            <!-- Info Block -->
                                            <div class="info-block">
                                                <!-- Info Block Container -->
                                                <div class="info-block-container">

                                                    <p><i class="glyphicon glyphicon-earphone"></i> <a href="tel:<?php echo $settingsprint['ayar_tel']; ?>" title="<?php echo $settingsprint['ayar_tel']; ?>"><?php echo $settingsprint['ayar_tel']; ?></a> <span class="gfort-dash">-</span> <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $settingsprint['ayar_mail']; ?>" title="<?php echo $settingsprint['ayar_mail']; ?>"><?php echo $settingsprint['ayar_mail']; ?></a></p>

                                                </div><!-- /End Info Block Container -->
                                            </div><!-- /End Info Block -->


                                        </div><!-- /End copyright Widget Container -->
                                    </div><!-- /End copyright Widget ( Right ) -->


                                </div><!-- /End row -->
                            </div><!-- /End container -->
                        </div><!-- /End Footer copyright Section Container -->
                    </div><!-- /End Footer copyright Section -->
                    <?php echo $motorprint['motor_metrika']; ?>
                    <?php echo $motorprint['motor_analitik']; 


                    if ($settingsprint['ayar_ara']==1) {
                        ?>
                        <div style='position: fixed; bottom: 80px; left: 23px;'>

                            <table border="0"><tr><td>

                                <a href="tel:<?php echo $settingsprint['ayar_tel']; ?>">

                                    <img alt="Tıkla Ara!" border="0"

                                    style='background:transparent;border:none;display: block;width: 50px;'

                                    title='Tıkla Ara!' src="trex/assets/img/genel/ara.png" />

                                </a>

                            </td><td>

                            </td></tr></table>

                        </div>
                        <?php
                    }




                    ?>
                </footer><!-- /End Footer Section -->
                

            </div><!-- /End Main Wrapper -->


        <!-- Java Script Files
            ======================================================================== -->
            <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
            <script type="text/javascript" src="js/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/plugins.js"></script>
            <script type="text/javascript" src="js/scripts.js"></script>


        <!-- Slider Revolution Files
            ======================================================================== -->
            <!-- CSS Files -->
            <link rel="stylesheet" href="js/plugins/slider-revolution/css/settings.css">
            <link rel="stylesheet" href="js/plugins/slider-revolution/css/layers.css">
            <link rel="stylesheet" href="js/plugins/slider-revolution/css/navigation.css">

            <!-- JS Files -->
            <script type="text/javascript" src="js/plugins/slider-revolution/js/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="js/plugins/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function () {

                    'use strict';

                    if (jQuery('#rev_slider_container').revolution === undefined) {
                        revslider_showDoubleJqueryError('#rev_slider_container');
                    } else {
                        jQuery('#rev_slider_container').show().revolution({
                            sliderType: 'standard',
                            jsFileLocation:"js/plugins/slider-revolution/js/",
                            dottedOverlay: 'none',
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: 'on',
                                keyboard_direction: 'horizontal',
                                mouseScrollNavigation: 'off',
                                mouseScrollReverse: 'default',
                                onHoverStop: 'on',
                                touch: {
                                    touchenabled: 'on',
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: 'horizontal',
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: 'hades',
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div></div>',
                                    left: {
                                        h_align: 'left',
                                        v_align: 'center',
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: 'right',
                                        v_align: 'center',
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: 'uranus',
                                    hide_onleave: false,
                                    direction: 'horizontal',
                                    h_align: 'center',
                                    v_align: 'bottom',
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 10,
                                    tmp: '<span class="tp-bullet-inner"></span>'
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: 'pause',
                                visible_area: '80%',
                                presize: false
                            },
                            gridwidth: 1170,
                            gridheight: 600,
                            lazyType: 'none',
                            parallax: {
                                type: 'mouse+scroll',
                                origo: 'slidercenter',
                                speed: 2000,
                                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55],
                                disable_onmobile: 'on'
                            },
                            shadow: 0,
                            spinner: 'spinner0',
                            autoHeight: 'off',
                            shuffle: 'off',
                            disableProgressBar: 'off',
                            hideThumbsOnMobile: 'on',
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: 'off',
                                nextSlideOnWindowFocus: 'off',
                                disableFocusListener: false
                            }

                        });
}

});
</script>
<!--Sweet Alerts-->
<script src="trex/assets/lib/sweet-alerts2/sweetalert2.min.js"></script>          
<!--<?php if ($_GET['status']=='ok') { ?>-->
<script>
 $(document).ready(function () {
    swal({
      title: "TAMAMLANDI!",
      text: "İşlem Başarılı Bir Şekilde Tamamlandı.",
      type: "success",
      timer: '5000',
      showConfirmButton: false
  });
});
</script>
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
}
}
$hesapa=$db->prepare("SELECT * from smenu where smenu_id=11");
$hesapa->execute(array(0));
$hesapprinta=$hesapa->fetch(PDO::FETCH_ASSOC);

$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
?>
<meta http-equiv="refresh" content="5; URL=<?php echo substr($sayfaURL,0, -10);?>">
<?php

} elseif ($_GET['status']=='no') {?>
<script>
   $(document).ready(function () {
      swal({
        title: "HATA!",
        text: "İşlem sırasında bir hata oluştu.",
        type: "error",
        showConfirmButton: false,
        timer: '5000'
    });
  });
</script>
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
}
}
$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
<meta http-equiv="refresh" content="5; URL=<?php echo substr($sayfaURL,0, -10);?>">
<?php } elseif ($_GET['demo']=='ok') {?>
<script>
   $(document).ready(function () {
      swal({
        title: "OoPs!",
        text: "Demo modda bu işleme izin verilmiyor.<br />",
        type: "warning",
        showConfirmButton: false,
        timer: '6000'
    });
  });
</script>
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
}
}
$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
<meta http-equiv="refresh" content="6; URL=<?php echo substr($sayfaURL,0, -8);?>">
<?php } ?>

</body>
</html>