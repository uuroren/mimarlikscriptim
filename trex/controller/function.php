<?php
ob_start();
session_start();
include 'config.php';
date_default_timezone_set( 'Europe/Istanbul' );
if ( isset( $_POST[ 'login' ] ) )
{


	$kullanici_adi  = $_POST[ 'kullanici_adi' ];
	$kullanici_pass = md5( $_POST[ 'kullanici_pass' ] );

	if ( $kullanici_adi && $kullanici_pass )
	{


		$kullanicisor = $db->prepare( "SELECT * from kullanici where kullanici_adi=:adi and kullanici_pass=:pass" );
		$kullanicisor->execute(
			array(
				'adi'  => $kullanici_adi,
				'pass' => $kullanici_pass
			)
		);

		$say = $kullanicisor->rowCount();

		if ( $say > 0 )
		{

			$_SESSION[ 'kullanici_adi' ] = $kullanici_adi;

			header( 'Location:../index.php' );
		}
		else
		{

			header( 'Location:../login.php?status=no' );
		}
	}
}


if ( isset( $_POST[ 'blogekle' ] ) )
{


	$uploads_dir = '../assets/img/blog';
	@$tmp_name = $_FILES[ 'blog_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti='.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO blog SET
		blog_baslik=:baslik,
		blog_detay=:detay,
		blog_title=:title,
		blog_descr=:descr,
		blog_keyword=:keyword,
		blog_resim=:resim"
	);
	$insert = $kaydet->execute(
		array(
			'baslik' => $_POST[ 'blog_baslik' ],
			'detay'  => $_POST[ 'blog_detay' ],
			'title' => $_POST[ 'blog_title' ],
			'descr'  => $_POST[ 'blog_descr' ],
			'keyword' => $_POST[ 'blog_keyword' ],
			'resim'  => $refimgyol
		)
	);

	if ( $insert )
	{

		Header( "Location:../blog.php?status=ok" );


	}
	else
	{

		Header( "Location:../blog.php?status=no" );
	}
}
if ( isset( $_POST[ 'randevu' ] ) )
{

	$kaydet = $db->prepare(
		"INSERT INTO randevu SET
		randevu_ad=:ad,
		randevu_tel=:tel,
		randevu_hizmet=:hizmet,
		randevu_not=:not,
		randevu_zaman=:zaman,
		randevu_il=:il,
		randevu_ilce=:ilce,
		randevu_adres=:adres");
	$insert = $kaydet->execute(
		array(
			'ad' => $_POST[ 'randevu_ad' ],
			'tel' => $_POST[ 'randevu_tel' ],
			'hizmet' => $_POST[ 'randevu_hizmet' ],
			'not' => $_POST[ 'randevu_not' ],
			'zaman' => $_POST[ 'randevu_zaman' ],
			'il' => $_POST[ 'randevu_il' ],
			'ilce' => $_POST[ 'randevu_ilce' ],
			'adres' => $_POST[ 'randevu_adres' ]
		));


	$smssor=$db->prepare("SELECT * from sms where sms_id=0");
	$smssor->execute(array(0));
	$smscek=$smssor->fetch(PDO::FETCH_ASSOC);

	$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
	$settings->execute(array(0));
	$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);

	$link = $settingsprint['ayar_siteurl'];

	if ( $insert )
	{

		Header( "Location:../../..//randevu.php?randevuform=ok" );
		

		
		
	}
	else
	{

		Header( "Location:$linkrandevu/?status=no" );
	}
}


if ( isset( $_POST[ 'siparisver' ] ) )
{



	$kaydet = $db->prepare(
		"INSERT INTO siparis SET
		siparis_ad=:ad,
		siparis_urun=:urun,
		siparis_tel=:tel,
		siparis_il=:il,
		siparis_ilce=:ilce,
		siparis_mail=:mail,
		siparis_adres=:adres");
	$insert = $kaydet->execute(
		array(
			'ad' => $_POST[ 'siparis_ad' ],
			'urun' => $_POST[ 'siparis_urun' ],
			'tel' => $_POST[ 'siparis_tel' ],
			'mail' => $_POST[ 'siparis_mail' ],
			'il' => $_POST[ 'siparis_il' ],
			'ilce' => $_POST[ 'siparis_ilce' ],
			'adres' => $_POST[ 'siparis_adres' ]
		));

	$smssor=$db->prepare("SELECT * from sms where sms_id=0");
	$smssor->execute(array(0));
	$smscek=$smssor->fetch(PDO::FETCH_ASSOC);

	$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
	$settings->execute(array(0));
	$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);

	$link = $settingsprint['ayar_siteurl'];

	if ( $insert )
	{
		Header( "Location:../../phpmail/siparis.php?iletisimform=ok" );
		
	}
	else
	{

		Header( "Location:$link?status=no" );
	}
}
if ( isset( $_POST[ 'iletisimform' ] ) )
{



	$ayarkaydet = $db->prepare(
		"INSERT INTO mesajlar SET
		mesaj_ad=:ad,
		mesaj_mail=:mail,
		mesaj_icerik=:icerik
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'mesaj_ad' ],
			'mail'     => $_POST[ 'mesaj_mail' ],
			'icerik'     => $_POST[ 'mesaj_icerik' ]
		)
	);

	

	if ( $update )
	{
		$idmesaj = $db->lastInsertId();
		Header( "Location:../../phpmail/index.php?iletisimform=ok&mesaj=$idmesaj" );
	}
	else
	{

		Header( "Location:../../iletisim?status=no" );
	}
} 
if (isset($_SESSION['kullanici_adi'])) { 
	if ( isset( $_POST[ 'widgetduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE widget SET
			widget_bhizmet=:bhizmet,
			widget_hizmet=:hizmet,
			widget_blog=:blog,
			widget_bproje=:bproje,
			widget_galeri=:galeri,
			widget_burun=:burun,
			widget_urun=:urun,
			widget_yorum=:yorum,
			widget_bwelcome=:bwelcome,
			widget_welcome=:welcome,
			widget_bwelcome1=:bwelcome1,
			widget_welcome1=:welcome1,
			widget_bblog=:bblog,
			widget_byorum=:byorum
			WHERE widget_id={$_POST['widget_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'bhizmet'     => $_POST[ 'widget_bhizmet' ],
				'hizmet'     => $_POST[ 'widget_hizmet' ],
				'blog'     => $_POST[ 'widget_blog' ],
				'bproje'     => $_POST[ 'widget_bproje' ],
				'galeri'     => $_POST[ 'widget_galeri' ],
				'burun'     => $_POST[ 'widget_burun' ],
				'urun'     => $_POST[ 'widget_urun' ],
				'yorum'     => $_POST[ 'widget_yorum' ],
				'bwelcome'     => $_POST[ 'widget_bwelcome' ],
				'welcome'     => $_POST[ 'widget_welcome' ],
				'bwelcome1'     => $_POST[ 'widget_bwelcome1' ],
				'welcome1'     => $_POST[ 'widget_welcome1' ],
				'bblog'     => $_POST[ 'widget_bblog' ],
				'byorum'     => $_POST[ 'widget_byorum' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../modul.php?status=ok" );
		}
		else
		{

			Header( "Location:../modul.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'whatsappduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE whatsapp SET
			whats_tel=:tel,
			whats_yon=:yon,
			whats_durum=:durum
			WHERE whats_id={$_POST['whats_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'tel'     => $_POST[ 'whats_tel' ],
				'yon'     => $_POST[ 'whats_yon' ],
				'durum'     => $_POST[ 'whats_durum' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../whatsapp.php?status=ok" );
		}
		else
		{

			Header( "Location:../whatsapp.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'htmlduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE widget SET
			widget_html=:html
			WHERE widget_id={$_POST['widget_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'html'     => $_POST[ 'widget_html' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../html-alan.php?status=ok" );
		}
		else
		{

			Header( "Location:../html-alan.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'widgetsssduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE widget SET
			widget_sbir=:sbir,
			widget_cbir=:cbir,
			widget_siki=:siki,
			widget_ciki=:ciki,
			widget_suc=:suc,
			widget_cuc=:cuc
			WHERE widget_id={$_POST['widget_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'sbir'     => $_POST[ 'widget_sbir' ],
				'cbir'     => $_POST[ 'widget_cbir' ],
				'siki'     => $_POST[ 'widget_siki' ],
				'ciki'     => $_POST[ 'widget_ciki' ],
				'suc'     => $_POST[ 'widget_suc' ],
				'cuc'     => $_POST[ 'widget_cuc' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../modul.php?status=ok" );
		}
		else
		{

			Header( "Location:../modul.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'counterduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE counter SET
			counter_isim=:isim,
			counter_rakam=:rakam,
			counter_icon=:icon
			WHERE counter_id={$_POST['counter_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'isim'     => $_POST[ 'counter_isim' ],
				'rakam'     => $_POST[ 'counter_rakam' ],
				'icon'     => $_POST[ 'counter_icon' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../counter.php?status=ok" );
		}
		else
		{

			Header( "Location:../counter.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'metaduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE meta SET
			meta_title=:title,
			meta_descr=:descr,
			meta_keyword=:keyword
			WHERE meta_id={$_POST['meta_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'title'     => $_POST[ 'meta_title' ],
				'descr'     => $_POST[ 'meta_descr' ],
				'keyword'     => $_POST[ 'meta_keyword' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../seo.php?status=ok" );
		}
		else
		{

			Header( "Location:../seo.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'kategoriduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE kategoriler SET
			kategori_ad=:ad,
			kategori_title=:title,
			kategori_descr=:descr,
			kategori_keyword=:keyword,
			kategori_sira=:sira
			WHERE kategori_id={$_POST['kategori_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'kategori_ad' ],
				'title'     => $_POST[ 'kategori_title' ],
				'descr'     => $_POST[ 'kategori_descr' ],
				'keyword'     => $_POST[ 'kategori_keyword' ],
				'sira'    => $_POST[ 'kategori_sira' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../kategoriler.php?status=ok" );
		}
		else
		{

			Header( "Location:../kategoriler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'genelayar' ] ) )
	{

		if ( $_FILES[ 'ayar_logo' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_logo' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_siteurl=:siteurl,
				ayar_firmaadi=:firmaadi,
				ayar_kod=:kod,
				ayar_logo=:logo,
				ayar_harita=:harita

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'siteurl'     => $_POST[ 'ayar_siteurl' ],
					'firmaadi'    => $_POST[ 'ayar_firmaadi' ],
					'kod'     => $_POST[ 'ayar_kod' ],
					'logo' => $refimgyol,
					'harita'         => $_POST[ 'ayar_harita' ]
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eskiyol_logo' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../genel-ayarlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../genel-ayarlar.php?status=no" );
			}
		} else {
			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_siteurl=:siteurl,
				ayar_firmaadi=:firmaadi,
				ayar_kod=:kod,
				ayar_harita=:harita

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'siteurl'     => $_POST[ 'ayar_siteurl' ],
					'firmaadi'    => $_POST[ 'ayar_firmaadi' ],
					'kod'     => $_POST[ 'ayar_kod' ],
					'harita'         => $_POST[ 'ayar_harita' ]
				)
			);

			if ( $update )
			{

				Header( "Location:../genel-ayarlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../genel-ayarlar.php?status=no" );
			}
		}

		if ( $_FILES[ 'ayar_fav' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_fav' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_siteurl=:siteurl,
				ayar_firmaadi=:firmaadi,
				ayar_kod=:kod,
				ayar_fav=:fav,
				ayar_harita=:harita

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'siteurl'     => $_POST[ 'ayar_siteurl' ],
					'firmaadi'    => $_POST[ 'ayar_firmaadi' ],
					'kod'     => $_POST[ 'ayar_kod' ],
					'fav' => $refimgyol,
					'harita'         => $_POST[ 'ayar_harita' ]
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eskiyol_fav' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../genel-ayarlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../genel-ayarlar.php?status=no" );
			}
		} else {
			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_siteurl=:siteurl,
				ayar_firmaadi=:firmaadi,
				ayar_kod=:kod,
				ayar_harita=:harita

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'siteurl'     => $_POST[ 'ayar_siteurl' ],
					'firmaadi'    => $_POST[ 'ayar_firmaadi' ],
					'kod'     => $_POST[ 'ayar_kod' ],
					'harita'         => $_POST[ 'ayar_harita' ]
				)
			);

			if ( $update )
			{

				Header( "Location:../genel-ayarlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../genel-ayarlar.php?status=no" );
			}
		}
		
	}
	if ( isset( $_POST[ 'seoayar' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_title=:title,
			ayar_description=:description,
			ayar_keywords=:keywords
			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'title'       => $_POST[ 'ayar_title' ],
				'description' => $_POST[ 'ayar_description' ],
				'keywords' => $_POST[ 'ayar_keywords' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'renkayar' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_renk=:renk
			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'renk'       => $_POST[ 'ayar_renk' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'iletisimayar' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_adres=:adres,
			ayar_ilce=:ilce,
			ayar_ara=:ara,
			ayar_il=:il,
			ayar_tel=:tel,
			ayar_fax=:fax,
			ayar_mail=:mail
			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'adres'       => $_POST[ 'ayar_adres' ],
				'ilce'        => $_POST[ 'ayar_ilce' ],
				'ara'        => $_POST[ 'ayar_ara' ],
				'il'          => $_POST[ 'ayar_il' ],
				'tel'         => $_POST[ 'ayar_tel' ],
				'fax'         => $_POST[ 'ayar_fax' ],
				'mail'        => $_POST[ 'ayar_mail' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'sms' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE sms SET
			sms_kullanici=:kullanici,
			sms_sifre=:sifre,
			sms_baslik=:baslik,
			sms_durum=:durum
			WHERE sms_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'kullanici' => $_POST[ 'sms_kullanici' ],
				'sifre' => $_POST[ 'sms_sifre' ],
				'baslik' => $_POST[ 'sms_baslik' ],
				'durum' => $_POST[ 'sms_durum' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'motorduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE motor SET
			motor_analitik=:analitik,
			motor_metrika=:metrika,
			motor_gonay=:gonay,
			motor_yonay=:yonay
			WHERE motor_id={$_POST['motor_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'analitik' => $_POST[ 'motor_analitik' ],
				'metrika' => $_POST[ 'motor_metrika' ],
				'gonay' => $_POST[ 'motor_gonay' ],
				'yonay' => $_POST[ 'motor_yonay' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../google-yandex-ayarlari.php?status=ok" );
		}
		else
		{

			Header( "Location:../google-yandex-ayarlari.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'logoduzenle' ] ) )
	{

		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'ayar_logo' ][ "tmp_name" ];
		@$name = $_FILES[ 'ayar_logo' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol      = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_logo=:logo
			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'logo' => $refimgyol
			)
		);

		if ( $update )
		{
			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayaralar.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'favduzenle' ] ) )
	{

		$uploads_dir = '../../img';
		@$tmp_name = $_FILES[ 'ayar_fav' ][ "tmp_name" ];
		@$name = $_FILES[ 'ayar_fav' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_fav=:fav
			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'fav' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol2' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/genel-ayarlar.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/genel-ayarlar.php?durum=no" );
		}
	}

	if ( isset( $_POST[ 'sosyalduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE sosyal SET
			sosyal_link=:link,
			sosyal_icon=:icon
			WHERE sosyal_id={$_POST['sosyal_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'link' => $_POST[ 'sosyal_link' ],
				'icon' => $_POST[ 'sosyal_icon' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../sosyal-medya.php?status=ok" );
		}
		else
		{

			Header( "Location:../sosyal-medya.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'sosyalekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO sosyal SET
			sosyal_link=:link,
			sosyal_icon=:icon
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'link' => $_POST[ 'sosyal_link' ],
				'icon' => $_POST[ 'sosyal_icon' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../sosyal-medya.php?status=ok" );
		}
		else
		{

			Header( "Location:../sosyal-medya.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'mailayarlari' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"UPDATE mail SET
			mail_user=:user,
			mail_host=:host,
			mail_pass=:pass,
			mail_port=:port
			WHERE mail_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'user' => $_POST[ 'mail_user' ],
				'host' => $_POST[ 'mail_host' ],
				'pass' => $_POST[ 'mail_pass' ],
				'port' => $_POST[ 'mail_port' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'profilresimduzenle' ] ) )
	{

		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'kullanici_resim' ][ "tmp_name" ];
		$uzanti='.jpg';
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE kullanici SET
			kullanici_resim=:resim
			WHERE kullanici_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol
			)
		);

		if ( $update )
		{


			Header( "Location:../user.php?status=ok" );
		}
		else
		{

			Header( "Location:../user.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'kullaniciduzenle' ] ) )
	{

		$kullanici_pass = md5( $_POST[ 'kullanici_pass' ] );

		$ayarkaydet = $db->prepare(
			"UPDATE kullanici SET
			kullanici_adsoyad=:adsoyad,
			kullanici_adi=:adi
			WHERE kullanici_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'adsoyad' => $_POST[ 'kullanici_adsoyad' ],
				'adi'     => $_POST[ 'kullanici_adi' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../user.php?status=ok" );
		}
		else
		{

			Header( "Location:../user.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'kullanicisifre' ] ) )
	{

		$kullanici_pass = md5( $_POST[ 'kullanici_pass' ] );

		$ayarkaydet = $db->prepare(
			"UPDATE kullanici SET
			kullanici_pass=:pass
			WHERE kullanici_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'pass' => $kullanici_pass
			)
		);

		if ( $update )
		{

			Header( "Location:../user.php?status=ok" );
		}
		else
		{

			Header( "Location:../user.php?status=no" );
		}
	}


	if ( isset( $_POST[ 'sssduzenle' ] ) )
	{

		$sss_id = $_POST[ 'sss_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE sss SET
			sss_soru=:soru,
			sss_sira=:sira,
			sss_cevap=:cevap
			WHERE sss_id={$_POST['sss_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'soru'  => $_POST[ 'sss_soru' ],
				'sira'  => $_POST[ 'sss_sira' ],
				'cevap' => $_POST[ 'sss_cevap' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../sss.php?status=ok" );
		}
		else
		{

			Header( "Location:../sss.php?status=ok" );
		}
	}
	if ( isset( $_POST[ 'kategoriekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO kategoriler SET
			kategori_ad=:ad,
			kategori_title=:title,
			kategori_descr=:descr,
			kategori_keyword=:keyword,
			kategori_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'kategori_ad' ],
				'title'     => $_POST[ 'kategori_title' ],
				'descr'     => $_POST[ 'kategori_descr' ],
				'keyword'     => $_POST[ 'kategori_keyword' ],
				'sira'    => $_POST[ 'kategori_sira' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../kategoriler.php?status=ok" );
		}
		else
		{

			Header( "Location:../kategoriler.php?status=no" );
		}
	}
	
	if ( isset( $_POST[ 'sssekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO sss SET
			sss_soru=:soru,
			sss_cevap=:cevap,
			sss_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'soru'  => $_POST[ 'sss_soru' ],
				'cevap' => $_POST[ 'sss_cevap' ],
				'sira'  => $_POST[ 'sss_sira' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../sss.php?&status=ok" );
		}
		else
		{

			Header( "Location:../sss.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'omenuekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../menu.php?&status=ok" );
		}
		else
		{

			Header( "Location:../menu.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'flinkekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO flink SET
			flink_ad=:ad,
			flink_link=:link
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'flink_ad' ],
				'link' => $_POST[ 'flink_link' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../alt-link.php?&status=ok" );
		}
		else
		{

			Header( "Location:../alt-link.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'fmenuekle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO fmenu SET
			fmenu_ad=:ad,
			fmenu_link=:link,
			fmenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'fmenu_ad' ],
				'link' => $_POST[ 'fmenu_link' ],
				'sira'  => $_POST[ 'fmenu_sira' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../alt-menu.php?&status=ok" );
		}
		else
		{

			Header( "Location:../alt-menu.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'slaytresimduzenle' ] ) )
	{

		$uploads_dir = '../../img/slayt';
		@$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'slayt_resim' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$slayt_id = $_POST[ 'slayt_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE slayt SET
			slayt_resim=:resim
			WHERE slayt_id={$_POST['slayt_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/slayt.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/slayt.php?durum=no" );
		}
	}

	if ( isset( $_POST[ 'refresimduzenle1' ] ) )
	{

		$uploads_dir = '../../img/referanslar';
		@$tmp_name = $_FILES[ 'refrans_resim1' ][ "tmp_name" ];
		@$name = $_FILES[ 'refrans_resim1' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$slayt_id = $_POST[ 'refrans_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE referanslar SET
			refrans_resim1=:resim1
			WHERE refrans_id={$_POST['refrans_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim1' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/referans.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/referans.php?durum=no" );
		}
	}

	if ( isset( $_POST[ 'refresimduzenle2' ] ) )
	{

		$uploads_dir = '../../img/referanslar';
		@$tmp_name = $_FILES[ 'refrans_resim2' ][ "tmp_name" ];
		@$name = $_FILES[ 'refrans_resim2' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$slayt_id = $_POST[ 'refrans_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE referanslar SET
			refrans_resim2=:resim2
			WHERE refrans_id={$_POST['refrans_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim2' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/referans.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/referans.php?durum=no" );
		}
	}


	if ( isset( $_POST[ 'hizmetresimduzenle' ] ) )
	{

		$uploads_dir = '../../img/hizmetler';
		@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$slayt_id = $_POST[ 'hizmet_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE hizmetler SET
			hizmet_resim=:resim
			WHERE hizmet_id={$_POST['hizmet_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/hizmetler.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/hizmetler.php?durum=no" );
		}
	}
	if ( isset( $_POST[ 'yorumresimduzenle' ] ) )
	{

		$uploads_dir = '../../img/yorum';
		@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'yorum_resim' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

		$slayt_id = $_POST[ 'yorum_id' ];

		$ayarkaydet = $db->prepare(
			"UPDATE yorumlar SET
			yorum_resim=:resim
			WHERE yorum_id={$_POST['yorum_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/yorumlar.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/yorumlar.php?durum=no" );
		}
	}
	if ( isset( $_POST[ 'urunresimekle' ] ) )
	{

		$uploads_dir = '../assets/img/urunler';
		$tmp_name = $_FILES[ 'resim_link' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO resim SET
			resim_urun=:urun,
			resim_link=:link
			");
		$insert = $kaydet->execute(
			array(
				'urun'     => $_POST[ 'resim_urun' ],
				'link'    => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../urunler.php?status=ok" );
		}
		else
		{

			Header( "Location:../urunler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'projeresimduzenle' ] ) )
	{

		$uploads_dir = '../../img/projeler';
		@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'proje_resim' ][ "name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );



		$ayarkaydet = $db->prepare(
			"UPDATE projeler SET
			proje_resim=:resim
			WHERE proje_id={$_POST['proje_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol2,
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../../$resimsilunlink" );

			Header( "Location:../production/projeler.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/projeler.php?durum=no" );
		}
	}
	if ( isset( $_POST[ 'slaytduzenle' ] ) )
	{

		if ( $_FILES[ 'slayt_resim' ][ "size" ] > 0 )
		{

			$uploads_dir = '../assets/img/slayt';
			@$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol2     = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE slayt SET
				slayt_sira=:sira,
				slayt_baslik=:baslik,
				slayt_butonlink=:butonlink,
				slayt_butonad=:butonad,
				slayt_aciklama=:aciklama,
				slayt_resim=:resim
				WHERE slayt_id={$_POST['slayt_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'sira'     => $_POST[ 'slayt_sira' ],
					'baslik'     => $_POST[ 'slayt_baslik' ],
					'butonlink'     => $_POST[ 'slayt_butonlink' ],
					'butonad'     => $_POST[ 'slayt_butonad' ],
					'aciklama' => $_POST[ 'slayt_aciklama' ],
					'resim' => $refimgyol2
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../slayt.php?status=ok" );
			}
			else
			{

				Header( "Location:../slayt.php?status=no" );
			}
		} else {
			$ayarkaydet = $db->prepare(
				"UPDATE slayt SET
				slayt_sira=:sira,
				slayt_baslik=:baslik,
				slayt_butonlink=:butonlink,
				slayt_butonad=:butonad,
				slayt_aciklama=:aciklama
				WHERE slayt_id={$_POST['slayt_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'sira'     => $_POST[ 'slayt_sira' ],
					'baslik'     => $_POST[ 'slayt_baslik' ],
					'butonlink'     => $_POST[ 'slayt_butonlink' ],
					'butonad'     => $_POST[ 'slayt_butonad' ],
					'aciklama' => $_POST[ 'slayt_aciklama' ]
				)
			);

			if ( $update )
			{


				Header( "Location:../slayt.php?status=ok" );
			}
			else
			{

				Header( "Location:../slayt.php?status=no" );
			}
		}
	}


	if ( isset( $_POST[ 'hizmetduzenle' ] ) )
	{

		if ( $_FILES[ 'hizmet_resim' ][ "size" ] > 0 )
		{
			$uploads_dir = '../assets/img/hizmetler';
			@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
			@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti='.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE hizmetler SET
				hizmet_baslik=:baslik,
				hizmet_icerik=:icerik,
				hizmet_title=:title,
				hizmet_descr=:descr,
				hizmet_keyword=:keyword,
				hizmet_vitrin=:vitrin,
				hizmet_resim=:resim,
				hizmet_icon=:icon
				WHERE hizmet_id={$_POST['hizmet_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'hizmet_baslik' ],
					'icerik'     => $_POST[ 'hizmet_icerik' ],
					'title'     => $_POST[ 'hizmet_title' ],
					'descr'     => $_POST[ 'hizmet_descr' ],
					'keyword'     => $_POST[ 'hizmet_keyword' ],
					'vitrin'     => $_POST[ 'hizmet_vitrin' ],
					'resim'     => $refimgyol,
					'icon' => $_POST[ 'hizmet_icon' ]
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../hizmetler.php?status=ok" );
			}
			else
			{

				Header( "Location:../hizmetler.php?status=no" );
			}
		} else {

			$ayarkaydet = $db->prepare(
				"UPDATE hizmetler SET
				hizmet_baslik=:baslik,
				hizmet_icerik=:icerik,
				hizmet_title=:title,
				hizmet_descr=:descr,
				hizmet_keyword=:keyword,
				hizmet_vitrin=:vitrin,
				hizmet_icon=:icon
				WHERE hizmet_id={$_POST['hizmet_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'hizmet_baslik' ],
					'icerik'     => $_POST[ 'hizmet_icerik' ],
					'title'     => $_POST[ 'hizmet_title' ],
					'descr'     => $_POST[ 'hizmet_descr' ],
					'keyword'     => $_POST[ 'hizmet_keyword' ],
					'vitrin'     => $_POST[ 'hizmet_vitrin' ],
					'icon' => $_POST[ 'hizmet_icon' ]
				)
			);

			if ( $update )
			{


				Header( "Location:../hizmetler.php?status=ok" );
			}
			else
			{

				Header( "Location:../hizmetler.php?status=no" );
			}
		}
	}
	if ( isset( $_POST[ 'markaduzenle' ] ) )
	{

		if ( $_FILES[ 'hizmet_resim' ][ "size" ] > 0 )
		{
			$uploads_dir = '../assets/img/hizmetler';
			@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
			@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti='.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE markalar SET
				hizmet_baslik=:baslik,
				hizmet_icerik=:icerik,
				hizmet_title=:title,
				hizmet_descr=:descr,
				hizmet_keyword=:keyword,
				hizmet_resim=:resim,
				hizmet_icon=:icon
				WHERE hizmet_id={$_POST['hizmet_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'hizmet_baslik' ],
					'icerik'     => $_POST[ 'hizmet_icerik' ],
					'title'     => $_POST[ 'hizmet_title' ],
					'descr'     => $_POST[ 'hizmet_descr' ],
					'keyword'     => $_POST[ 'hizmet_keyword' ],
					'resim'     => $refimgyol,
					'icon' => $_POST[ 'hizmet_icon' ]
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../markalar.php?status=ok" );
			}
			else
			{

				Header( "Location:../markalar.php?status=no" );
			}
		} else {

			$ayarkaydet = $db->prepare(
				"UPDATE markalar SET
				hizmet_baslik=:baslik,
				hizmet_icerik=:icerik,
				hizmet_title=:title,
				hizmet_descr=:descr,
				hizmet_keyword=:keyword,
				hizmet_vitrin=:vitrin,
				hizmet_icon=:icon
				WHERE hizmet_id={$_POST['hizmet_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'hizmet_baslik' ],
					'icerik'     => $_POST[ 'hizmet_icerik' ],
					'title'     => $_POST[ 'hizmet_title' ],
					'descr'     => $_POST[ 'hizmet_descr' ],
					'keyword'     => $_POST[ 'hizmet_keyword' ],
					'vitrin'     => $_POST[ 'hizmet_vitrin' ],
					'icon' => $_POST[ 'hizmet_icon' ]
				)
			);

			if ( $update )
			{


				Header( "Location:../markalar.php?status=ok" );
			}
			else
			{

				Header( "Location:../markalar.php?status=no" );
			}
		}
	}

	if ( isset( $_POST[ 'yorumduzenle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"UPDATE yorumlar SET
			yorum_isim=:isim,
			yorum_icerik=:icerik,
			yorum_link=:link
			WHERE yorum_id={$_POST['yorum_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'isim'     => $_POST[ 'yorum_isim' ],
				'icerik'     => $_POST[ 'yorum_icerik' ],
				'link' => $_POST[ 'yorum_link' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../production/yorumlar.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/yorumlar.php?durum=no" );
		}
	}
	if ( isset( $_POST[ 'urunduzenle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"UPDATE urunler SET
			urun_baslik=:baslik,
			urun_kategori=:kategori,
			urun_fiyat=:fiyat,
			urun_efiyat=:efiyat,
			urun_aciklama=:aciklama,
			urun_vitrin=:vitrin,
			urun_title=:title,
			urun_descr=:descr,
			urun_keyword=:keyword
			WHERE urun_id={$_POST['urun_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'urun_baslik' ],
				'kategori'     => $_POST[ 'urun_kategori' ],
				'fiyat'     => $_POST[ 'urun_fiyat' ],
				'efiyat'     => $_POST[ 'urun_efiyat' ],
				'aciklama'     => $_POST[ 'urun_aciklama' ],
				'vitrin'     => $_POST[ 'urun_vitrin' ],
				'title'     => $_POST[ 'urun_title' ],
				'descr'     => $_POST[ 'urun_descr' ],
				'keyword'     => $_POST[ 'urun_keyword' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../urunler.php?status=ok" );
		}
		else
		{

			Header( "Location:../urunler.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'projeduzenle' ] ) )
	{

		if ( $_FILES[ 'proje_resim' ][ "size" ] > 0 )
		{
			$uploads_dir = '../assets/img/projeler';
			@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
			@$name = $_FILES[ 'proje_resim' ][ "name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti='.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );


			$ayarkaydet = $db->prepare(
				"UPDATE projeler SET
				proje_baslik=:baslik,
				proje_icerik=:icerik,
				proje_resim=:resim,
				proje_title=:title,
				proje_descr=:descr,
				proje_keyword=:keyword
				WHERE proje_id={$_POST['proje_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'proje_baslik' ],
					'icerik'     => $_POST[ 'proje_icerik' ],
					'resim'     => $refimgyol,
					'title'     => $_POST[ 'proje_title' ],
					'descr'     => $_POST[ 'proje_descr' ],
					'keyword'     => $_POST[ 'proje_keyword' ]
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../bolgeler.php?status=ok" );
			}
			else
			{

				Header( "Location:../bolgeler.php?status=no" );
			}
		}
		else {
			$ayarkaydet = $db->prepare(
				"UPDATE projeler SET
				proje_baslik=:baslik,
				proje_icerik=:icerik,
				proje_vitrin=:vitrin,
				proje_title=:title,
				proje_descr=:descr,
				proje_keyword=:keyword
				WHERE proje_id={$_POST['proje_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik'     => $_POST[ 'proje_baslik' ],
					'icerik'     => $_POST[ 'proje_icerik' ],
					'vitrin'     => $_POST[ 'proje_vitrin' ],
					'title'     => $_POST[ 'proje_title' ],
					'descr'     => $_POST[ 'proje_descr' ],
					'keyword'     => $_POST[ 'proje_keyword' ]
				)
			);

			if ( $update )
			{


				Header( "Location:../bolgeler.php?status=ok" );
			}
			else
			{

				Header( "Location:../bolgeler.php?status=no" );
			}
		}
	}

	if ( isset( $_POST[ 'hosduzenle' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"UPDATE hosgeldiniz SET
			hosgeldiniz_baslik=:baslik,
			hosgeldiniz_aciklama=:icerik
			WHERE hos_id={$_POST['hosgeldiniz_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'hosgeldiniz_baslik' ],
				'icerik'     => $_POST[ 'hosgeldiniz_aciklama' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../production/hosgeldiniz.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/hosgeldiniz.php?durum=no" );
		}
	}
	if ( $_GET[ 'urunsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from urunler where urun_id=:urun_id" );
		$kontrol = $sil->execute(
			array(
				'urun_id' => $_GET[ 'urun_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['urun_resim'];
			unlink("../$resimsilunlink");

			Header( "Location:../urunler.php?status=ok" );
		}
		else
		{

			Header( "Location:../urunler.php?status=no" );
		}
	}
	if ( $_GET[ 'urunresimdetaysil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from resim where resim_id=:resim_id" );
		$kontrol = $sil->execute(
			array(
				'resim_id' => $_GET[ 'resim_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['resim_link'];
			unlink("../$resimsilunlink");

			Header( "Location:../urunler.php?status=ok" );
		}
		else
		{

			Header( "Location:../urunler.php?status=no" );
		}
	}
	if ( $_GET[ 'referanssil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from referanslar where referans_id=:referans_id" );
		$kontrol = $sil->execute(
			array(
				'referans_id' => $_GET[ 'referans_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['referans_resim1'];
			unlink("../$resimsilunlink");
			$resimsilunlink2=$_GET['referans_resim2'];
			unlink("../$resimsilunlink2");

			Header( "Location:../referanslar.php?status=ok" );
		}
		else
		{

			Header( "Location:../referanslar.php?status=no" );
		}
	}
	if ( $_GET[ 'slaytsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from slayt where slayt_id=:slayt_id" );
		$kontrol = $sil->execute(
			array(
				'slayt_id' => $_GET[ 'slayt_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['slayt_resim'];
			unlink("../$resimsilunlink");

			Header( "Location:../slayt.php?status=ok" );
		}
		else
		{

			Header( "Location:../slayt.php?status=no" );
		}
	}
	if ( $_GET[ 'videosil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from videogaleri where video_id=:video_id" );
		$kontrol = $sil->execute(
			array(
				'video_id' => $_GET[ 'video_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['video_resim'];
			unlink("../$resimsilunlink");

			Header( "Location:../video-galerisi.php?status=ok" );
		}
		else
		{

			Header( "Location:../video-galerisi.php?status=no" );
		}
	}
	if ( $_GET[ 'resimsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from resimgaleri where resim_id=:resim_id" );
		$kontrol = $sil->execute(
			array(
				'resim_id' => $_GET[ 'resim_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['eski_yol'];
			unlink("../$resimsilunlink");

			Header( "Location:../resim-galerisi.php?status=ok" );
		}
		else
		{

			Header( "Location:../resim-galerisi.php?status=no" );
		}
	}
	if ( $_GET[ 'yorumsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from yorumlar where yorum_id=:yorum_id" );
		$kontrol = $sil->execute(
			array(
				'yorum_id' => $_GET[ 'yorum_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['yorum_resim'];
			unlink("../$resimsilunlink");

			Header( "Location:../yorumlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../yorumlar.php?status=no" );
		}
	}
	if ( $_GET[ 'referanssil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from referanslar where referans_id=:referans_id" );
		$kontrol = $sil->execute(
			array(
				'referans_id' => $_GET[ 'referans_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['referans_resim1'];
			$resimsilunlink2=$_GET['referans_resim2'];
			unlink("../$resimsilunlink");
			unlink("../$resimsilunlink2");

			Header( "Location:../referanslar.php?status=ok" );
		}
		else
		{

			Header( "Location:../referanslar.php?status=no" );
		}
	}
	if ( $_GET[ 'markasil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from markalar where hizmet_id=:hizmet_id" );
		$kontrol = $sil->execute(
			array(
				'hizmet_id' => $_GET[ 'hizmet_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../markalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../markalar.php?status=no" );
		}
	}
	if ( $_GET[ 'hizmetsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from hizmetler where hizmet_id=:hizmet_id" );
		$kontrol = $sil->execute(
			array(
				'hizmet_id' => $_GET[ 'hizmet_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../hizmetler.php?status=ok" );
		}
		else
		{

			Header( "Location:../hizmetler.php?status=no" );
		}
	}
	if ( $_GET[ 'bolgesil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from projeler where proje_id=:proje_id" );
		$kontrol = $sil->execute(
			array(
				'proje_id' => $_GET[ 'proje_id' ]
			)
		);

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['proje_resim'];
			unlink("../../$resimsilunlink");

			Header( "Location:../hizmet-bolgeleri.php?status=ok" );
		}
		else
		{

			Header( "Location:../hizmet-bolgeleri.php?status=no" );
		}
	}
	if ( $_GET[ 'sosyalsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from sosyal where sosyal_id=:sosyal_id" );
		$kontrol = $sil->execute(
			array(
				'sosyal_id' => $_GET[ 'sosyal_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../sosyal-medya.php?status=ok" );
		}
		else
		{

			Header( "Location:../sosyal-medya.php?status=no" );
		}
	}
	if ( $_GET[ 'mesajsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from mesajlar where mesaj_id=:mesaj_id" );
		$kontrol = $sil->execute(
			array(
				'mesaj_id' => $_GET[ 'mesaj_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../index.php?status=ok" );
		}
		else
		{

			Header( "Location:../index.php?status=no" );
		}
	}
	if ( $_GET[ 'kategorisil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from kategoriler where kategori_id=:kategori_id" );
		$kontrol = $sil->execute(
			array(
				'kategori_id' => $_GET[ 'kategori_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../kategoriler.php?status=ok" );
		}
		else
		{

			Header( "Location:../kategoriler.php?status=no" );
		}
	}
	if ( $_GET[ 'flinksil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from flink where flink_id=:flink_id" );
		$kontrol = $sil->execute(
			array(
				'flink_id' => $_GET[ 'flink_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../alt-link.php?status=ok" );
		}
		else
		{

			Header( "Location:../alt-link.php?status=no" );
		}
	}
	if ( $_GET[ 'fmenusil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from fmenu where fmenu_id=:fmenu_id" );
		$kontrol = $sil->execute(
			array(
				'fmenu_id' => $_GET[ 'fmenu_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../alt-menu.php?status=ok" );
		}
		else
		{

			Header( "Location:../alt-menu.php?status=no" );
		}
	}
	if ( $_GET[ 'omenusil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from omenu where omenu_id=:omenu_id" );
		$kontrol = $sil->execute(
			array(
				'omenu_id' => $_GET[ 'omenu_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../menu.php?status=ok" );
		}
		else
		{

			Header( "Location:../menu.php?status=no" );
		}
	}
	if ( $_GET[ 'ssssil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from sss where sss_id=:sss_id" );
		$kontrol = $sil->execute(
			array(
				'sss_id' => $_GET[ 'sss_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../sss.php?status=ok" );
		}
		else
		{

			Header( "Location:../sss.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'hizmetekle' ] ) )
	{


		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO hizmetler SET
			hizmet_baslik=:baslik,
			hizmet_icerik=:icerik,
			hizmet_title=:title,
			hizmet_descr=:descr,
			hizmet_keyword=:keyword,
			hizmet_vitrin=:vitrin,
			hizmet_resim=:resim");
		$insert = $kaydet->execute(
			array(
				'baslik'     => $_POST[ 'hizmet_baslik' ],
				'icerik'     => $_POST[ 'hizmet_icerik' ],
				'title'     => $_POST[ 'hizmet_title' ],
				'descr'     => $_POST[ 'hizmet_descr' ],
				'keyword'     => $_POST[ 'hizmet_keyword' ],
				'vitrin'     => $_POST[ 'hizmet_vitrin' ],
				'resim'     => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../hizmetler.php?status=ok" );
		}
		else
		{

			Header( "Location:../hizmetler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'markaekle' ] ) )
	{


		$uploads_dir = '../assets/img/markalar';
		@$tmp_name = $_FILES[ 'marka_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO hizmetler SET
			marka_baslik=:marka_baslik,
			marka_icerik=:marka_icerik,
			marka_title=:marka_title,
			marka_descr=:marka_descr,
			marka_keyword=:marka_keyword,
			marka_vitrin=:marka_vitrin,
			marka_resim=:marka_resim");
		$insert = $kaydet->execute(
			array(
				'marka_baslik'     => $_POST[ 'marka_baslik' ],
				'marka_icerik'     => $_POST[ 'marka_icerik' ],
				'marka_title'     => $_POST[ 'marka_title' ],
				'marka_descr'     => $_POST[ 'marka_descr' ],
				'marka_keyword'     => $_POST[ 'marka_keyword' ],
				'marka_vitrin'     => $_POST[ 'marka_vitrin' ],
				'marka_resim'     => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../markalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../markalar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'yorumekle' ] ) )
	{


		$uploads_dir = '../assets/img/yorumlar';
		@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$benzersizsayi3 = rand( 20000, 32000 );
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO yorumlar SET
			yorum_isim=:isim,
			yorum_link=:link,
			yorum_icerik=:icerik,
			yorum_resim=:resim");
		$insert = $kaydet->execute(
			array(
				'isim'     => $_POST[ 'yorum_isim' ],
				'link' => $_POST[ 'yorum_link' ],
				'icerik'     => $_POST[ 'yorum_icerik' ],
				'resim'    => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../yorumlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../yorumlar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'projeekle' ] ) )
	{


		$uploads_dir = '../assets/img/projeler';
		@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO projeler SET
			proje_baslik=:baslik,
			proje_icerik=:icerik,
			proje_resim=:resim,
			proje_title=:title,
			proje_descr=:descr,
			proje_keyword=:keyword");
		$insert = $kaydet->execute(
			array(
				'baslik'     => $_POST[ 'proje_baslik' ],
				'icerik'     => $_POST[ 'proje_icerik' ],
				'resim'     => $refimgyol,
				'title'     => $_POST[ 'proje_title' ],
				'descr'     => $_POST[ 'proje_descr' ],
				'keyword'     => $_POST[ 'proje_keyword' ]
			));

		if ( $insert )
		{

			Header( "Location:../bolgeler.php?status=ok" );
		}
		else
		{

			Header( "Location:../bolgeler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'slaytekle' ] ) )
	{

		$uploads_dir = '../assets/img/slayt';
		$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO slayt SET
			slayt_baslik=:baslik,
			slayt_aciklama=:aciklama,
			slayt_sira=:sira,
			slayt_butonad=:butonad,
			slayt_butonlink=:butonlink,
			slayt_resim=:resim");
		$insert = $kaydet->execute(
			array(
				'baslik' => $_POST[ 'slayt_baslik' ],
				'aciklama' => $_POST[ 'slayt_aciklama' ],
				'butonad'     => $_POST[ 'slayt_butonad' ],
				'butonlink' => $_POST[ 'slayt_butonlink' ],
				'sira'     => $_POST[ 'slayt_sira' ],
				'resim'    => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../slayt.php?status=ok" );
		}
		else
		{

			Header( "Location:../slayt.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'urunekle' ] ) )
	{


		$kaydet = $db->prepare(
			"INSERT INTO urunler SET
			urun_baslik=:baslik,
			urun_kategori=:kategori,
			urun_fiyat=:fiyat,
			urun_efiyat=:efiyat,
			urun_aciklama=:aciklama,
			urun_vitrin=:vitrin,
			urun_title=:title,
			urun_descr=:descr,
			urun_keyword=:keyword");
		$insert = $kaydet->execute(
			array(
				'baslik'     => $_POST[ 'urun_baslik' ],
				'kategori'     => $_POST[ 'urun_kategori' ],
				'fiyat'     => $_POST[ 'urun_fiyat' ],
				'efiyat'     => $_POST[ 'urun_efiyat' ],
				'aciklama'     => $_POST[ 'urun_aciklama' ],
				'vitrin'     => $_POST[ 'urun_vitrin' ],
				'title'     => $_POST[ 'urun_title' ],
				'descr'     => $_POST[ 'urun_descr' ],
				'keyword'     => $_POST[ 'urun_keyword' ]
			));

		if ( $insert )
		{

			Header( "Location:../urunler.php?status=ok" );
		}
		else
		{

			Header( "Location:../urunler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'refekle' ] ) )
	{


		$uploads_dir = '../../img/referanslar';
		@$tmp_name = $_FILES[ 'refrans_resim1' ][ "tmp_name" ];
		@$name = $_FILES[ 'refrans_resim1' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$benzersizsayi3 = rand( 20000, 32000 );
		$benzersizsayi4 = rand( 20000, 32000 );
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
		$refimgyol      = substr( $uploads_dir, 6 ) . "/" . $benzersizad . $name;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$name" );

		$uploads_dir2 = '../../img/referanslar';
		@$tmp_name2 = $_FILES[ 'refrans_resim2' ][ "tmp_name" ];
		@$name2 = $_FILES[ 'refrans_resim2' ][ "name" ];
		$benzersizsayi12 = rand( 20000, 32000 );
		$benzersizsayi22 = rand( 20000, 32000 );
		$benzersizsayi32 = rand( 20000, 32000 );
		$benzersizsayi42 = rand( 20000, 32000 );
		$benzersizad2    = $benzersizsayi12 . $benzersizsayi22 . $benzersizsayi32 . $benzersizsayi42;
		$refimgyol2      = substr( $uploads_dir2, 6 ) . "/" . $benzersizad2 . $name2;
		@move_uploaded_file( $tmp_name2, "$uploads_dir2/$benzersizad2$name2" );

		$kaydet = $db->prepare(
			"INSERT INTO referanslar SET
			refrans_resim1=:resim1,
			refrans_resim2=:resim2
			");
		$insert = $kaydet->execute(
			array(
				'resim1'    => $refimgyol,
				'resim2'    => $refimgyol2
			));

		if ( $insert )
		{

			Header( "Location:../production/referans.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/referans.php?durum=no" );
		}
	}

	if ( isset( $_POST[ 'blogduzenle' ] ) )
	{


		if ( $_FILES[ 'blog_resim' ][ "size" ] > 0 )
		{

			$uploads_dir = '../assets/img/blog';
			@$tmp_name = $_FILES[ 'blog_resim' ][ "tmp_name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$duzenle = $db->prepare(
				"UPDATE blog SET
				blog_baslik=:baslik,
				blog_detay=:detay,
				blog_title=:title,
				blog_descr=:descr,
				blog_keyword=:keyword,
				blog_resim=:resim
				WHERE blog_id={$_POST['blog_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'baslik' => $_POST[ 'blog_baslik' ],
					'detay'  => $_POST[ 'blog_detay' ],
					'title'  => $_POST[ 'blog_title' ],
					'descr'  => $_POST[ 'blog_descr' ],
					'keyword'  => $_POST[ 'blog_keyword' ],
					'resim'  => $refimgyol
				)
			);

			$blog_id = $_POST[ 'blog_id' ];

			if ( $update )
			{

				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../blog.php?status=ok" );
			}
			else
			{

				Header( "Location:../blog.php?status=no" );
			}
		}
		else
		{

			$duzenle = $db->prepare(
				"UPDATE blog SET
				blog_baslik=:baslik,
				blog_title=:title,
				blog_descr=:descr,
				blog_keyword=:keyword,
				blog_detay=:detay
				WHERE blog_id={$_POST['blog_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'baslik' => $_POST[ 'blog_baslik' ],
					'title'  => $_POST[ 'blog_title' ],
					'descr'  => $_POST[ 'blog_descr' ],
					'keyword'  => $_POST[ 'blog_keyword' ],
					'detay'  => $_POST[ 'blog_detay' ]
				)
			);

			$blog_id = $_POST[ 'blog_id' ];

			if ( $update )
			{


				Header( "Location:../blog.php?status=ok" );
			}
			else
			{

				Header( "Location:../blog.php?status=no" );
			}
		}
	}

	if ( $_GET[ 'blogsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from blog where blog_id=:blog_id" );
		$kontrol = $sil->execute(
			array(
				'blog_id' => $_GET[ 'blog_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../blog.php?status=ok" );
		}
		else
		{

			Header( "Location:../blog.php?status=no" );
		}
	}

	if ( isset( $_POST[ 'yaziduzenle' ] ) )
	{


		$duzenle = $db->prepare(
			"UPDATE yazi SET
			yazi_baslik=:baslik,
			yazi_icerik=:icerik
			WHERE yazi_id={$_POST['yazi_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'baslik'   => $_POST[ 'yazi_baslik' ],
				'icerik' => $_POST[ 'yazi_icerik' ]
			)
		);

		$yazi_id = $_POST[ 'yazi_id' ];

		if ( $update )
		{


			Header( "Location:../production/yazi.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/yazi.php?durum=no" );
		}
	}

	if ( isset( $_POST[ 'sayfaduzenle' ] ) )
	{

		$duzenle = $db->prepare(
			"UPDATE sayfalar SET
			sayfa_title=:title,
			sayfa_descr=:descr,
			sayfa_keyword=:keyword,
			sayfa_baslik=:baslik,
			sayfa_menu=:menu,
			sayfa_icerik=:icerik
			WHERE sayfa_id={$_POST['sayfa_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'title'   => $_POST[ 'sayfa_title' ],
				'descr'   => $_POST[ 'sayfa_descr' ],
				'keyword'   => $_POST[ 'sayfa_keyword' ],
				'baslik'   => $_POST[ 'sayfa_baslik' ],
				'menu'   => $_POST[ 'sayfa_menu' ],
				'icerik' => $_POST[ 'sayfa_icerik' ]
			)
		);

		$sayfa_id = $_POST[ 'sayfa_id' ];

		if ( $update )
		{


			Header( "Location:../sayfalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../sayfalar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'hesapduzenle' ] ) )
	{

		$duzenle = $db->prepare(
			"UPDATE hesap SET
			hesap_banka=:banka,
			hesap_isim=:isim,
			hesap_sube=:sube,
			hesap_no=:no,
			hesap_iban=:iban
			WHERE hesap_id={$_POST['hesap_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'banka'   => $_POST[ 'hesap_banka' ],
				'isim'   => $_POST[ 'hesap_isim' ],
				'sube'   => $_POST[ 'hesap_sube' ],
				'no'   => $_POST[ 'hesap_no' ],
				'iban' => $_POST[ 'hesap_iban' ]
			)
		);


		if ( $update )
		{


			Header( "Location:../hesaplarim.php?status=ok" );
		}
		else
		{

			Header( "Location:../hesaplarim.php?status=no" );
		}
	}
	if ( $_GET[ 'hesapsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from hesap where hesap_id=:hesap_id" );
		$kontrol = $sil->execute(
			array(
				'hesap_id' => $_GET[ 'hesap_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../hesaplarim.php?status=ok" );
		}
		else
		{

			Header( "Location:../hesaplarim.php?status=no" );
		}
	}
	if ( $_GET[ 'sayfasil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from sayfalar where sayfa_id=:sayfa_id" );
		$kontrol = $sil->execute(
			array(
				'sayfa_id' => $_GET[ 'sayfa_id' ]
			)
		);

		if ( $kontrol )
		{

			Header( "Location:../sayfalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../sayfalar.php?status=no" );
		}
	}
	
	if ( isset( $_POST[ 'referansekle' ] ) )
	{


		$uploads_dir = '../assets/img/referanslar';
		@$tmp_name = $_FILES[ 'referans_resim1' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$uploads_dir = '../assets/img/referanslar';
		@$tmp_name = $_FILES[ 'referans_resim2' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol2      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO referanslar SET
			referans_resim1=:resim,
			referans_resim2=:resim2"
		);
		$insert = $kaydet->execute(
			array(
				'resim'  => $refimgyol,
				'resim2'  => $refimgyol2
			)
		);

		if ( $insert )
		{

			Header( "Location:../referanslar.php?status=ok" );
		}
		else
		{

			Header( "Location:../referanslar.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'hesapekle' ] ) )
	{


		$kaydet = $db->prepare(
			"INSERT INTO hesap SET
			hesap_banka=:banka,
			hesap_isim=:isim,
			hesap_sube=:sube,
			hesap_no=:no,
			hesap_iban=:iban
			"
		);
		$insert = $kaydet->execute(
			array(
				'banka'   => $_POST[ 'hesap_banka' ],
				'isim'   => $_POST[ 'hesap_isim' ],
				'sube'   => $_POST[ 'hesap_sube' ],
				'no'   => $_POST[ 'hesap_no' ],
				'iban' => $_POST[ 'hesap_iban' ]
			)
		);

		if ( $insert )
		{

			Header( "Location:../hesaplarim.php?status=ok" );
		}
		else
		{

			Header( "Location:../hesaplarim.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'sayfaekle' ] ) )
	{


		$kaydet = $db->prepare(
			"INSERT INTO sayfalar SET
			sayfa_title=:title,
			sayfa_descr=:descr,
			sayfa_keyword=:keyword,
			sayfa_baslik=:baslik,
			sayfa_menu=:menu,
			sayfa_icerik=:icerik
			"
		);
		$insert = $kaydet->execute(
			array(
				'title'   => $_POST[ 'sayfa_title' ],
				'descr'   => $_POST[ 'sayfa_descr' ],
				'keyword'   => $_POST[ 'sayfa_keyword' ],
				'baslik'   => $_POST[ 'sayfa_baslik' ],
				'menu'   => $_POST[ 'sayfa_menu' ],
				'icerik' => $_POST[ 'sayfa_icerik' ]
			)
		);

		if ( $insert )
		{

			Header( "Location:../sayfalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../sayfalar.php?status=no" );
		}
	}



	if ( isset( $_POST[ 'teklifver' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO teklif SET
			teklif_adsoyad=:adsoyad,
			teklif_tel=:tel,
			teklif_nereden=:nereden,
			teklif_nereye=:nereye,
			teklif_cinsi=:cinsi"
		);
		$update     = $ayarkaydet->execute(
			array(
				'adsoyad' => $_POST[ 'teklif_adsoyad' ],
				'tel'    => $_POST[ 'teklif_tel' ],
				'nereden'   => $_POST[ 'teklif_nereden' ],
				'nereye' => $_POST[ 'teklif_nereye' ],
				'cinsi'    => $_POST[ 'teklif_cinsi' ]
			)
		);

		$uye    = $_POST[ 'teklif_adsoyad' ];
		$tel   = $_POST[ 'teklif_tel' ];

		if ( $update )
		{

			Header( "Location:../../teklif-sms-yolla?tel=$tel&ad=$uye" );

		}
		else
		{

			Header( "Location:../../index.php?teklif=no" );
		}
	}

	if ( isset( $_POST[ 'beniara' ] ) )
	{


		$ayarkaydet = $db->prepare(
			"INSERT INTO beniara SET
			beniara_tel=:tel"
		);
		$update     = $ayarkaydet->execute(
			array(
				'tel' => $_POST[ 'beniara_tel' ]
			)
		);

		$tel   = $_POST[ 'teklif_tel' ];

		if ( $update )
		{

			Header( "Location:../../beniara-sms-yolla?tel=$tel" );

		}
		else
		{

			Header( "Location:../../index.php?teklif=no" );
		}
	}

	if ( $_GET[ 'beniarasil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from beniara where beniara_id=:beniara_id" );
		$kontrol = $sil->execute(
			array(
				'beniara_id' => $_GET[ 'beniara_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../production/beni-ara.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/beni-ara.php?durum=no" );
		}
	}
	if ( $_GET[ 'teklifsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from teklif where teklif_id=:teklif_id" );
		$kontrol = $sil->execute(
			array(
				'teklif_id' => $_GET[ 'teklif_id' ]
			)
		);

		if ( $kontrol )
		{


			Header( "Location:../production/teklifler.php?durum=ok" );
		}
		else
		{

			Header( "Location:../production/teklifler.php?durum=no" );
		}
	}


	if ( $_GET[ 'urunresimsil' ] == "ok" )
	{

		$sil     = $db->prepare( "DELETE from resim where resim_id=:resim_id" );
		$kontrol = $sil->execute(
			array(
				'resim_id' => $_GET[ 'resim_id' ]
			)
		);
		$urun = $_GET['urun_id'];

		if ( $kontrol )
		{
			$resimsilunlink=$_GET['eski_yol'];
			unlink("../$resimsilunlink");

			Header( "Location:../urun-resim-duzenle.php?urun_id=$urun&?status=ok" );
		}
		else
		{

			Header( "Location:../slayt.php?urun_id=$urun&?status=no" );
		}
	}
	if ( isset( $_POST[ 'videoekle' ] ) )
	{

		$uploads_dir = '../assets/img/galeri';
		$tmp_name = $_FILES[ 'video_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO videogaleri SET
			video_link=:link,
			video_resim=:resim");
		$insert = $kaydet->execute(
			array(
				'link' => $_POST[ 'video_link' ],
				'resim'    => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../video-galerisi.php?status=ok" );
		}
		else
		{

			Header( "Location:../video-galerisi.php?status=no" );
		}
	}
	if ( $_GET[ 'siparisonay']=='ok' )
	{

		$kaydet = $db->prepare(
			"UPDATE siparis SET
			siparis_durum=:durum
			WHERE siparis_id={$_GET['siparis_id']}");
		$insert = $kaydet->execute(
			array(
				'durum' => 0
			));

		if ( $insert )
		{

			Header( "Location:../tamamlanan-siparisler.php?status=ok" );
		}
		else
		{

			Header( "Location:../yeni-siparisler.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'resimekle' ] ) )
	{

		$uploads_dir = '../assets/img/galeri';
		$tmp_name = $_FILES[ 'resim_link' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$kaydet = $db->prepare(
			"INSERT INTO resimgaleri SET
			resim_baslik=:baslik,
			resim_link=:resim");
		$insert = $kaydet->execute(
			array(
				'baslik' => $_POST[ 'resim_baslik' ],
				'resim'    => $refimgyol
			));

		if ( $insert )
		{

			Header( "Location:../resim-galerisi.php?status=ok" );
		}
		else
		{

			Header( "Location:../resim-galerisi.php?status=no" );
		}
	}
	if ( $_GET[ 'siparissil' ] == "ok" )
	{
		$inovance=$db->prepare("SELECT * from siparis where siparis_id=:siparis_id");
		$inovance->execute(array(
			'siparis_id' => $_GET['siparis_id']
		));
		$inovanceprint=$inovance->fetch(PDO::FETCH_ASSOC);

		$durum=$inovanceprint['siparis_durum'];

		$sil     = $db->prepare( "DELETE from siparis where siparis_id=:siparis_id" );
		$kontrol = $sil->execute(
			array(
				'siparis_id' => $_GET[ 'siparis_id' ]
			)
		);

		if ( $kontrol )
		{

			

			if ($durum=='1') {

				Header( "Location:../yeni-siparisler.php?status=ok" );
			} else {
				Header( "Location:../tamamlanan-siparisler.php?status=ok" );
			}

			
		}
		else
		{

			Header( "Location:../slayt.php?urun_id=$urun&?status=no" );
		}
	}
	if ( isset( $_POST[ 'omenuduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE omenu SET
			omenu_ad=:ad,
			omenu_sira=:sira,
			omenu_durum=:durum,
			omenu_link=:link
			WHERE omenu_id={$_POST['omenu_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'omenu_ad' ],
				'sira'     => $_POST[ 'omenu_sira' ],
				'durum'     => $_POST[ 'omenu_durum' ],
				'link'     => $_POST[ 'omenu_link' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../menu.php?status=ok" );
		}
		else
		{

			Header( "Location:../menu.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'smenuduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE smenu SET
			smenu_ad=:ad,
			smenu_durum=:durum
			WHERE smenu_id={$_POST['smenu_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'smenu_ad' ],
				'durum'     => $_POST[ 'smenu_durum' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../menu.php?status=ok" );
		}
		else
		{

			Header( "Location:../menu.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'flinkduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE flink SET
			flink_ad=:ad,
			flink_link=:link
			WHERE flink_id={$_POST['flink_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'flink_ad' ],
				'link'     => $_POST[ 'flink_link' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../alt-link.php?status=ok" );
		}
		else
		{

			Header( "Location:../alt-link.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'fmenuduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE fmenu SET
			fmenu_ad=:ad,
			fmenu_link=:link,
			fmenu_sira=:sira
			WHERE fmenu_id={$_POST['fmenu_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'     => $_POST[ 'fmenu_ad' ],
				'sira'     => $_POST[ 'fmenu_sira' ],
				'link'     => $_POST[ 'fmenu_link' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../alt-menu.php?status=ok" );
		}
		else
		{

			Header( "Location:../alt-menu.php?status=no" );
		}
	}
	if ( isset( $_POST[ 'yorumduzenle' ] ) )
	{


		if ( $_FILES[ 'yorum_resim' ][ "size" ] > 0 )
		{

			$uploads_dir = '../assets/img/yorumlar';
			@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$duzenle = $db->prepare(
				"UPDATE yorumlar SET
				yorum_icerik=:icerik,
				yorum_isim=:isim,
				yorum_link=:link,
				yorum_resim=:resim
				WHERE yorum_id={$_POST['yorum_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'icerik' => $_POST[ 'yorum_icerik' ],
					'isim'  => $_POST[ 'yorum_isim' ],
					'link'  => $_POST[ 'yorum_link' ],
					'resim'  => $refimgyol
				)
			);


			if ( $update )
			{

				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../yorumlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../yorumlar.php?status=no" );
			}
		}
		else
		{

			$duzenle = $db->prepare(
				"UPDATE yorumlar SET
				yorum_icerik=:icerik,
				yorum_isim=:isim,
				yorum_link=:link
				WHERE yorum_id={$_POST['yorum_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'icerik' => $_POST[ 'yorum_icerik' ],
					'isim'  => $_POST[ 'yorum_isim' ],
					'link'  => $_POST[ 'yorum_link' ]
				)
			);

			if ( $update )
			{

				Header( "Location:../yorumlar.php?status=ok" );
			}
			else
			{

				Header( "Location:../yorumlar.php?status=no" );
			}
		}
	}
	if ( isset( $_POST[ 'referansduzenle' ] ) )
	{


		if ( $_FILES[ 'referans_resim1' ][ "size" ] > 0 )
		{

			if ( $_FILES[ 'referans_resim2' ][ "size" ] > 0 )
			{
				$uploads_dir = '../assets/img/referanslar';
				@$tmp_name = $_FILES[ 'referans_resim1' ][ "tmp_name" ];
				$benzersizsayi1 = rand( 20000, 32000 );
				$benzersizsayi2 = rand( 20000, 32000 );
				$uzanti = '.jpg';
				$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
				$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
				@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

				$uploads_dir = '../assets/img/referanslar';
				@$tmp_name = $_FILES[ 'referans_resim2' ][ "tmp_name" ];
				$benzersizsayi1 = rand( 20000, 32000 );
				$benzersizsayi2 = rand( 20000, 32000 );
				$uzanti2 = '.jpg';
				$benzersizad2    = $benzersizsayi1 . $benzersizsayi2;
				$refimgyol2      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti2;
				@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti2" );

				$duzenle = $db->prepare(
					"UPDATE referanslar SET
					referans_resim1=:resim,
					referans_resim2=:resim2
					WHERE referans_id={$_POST['referans_id']}"
				);
				$update  = $duzenle->execute(
					array(
						'resim'  => $refimgyol,
						'resim2'  => $refimgyol2
					)
				);

				if ( $update )
				{

					$resimsilunlink = $_POST[ 'eski_yol1' ];
					unlink( "../$resimsilunlink" );
					$resimsilunlink2 = $_POST[ 'eski_yol2' ];
					unlink( "../$resimsilunlink2" );

					Header( "Location:../referanslar.php?status=ok" );
				}
				else
				{

					Header( "Location:../referanslar.php?status=no" );
				}
			}

			$uploads_dir = '../assets/img/referanslar';
			@$tmp_name = $_FILES[ 'referans_resim1' ][ "tmp_name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$duzenle = $db->prepare(
				"UPDATE referanslar SET
				referans_resim1=:resim
				WHERE referans_id={$_POST['referans_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'resim'  => $refimgyol
				)
			);

			if ( $update )
			{

				$resimsilunlink = $_POST[ 'eski_yol1' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../referanslar.php?status=ok" );
			}
			else
			{

				Header( "Location:../referanslar.php?status=no" );
			}
		}
		else
		{
			$uploads_dir = '../assets/img/referanslar';
			@$tmp_name = $_FILES[ 'referans_resim2' ][ "tmp_name" ];
			$benzersizsayi1 = rand( 20000, 32000 );
			$benzersizsayi2 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

			$duzenle = $db->prepare(
				"UPDATE referanslar SET
				referans_resim2=:resim
				WHERE referans_id={$_POST['referans_id']}"
			);
			$update  = $duzenle->execute(
				array(
					'resim'  => $refimgyol
				)
			);

			if ( $update )
			{


				Header( "Location:../referanslar.php?status=ok" );
			}
			else
			{

				Header( "Location:../referanslar.php?status=no" );
			}
		}
	}  

	if ( isset( $_POST[ 'odemeduzenle' ] ) )
	{

		$ayarkaydet = $db->prepare(
			"UPDATE odeme SET
			odeme_adi=:adi,
			odeme_not=:not,
			odeme_durum=:durum
			WHERE odeme_id={$_POST['odeme_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'adi'     => $_POST[ 'odeme_adi' ],
				'not'     => $_POST[ 'odeme_not' ],
				'durum'     => $_POST[ 'odeme_durum' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../odeme-yontemleri.php?status=ok" );
		}
		else
		{

			Header( "Location:../odeme-yontemleri.php?status=no" );
		}
	}
}
else {
	header("Location:../../index.php");
}

?>