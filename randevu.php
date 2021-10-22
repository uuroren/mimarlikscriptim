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

                      <h1 class="breadcrumb-main-title">RANDEVU FORMU</h1>

                    </div><!-- /End container -->
                  </div><!-- /End Breadcrumb Title -->


                  <!-- Breadcrumb Block -->
                  <div class="breadcrumb-block">
                    <!-- container -->
                    <div class="container">

                      <ol class="breadcrumb">
                        <li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
                        <li class="active">RANDEVU FORMU</li>
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
                                 <!-- Start input -->
                                 <p>
                                  <label>Ad Soyad:</label>
                                  <input type="text" required class="form-control" name="randevu_ad" placeholder="Adınızı ve soyadınızı belirtiniz" />
                                </p>
                                <p>
                                  <label>Telefon:</label>
                                  <input type="text" required class="form-control" name="randevu_tel" placeholder="Telefon numaranızı giriniz" />
                                </p>
                                <!-- End input -->
                                <!-- Start input -->
                                <p>
                                  <label for="form_country">Hizmet Bilgisi*</label>
                                  <select class="form-control" name="randevu_hizmet" id="form_country" data-select-search="true">
                                    <option value="">Hizmet seçiniz</option>
                                    <?php 
                                    $hizmet=$db->prepare("SELECT * from hizmetler");
                                    $hizmet->execute();
                                    while($hizmetcek=$hizmet->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <option value="<?php echo $hizmetcek['hizmet_baslik']; ?>"><?php echo $hizmetcek['hizmet_baslik']; ?></option>
                                    <?php } ?>
                                    <option value="diger">Diğer (Not kisminda detay belirtiniz.)</option>
                                  </select>
                                </p>
                                <!-- End input -->
                                <!-- Start textarea -->
                                <p>
                                  <label>Not:</label>
                                  <textarea class="form-control" required name="randevu_not" rows="6" placeholder="Yapılacak işlemler hakkında bilgi veriniz."></textarea>
                                </p>
                                <!-- End textarea -->
                                <!-- Start input -->
                                <p>
                                  <label>Randevu Tarih ve Saat:</label>
                                  <input type="datetime-local" required class="form-control" name="randevu_zaman" />
                                </p>
                                <!-- End input -->
                                <!-- Start input -->
                                <p>
                                  <label for="form_country">İl *</label>
                                  <select class="form-control" name="randevu_il" id="form_country" data-select-search="true">
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
                                  <input type="text" required class="form-control" name="randevu_ilce" placeholder="ilçe giriniz" />
                                </p>
                                <!-- End input -->
                                <!-- Start textarea -->
                                <p>
                                  <label>Adres:</label>
                                  <textarea class="form-control" required name="randevu_adres" rows="6" placeholder="Açık adresinizi giriniz"></textarea>
                                </p>
                                <!-- End textarea -->
                                <input class="btn btn-gfort" required style="width: 100%;" type="submit" name="randevu" value="RENDEVU İSTE">
                              </form>
                              <!--#SİPARİŞ FORMU -->
                            </div><!-- /End col-md-12 -->


                          </div><!-- /End row -->
                        </div><!-- /End container -->
                      </div><!-- /End Section Container -->
                    </div><!-- /End gfort Section -->

                  </div><!-- /End Main Content Container -->
                </div><!-- /End Main Content -->



              </div><!-- /End Main Content Container -->
            </div><!-- /End Main Content -->


          </div><!-- /End Page Body -->


          <?php include 'inc/footer.php'; ?>    