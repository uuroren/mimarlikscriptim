<?php include '../trex/controller/function.php'; 
date_default_timezone_set('Europe/Istanbul');
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$smssor=$db->prepare("SELECT * from sms where sms_id=0");
$smssor->execute(array(0));
$smscek=$smssor->fetch(PDO::FETCH_ASSOC);

?>


<?php
function sendRequest($site_name,$send_xml,$header_type) {

    	//die('SITENAME:'.$site_name.'SEND XML:'.$send_xml.'HEADER TYPE '.var_export($header_type,true));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$site_name);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$send_xml);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header_type);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 120);

	$result = curl_exec($ch);

	return $result;
}

$username   = $smscek['sms_kullanici'];
$password   = $smscek['sms_sifre'];
$orgin_name = $smscek['sms_baslik'];
$admin_number= $ayarcek['ayar_tel'];
$send_message_admin= 'Sayın admin az önce sitenizde randevu talebi oluşturulmuştur. Panele gidip detaylara erişebilirsiniz. ';


$xml = <<<EOS
<request>
<authentication>
<username>{$username}</username>
<password>{$password}</password>
</authentication>

<order>
<sender>{$orgin_name}</sender>
<sendDateTime>01/05/2013 18:00</sendDateTime>
<message>
<text>{$send_message_admin}</text>
<receipents>
<number>{$admin_number}</number>
</receipents>
</message>
</order>
</request>
EOS;


$result = sendRequest('http://api.iletimerkezi.com/v1/send-sms',$xml,array('Content-Type: text/xml'));
exit;
?>

<meta http-equiv="refresh" content="0; URL=<?php echo $ayarcek['ayar_siteurl']; ?>index.php?status=ok">