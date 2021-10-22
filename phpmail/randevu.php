<?php 
include '../trex/controller/config.php';

$mailsor=$db->prepare("SELECT * from mail where mail_id=?");
$mailsor->execute(array(0));
$mailcek=$mailsor->fetch(PDO::FETCH_ASSOC);
$ayarsor=$db->prepare("SELECT * from ayar");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$smssor=$db->prepare("SELECT * from sms where sms_id=0");
$smssor->execute(array(0));
$smscek=$smssor->fetch(PDO::FETCH_ASSOC);

//1 hafta falan bu mail açık denemelerinizi yapın...
//Eğitimleri sonra izlerseniz kendi hostunuzda deneyin
//localde çalışması için çok çok şey lazım localle uğraşmayın....
$smtpuser=$mailcek['mail_user'];
$smtphost=$mailcek['mail_host'];
$smtpport=$mailcek['mail_port'];
$smtppass=$mailcek['mail_pass'];
$smtpadmin=$ayarcek['ayar_mail'];


if ( $_GET[ 'randevuform' ] == "ok" ) {

	$id=htmlspecialchars(trim($_GET['mesaj']));
	
	$mesajsor=$db->prepare("SELECT * from mesajlar where mesaj_id=:mesaj_id");
	$mesajsor->execute(array(
		'mesaj_id' => $id
	));
	$mesajwrite=$mesajsor->fetch(PDO::FETCH_ASSOC);
	
	$adsoyad = $mesajwrite['mesaj_adsoyad'];
	$eposta = $mesajwrite['mesaj_mail']; 
	$mesaj = $mesajwrite['mesaj_icerik']; 


	include 'class.phpmailer.php';
	$epostal=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'tls';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $adsoyad);
	$mail->AddAddress($epostal, $adsoyad);
	$mail->AddAddress($smtpadmin, $adsoyad);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Sipariş Bilgisi';
	$content = '
	<b>Sayın Admin</b><br>
	<b>Websiteniz üzerinden yeni bir randevu talebi oluşturulmuştur. Detaylar için admin panele giriş yapabilirsiniz.</b>
	';




	$mail->MsgHTML($content);
	if($mail->Send()) {

		echo "mail ok";
		exit;

		if ($smscek['sms_durum']==1) {
			Header( "Location:../inc/randevu-sms.php" );
		} else {
			Header( "Location:../index.php?status=ok" );
		}
		
	} 
	else {
	
		if ($smscek['sms_durum']==1) {
			Header( "Location:../inc/randevu-sms.php" );
			
		} else {
			Header( "Location:../index.php?status=ok" );

		}
	}



}
exit;


?>

