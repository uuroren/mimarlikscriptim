<?php 
include 'inc/head.php';
include 'inc/menu.php';
$metakey=$db->prepare("SELECT * from meta where meta_id=8");
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

            					<h1 class="breadcrumb-main-title">İLETİŞİM</h1>

            				</div><!-- /End container -->
            			</div><!-- /End Breadcrumb Title -->


            			<!-- Breadcrumb Block -->
            			<div class="breadcrumb-block">
            				<!-- container -->
            				<div class="container">

            					<ol class="breadcrumb">
            						<li><a href="<?php echo $settingsprint['ayar_siteurl']; ?>" title="Home"><i class="fa fa-home"></i></a></li>
            						<li class="active">İLETİŞİM</li>
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
                						<di <!-- row -->
                							<div class="row">


                								<!-- col-md-6 -->
                								<div class="col-md-6">
                									<!-- Contact Form Block -->
                									<div class="">
                										<!-- Form Block Container -->
                										<div class="form-block-container">
                											<!-- Form -->
                											<form form action="trex/controller/function.php" method="post" id="mycontactform">


                												<!-- Name -->
                												<div class="col-md-6">
                													<div class="form-group">

                														<label for="form_name">Ad Soyad *</label>
                														<input type="text" class="form-control" name="mesaj_ad" id="form_name">

                													</div>
                												</div><!-- /End Name -->


                												<!-- Email Address -->
                												<div class="col-md-6">
                													<!-- Form Group -->
                													<div class="form-group">

                														<label for="form_email">Eposta Adresi *</label>
                														<input type="email" class="form-control" name="mesaj_mail" id="form_email">

                													</div><!-- /End Form Group -->
                												</div><!-- /End Email Address -->

                												<!-- Message -->
                												<div class="col-md-12">
                													<!-- Form Group -->
                													<div class="form-group">

                														<label for="form_message">Mesaj *</label>
                														<textarea class="form-control" name="mesaj_icerik" id="form_message"></textarea>

                													</div><!-- /End Form Group -->
                												</div><!-- /End Message -->

                												<!-- Submit Button -->
                												<div class="col-md-12">
                													<!-- Form Group -->
                													<div class="form-group">

                														<button name="iletisimform" type="submit" class="btn btn-primary">Gönder</button>

                													</div><!-- /End Form Group -->
                												</div><!-- /End Submit Button -->


                											</form><!-- /End Form -->
                										</div><!-- /End Form Block Container -->
                									</div><!-- /End Contact Form Block -->
                								</div><!-- /End col-md-6 -->


                								<!-- col-md-6 -->
                								<div class="col-md-6">
                									<!-- Google Map Block -->
                									<div id="map"><?php echo $settingsprint['ayar_harita']; ?></div>
                								</div><!-- /End col-md-6 -->


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