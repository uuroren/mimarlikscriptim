     <!-- body
        ============================================================================ -->
        <body>


        <!-- To top Button
            ======================================================================== -->
            <a href="#" class="btn-gfort-top"><i class="fa fa-angle-up"></i></a>


            
 <!-- Main Wrapper
    ======================================================================== -->
    <div id="main-wrapper">


            <!-- Header Section
                ==================================================================== -->
                <header class="header-section ">
                    <!-- Header Section Container -->
                    <div class="header-section-container">


                        <!-- Top Header -->
                        <div class="top-header">
                            <!-- container -->
                            <div class="container">
                                <!-- row -->
                                <div class="row">


                                    <!-- Top Header Widget ( Left ) -->
                                    <div style="margin-bottom: -30px;" class="top-header-widget widget-right-side">
                                        <!-- Top Header Widget Container -->
                                        <div class="top-header-widget-container">

                                            <!-- Info Block -->
                                            <div class="info-block">
                                                <!-- Info Block Container -->
                                                <div class="info-block-container">

                                                    <p><i class="glyphicon glyphicon-earphone"></i> <a href="tel:<?php echo $settingsprint['ayar_tel']; ?>" title="<?php echo $settingsprint['ayar_tel']; ?>"><?php echo $settingsprint['ayar_tel']; ?></a> <span class="gfort-dash">-</span> <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $settingsprint['ayar_mail']; ?>" title="<?php echo $settingsprint['ayar_mail']; ?>"><?php echo $settingsprint['ayar_mail']; ?></a></p>

                                                </div><!-- /End Info Block Container -->
                                            </div><!-- /End Info Block -->

                                        </div><!-- /End Top Header Widget Container -->
                                    </div><!-- /End Top Header Widget ( Left ) -->


                                    <!-- Top Header Widget ( Right ) -->
                                    <div class="top-header-widget widget-left-side">
                                        <!-- Top Header Widget Container -->
                                        <div class="top-header-widget-container">

                                            <!-- Social Icons Block ( small ) -->
                                            <div class="social-icons-block icons-transparent icons-sm icons-style-1">
                                                <ul>
                                                    <?php while($socialprint=$social->fetch(PDO::FETCH_ASSOC)) { ?>
                                                       <li>
                                                        <a href="<?php echo $socialprint['sosyal_link']; ?>">
                                                            <i class="fa <?php echo $socialprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                                            <i class="fa <?php echo $socialprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div><!-- /End Social Icons Block ( small ) -->

                                        </div><!-- /End Top Header Widget Container -->
                                    </div><!-- /End Top Header Widget ( Right ) -->



                                </div><!-- /End row -->
                            </div><!-- /End container -->
                        </div><!-- /End Top Header -->


                        <!-- Header Menu -->
                        <div class="header-menu">
                            <!-- Header Menu Container -->
                            <div class="header-menu-container">


                                <!-- Navbar -->
                                <nav class="navbar">
                                    <!-- container -->
                                    <div class="container">
                                        <!-- row -->
                                        <div class="row">
                                            <!-- col-md-12 -->
                                            <div class="col-md-12">


                                                <!-- Navbar Header / Logo -->
                                                <div class="navbar-header">
                                                    <a href="<?php echo $settingsprint['ayar_siteurl']; ?>" class="navbar-brand" title="<?php echo $settingsprint['ayar_firmaadi']; ?>">
                                                        <img  src="trex/<?php echo $settingsprint['ayar_logo']; ?>" alt="<?php echo $settingsprint['ayar_firmaadi']; ?>" />
                                                    </a>
                                                </div><!-- /End Navbar Header / Logo -->

                                                <!-- Toggle Menu Button -->
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="menu-wd"></span>
                                                    <span class="lines-wrapper"><i class="lines"></i></span>
                                                </button><!-- /End Toggle Menu Button -->


                                                <!-- Navbar Collapse (Menu) -->
                                                <div class="navbar-collapse collapse">
                                                    <ul class="nav navbar-nav">


                                                       <li>
                                                        <a href="<?php echo $settingsprint['ayar_siteurl']; ?>"><i class="fa fa-home"></i> </a>
                                                    </li>
                                                    <?php 
                                                    $sayfalar=$db->prepare("SELECT * from smenu where smenu_id=10");
                                                    $sayfalar->execute(array(0));
                                                    $sayfaprint=$sayfalar->fetch(PDO::FETCH_ASSOC);
                                                    if ($sayfaprint['smenu_durum']==1) {?>
                                                    <li>
                                                        <a href="#"><?php echo $sayfaprint['smenu_ad']; ?></a>
                                                        <ul class="submenu">
                                                            <?php 
                                                            $sayfalarlist=$db->prepare("SELECT * from sayfalar where sayfa_menu='1'");
                                                            $sayfalarlist->execute(); 
                                                            while($sayfalarlistprint=$sayfalarlist->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li>
                                                                <a href="<?=seo('sayfa-'.$sayfalarlistprint["sayfa_baslik"]).'-'.$sayfalarlistprint["sayfa_id"]?>"><?php echo $sayfalarlistprint['sayfa_baslik']; ?></a>
                                                            </li>
                                                            <?php } 
                                                            $banka=$db->prepare("SELECT * from smenu where smenu_id=21");
                                                            $banka->execute(); 
                                                            $bankaprint=$banka->fetch(PDO::FETCH_ASSOC); 
                                                            if ($bankaprint['smenu_durum']==1) {?>
                                                            <li>
                                                                <a href="banka-hesaplarimiz"><?php echo $bankaprint['smenu_ad']; ?></a>
                                                            </li>
                                                            <?php }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                    <?php }  
                                                    $sayfalar=$db->prepare("SELECT * from smenu where smenu_id=11");
                                                    $sayfalar->execute(array(0));
                                                    $sayfaprint=$sayfalar->fetch(PDO::FETCH_ASSOC);
                                                    if ($sayfaprint['smenu_durum']==1) {?>
                                                    <li>
                                                        <a href="#"><?php echo $sayfaprint['smenu_ad']; ?></a>
                                                        <ul class="submenu">
                                                            <?php 
                                                            $resimgaleri=$db->prepare("SELECT * from smenu where smenu_id=12");
                                                            $resimgaleri->execute(); 
                                                            $resimgaleriprint=$resimgaleri->fetch(PDO::FETCH_ASSOC); 
                                                            if ($resimgaleriprint['smenu_durum']==1) {?>
                                                            <li>
                                                                <a href="resim-galerisi"><?php echo $resimgaleriprint['smenu_ad']; ?></a>
                                                            </li>
                                                            <?php }
                                                            $videogaleri=$db->prepare("SELECT * from smenu where smenu_id=13");
                                                            $videogaleri->execute(); 
                                                            $videogaleriprint=$videogaleri->fetch(PDO::FETCH_ASSOC); 
                                                            if ($videogaleriprint['smenu_durum']==1) {?>
                                                            <li>
                                                                <a href="video-galerisi"><?php echo $videogaleriprint['smenu_ad']; ?></a>
                                                            </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <?php }
                                                    $hizmet=$db->prepare("SELECT * from smenu where smenu_id=15");
                                                    $hizmet->execute(); 
                                                    $hizmetprint=$hizmet->fetch(PDO::FETCH_ASSOC); 
                                                    if ($hizmetprint['smenu_durum']==1) {?>
                                                    <li>
                                                        <a style="font-size: 15px;" href="hizmetler"><?php echo $hizmetprint['smenu_ad']; ?></a>
                                                        <ul class="submenu">
                                                            <?php 
                                                            $hizmetlist=$db->prepare("SELECT * from hizmetler where hizmet_vitrin='1' Limit 15");
                                                            $hizmetlist->execute(); 
                                                            while($hizmetlistprint=$hizmetlist->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <li>
                                                                <a style="padding: 9px 6px;font-size: 10px;" href="<?=seo('hizmet-'.$hizmetlistprint["hizmet_baslik"]).'-'.$hizmetlistprint["hizmet_id"]?>"><?php echo $hizmetlistprint['hizmet_baslik']; ?></a>
                                                            </li>
                                                            <?php }  ?>
                                                            <li>
                                                                <a style="background-color: #7b7b7b; color: #fff;" href="hizmetler"><b>TÜM HİZMETLER</b></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <?php }
                                                    $menulist=$db->prepare("SELECT * from omenu where omenu_ust=0 order by omenu_sira DESC");
                                                    $menulist->execute(); 
                                                    while($menulistprint=$menulist->fetch(PDO::FETCH_ASSOC)) { ?>

                                                    <li>
                                                        <a style="font-size: 15px;" href="<?php echo $menulistprint['omenu_link']; ?>"><?php echo $menulistprint['omenu_ad']; ?></a>
                                                    </li>
                                                    <?php }

                                                    $iletisim=$db->prepare("SELECT * from smenu where smenu_id=19");
                                                    $iletisim->execute(); 
                                                    $iletisimprint=$iletisim->fetch(PDO::FETCH_ASSOC); 
                                                    if ($iletisimprint['smenu_durum']==1) {?>
                                                    <li>
                                                        <a style="font-size: 15px;" href="iletisim"><?php echo $iletisimprint['smenu_ad']; ?></a>
                                                    </li>
                                                    <?php } ?>


                                                </ul>
                                            </div><!-- /End Navbar Collapse (Menu) -->


                                        </div><!-- /End col-md-12 -->
                                    </div><!-- /End row -->
                                </div><!-- /End container -->
                            </nav><!-- /End Navbar -->


                                                    <!-- Header Search Form Block
                                                        ==================================================== -->
                                                        <div class="form-block header-search-form-block">
                                                            <!-- Form Block Container -->
                                                            <div class="form-block-container">
                                                                <!-- Form -->
                                                                <form method="get" action="search-results.html">


                                                                    <!-- col-md-12 -->
                                                                    <div class="col-md-12">
                                                                        <!-- Form Group -->
                                                                        <div class="form-group">

                                                                            <!-- Close Button -->
                                                                            <a href="#" class="form-close-btn">&times;</a>

                                                                            <input type="text" class="form-control" placeholder="Type then hit enter to search..." name="s" autocomplete="off">

                                                                        </div><!-- /End Form Group -->
                                                                    </div><!-- /End col-md-12 -->


                                                                </form><!-- /End Form -->
                                                            </div><!-- /End Form Block Container -->
                                                        </div><!-- /End Header Search Form Block -->


                                                    </div><!-- /End Header Menu Container -->
                                                </div><!-- /End Header Menu -->


                                            </div><!-- /End Header Section Container -->
                                        </header><!-- /End Header Section -->

