<?php
ob_start();
error_reporting(E_ALL);
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
header("Content-Type: application/xml; charset=utf-8");
header('Content-type: application/xml; charset="utf8"',true); 

include 'trex/controller/config.php';
include 'trex/controller/seo.php';
?>
<urlset
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<?php
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


$onay="1";
$tarih=date("Y-m-d h:i:s");



?>

<!--********************////////////////// Dinamik Sayfalar //////////////////********************-->
<?php

$sayfalar1sor=$db->prepare("SELECT * from sayfalar");
$sayfalar1sor->execute(array(0));
while ($sayfalar1cek=$sayfalar1sor->fetch(PDO::FETCH_ASSOC)) {
	?><url><loc><? echo $ayarcek['ayar_siteurl']; ?><?=seo('sayfa-'.$sayfalar1cek["sayfa_baslik"]).'-'.$sayfalar1cek["sayfa_id"]?></loc>


		<changefreq>monthly</changefreq>
		<priority>0.50</priority>

	</url>;	
	<?php }


	?>
	<!--********************////////////////// Hizmetler //////////////////********************-->
	<?php

	$hizemt1sor=$db->prepare("SELECT * from hizmetler");
	$hizemt1sor->execute(array(0));
	while ($hizemt1cek=$hizemt1sor->fetch(PDO::FETCH_ASSOC)) {
		?><url><loc><? echo $ayarcek['ayar_siteurl']; ?><?=seo('hizmet-'.$hizemt1cek["hizmet_baslik"]).'-'.$hizemt1cek["hizmet_id"]?></loc>


			<changefreq>monthly</changefreq>
			<priority>0.50</priority>

		</url>;	
		<?php }


		?>
		<!--********************////////////////// Hizmet Bölgeleri //////////////////********************-->
		<?php

		$projesor=$db->prepare("SELECT * from projeler");
		$projesor->execute(array(0));
		while ($projecek=$projesor->fetch(PDO::FETCH_ASSOC)) {
			?><url><loc><? echo $ayarcek['ayar_siteurl']; ?><?=seo('bolge-'.$projecek["proje_baslik"]).'-'.$projecek["proje_id"]?></loc>


				<changefreq>monthly</changefreq>
				<priority>0.50</priority>

			</url>;	
			<?php }


			?>
			<!--********************////////////////// Sabit Sayfalar //////////////////********************-->
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>iletisim</loc>


				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;	
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>hizmet-bolgeleri</loc>

				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;	
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>hizmetler</loc>

				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;	
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>blog</loc>


				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;	
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>video-galerisi</loc>


				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;	
			<url><loc><? echo $ayarcek['ayar_siteurl']; ?>resim-galerisi</loc>


				<changefreq>monthly</changefreq>
				<priority>0.30</priority>

			</url>;
			<!--********************////////////////// Blog //////////////////********************-->
			<?php


			$blogsor=$db->prepare("SELECT * from blog order by blog_tarih DESC");
			$blogsor->execute(array(0));
			while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {
				?><url><loc><? echo $ayarcek['ayar_siteurl']; ?><?=seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"]?></loc>


					<changefreq>always</changefreq>
					<priority>1.00</priority>

				</url>;	
				<?php } ?>

				<!--********************//////////////////  SON YAZILIM OZAN ÖZ TARINDAN KODLANMIŞTIR 0546 667 67 03 //////////////////********************-->

				<?


				echo '</urlset>';
				ob_end_flush();
				?>