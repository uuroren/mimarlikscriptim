 <!-- Main Sidebar
    ================================================================ -->
    <div class="main-sidebar">
        <!-- Main Sidebar Container -->
        <div class="main-sidebar-container">

            <!-- Widget Block ( Categories ) -->
            <div class="widget-block widget-block-categories">
                <!-- Widget Block Container -->
                <div class="widget-block-container">


                    <!-- Widget Block Title -->
                    <div class="widget-block-title">
                        <h6>HİZMETLER</h6>
                    </div><!-- /End Widget Block Title -->


                    <!-- Widget Block Body -->
                    <div class="widget-block-body">

                        <!-- Categories Block -->
                        <ul class="categories-block">

                         <?php 
                         $sayfalarlist=$db->prepare("SELECT * from hizmetler Limit 10");
                         $sayfalarlist->execute(); 
                         while($sayfalarlistprint=$sayfalarlist->fetch(PDO::FETCH_ASSOC)) { ?>
                         <li>
                            <a href="<?=seo('hizmet-'.$sayfalarlistprint["hizmet_baslik"]).'-'.$sayfalarlistprint["hizmet_id"]?>"><?php echo $sayfalarlistprint['hizmet_baslik']; ?></a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="hizmetler"><b>TÜM HİZMETLER</b></a>
                        </li>
                    </ul><!-- /End Categories Block -->

                </div><!-- /End Widget Block Body -->


            </div><!-- /End Widget Block Container -->
        </div><!-- /End Widget Block ( Categories ) -->

        <!-- Widget Block ( Social icons ) -->
        <div class="widget-block widget-block-social-icons">
            <!-- Widget Block Container -->
            <div class="widget-block-container">


                <!-- Widget Block Title -->
                <div class="widget-block-title">
                    <h6>TAKİP EDİN</h6>
                </div><!-- /End Widget Block Title -->


                <!-- Widget Block Body -->
                <div class="widget-block-body">

                    <!-- Social Icons Block -->
                    <div class="social-icons-block icons-style-1">
                        <ul>
                            <?php 
                            $socialside=$db->prepare("SELECT * from sosyal");
                            $socialside->execute();
                            while($socialsideprint=$socialside->fetch(PDO::FETCH_ASSOC)) { ?>
                            <li>
                                <a href="<?php echo $socialsideprint['sosyal_link']; ?>">
                                    <i class="fa <?php echo $socialsideprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                    <i class="fa <?php echo $socialsideprint['sosyal_icon']; ?>" aria-hidden="true"></i>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div><!-- /End Social Icons Block -->

                </div><!-- /End Widget Block Body -->


            </div><!-- /End Widget Block Container -->
        </div><!-- /End Widget Block ( Social icons ) -->
        <!-- Widget Block ( Categories ) -->
        <div class="widget-block widget-block-categories">
            <!-- Widget Block Container -->
            <div class="widget-block-container">


                <!-- Widget Block Title -->
                <div class="widget-block-title">
                    <h6>ÜRÜNLER</h6>
                </div><!-- /End Widget Block Title -->


                <!-- Widget Block Body -->
                <div class="widget-block-body">

                    <!-- Categories Block -->
                    <ul class="categories-block">
                       <?php 
                       $projem=$db->prepare("SELECT * from urunler limit 10");
                       $projem->execute();
                       while($projemcek=$projem->fetch(PDO::FETCH_ASSOC)) { ?>
                       <li>
                        <a href="<?=seo('urunler-'.$projemcek["urun_baslik"]).'-'.$projemcek["urun_id"]?>" title="<?php echo $projemcek['urun_baslik']; ?>" >
                            <?php 
                            $blogkarakter = strlen( $projemcek['urun_baslik'] );
                            if ( $blogkarakter > 25 )
                            {

                                echo mb_substr($projemcek['urun_baslik'], 0,25, 'UTF-8')."...";
                            } else {
                              echo $projemcek['urun_baslik'];
                          } ?></a>
                      </li>
                      <?php } ?>
                      <li>
                        <a href="urunler"><b>TÜM ÜRÜNLER</b></a>
                    </li>
                </ul><!-- /End Categories Block -->

            </div><!-- /End Widget Block Body -->


        </div><!-- /End Widget Block Container -->
    </div><!-- /End Widget Block ( Categories ) -->


    <!-- Widget Block ( Categories ) -->
    <div class="widget-block widget-block-categories">
        <!-- Widget Block Container -->
        <div class="widget-block-container">


            <!-- Widget Block Title -->
            <div class="widget-block-title">
                <h6>BLOG</h6>
            </div><!-- /End Widget Block Title -->


            <!-- Widget Block Body -->
            <div class="widget-block-body">

                <!-- Categories Block -->
                <ul class="categories-block">
                   <?php 
                   $blogsor11=$db->prepare("SELECT * from blog limit 10");
                   $blogsor11->execute();
                   while($blogcek11=$blogsor11->fetch(PDO::FETCH_ASSOC)) { ?>
                   <li>
                    <a href="<?=seo('blog-'.$blogcek11["blog_baslik"]).'-'.$blogcek11["blog_id"]?>" title="<?php echo $blogcek11['blog_baslik']; ?>" >
                        <?php 
                        $blogkarakter = strlen( $blogcek11['blog_baslik'] );
                        if ( $blogkarakter > 25 )
                        {

                            echo mb_substr($blogcek11['blog_baslik'], 0,25, 'UTF-8')."...";
                        } else {
                          echo $blogcek11['blog_baslik'];
                      } ?></a>
                  </li>
                  <?php } ?>
                  <li>
                    <a href="hizmetler"><b>TÜM KONULAR</b></a>
                </li>
            </ul><!-- /End Categories Block -->

        </div><!-- /End Widget Block Body -->


    </div><!-- /End Widget Block Container -->
</div><!-- /End Widget Block ( Categories ) -->

<!-- Widget Block ( Latest Posts ) -->




</div><!-- /End Main Sidebar Container -->
                                </div><!-- /End Main Sidebar -->