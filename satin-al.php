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

                      <h1 class="breadcrumb-main-title">SİPARİŞ FORMU</h1>

                    </div><!-- /End container -->
                  </div><!-- /End Breadcrumb Title -->


                  <!-- Breadcrumb Block -->
                  <div class="breadcrumb-block">
                    <!-- container -->
                    <div class="container">

                      <ol class="breadcrumb">
                        <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                        <li class="active">SİPARİŞ FORMU</li>
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
                               <!-- SİPARİŞ FORMU -->
                               <form action="trex/controller/function.php" method="POST">
                                 <!-- Start select -->
                                 <p>
                                  <?php 
                                  $odeme=$db->prepare("SELECT * from odeme where odeme_durum=1");
                                  $odeme->execute();
                                  ?>
                                  <label>Ödeme Tipi:</label>
                                  <select class="form-control" required name="siparis_odeme" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                   <option>Ödeme Tipi Seçiniz</option>
                                   <?php  while($odemecek=$odeme->fetch(PDO::FETCH_ASSOC)) { ?>  
                                     <option required value="<?php echo $odemecek['odeme_adi']; ?>"><?php echo $odemecek['odeme_adi']; ?></option>
                                     <?php } ?>
                                   </select>
                                 </p>
                                 <!-- End select -->
                                 <!-- Start input -->
                                 <p>
                                  <label>Ürün:</label>
                                  <input type="text" required readonly class="form-control" value="<?php echo $_POST['urun_adi']." - ".$_POST['urun_fiyat']."TL"; ?>" />
                                </p>
                                <!-- End input -->
                                <!-- Start input -->
                                <p>
                                  <label>Ad Soyad:</label>
                                  <input type="text" required class="form-control" name="siparis_ad" placeholder="Adınızı ve soyadınızı belirtiniz" />
                                </p>
                                <!-- End input -->
                                <input type="hidden" required class="form-control" name="siparis_fiyat" value="<?php echo $uruncek['urun_fiyat']; ?>" />
                                <input type="hidden" required class="form-control" name="siparis_urun" value="<?php echo $_POST['urun_id']; ?>" />
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
                                <input class="btn btn-gfort" required style="width: 100%;" type="submit" name="siparisver" value="SİPARİŞİ TAMAMLA">
                              </form>
                              <!--#SİPARİŞ FORMU -->
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