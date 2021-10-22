<?php
include 'trex/controller/config.php'; 
include 'trex/controller/seo.php';
date_default_timezone_set('Europe/Istanbul');
$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
$settings->execute(array(0));
$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);

$social=$db->prepare("SELECT * from sosyal");
$social->execute();

$motor=$db->prepare("SELECT * from motor where motor_id=1");
$motor->execute(array(0));
$motorprint=$motor->fetch(PDO::FETCH_ASSOC);

$widgets=$db->prepare("SELECT * from widget where widget_id=1");
$widgets->execute(array(0));
$widgetprint=$widgets->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en-US">


    <!-- head
        ============================================================================ -->
        <head>


        <!-- Basic Info
            ======================================================================== -->
            <meta name="author" content="Graphicfort">
            <meta name="robots" content="index follow">
            <meta name="googlebot" content="index follow">
            <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <!-- Mobile Configurations
            ======================================================================== -->
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- fav and icons for Mobile
            ======================================================================== -->
            <link rel="shortcut icon" href="trex/<?php echo $settingsprint['ayar_fav']; ?>">
            <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-touch-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-touch-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-touch-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-touch-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-touch-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-touch-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon-180x180.png">

        <!-- Google Fonts
            ======================================================================== -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,500,600" rel="stylesheet">

            <!-- Sweet Alerts -->
            <link href="trex/assets/lib/sweet-alerts2/sweetalert2.min.css" rel="stylesheet">

        <!--  CSS Files
            ======================================================================== -->
            <link rel="stylesheet" href="js/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

            <link rel="stylesheet" href="css/plugins.css">
            <link rel="stylesheet" href="css/skiny/<?php echo $settingsprint['ayar_renk']; ?>">
            <link rel="stylesheet" href="css/responsive.css">

        <!--  Head JS Libs
            ======================================================================== -->
            <script src="js/vendor/modernizr-custom.js"></script>


            <?php echo $motorprint['motor_yonay']; ?>
            <?php echo $motorprint['motor_gonay']; ?>
        </head><!-- /End head -->

        <?php
        function Sayac()
        {
            include 'trex/controller/config.php'; 


    $bugun=date("d"); // bugünün tarihi 
    $ay=date("m"); // bu ay
    $yil=date("Y"); // bu yıl 
    $onlineSuresi=time()-2*60*60; // iki dakika aktif olmazsa onlineden düşecek
    $ip=$_SERVER['REMOTE_ADDR']; // ziyaretçinin ip si 
    $bugunGiris=$db->query("SELECT * FROM hit WHERE ip='$ip' AND gun='$bugun'")->rowCount(); // bugün o ip ile girilmişmi 
    if($bugunGiris!=0){ // yani bugün girilmişse
        $al=$db->query("SELECT * FROM `hit` WHERE  `ip`='".$ip."' AND `gun`='".$bugun."'")->fetch();
    $guncelle=$db->query("UPDATE `hit` SET `sayac`='".($al['sayac']+1)."' WHERE id='".$al['id']."'"); // çoğulu 1 artırdık 

    }else{ // griş yapılmamışsa kaydettirelim
        $db->query("INSERT INTO `hit` SET `gun`='$bugun', `ay`='$ay', `yil`='$yil', simdi='".time()."', sayac='1',ip='$ip'");
        
    }
    
} Sayac();



$whatsapp=$db->prepare("SELECT * from whatsapp where whats_id=?");
$whatsapp->execute(array(0));
$whatsappprint=$whatsapp->fetch(PDO::FETCH_ASSOC);
if ($whatsappprint['whats_durum']==1) { ?>
<script type="text/javascript">
    (function () {
        var options = {
whatsapp: "+90<?php echo $whatsappprint['whats_tel']; ?>", // WhatsApp number
company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
position: "<?php echo $whatsappprint['whats_yon']; ?>", // Position may be 'right' or 'left'
greeting_message: "Merhaba, nasıl yardımcı olabiliriz? ", // Text of greeting message
call_to_action: "Merhaba, nasıl yardımcı olabiliriz?", // Call to action
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<?php  } ?>
