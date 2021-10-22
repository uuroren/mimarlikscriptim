  <?php 
  $slider=$db->prepare("SELECT * from slayt order by slayt_sira ASC");
  $slider->execute(array(0));
  ?>
  <!-- Page Body
  	==================================================================== -->
  	<div class="page-body">


                <!-- Main Content
                	================================================================ -->
                	<div class="main-content">
                		<!-- Main Content Container -->
                		<div class="main-content-container">


                			<!-- Slider Revolution -->
                			<div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                				<div id="rev_slider_container" class="rev_slider fullwidthabanner" data-version="5.4.1">


                					<ul>
                						<?php while($sliderprint=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
                							<!-- Slide 1 -->
                							<li
                							data-transition="slideleft"
                							data-slotamount="default"
                							data-masterspeed="1500"
                							data-thumb="trex/<?php echo $sliderprint['slayt_resim']; ?>"
                							data-saveperformance="off"
                							data-title="Intro">

                							<!-- Background Image -->
                							<img
                							src="trex/<?php echo $sliderprint['slayt_resim']; ?>"
                							alt="Slidebg"
                							data-bgfit="cover"
                							data-bgrepeat="no-repeat"
                							data-bgposition="center top"
                							class="rev-slidebg" />

                							<!-- Layer 1 (overlay) -->
                							<div
                							class="tp-caption tp-shape tp-shapewrapper"
                							data-x="center"
                							data-hoffset="0"
                							data-y="middle"
                							data-voffset="0"
                							data-width="full"
                							data-height="full"
                							data-whitespace="nowrap"
                							data-type="shape"
                							data-basealign="slide"
                							data-responsive_offset="on"
                							data-responsive="off"
                							data-frames='[
                							{
                								"from":"opacity:0;",
                								"speed":1500,
                								"to":"o:1;",
                								"delay":750,
                								"ease":"Power3.easeInOut"
                							},
                							{
                								"delay":"wait",
                								"speed":300,
                								"ease":"nothing"
                							}
                							]'
                							data-textAlign="left"
                							data-paddingtop="0"
                							data-paddingright="15"
                							data-paddingbottom="0"
                							data-paddingleft="15"
                							style="z-index: 5;">
                						</div><!-- /End Layer 1 (overlay) -->

                						<!-- Layer 2 -->
                						<div
                						class="tp-caption rs-heading-title light-color tp-resizeme"
                						data-x="left"
                						data-hoffset="0"
                						data-y="middle"
                						data-voffset="-90"
                						data-fontsize="60"
                						data-lineheight="60"
                						data-width="585"
                						data-height="none"
                						data-whitespace="normal"
                						data-type="text"
                						data-responsive_offset="on"
                						data-frames='[
                						{
                							"delay":1000,
                							"speed":1500,
                							"frame":"0",
                							"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                							"to":
                							"o:1;",
                							"ease":"Power4.easeInOut"
                						},
                						{
                							"delay":"wait",
                							"speed":800,
                							"frame":"999",
                							"to":"auto:auto;",
                							"ease":"Power3.easeInOut"
                						}
                						]'
                						data-textAlign="left"
                						data-paddingtop="0"
                						data-paddingright="15"
                						data-paddingbottom="0"
                						data-paddingleft="15" style="color: black;">
                						<?php echo $sliderprint['slayt_baslik']; ?>
                					</div><!-- /End Layer 2 -->

                					<!-- Layer 3 -->
                					<div
                					class="tp-caption rs-subtitle light-color tp-resizeme"
                					data-x="left"
                					data-hoffset="0"
                					data-y="middle"
                					data-voffset="30"
                					data-fontsize="24"
                					data-lineheight="34"
                					data-width="585"
                					data-height="none"
                					data-whitespace="normal"
                					data-type="text"
                					data-responsive_offset="on"
                					data-frames='[
                					{
                						"delay":1200,
                						"speed":1500,
                						"frame":"0",
                						"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                						"to":
                						"o:1;",
                						"ease":"Power4.easeInOut"
                					},
                					{
                						"delay":"wait",
                						"speed":800,
                						"frame":"999",
                						"to":"auto:auto;",
                						"ease":"Power3.easeInOut"
                					}
                					]'
                					data-textAlign="left"
                					data-paddingtop="0"
                					data-paddingright="15"
                					data-paddingbottom="0"
                					data-paddingleft="15" style="color: rgb(125, 125, 125);">
                					<?php echo $sliderprint['slayt_aciklama']; ?>
                				</div><!-- /End Layer 3 -->

                				<!-- Layer 4 -->
                				<div
                				class="tp-caption rs-btn tp-resizeme"
                				data-x="left"
                				data-hoffset="0"
                				data-y="middle"
                				data-voffset="115"
                				data-width="585"
                				data-height="none"
                				data-whitespace="normal"
                				data-type="text"
                				data-responsive_offset="on"
                				data-frames='[
                				{
                					"delay":1400,
                					"speed":1500,
                					"frame":"0",
                					"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                					"to":
                					"o:1;",
                					"ease":"Power4.easeInOut"
                				},
                				{
                					"delay":"wait",
                					"speed":800,
                					"frame":"999",
                					"to":"auto:auto;",
                					"ease":"Power3.easeInOut"
                				}
                				]'
                				data-textAlign="left"
                				data-paddingtop="0"
                				data-paddingright="15"
                				data-paddingbottom="0"
                				data-paddingleft="15">
                				<?php
                				$kontrol=strlen($sliderprint['slayt_butonad']);
                				if ($kontrol>0) { ?>
                				<a href="<?php echo $sliderprint['slayt_butonlink']; ?>" class="btn btn-gfort-o"><?php echo $sliderprint['slayt_butonad']; ?></a>
                				<?php } ?>
                			</div><!-- /End Layer 4 -->

                		</li><!-- /End Slide 1 -->
                		<?php } ?>

                	</ul>


                	<div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.50);"></div>


                </div>
</div><!-- /End Slider Revolution -->