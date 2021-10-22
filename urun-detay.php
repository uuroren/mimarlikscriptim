<?php 
include 'inc/head.php';
include 'inc/menu.php';
?>

<?php
$urunsor=$db->prepare("SELECT * from urunler where urun_id=:urun_id");
$urunsor->execute(array(
 'urun_id' => $_GET['urun_id']
));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);?>
<title><?php echo $uruncek['urun_title'] ?></title>
<meta name="description" content="<?php echo $uruncek['urun_descr'] ?>">
<meta name="keywords" content="<?php echo $uruncek['urun_keyword'] ?>">
</head> <?php
$urunresimsor=$db->prepare("SELECT * from resim where resim_urun=:resim_urun");
$urunresimsor->execute(array(
    'resim_urun' => $uruncek['urun_id']
));


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

                                <h1 class="breadcrumb-main-title">Ürünler</h1>

                            </div><!-- /End container -->
                        </div><!-- /End Breadcrumb Title -->


                        <!-- Breadcrumb Block -->
                        <div class="breadcrumb-block">
                            <!-- container -->
                            <div class="container">

                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                                    <li class="active"><?php echo $uruncek['urun_baslik']; ?></li>
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
                                            <!-- Shop items Wrapper -->
                                            <div class="shop-items-wrapper shop-single-item">

                                                <!-- Portfolio Section -->
                                                <div class="portfolio-section">


                                                   <!-- Shop item -->
                                                   <article class="shop-item">
                                                    <!-- Shop item Container -->
                                                    <div class="shop-item-container">

                                                     <!-- col-md-12 -->
                                                     <div style="margin-top: -50px;" class="col-md-12">
                                                        <!-- Section Title -->
                                                        <div class="section-title text-center">
                                                            <h3 class="section-main-title"><?php echo $uruncek['urun_baslik']; ?></h3>
                                                        </div><!-- /End Section Title -->
                                                    </div><!-- /End col-md-12 -->
                                                    <!-- Shop item Media -->
                                                    <div style="width: 100%" class="shop-item-media">
                                                        <!-- gfort owl Slider -->
                                                        <div class="gfort-owl-slider owl-carousel owl-theme" data-slider-items="1" data-slider-arrows="true"  data-slider-autoplay="false" data-slider-thumbs="true" data-slider-thumbs-items="4" data-slider-thumbs-items-md="6" data-slider-thumbs-items-sm="3" data-slider-thumbs-items-xs="3" data-slider-thumbs-items-xxs="3">

                                                            <?php while($urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC)) { ?>

                                                                <!-- gfort owl Slider Item -->
                                                                <div class="gfort-owl-slider-item" data-slide-thumb="trex/<?php echo $urunresimcek['resim_link'] ?>">
                                                                    <a href="trex/<?php echo $urunresimcek['resim_link'] ?>" title="<?php echo $uruncek['urun_baslik']; ?>" class="scale-hover" data-gfort-lightbox data-gfort-lightbox-group="gallery-3">
                                                                        <img src="trex/<?php echo $urunresimcek['resim_link'] ?>" alt="<?php echo $uruncek['urun_baslik']; ?>" />
                                                                    </a>
                                                                </div><!-- /End gfort owl Slider Item -->
                                                                <?php } ?>

                                                            </div><!-- /End gfort owl Slider -->
                                                        </div><!-- /End Shop item Media --> <!-- clearfix -->
                                                        <div class="clearfix"></div>
                                                        <!-- Quantity Form Block -->
                                                        <div class="form-block quantity-form-block text-center">
                                                            <!-- Form Block Container -->
                                                            <div class="form-block-container">

                                                                <!-- Social Icons Block -->
                                                                <div style="margin-bottom: 50px;" class="social-icons-block icons-text icons-lg icons-style-2">
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
                                                            </div><!-- /End Form Block Container -->

                                                        </div><!-- /End Quantity Form Block -->

                                                        <!-- gfort-tabs -->
                                                        <div class="gfort-tabs gfort-tabs-center">


                                                            <!-- Nav Tabs -->
                                                            <ul class="nav nav-tabs" role="tablist">

                                                                <li role="presentation" class="active">
                                                                    <a href="#description" aria-controls="description" role="tab" data-toggle="tab">AÇIKLAMA</a>
                                                                </li>
                                                            </ul><!-- /End Nav Tabs -->


                                                            <!-- Tab Panes -->
                                                            <div class="tab-content">


                                                                <!-- Tab Pane -->
                                                                <div role="tabpanel" class="tab-pane fade in active" id="description">

                                                                    <h2 class="shop-tab-title">Ürün Açıklaması</h2>

                                                                    <p><?php echo $uruncek['urun_aciklama']; ?></p>

                                                                </div><!-- /End Tab Pane -->

                                                                <!-- Tab Pane -->
                                                                <div role="tabpanel" class="tab-pane fade" id="teklif">

                                                                    <h2 class="shop-tab-title">SİPARİŞ FORMU</h2>

                                                                    <p>  <!-- SİPARİŞ FORMU -->
                                                                       <form action="trex/controller/function.php" method="POST">
                                                                           <!-- Start input -->
                                                                           <p>
                                                                              <input type="hidden" required readonly class="form-control" value="<?php echo $_POST['urun_adi']." - ".$_POST['urun_fiyat']."TL"; ?>" />
                                                                          </p>
                                                                          <!-- End input -->
                                                                          <!-- Start input -->
                                                                          <p>
                                                                              <label>Ad Soyad:</label>
                                                                              <input type="text" required class="form-control" name="siparis_ad" placeholder="Adınızı ve soyadınızı belirtiniz" />
                                                                          </p>
                                                                          <!-- End input -->
                                                                          <input type="hidden" required class="form-control" name="siparis_urun" value="<?php echo $_GET['urun_id']; ?>" />
                                                                          <!-- Start input -->
                                                                          <p>
                                                                              <label>Telefon:</label>
                                                                              <input type="text" required class="form-control" name="siparis_tel" placeholder="Telefon numaranızı giriniz" />
                                                                          </p>
                                                                          <!-- End input -->
                                                                          <!-- Start input -->
                                                                          <p>
                                                                              <label>Mail:</label>
                                                                              <input type="text" required class="form-control" name="siparis_mail" placeholder="Mail adresinizi giriniz" />
                                                                          </p>
                                                                          <!-- End input -->
                                                                          <!-- Start input -->
                                                                          <p>
                                                                              <label for="form_country">İl *</label>
                                                                              <select class="form-control" name="siparis_il" id="form_country" data-select-search="true">
                                                                                <option value="">İl seçiniz</option>
                                                                                <?php 
                                                                                $il=$db->prepare("SELECT * from il order by id");
                                                                                $il->execute();
                                                                                while($ilcek=$il->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                                <option value="<?php echo $ilcek['il_adi']; ?>"><?php echo $ilcek['il_adi']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </p>
                                                                        <!-- End input -->
                                                                        <!-- Start input -->
                                                                        <p>
                                                                          <label>ilçe:</label>
                                                                          <input type="text" required class="form-control" name="siparis_ilce" placeholder="ilçe giriniz" />
                                                                      </p>
                                                                      <!-- End input -->
                                                                      <!-- Start textarea -->
                                                                      <p>
                                                                          <label>Adres:</label>
                                                                          <textarea class="form-control" required name="siparis_adres" rows="6" placeholder="Açık adresinizi giriniz"></textarea>
                                                                      </p>
                                                                      <!-- End textarea -->
                                                                      <input class="btn btn-gfort" required style="width: 100%;" type="submit" name="siparisver" value="TEKLİF YOLLA">
                                                                  </form></p>

                                                              </div><!-- /End Tab Pane -->


                                                          </div><!-- /End Tab Panes -->


                                                      </div><!-- /End gfort-tabs -->


                                                  </div><!-- /End Shop item Container -->
                                              </article><!-- /End Shop item -->
                                          </div><!-- /End Portfolio items Wrapper -->
                                      </div>

                                  </div><!-- /End Portfolio Section -->

                              </div><!-- /End col-md-12 -->
                              <!-- col-md-12 -->
                              <div class="col-md-12">
                                <!-- Section Title -->
                                <div class="section-title text-center">
                                    <h2 class="section-main-title">Diğer Ürünler</h2>
                                </div><!-- /End Section Title -->
                            </div><!-- /End col-md-12 -->


                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- gfort owl Slider -->
                                <div class="gfort-owl-slider recent-portfolio-projects owl-carousel owl-theme" data-slider-items="5" data-slider-items-md="3" data-slider-items-sm="2" data-slider-arrows="true" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="30">
                                  <?php 
                                  $urunsor=$db->prepare("SELECT * from urunler where urun_vitrin=1 order by urun_id DESC");
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
                                                        if ( $urunkarakter > 20 )
                                                        {
                                                            echo mb_substr($uruncek['urun_baslik'], 0,20, 'UTF-8')."...";
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


        </div><!-- /End Main Content Container -->
    </div><!-- /End Main Content -->

    <?php include 'inc/sayfasidebar.php'; ?>


</div><!-- /End Main Content Container -->
</div><!-- /End Main Content -->


</div><!-- /End Page Body -->


<?php include 'inc/footer.php'; ?>    