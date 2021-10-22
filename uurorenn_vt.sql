-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 21 Eki 2021, 20:10:58
-- Sunucu sürümü: 5.7.35-cll-lve
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uurorenn_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fav` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_renk` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_firmaadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_kod` longtext COLLATE utf8_turkish_ci NOT NULL,
  `ayar_harita` longtext COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_fav`, `ayar_renk`, `ayar_siteurl`, `ayar_firmaadi`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `ayar_tel`, `ayar_fax`, `ayar_mail`, `ayar_kod`, `ayar_harita`, `ayar_ara`) VALUES
(0, 'assets/img/genel/23332.jpg', 'assets/img/genel/21167.jpg', 'bluemax.css', '../index.php', 'ÖZENİŞ YAPI', 'ÖZENİŞ YAPI', 'ÖZENİŞ YAPI', 'ÖZENİŞ YAPI,özenişyapı,özenisyapi,özeniş,özenis,özen is yapi, özenis,özenis yapi , yapiözenis,mimarlik,yapı,özeniş', 'Soğanlı Mah. Sevinç Sk. No:17/B Bahçelievler', 'Bahçelievler', 'İstanbul', '05323158851 ', '', 'ozenisyapi1997@gmail.com', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48139.288301874956!2d28.696164001765784!3d41.05356848865378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa727fbb7a5af%3A0x36e1fd9eda6fa4da!2zQXZjxLFsYXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1633684376145!5m2!1str!2str\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_detay` longtext COLLATE utf8_turkish_ci NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `counter`
--

CREATE TABLE `counter` (
  `counter_id` int(11) NOT NULL,
  `counter_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `counter_rakam` int(155) NOT NULL,
  `counter_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `counter`
--

INSERT INTO `counter` (`counter_id`, `counter_icon`, `counter_rakam`, `counter_isim`) VALUES
(1, 'fa fa-users', 1, 'Kullanıcı'),
(2, 'fa fa-eye', 555, 'Ziyaretçi'),
(3, 'fa fa-thumbs-up', 555, 'Beğeni'),
(4, 'fa fa-share-alt', 555, 'Paylaşım');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `flink`
--

CREATE TABLE `flink` (
  `flink_id` int(11) NOT NULL,
  `flink_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `flink_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `flink`
--

INSERT INTO `flink` (`flink_id`, `flink_ad`, `flink_link`) VALUES
(1, 'Dekorasyon ', 'hizmetler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fmenu`
--

CREATE TABLE `fmenu` (
  `fmenu_id` int(11) NOT NULL,
  `fmenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `fmenu`
--

INSERT INTO `fmenu` (`fmenu_id`, `fmenu_ad`, `fmenu_link`, `fmenu_sira`) VALUES
(1, 'Sıkça Sorulan Sorular', 'sss', '1'),
(2, 'BLOG', 'blog', '2'),
(3, 'Özel Menü 3', '#', '3'),
(5, 'Galerimiz', 'resim-galerisi', '5'),
(6, 'İletisim', 'iletisim', '6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap`
--

CREATE TABLE `hesap` (
  `hesap_id` int(11) NOT NULL,
  `hesap_banka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_sube` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_no` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_iban` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hesap`
--

INSERT INTO `hesap` (`hesap_id`, `hesap_banka`, `hesap_isim`, `hesap_sube`, `hesap_no`, `hesap_iban`) VALUES
(1, 'ENPARA (FİNANSBANK)', 'En Şirket adı Tic. Ltd.şti', 'Altıntepe/209', '6296911', 'TR38 0006 2000 2090 0006 2969 11 '),
(2, 'İŞBANKASI', 'İş Şirket adı Tic. Ltd.şti', 'Altıntepe/209', '6296911', 'TR38 0006 2000 2090 0006 2969 11 ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hit`
--

CREATE TABLE `hit` (
  `gun` int(11) NOT NULL,
  `ay` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `simdi` int(11) NOT NULL,
  `sayac` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `hit`
--

INSERT INTO `hit` (`gun`, `ay`, `yil`, `simdi`, `sayac`, `ip`, `id`) VALUES
(8, 10, 2021, 1633702085, 5, '::1', 629),
(8, 10, 2021, 1633708638, 48, '95.70.214.74', 630),
(8, 10, 2021, 1633708846, 13, '176.219.123.139', 631),
(8, 10, 2021, 1633711241, 1, '88.241.162.227', 632),
(8, 10, 2021, 1633713639, 2, '178.240.56.180', 633),
(8, 10, 2021, 1633714654, 1, '42.83.147.36', 634),
(8, 10, 2021, 1633716543, 1, '52.3.235.141', 635),
(8, 10, 2021, 1633724284, 2, '95.2.13.190', 636),
(8, 10, 2021, 1633724285, 1, '212.154.30.36', 637),
(8, 10, 2021, 1633724563, 1, '46.155.40.65', 638),
(9, 10, 2021, 1633731777, 1, '95.2.15.254', 639),
(9, 10, 2021, 1633773996, 1, '34.211.143.64', 640),
(9, 10, 2021, 1633774001, 1, '54.185.246.147', 641),
(9, 10, 2021, 1633774008, 1, '35.167.194.185', 642),
(9, 10, 2021, 1633774265, 1, '34.213.75.207', 643),
(9, 10, 2021, 1633779845, 5, '95.70.214.74', 644),
(9, 10, 2021, 1633784185, 1, '137.226.113.44', 645),
(9, 10, 2021, 1633800440, 22, '31.22.4.59', 646),
(9, 10, 2021, 1633803438, 1, '209.97.187.46', 647),
(9, 10, 2021, 1633804018, 1, '192.71.30.89', 648),
(10, 10, 2021, 1633842383, 1, '3.92.52.58', 649),
(10, 10, 2021, 1633859223, 1, '18.237.151.52', 650),
(10, 10, 2021, 1633859248, 1, '52.24.241.37', 651),
(10, 10, 2021, 1633859293, 1, '54.245.204.114', 652),
(10, 10, 2021, 1633859318, 1, '54.188.157.129', 653),
(10, 10, 2021, 1633861284, 1, '192.227.131.100', 654),
(10, 10, 2021, 1633864732, 1, '147.182.252.238', 655),
(10, 10, 2021, 1633876507, 1, '143.198.145.52', 656),
(10, 10, 2021, 1633883826, 12, '95.70.214.74', 657),
(10, 10, 2021, 1633885229, 7, '88.243.196.245', 658),
(10, 10, 2021, 1633892454, 4, '176.54.108.165', 659),
(10, 10, 2021, 1633895113, 1, '37.120.196.122', 660),
(10, 10, 2021, 1633896529, 1, '45.63.90.163', 661),
(11, 10, 2021, 1633906871, 1, '157.55.39.95', 662),
(11, 10, 2021, 1633907215, 2, '147.182.242.74', 663),
(11, 10, 2021, 1633915743, 1, '46.101.62.226', 664),
(11, 10, 2021, 1633919010, 1, '157.55.39.102', 665),
(11, 10, 2021, 1633934280, 1, '147.182.252.228', 666),
(11, 10, 2021, 1633935022, 1, '116.203.34.66', 667),
(11, 10, 2021, 1633935699, 3, '88.243.196.245', 668),
(11, 10, 2021, 1633944439, 1, '46.45.185.168', 669),
(11, 10, 2021, 1633944445, 4, '46.45.185.173', 670),
(11, 10, 2021, 1633944445, 4, '46.45.185.178', 671),
(11, 10, 2021, 1633944446, 4, '46.45.185.179', 672),
(11, 10, 2021, 1633944446, 3, '46.45.185.176', 673),
(11, 10, 2021, 1633944446, 3, '46.45.185.177', 674),
(11, 10, 2021, 1633944448, 3, '46.45.185.165', 675),
(11, 10, 2021, 1633944459, 1, '35.86.84.148', 676),
(11, 10, 2021, 1633944486, 1, '54.185.99.9', 677),
(11, 10, 2021, 1633944529, 1, '54.202.152.78', 678),
(11, 10, 2021, 1633944582, 1, '18.236.156.212', 679),
(11, 10, 2021, 1633944604, 1, '35.195.243.150', 680),
(11, 10, 2021, 1633944605, 2, '178.211.57.76', 681),
(11, 10, 2021, 1633965151, 23, '93.158.90.132', 682),
(11, 10, 2021, 1633969753, 1, '5.46.139.111', 683),
(11, 10, 2021, 1633971959, 1, '161.35.91.198', 684),
(11, 10, 2021, 1633973880, 1, '34.201.23.156', 685),
(12, 10, 2021, 1633993800, 1, '161.35.91.198', 686),
(12, 10, 2021, 1633995652, 1, '49.12.203.87', 687),
(12, 10, 2021, 1634001318, 1, '143.198.153.253', 688),
(12, 10, 2021, 1634006659, 1, '45.76.43.185', 689),
(12, 10, 2021, 1634008448, 2, '143.198.145.127', 690),
(12, 10, 2021, 1634023139, 1, '65.21.244.138', 691),
(12, 10, 2021, 1634031039, 1, '54.187.46.243', 692),
(12, 10, 2021, 1634031043, 1, '52.37.181.91', 693),
(12, 10, 2021, 1634031071, 1, '54.191.214.30', 694),
(12, 10, 2021, 1634031078, 1, '35.164.42.152', 695),
(12, 10, 2021, 1634033609, 1, '116.203.32.218', 696),
(12, 10, 2021, 1634038299, 1, '45.129.18.188', 697),
(12, 10, 2021, 1634056045, 1, '116.203.21.171', 698),
(12, 10, 2021, 1634056069, 22, '132.148.206.87', 699),
(12, 10, 2021, 1634059275, 1, '199.247.29.84', 700),
(12, 10, 2021, 1634063329, 1, '54.229.172.250', 701),
(12, 10, 2021, 1634064052, 1, '3.238.154.168', 702),
(12, 10, 2021, 1634072104, 1, '49.12.219.112', 703),
(13, 10, 2021, 1634079262, 1, '147.182.242.84', 704),
(13, 10, 2021, 1634079615, 2, '161.35.91.198', 705),
(13, 10, 2021, 1634083414, 2, '143.198.157.105', 706),
(13, 10, 2021, 1634085538, 1, '161.35.91.105', 707),
(13, 10, 2021, 1634089802, 1, '143.198.145.52', 708),
(13, 10, 2021, 1634093201, 1, '116.203.21.171', 709),
(13, 10, 2021, 1634094519, 1, '45.63.90.163', 710),
(13, 10, 2021, 1634099578, 1, '49.12.203.87', 711),
(13, 10, 2021, 1634106133, 1, '147.182.242.74', 712),
(13, 10, 2021, 1634107583, 1, '116.203.32.218', 713),
(13, 10, 2021, 1634118839, 1, '34.220.232.153', 714),
(13, 10, 2021, 1634118839, 1, '34.222.214.39', 715),
(13, 10, 2021, 1634118870, 1, '54.202.147.63', 716),
(13, 10, 2021, 1634118872, 1, '35.86.177.108', 717),
(13, 10, 2021, 1634120669, 1, '78.141.217.93', 718),
(13, 10, 2021, 1634145225, 1, '207.102.138.19', 719),
(14, 10, 2021, 1634163894, 1, '93.158.92.13', 720),
(14, 10, 2021, 1634168145, 1, '143.110.231.72', 721),
(14, 10, 2021, 1634170963, 2, '147.182.242.74', 722),
(14, 10, 2021, 1634172662, 1, '143.198.145.127', 723),
(14, 10, 2021, 1634183739, 1, '116.203.32.218', 724),
(14, 10, 2021, 1634191479, 1, '65.108.52.60', 725),
(14, 10, 2021, 1634200706, 1, '138.68.191.31', 726),
(14, 10, 2021, 1634200880, 1, '209.97.187.47', 727),
(14, 10, 2021, 1634203155, 1, '116.203.34.66', 728),
(14, 10, 2021, 1634204522, 1, '34.219.142.149', 729),
(14, 10, 2021, 1634204525, 1, '52.32.223.160', 730),
(14, 10, 2021, 1634204545, 1, '54.202.185.50', 731),
(14, 10, 2021, 1634204548, 1, '34.220.211.26', 732),
(14, 10, 2021, 1634209677, 1, '45.77.5.214', 733),
(15, 10, 2021, 1634270554, 1, '3.237.255.213', 734),
(15, 10, 2021, 1634280565, 17, '95.70.214.74', 735),
(15, 10, 2021, 1634290833, 1, '52.25.250.100', 736),
(15, 10, 2021, 1634290863, 1, '34.213.80.1', 737),
(15, 10, 2021, 1634290869, 1, '35.163.70.59', 738),
(15, 10, 2021, 1634290890, 1, '34.221.247.208', 739),
(15, 10, 2021, 1634313381, 51, '88.243.196.245', 740),
(15, 10, 2021, 1634313524, 1, '185.11.15.132', 741),
(15, 10, 2021, 1634330820, 1, '157.55.39.95', 742),
(16, 10, 2021, 1634342944, 2, '3.69.24.217', 743),
(16, 10, 2021, 1634342991, 1, '137.226.113.44', 744),
(16, 10, 2021, 1634375831, 10, '95.70.214.74', 745),
(16, 10, 2021, 1634376186, 1, '54.184.142.133', 746),
(16, 10, 2021, 1634376294, 1, '54.191.168.90', 747),
(16, 10, 2021, 1634376311, 1, '54.189.24.123', 748),
(16, 10, 2021, 1634376571, 1, '34.221.1.175', 749),
(16, 10, 2021, 1634376982, 1, '54.244.43.231', 750),
(16, 10, 2021, 1634377056, 1, '54.213.128.7', 751),
(16, 10, 2021, 1634377194, 1, '18.236.166.97', 752),
(16, 10, 2021, 1634393486, 1, '45.129.18.198', 753),
(16, 10, 2021, 1634393598, 1, '64.246.165.170', 754),
(17, 10, 2021, 1634462842, 1, '34.218.238.147', 755),
(17, 10, 2021, 1634462854, 1, '54.202.240.115', 756),
(17, 10, 2021, 1634467225, 6, '95.70.214.74', 757),
(17, 10, 2021, 1634481735, 1, '58.53.128.88', 758),
(17, 10, 2021, 1634498286, 1, '92.118.160.37', 759),
(18, 10, 2021, 1634549954, 1, '54.189.159.27', 760),
(18, 10, 2021, 1634549956, 1, '54.202.104.253', 761),
(18, 10, 2021, 1634549961, 1, '54.191.47.254', 762),
(18, 10, 2021, 1634549970, 1, '34.221.199.150', 763),
(18, 10, 2021, 1634575938, 1, '3.80.10.98', 764),
(18, 10, 2021, 1634579775, 1, '173.211.79.177', 765),
(18, 10, 2021, 1634587950, 1, '54.91.76.221', 766),
(19, 10, 2021, 1634595775, 1, '58.33.94.133', 767),
(19, 10, 2021, 1634623584, 1, '3.17.13.192', 768),
(19, 10, 2021, 1634634599, 1, '35.85.49.98', 769),
(19, 10, 2021, 1634634769, 1, '54.202.247.249', 770),
(19, 10, 2021, 1634635263, 1, '52.10.73.179', 771),
(19, 10, 2021, 1634635263, 1, '52.27.172.223', 772),
(19, 10, 2021, 1634649494, 1, '44.193.210.230', 773),
(19, 10, 2021, 1634666267, 1, '95.70.214.74', 774),
(19, 10, 2021, 1634669452, 1, '45.129.18.202', 775),
(19, 10, 2021, 1634669951, 1, '124.126.78.150', 776),
(20, 10, 2021, 1634692975, 1, '93.158.90.65', 777),
(20, 10, 2021, 1634720834, 1, '52.41.102.129', 778),
(20, 10, 2021, 1634721031, 1, '54.245.154.88', 779),
(20, 10, 2021, 1634744029, 3, '95.70.214.74', 780),
(21, 10, 2021, 1634795125, 4, '88.245.194.71', 781),
(21, 10, 2021, 1634801876, 1, '157.55.39.95', 782),
(21, 10, 2021, 1634829172, 17, '95.70.214.74', 783),
(21, 10, 2021, 1634829184, 7, '176.219.134.82', 784);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_vitrin` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_baslik`, `hizmet_icerik`, `hizmet_resim`, `hizmet_icon`, `hizmet_title`, `hizmet_descr`, `hizmet_keyword`, `hizmet_vitrin`) VALUES
(1, 'ÖZEL MOBİLYA TASARIMI', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2048531223.jpg', '', 'ÖZEL MOBİLYA TASARIMI', 'Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa', 'ÖZEL MOBİLYA TASARIMI', '1'),
(11, 'OFİS MOBİLYALARI', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2007429062.jpg', '', 'OFİS MOBİLYALARI', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'OFİS MOBİLYALARI', '1'),
(12, 'İÇ MİMARLIK', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2638931436.jpg', '', 'İÇ MİMARLIK', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'İÇ MİMARLIK', '1'),
(13, 'AÇIK HAVA BAHÇE MOBİLYA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2072627069.jpg', '', 'AÇIK HAVA BAHÇE MOBİLYA', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'AÇIK HAVA BAHÇE MOBİLYA', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

CREATE TABLE `il` (
  `id` int(2) NOT NULL,
  `il_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `il_plaka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `il`
--

INSERT INTO `il` (`id`, `il_adi`, `il_plaka`) VALUES
(1, 'İSTANBUL', 34),
(2, 'ANKARA', 6),
(3, 'İZMİR', 35),
(4, 'BURSA', 16),
(5, 'ADANA', 1),
(6, 'ADIYAMAN', 2),
(7, 'AFYONKARAHİSAR', 3),
(8, 'AĞRI', 4),
(9, 'AKSARAY', 68),
(10, 'AMASYA', 5),
(11, 'ANTALYA', 7),
(12, 'ARDAHAN', 75),
(13, 'ARTVİN', 8),
(14, 'AYDIN', 9),
(15, 'BALIKESİR', 10),
(16, 'BARTIN', 74),
(17, 'BATMAN', 72),
(18, 'BAYBURT', 69),
(19, 'BİLECİK', 11),
(20, 'BİNGÖL', 12),
(21, 'BİTLİS', 13),
(22, 'BOLU', 14),
(23, 'BURDUR', 15),
(24, 'ÇANAKKALE', 17),
(25, 'ÇANKIRI', 18),
(26, 'ÇORUM', 19),
(27, 'DENİZLİ', 20),
(28, 'DİYARBAKIR', 21),
(29, 'KOCAELİ', 41),
(30, 'KONYA', 42),
(31, 'KÜTAHYA', 43),
(32, 'MALATYA', 44),
(33, 'MANİSA', 45),
(34, 'MARDİN', 47),
(35, 'MERSİN', 33),
(36, 'MUĞLA', 48),
(37, 'MUŞ', 49),
(38, 'NEVŞEHİR', 50),
(39, 'NİĞDE', 51),
(40, 'ORDU', 52),
(41, 'OSMANİYE', 80),
(42, 'RİZE', 53),
(43, 'SAKARYA', 54),
(44, 'SAMSUN', 55),
(45, 'SİİRT', 56),
(46, 'SİNOP', 57),
(47, 'ŞIRNAK', 73),
(48, 'SİVAS', 58),
(49, 'TEKİRDAĞ', 59),
(50, 'TOKAT', 60),
(51, 'TRABZON', 61),
(52, 'TUNCELİ', 62),
(53, 'ŞANLIURFA', 63),
(54, 'UŞAK', 64),
(55, 'VAN', 65),
(56, 'YALOVA', 77),
(57, 'YOZGAT', 66),
(58, 'ZONGULDAK', 67),
(59, 'DÜZCE', 81),
(60, 'EDİRNE', 22),
(61, 'ELAZIĞ', 23),
(62, 'ERZİNCAN', 24),
(63, 'ERZURUM', 25),
(64, 'ESKİŞEHİR', 26),
(65, 'GAZİANTEP', 27),
(66, 'GİRESUN', 28),
(67, 'GÜMÜŞHANE', 29),
(68, 'HAKKARİ', 30),
(69, 'HATAY', 31),
(70, 'IĞDIR', 76),
(71, 'ISPARTA', 32),
(72, 'KAHRAMANMARAŞ', 46),
(73, 'KARABÜK', 78),
(74, 'KARAMAN', 70),
(75, 'KARS', 36),
(76, 'KASTAMONU', 37),
(77, 'KAYSERİ', 38),
(78, 'KİLİS', 79),
(79, 'KIRIKKALE', 71),
(80, 'KIRKLARELİ', 39),
(81, 'KIRŞEHİR', 40);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iletisim_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_tarih`, `iletisim_isim`, `iletisim_mail`, `iletisim_mesaj`) VALUES
(1, '2018-01-25 10:59:37', 'Ahmet Aksu', 'ahmet@hotmail.com', 'Merhaba web sitesi yazılımı istiyorum.'),
(2, '2018-01-25 10:59:39', 'Kemal Demir', 'ahmet@hotmail.com', 'Merhaba web sitesi yazılımı istiyorum.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`) VALUES
(4, 'EV DEKORASYONU ', 1, '', '', ''),
(6, 'İÇ MİMARİ DEKORASYON ', 2, '', '', ''),
(7, 'RESTORAN DEKORASYON VE DİZAYNI', 3, '', '', ''),
(8, 'OFİS DEKORASYONU VE TASARIMI ', 4, '', '', ''),
(9, 'ANAHTAR TESLİM TADİLAT ', 1, '', '', ''),
(10, 'DÜĞÜN SALONU DİZAYN VE TADİLAT ', 5, '', '', ''),
(11, 'KAFE TADİLATI ', 6, '', '', ''),
(12, 'VİLLA TADİLATI ', 9, '', '', ''),
(13, 'PREFABRİK EV İMALAT VE SATIŞI', 7, '', '', ''),
(14, 'YAZLIK YAPIMI VE TADİLATI ', 8, '', '', ''),
(16, 'ÇELİK KONSTÜKSİYON ', 10, '', '', ''),
(17, 'FERFORCE İMALAT VE MONTAJI ', 11, '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_pass`, `kullanici_adsoyad`, `kullanici_resim`) VALUES
(0, 'uuroren', 'eafe53b349cd5e170f7593fea453773d', 'UĞUR ÖREN', 'assets/img/genel/22297.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `mail_user` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail_host` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail_port` int(250) NOT NULL,
  `mail_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_user`, `mail_host`, `mail_port`, `mail_pass`) VALUES
(0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `marka_id` int(11) NOT NULL,
  `marka_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `marka_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `marka_vitrin` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mesaj_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_icerik` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `mesaj_tarih`, `mesaj_ad`, `mesaj_tel`, `mesaj_mail`, `mesaj_icerik`) VALUES
(20, '2021-10-08 10:37:31', 'uğur', '', 'ugurxd09@outlook.com', 'dd'),
(21, '2021-10-08 10:37:35', 'uğur', '', 'ugurxd09@outlook.com', 'dd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meta`
--

CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL,
  `meta_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `meta`
--

INSERT INTO `meta` (`meta_id`, `meta_ad`, `meta_title`, `meta_descr`, `meta_keyword`) VALUES
(1, 'Ürünler', 'Ürünlerimiz', 'Ürünler Açıklama', 'Ürünler Keywords'),
(2, 'Hizmetler', 'Hizmetler ', 'Hizmetler Açıklama', 'Hizmetler Keywords'),
(3, 'Projeler', 'Projeler', 'Projeler Açıklama', 'Projeler Keywords'),
(4, 'Blog', 'Blog ', 'Blog Açıklama', 'Blog Keywords'),
(5, 'Sık Sorulan Sorular', 'Sık Sorulan Sorular ', 'Sık Sorulan Sorular Açıklama', 'Sık Sorulan Sorular Keyword'),
(6, 'Resim Galerisi', 'Proje Resimleri', 'Resim Galerisi Açıklama', 'Resim Galerisi Keywords'),
(7, 'Video Galerisi', 'Proje Videoları', 'Video Galerisi Açıklama', 'Video Galerisi Keywords'),
(8, 'İletişim', 'İletişim ', 'İletişim ', 'İletişim '),
(9, 'Markalar', 'Markalar ', 'Markalar Açıklama', 'Markalar Keywords');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motor`
--

CREATE TABLE `motor` (
  `motor_id` int(11) NOT NULL,
  `motor_analitik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_metrika` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_gonay` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_yonay` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `motor`
--

INSERT INTO `motor` (`motor_id`, `motor_analitik`, `motor_metrika`, `motor_gonay`, `motor_yonay`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

CREATE TABLE `odeme` (
  `odeme_id` int(11) NOT NULL,
  `odeme_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `odeme_durum` int(11) NOT NULL,
  `odeme_not` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odeme`
--

INSERT INTO `odeme` (`odeme_id`, `odeme_adi`, `odeme_durum`, `odeme_not`) VALUES
(1, 'Havale ile Öde', 1, 'Ödeme işlemi sırasında lütfen sipariş numaranızı belirtiniz.'),
(2, 'Kapıda Öde', 1, 'Kapıda İster Kredi kartı ister nakit ödeyebilirsiniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `omenu`
--

CREATE TABLE `omenu` (
  `omenu_id` int(11) NOT NULL,
  `omenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_ust` int(11) NOT NULL DEFAULT '0',
  `omenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_durum` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `omenu`
--

INSERT INTO `omenu` (`omenu_id`, `omenu_ad`, `omenu_ust`, `omenu_link`, `omenu_sira`, `omenu_durum`) VALUES
(11, 'BLOG', 0, 'blog', '2', 1),
(13, 'ÜRÜNLER', 0, 'urunler', '3', 1),
(16, 'SSS', 0, 'sss', '10', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `proje_id` int(11) NOT NULL,
  `proje_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_icerik` varchar(2999) COLLATE utf8_turkish_ci NOT NULL,
  `proje_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_vitrin` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_id`, `proje_baslik`, `proje_resim`, `proje_icerik`, `proje_title`, `proje_descr`, `proje_keyword`, `proje_vitrin`) VALUES
(113, 'Adalar Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Adalar Evden Eve Nakliyat', 'Adalar Evden Eve Nakliyat', 'Adalar Evden Eve Nakliyat', NULL),
(120, 'Arnavutköy Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Arnavutköy Evden Eve Nakliyat', 'Arnavutköy Evden Eve Nakliyat', 'Arnavutköy Evden Eve Nakliyat', NULL),
(121, 'Ataşehir Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Ataşehir Evden Eve Nakliyat', 'Ataşehir Evden Eve Nakliyat', 'Ataşehir Evden Eve Nakliyat', NULL),
(122, 'Avcılar Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Avcılar Evden Eve Nakliyat', 'Avcılar Evden Eve Nakliyat', 'Avcılar Evden Eve Nakliyat', NULL),
(123, 'Bağcılar Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Bağcılar Evden Eve Nakliyat', 'Bağcılar Evden Eve Nakliyat', 'Bağcılar Evden Eve Nakliyat', NULL),
(124, 'Bahçelievler Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Bahçelievler Evden Eve Nakliyat', 'Bahçelievler Evden Eve Nakliyat', 'Bahçelievler Evden Eve Nakliyat', NULL),
(125, 'Bakırköy Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Bakırköy Evden Eve Nakliyat', 'Bakırköy Evden Eve Nakliyat', 'Bakırköy Evden Eve Nakliyat', NULL),
(126, 'Başakşehir Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Başakşehir Evden Eve Nakliyat', 'Başakşehir Evden Eve Nakliyat', 'Başakşehir Evden Eve Nakliyat', NULL),
(127, 'Bayrampaşa Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Bayrampaşa Evden Eve Nakliyat', 'Bayrampaşa Evden Eve Nakliyat', 'Bayrampaşa Evden Eve Nakliyat', NULL),
(128, 'Beşiktaş Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Beşiktaş Evden Eve Nakliyat', 'Beşiktaş Evden Eve Nakliyat', 'Beşiktaş Evden Eve Nakliyat', NULL),
(129, 'Beykoz Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Beykoz Evden Eve Nakliyat', 'Beykoz Evden Eve Nakliyat', 'Beykoz Evden Eve Nakliyat', NULL),
(130, 'Beylikdüzü Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Beylikdüzü Evden Eve Nakliyat', 'Beylikdüzü Evden Eve Nakliyat', 'Beylikdüzü Evden Eve Nakliyat', NULL),
(131, 'Beyoğlu Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Beyoğlu Evden Eve Nakliyat', 'Beyoğlu Evden Eve Nakliyat', 'Beyoğlu Evden Eve Nakliyat', NULL),
(132, 'Büyükçekmece Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Büyükçekmece Evden Eve Nakliyat', 'Büyükçekmece Evden Eve Nakliyat', 'Büyükçekmece Evden Eve Nakliyat', NULL),
(133, 'Çatalca Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Çatalca Evden Eve Nakliyat', 'Çatalca Evden Eve Nakliyat', 'Çatalca Evden Eve Nakliyat', NULL);
INSERT INTO `projeler` (`proje_id`, `proje_baslik`, `proje_resim`, `proje_icerik`, `proje_title`, `proje_descr`, `proje_keyword`, `proje_vitrin`) VALUES
(134, 'Çekmeköy Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Çekmeköy Evden Eve Nakliyat', 'Çekmeköy Evden Eve Nakliyat', 'Çekmeköy Evden Eve Nakliyat', NULL),
(135, 'Esenler Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Esenler Evden Eve Nakliyat Evden Eve Nakliyat', 'Esenler Evden Eve Nakliyat', 'Esenler Evden Eve Nakliyat', NULL),
(136, 'Esenyurt Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Esenyurt Evden Eve Nakliyat', 'Esenyurt Evden Eve Nakliyat', 'Esenyurt Evden Eve Nakliyat', NULL),
(137, 'Eyüp Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Eyüp Evden Eve Nakliyat', 'Eyüp Evden Eve Nakliyat', 'Eyüp Evden Eve Nakliyat', NULL),
(138, 'Fatih Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Fatih Evden Eve Nakliyat', 'Fatih Evden Eve Nakliyat', 'Fatih Evden Eve Nakliyat', NULL),
(139, 'Gaziosmanpaşa Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Gaziosmanpaşa Evden Eve Nakliyat', 'Gaziosmanpaşa Evden Eve Nakliyat', 'Gaziosmanpaşa Evden Eve Nakliyat', NULL),
(140, 'Güngören Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Güngören Evden Eve Nakliyat', 'Güngören Evden Eve Nakliyat', 'Güngören Evden Eve Nakliyat', NULL),
(141, 'Kadıköy Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Kadıköy Evden Eve Nakliyat', 'Kadıköy Evden Eve Nakliyat', 'Kadıköy Evden Eve Nakliyat', NULL),
(142, 'Kâğıthane Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Kâğıthane Evden Eve Nakliyat', 'Kâğıthane Evden Eve Nakliyat', 'Kâğıthane Evden Eve Nakliyat', NULL),
(143, 'Kartal Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Kartal Evden Eve Nakliyat', 'Kartal Evden Eve Nakliyat', 'Kartal Evden Eve Nakliyat', NULL),
(144, 'Küçükçekmece Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Küçükçekmece Evden Eve Nakliyat', 'Küçükçekmece Evden Eve Nakliyat', 'Küçükçekmece Evden Eve Nakliyat', NULL),
(145, 'Maltepe Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Maltepe Evden Eve Nakliyat', 'Maltepe Evden Eve Nakliyat', 'Maltepe Evden Eve Nakliyat', NULL),
(146, 'Pendik Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Pendik Evden Eve Nakliyat', 'Pendik Evden Eve Nakliyat', 'Pendik Evden Eve Nakliyat', NULL),
(147, 'Sancaktepe Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Sancaktepe Evden Eve Nakliyat', 'Sancaktepe Evden Eve Nakliyat', 'Sancaktepe Evden Eve Nakliyat', NULL),
(148, 'Sarıyer Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Sarıyer Evden Eve Nakliyat', 'Sarıyer Evden Eve Nakliyat', 'Sarıyer Evden Eve Nakliyat', NULL);
INSERT INTO `projeler` (`proje_id`, `proje_baslik`, `proje_resim`, `proje_icerik`, `proje_title`, `proje_descr`, `proje_keyword`, `proje_vitrin`) VALUES
(149, 'Silivri Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Silivri Evden Eve Nakliyat', 'Silivri Evden Eve Nakliyat', 'Silivri Evden Eve Nakliyat', NULL),
(150, 'Sultanbeyli Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Sultanbeyli Evden Eve Nakliyat', 'Sultanbeyli Evden Eve Nakliyat', 'Sultanbeyli Evden Eve Nakliyat', NULL),
(151, 'Sultangazi Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Sultangazi Evden Eve Nakliyat', 'Sultangazi Evden Eve Nakliyat', 'Sultangazi Evden Eve Nakliyat', NULL),
(152, 'Şile Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Şile Evden Eve Nakliyat', 'Şile Evden Eve Nakliyat', 'Şile Evden Eve Nakliyat', NULL),
(153, 'Şişli Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Şişli Evden Eve Nakliyat', 'Şişli Evden Eve Nakliyat', 'Şişli Evden Eve Nakliyat', NULL),
(154, 'Tuzla Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Tuzla Evden Eve Nakliyat', 'Tuzla Evden Eve Nakliyat', 'Tuzla Evden Eve Nakliyat', NULL),
(155, 'Ümraniye Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Ümraniye Evden Eve Nakliyat', 'Ümraniye Evden Eve Nakliyat', 'Ümraniye Evden Eve Nakliyat', NULL),
(156, 'Üsküdar Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Üsküdar Evden Eve Nakliyat', 'Üsküdar Evden Eve Nakliyat', 'Üsküdar Evden Eve Nakliyat', NULL),
(157, 'Zeytinburnu Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Zeytinburnu Evden Eve Nakliyat', 'Zeytinburnu Evden Eve Nakliyat', 'Zeytinburnu Evden Eve Nakliyat', NULL),
(158, 'Çengelköy Evden Eve Nakliyat', 'assets/img/projeler/2393422889.jpg', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Fusce congue rhoncus lectus, ultricies suscipit diam gravida non. Etiam consectetur consequat pulvinar.<font color=\"#0000ff\"> Phasellus nisl arcu</font>, blandit varius ultrices id, interdum a ante. Nulla facilisi. Integer faucibus mauris magna, sit amet fermentum risus feugiat quis. Phasellus sed mauris at <u>nulla varius consectetur</u>. Integer non tortor quis sapien accumsan tristique. Nunc pharetra nunc non metus porta, non mollis mi suscipit. Sed sagittis quis dui sit amet imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec et enim in ex sagittis lacinia sed sed ante. Integer quis tortor eu sem facilisis sagittis sit amet at massa. </span><font face=\"Arial Black\">Sed congue ut mi vitae</font><font face=\"Open Sans, Arial, sans-serif\"> consequat.</font></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Aliquam imperdiet, dui a semper ultrices, odio odio semper est, sed lobortis velit mauris sit amet est. Morbi elementum ligula et urna vulputate finibus. Morbi dapibus lorem id quam iaculis, eget iaculis urna pharetra. Vivamus sodales mi diam, quis faucibus diam luctus id. <font color=\"#ff0000\">Pellentesque habitant</font> morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nisi eu velit aliquet pellentesque. Duis facilisis tortor in sagittis consectetur. Quisque dolor ante, ullamcorper a blandit elementum, consectetur scelerisque ante. Morbi posuere ligula non auctor molestie. Fusce non metus elementum, finibus magna sed, sagittis ex. Curabitur fermentum nunc mattis consequat faucibus. Donec dignissim eros erat, eu accumsan felis finibus id. Nulla posuere, nibh in efficitur tempus, neque ante placerat turpis, id dictum augue arcu a enim.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Integer leo turpis, aliquam sed pretium lacinia, <b>elementum non</b> augue. Phasellus lobortis risus facilisis mi vestibulum congue. Suspendisse quis lorem eget sapien tincidunt lacinia posuere ut nunc. Integer hendrerit libero lorem, et lobortis quam pellentesque eu. Aenean dapibus efficitur tellus, sit amet elementum tellus. Curabitur scelerisque felis quis ultricies interdum. Praesent lacus nunc, dignissim id nisi sit amet, interdum gravida neque. Integer eu lacus leo. Morbi mattis leo <font color=\"#104a5a\">a leo luctus</font>, <b>ullamcorper</b> tempus ex porta. Aenean auctor massa eget vulputate convallis. Suspendisse pellentesque sem in neque consequat, vel lobortis libero aliquam. Vivamus nibh nisi, laoreet nec ornare nec, ultricies id lectus.<u><b> Etiam in efficitur.', 'Çengelköy Evden Eve Nakliyat', 'Çengelköy Evden Eve Nakliyat', 'Çengelköy Evden Eve Nakliyat', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `randevu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hizmet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_not` longtext COLLATE utf8_turkish_ci NOT NULL,
  `randevu_zaman` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_adres` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_tarih`, `randevu_ad`, `randevu_tel`, `randevu_hizmet`, `randevu_not`, `randevu_zaman`, `randevu_il`, `randevu_ilce`, `randevu_adres`) VALUES
(2, '2021-10-08 09:27:45', 'uğur', '05394946430', 'ÖZEL MOBİLYA TASARIMI', 'adsgg', '2021-10-09T15:31', 'İSTANBUL', 'istanbul', 'istanbul\r\navcılar'),
(12, '2021-10-08 09:57:11', 'uğur', '05394946430', 'ÖZEL MOBİLYA TASARIMI', '123123', '1231-03-12T23:01', 'İSTANBUL', 'istanbul', 'istanbul\r\navcılar'),
(13, '2021-10-08 10:18:48', 'uğur', '05394946430', 'ÖZEL MOBİLYA TASARIMI', '13123', '1232-02-12T12:21', 'ANKARA', 'istanbul', 'istanbul\r\navcılar'),
(14, '2021-10-08 10:33:40', 'uğur', '05394946430', 'ÖZEL MOBİLYA TASARIMI', 'dedede', '1121-02-12T12:03', 'İSTANBUL', 'istanbul', 'istanbul\r\navcılar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `referans_id` int(11) NOT NULL,
  `referans_resim1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `referans_resim2` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`referans_id`, `referans_resim1`, `referans_resim2`) VALUES
(2, 'assets/img/referanslar/logo02.png', 'assets/img/referanslar/logo02-gray.png'),
(3, 'assets/img/referanslar/logo03.png', 'assets/img/referanslar/logo03-gray.png'),
(4, 'assets/img/referanslar/logo04.png', 'assets/img/referanslar/logo04-gray.png'),
(5, 'assets/img/referanslar/logo05.png', 'assets/img/referanslar/logo05-gray.png'),
(6, 'assets/img/referanslar/logo06.png', 'assets/img/referanslar/2870023721.jpg'),
(7, 'assets/img/referanslar/logo07.png', 'assets/img/referanslar/logo07-gray.png'),
(8, 'assets/img/referanslar/logo08.png', 'assets/img/referanslar/logo08-gray.png'),
(9, 'assets/img/referanslar/logo09.png', 'assets/img/referanslar/logo09-gray.png'),
(10, 'assets/img/referanslar/2027531865.jpg', 'assets/img/referanslar/2403924351.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resim`
--

CREATE TABLE `resim` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `resim`
--

INSERT INTO `resim` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(87, '65', 'assets/img/urunler/2911731590.jpg'),
(88, '65', 'assets/img/urunler/2446721303.jpg'),
(89, '65', 'assets/img/urunler/3177326022.jpg'),
(93, '79', 'assets/img/urunler/2269530310.jpg'),
(94, '79', 'assets/img/urunler/2911731590.jpg'),
(95, '79', 'assets/img/urunler/2446721303.jpg'),
(96, '79', 'assets/img/urunler/3177326022.jpg'),
(100, '78', 'assets/img/urunler/2269530310.jpg'),
(101, '78', 'assets/img/urunler/2911731590.jpg'),
(102, '78', 'assets/img/urunler/2446721303.jpg'),
(103, '78', 'assets/img/urunler/3177326022.jpg'),
(107, '77', 'assets/img/urunler/2269530310.jpg'),
(108, '77', 'assets/img/urunler/2911731590.jpg'),
(109, '77', 'assets/img/urunler/2446721303.jpg'),
(110, '77', 'assets/img/urunler/3177326022.jpg'),
(111, '76', 'assets/img/urunler/2269530310.jpg'),
(112, '76', 'assets/img/urunler/2911731590.jpg'),
(113, '76', 'assets/img/urunler/2446721303.jpg'),
(114, '76', 'assets/img/urunler/3177326022.jpg'),
(115, '75', 'assets/img/urunler/2269530310.jpg'),
(116, '75', 'assets/img/urunler/2911731590.jpg'),
(117, '75', 'assets/img/urunler/2446721303.jpg'),
(118, '75', 'assets/img/urunler/3177326022.jpg'),
(119, '74', 'assets/img/urunler/2269530310.jpg'),
(120, '74', 'assets/img/urunler/2911731590.jpg'),
(121, '74', 'assets/img/urunler/2446721303.jpg'),
(122, '74', 'assets/img/urunler/3177326022.jpg'),
(123, '73', 'assets/img/urunler/2269530310.jpg'),
(124, '73', 'assets/img/urunler/2911731590.jpg'),
(125, '73', 'assets/img/urunler/2446721303.jpg'),
(126, '73', 'assets/img/urunler/3177326022.jpg'),
(127, '72', 'assets/img/urunler/2269530310.jpg'),
(128, '72', 'assets/img/urunler/2911731590.jpg'),
(129, '72', 'assets/img/urunler/2446721303.jpg'),
(130, '72', 'assets/img/urunler/3177326022.jpg'),
(131, '71', 'assets/img/urunler/2269530310.jpg'),
(132, '71', 'assets/img/urunler/2911731590.jpg'),
(133, '71', 'assets/img/urunler/2446721303.jpg'),
(134, '71', 'assets/img/urunler/3177326022.jpg'),
(135, '70', 'assets/img/urunler/2269530310.jpg'),
(136, '70', 'assets/img/urunler/2911731590.jpg'),
(137, '70', 'assets/img/urunler/2446721303.jpg'),
(138, '70', 'assets/img/urunler/3177326022.jpg'),
(139, '69', 'assets/img/urunler/2269530310.jpg'),
(140, '69', 'assets/img/urunler/2911731590.jpg'),
(141, '69', 'assets/img/urunler/2446721303.jpg'),
(142, '69', 'assets/img/urunler/3177326022.jpg'),
(143, '68', 'assets/img/urunler/2269530310.jpg'),
(144, '68', 'assets/img/urunler/2911731590.jpg'),
(145, '68', 'assets/img/urunler/2446721303.jpg'),
(146, '68', 'assets/img/urunler/3177326022.jpg'),
(147, '67', 'assets/img/urunler/2269530310.jpg'),
(148, '67', 'assets/img/urunler/2911731590.jpg'),
(149, '67', 'assets/img/urunler/2446721303.jpg'),
(150, '67', 'assets/img/urunler/3177326022.jpg'),
(152, '66', 'assets/img/urunler/2911731590.jpg'),
(153, '66', 'assets/img/urunler/2446721303.jpg'),
(154, '66', 'assets/img/urunler/3177326022.jpg'),
(155, '65', 'assets/img/urunler/3072022383.jpg'),
(156, '74', 'assets/img/urunler/2033127040.jpg'),
(157, '80', 'assets/img/urunler/2328328145.jpg'),
(158, '81', 'assets/img/urunler/2769022930.jpg'),
(159, '81', 'assets/img/urunler/2479327220.jpg'),
(160, '81', 'assets/img/urunler/2542820397.jpg'),
(161, '81', 'assets/img/urunler/2514724814.jpg'),
(162, '66', 'assets/img/urunler/2982925794.jpg'),
(163, '67', 'assets/img/urunler/2922127862.jpg'),
(164, '68', 'assets/img/urunler/2410424568.jpg'),
(165, '69', 'assets/img/urunler/2976529594.jpg'),
(167, '82', 'assets/img/urunler/2765228302.jpg'),
(172, '83', 'assets/img/urunler/2653424973.jpg'),
(173, '83', 'assets/img/urunler/2037824747.jpg'),
(174, '83', 'assets/img/urunler/2559022991.jpg'),
(175, '82', 'assets/img/urunler/2153628716.jpg'),
(177, '82', 'assets/img/urunler/3008325954.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimgaleri`
--

CREATE TABLE `resimgaleri` (
  `resim_id` int(11) NOT NULL,
  `resim_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_menu` int(11) NOT NULL,
  `sayfa_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_baslik`, `sayfa_icerik`, `sayfa_menu`, `sayfa_title`, `sayfa_descr`, `sayfa_keyword`) VALUES
(1, 'Hakkimizda', '<p>Biz Kimiz?&nbsp;<br>1997 yılından bu yana çizgimizi bozmadan müşterilerimize olan güler yüzümüzle &nbsp;ve &nbsp;aynı kalite standartlarında &nbsp;iç dizayn konusunda mimari tasarımlarla hizmet vermekteyiz. &nbsp;</p>\r\n\r\n<p>Kurulduğu günden itibaren hiç vazgeçmediği bir kaç çizgiden en önemlisi ise kalite anlayışımızdır! Tüm bu hizmetler yanında sürekli müşterilerini arayan sorun yaşadıkları bir durum olup olmadığını sorup sorunlarını giderdiğimiz ve bundan ötürü sürekli kazandığımız müşteri portfoyü ile yüzlerce müşteri sayısına ulaşmış bulunmaktayız!&nbsp;</p>\r\n\r\n<p>Değerli vaktinizi bizi tanımaya ayırdığınız için çok teşekkür ederiz! Umarız bizi tanımanızda yardımcı olabilmişizdir, biz yinede yeterli gelmemiştir diye bizi iletişim sayfamızdaki telefon numaramızdan arayıp bir kaç soru sormanızı bekleyen arkadaşlarımız olduğunu hatırlatalım ve iyi günler dileyelim...</p>\r\n\r\n<p>Kalite Anlayışımız</p>\r\n\r\n<p>Müşterilerimize en kaliteli malzeme ve işçilikle hizmet vermekteyiz . Tüm kalite anlayışını şu şekilde özetleyebiliriz;</p>\r\n\r\n<p>Müşteriye istediği hizmeti istediği gibi doğru ve tam zamanında ulaştırmaktır!</p>\r\n', 1, 'hakkimizda', 'hakkimizda açıklama', 'hakkimizda, anahtar, kelime,'),
(2, 'Misyonumuz', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna velit, consequat pharetra varius dictum, commodo vel est. Vestibulum ullamcorper suscipit lacus. Quisque lacinia auctor porttitor. Proin auctor mi risus, ut mollis orci laoreet sit amet. In quis elementum ex. Integer volutpat felis purus, et consectetur felis auctor vel. Duis et egestas leo. In eu mollis turpis, at faucibus nulla. Aliquam luctus risus et nunc hendrerit aliquet. Mauris vitae sapien luctus, tempor lorem in, blandit lacus. Donec facilisis nibh imperdiet elit commodo sodales non in elit. Aliquam erat volutpat. Phasellus dolor turpis, rutrum a consectetur id, scelerisque ac elit. Donec vitae elit non dolor volutpat bibendum id vitae urna. Vivamus et purus vel orci maximus vestibulum sit amet a risus. Donec non lorem neque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Morbi et libero nec felis interdum sagittis. Mauris feugiat nisi ut augue scelerisque egestas. Vestibulum dapibus egestas lobortis. Donec augue eros, porttitor vel rutrum ut, blandit quis ligula. Sed tristique feugiat ultricies. Sed efficitur bibendum sem ac pretium. Nam iaculis arcu sed odio sodales, in auctor justo luctus. Nullam a purus sed elit pharetra mattis. Nam vitae molestie dolor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Fusce aliquet augue sit amet felis consequat, posuere elementum dolor pulvinar. Donec aliquet magna et nisi volutpat tincidunt. Nullam vehicula est orci, non maximus lacus tincidunt eu. Nullam a ultrices sem. Proin dapibus est viverra quam luctus pulvinar. Nulla fermentum lectus sit amet tellus lacinia, sed luctus lectus ornare. Nullam euismod faucibus erat sit amet lobortis. Fusce egestas eleifend sodales. Fusce feugiat ligula vitae arcu ornare sollicitudin. Vestibulum sed euismod turpis. Maecenas nibh tellus, cursus eu condimentum ut, hendrerit vel tortor. Fusce ultrices, justo suscipit semper feugiat, magna urna sollicitudin erat, et tincidunt purus enim ac tortor. Mauris mattis justo id metus tempus, sed aliquet orci elementum.</p>\r\n', 1, 'Deneme', 'deneme', 'dene, me'),
(3, 'Vizyonumuz', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna velit, consequat pharetra varius dictum, commodo vel est. Vestibulum ullamcorper suscipit lacus. Quisque lacinia auctor porttitor. Proin auctor mi risus, ut mollis orci laoreet sit amet. In quis elementum ex. Integer volutpat felis purus, et consectetur felis auctor vel. Duis et egestas leo. In eu mollis turpis, at faucibus nulla. Aliquam luctus risus et nunc hendrerit aliquet. Mauris vitae sapien luctus, tempor lorem in, blandit lacus. Donec facilisis nibh imperdiet elit commodo sodales non in elit. Aliquam erat volutpat. Phasellus dolor turpis, rutrum a consectetur id, scelerisque ac elit. Donec vitae elit non dolor volutpat bibendum id vitae urna. Vivamus et purus vel orci maximus vestibulum sit amet a risus. Donec non lorem neque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Morbi et libero nec felis interdum sagittis. Mauris feugiat nisi ut augue scelerisque egestas. Vestibulum dapibus egestas lobortis. Donec augue eros, porttitor vel rutrum ut, blandit quis ligula. Sed tristique feugiat ultricies. Sed efficitur bibendum sem ac pretium. Nam iaculis arcu sed odio sodales, in auctor justo luctus. Nullam a purus sed elit pharetra mattis. Nam vitae molestie dolor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Fusce aliquet augue sit amet felis consequat, posuere elementum dolor pulvinar. Donec aliquet magna et nisi volutpat tincidunt. Nullam vehicula est orci, non maximus lacus tincidunt eu. Nullam a ultrices sem. Proin dapibus est viverra quam luctus pulvinar. Nulla fermentum lectus sit amet tellus lacinia, sed luctus lectus ornare. Nullam euismod faucibus erat sit amet lobortis. Fusce egestas eleifend sodales. Fusce feugiat ligula vitae arcu ornare sollicitudin. Vestibulum sed euismod turpis. Maecenas nibh tellus, cursus eu condimentum ut, hendrerit vel tortor. Fusce ultrices, justo suscipit semper feugiat, magna urna sollicitudin erat, et tincidunt purus enim ac tortor. Mauris mattis justo id metus tempus, sed aliquet orci elementum.</p>', 1, '', '', ''),
(4, 'Kalite Politikamız', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna velit, consequat pharetra varius dictum, commodo vel est. Vestibulum ullamcorper suscipit lacus. Quisque lacinia auctor porttitor. Proin auctor mi risus, ut mollis orci laoreet sit amet. In quis elementum ex. Integer volutpat felis purus, et consectetur felis auctor vel. Duis et egestas leo. In eu mollis turpis, at faucibus nulla. Aliquam luctus risus et nunc hendrerit aliquet. Mauris vitae sapien luctus, tempor lorem in, blandit lacus. Donec facilisis nibh imperdiet elit commodo sodales non in elit. Aliquam erat volutpat. Phasellus dolor turpis, rutrum a consectetur id, scelerisque ac elit. Donec vitae elit non dolor volutpat bibendum id vitae urna. Vivamus et purus vel orci maximus vestibulum sit amet a risus. Donec non lorem neque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Morbi et libero nec felis interdum sagittis. Mauris feugiat nisi ut augue scelerisque egestas. Vestibulum dapibus egestas lobortis. Donec augue eros, porttitor vel rutrum ut, blandit quis ligula. Sed tristique feugiat ultricies. Sed efficitur bibendum sem ac pretium. Nam iaculis arcu sed odio sodales, in auctor justo luctus. Nullam a purus sed elit pharetra mattis. Nam vitae molestie dolor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Fusce aliquet augue sit amet felis consequat, posuere elementum dolor pulvinar. Donec aliquet magna et nisi volutpat tincidunt. Nullam vehicula est orci, non maximus lacus tincidunt eu. Nullam a ultrices sem. Proin dapibus est viverra quam luctus pulvinar. Nulla fermentum lectus sit amet tellus lacinia, sed luctus lectus ornare. Nullam euismod faucibus erat sit amet lobortis. Fusce egestas eleifend sodales. Fusce feugiat ligula vitae arcu ornare sollicitudin. Vestibulum sed euismod turpis. Maecenas nibh tellus, cursus eu condimentum ut, hendrerit vel tortor. Fusce ultrices, justo suscipit semper feugiat, magna urna sollicitudin erat, et tincidunt purus enim ac tortor. Mauris mattis justo id metus tempus, sed aliquet orci elementum.</p>', 1, '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `siparis_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_durum` int(11) NOT NULL DEFAULT '1',
  `siparis_odeme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_adres` longtext COLLATE utf8_turkish_ci NOT NULL,
  `siparis_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_fiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_tarih`, `siparis_ad`, `siparis_mail`, `siparis_tel`, `siparis_urun`, `siparis_durum`, `siparis_odeme`, `siparis_adres`, `siparis_il`, `siparis_ilce`, `siparis_fiyat`) VALUES
(3, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(4, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 1, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(13, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(14, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 1, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(15, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(16, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 1, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(17, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(18, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 0, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(19, '2018-01-24 07:21:59', 'Ozan', 'adsf@fg.cok', '08508407870', '67', 0, 'Havale ile Öde', 'dgdfgdsf', '', '', '1299'),
(20, '2018-01-24 07:22:59', 'Ozana', 'adsf@fg.cok', '08508407870', '67', 0, 'Havale ile Öde', 'dgdfgdsf', '', '', '1299'),
(21, '2018-01-24 07:24:02', 'Ozanabc', 'adsf@fg.cok', '08508407870', '67', 0, 'Havale ile Öde', 'dgdfgdsf', '', '', '1299'),
(22, '2018-01-24 07:50:02', 'Ozan asd sadasdas', 'murat@mail.com', '08508407870', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(23, '2018-01-24 08:15:07', 'Ozan asd sadasdas', 'murat@mail.com', '08508407870', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(24, '2018-01-24 08:24:09', 'Ozan asd sadasdas', 'murat@mail.com', '08508407870', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(25, '2018-01-24 08:24:42', 'Ozi Reyis', 'murat@mail.com', '05466676703', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(26, '2018-01-24 08:27:34', 'Ozi Reyis', 'murat@mail.com', '05466676703', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(27, '2018-01-24 08:28:05', 'Ozi Reyis', 'murat@mail.com', '05466676703', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(28, '2018-01-24 08:29:04', 'Ozi Reyis', 'murat@mail.com', '05466676703', '67', 1, 'Havale ile Öde', 'asdasdas asd arfdasfg dsagf sdg sfg fxbvc', '', '', '1299'),
(29, '2018-01-24 09:33:29', 'dsafsadf', 'adsf@fg.cok', '05466676703', '76', 1, 'Havale ile Öde', 'ghffhjdhkj', '', '', '799'),
(30, '2018-01-24 10:22:51', 'adf', '', '', '76', 1, 'Ödeme Tipi Seçiniz', '', '', '', '799'),
(31, '2018-01-24 10:26:13', 'asdasd', '', '', '68', 1, 'Ödeme Tipi Seçiniz', '', '', '', '799'),
(32, '2018-01-24 10:27:25', 'sdgsgf', 'adsf@fg.cok', '08508407870', '68', 1, 'Ödeme Tipi Seçiniz', 'sdgfsfg', '', '', '799'),
(33, '2018-01-24 10:27:50', 'sdf', 'sfg', 'sfg', '67', 1, 'Ödeme Tipi Seçiniz', 'sfg', '', '', '1299'),
(34, '2018-01-24 13:08:10', 'adsfadf', 'adsf@fg.cok', 'ee', '67', 1, 'Ödeme Tipi Seçiniz', 'adfadf', '', '', '1299'),
(35, '2018-01-24 13:08:51', 'dsafsfg', 'webkozik@gmail.com', 'sfghfsh', '67', 1, 'Ödeme Tipi Seçiniz', 'fxgsdghf', '', '', '1299'),
(36, '2018-01-24 13:10:46', 'dsafsfg', 'webkozik@gmail.com', 'sfghfsh', '67', 1, 'Ödeme Tipi Seçiniz', 'fxgsdghf', '', '', '1299'),
(37, '2018-01-24 13:11:52', 'afdadf', 'murat@mail.com', 'asdgsadg', '67', 1, 'Ödeme Tipi Seçiniz', 'adsgasdg', '', '', '1299'),
(38, '2018-01-24 13:12:54', 'afdadf', 'murat@mail.com', 'asdgsadg', '67', 1, 'Ödeme Tipi Seçiniz', 'adsgasdg', '', '', '1299'),
(39, '2018-01-24 13:14:10', 'afdadf', 'murat@mail.com', 'asdgsadg', '67', 1, 'Ödeme Tipi Seçiniz', 'adsgasdg', '', '', '1299'),
(40, '2018-01-24 13:15:23', 'asdf', 'murat@mail.com', 'adsf', '70', 1, 'Ödeme Tipi Seçiniz', 'asdfadf', '', '', '799'),
(41, '2018-01-24 13:16:56', 'fvdf', 'denem@mail.com', 'xvb', '70', 1, 'Ödeme Tipi Seçiniz', 'xvbxvbxvn', '', '', '799'),
(42, '2018-01-24 15:14:20', 'fvdf', 'webkozik@gmail.com', '08508407870', '69', 1, 'Ödeme Tipi Seçiniz', 'zsdgdfhgdfdefhdfh', '', '', '799'),
(43, '2018-01-25 11:24:30', 'Ozan', 'adsf@fg.cok', '08508407870', '70', 1, 'Havale ile Öde', 'dfgdfg', '', '', '799'),
(44, '2018-02-06 14:48:43', 'Ozan', 'webkozik@gmail.com', '08508407870', '75', 1, 'Havale ile Öde', 'sfghfghdgj', 'BURSA', 'Bayrampaşa', ''),
(45, '2018-02-17 06:19:42', 'ewartdygfhj', 'asdgfh', '43567', '76', 1, 'Havale ile Öde', 'fdgfhg', 'ADIYAMAN', 'sdgfhdfgj', ''),
(46, '2018-03-02 15:49:18', 'Ozan', 'adsf@fg.cok', '08508407870', '', 1, '', 'sgfshfsdhf', 'İZMİR', 'dfsadgfsgd', ''),
(47, '2018-03-02 15:53:06', 'Ozan', 'adsf@fg.cok', '08508407870', '79', 1, '', 'fdgh', 'İZMİR', 'sfg', ''),
(48, '2021-10-08 10:00:10', 'asdg', 'asdg', 'sadg', '<br />\r\n<b>Notice</b>:  Undefined index: urun_id in <b>C:\\xampp\\htdocs\\satin-al.php</b> on line <b>116</b><br />\r\n', 1, '', 'istanbul\r\navcılar', 'İSTANBUL', 'istanbul', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slayt`
--

CREATE TABLE `slayt` (
  `slayt_id` int(1) NOT NULL,
  `slayt_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_resim` varchar(355) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_sira` int(11) NOT NULL,
  `slayt_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_butonad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_butonlink` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slayt`
--

INSERT INTO `slayt` (`slayt_id`, `slayt_baslik`, `slayt_resim`, `slayt_sira`, `slayt_aciklama`, `slayt_butonad`, `slayt_butonlink`) VALUES
(16, '', 'assets/img/slayt/2880325762.jpg', 0, 'KALİTELİ İŞÇİLİK', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `smenu`
--

CREATE TABLE `smenu` (
  `smenu_id` int(11) NOT NULL,
  `smenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smenu_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `smenu`
--

INSERT INTO `smenu` (`smenu_id`, `smenu_ad`, `smenu_durum`) VALUES
(10, 'Kurumsal', '1'),
(11, 'PROJELER', '1'),
(12, 'PROJE RESİMLERİ', '1'),
(13, 'PROJE VİDEOLARI', '1'),
(15, 'HİZMETLERİMİZ', '1'),
(16, 'HİZMET BÖLGELERİ', '1'),
(19, 'İLETİŞİM', '1'),
(21, '', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sms`
--

CREATE TABLE `sms` (
  `sms_id` int(11) NOT NULL,
  `sms_kullanici` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sms_sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sms_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sms_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sms`
--

INSERT INTO `sms` (`sms_id`, `sms_kullanici`, `sms_sifre`, `sms_baslik`, `sms_durum`) VALUES
(0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE `sosyal` (
  `sosyal_id` int(1) NOT NULL,
  `sosyal_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_icon` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`sosyal_id`, `sosyal_link`, `sosyal_icon`) VALUES
(1, 'https://www.facebook.com/ozenisyapidekorasyon', 'fa-facebook'),
(4, 'https://instagram.com/ozenis_yapi?utm_medium=copy_link', 'fa-instagram'),
(5, 'https://www.youtube.com/', 'fa-youtube'),
(6, 'https://plus.google.com', 'fa-google-plus');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `sss_id` int(11) NOT NULL,
  `sss_soru` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sss_cevap` varchar(755) COLLATE utf8_turkish_ci NOT NULL,
  `sss_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`sss_id`, `sss_soru`, `sss_cevap`, `sss_sira`) VALUES
(1, 'Satın alma işlemi nasıl yapılır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 1),
(2, 'Ürünlerin iade hakkı var mıdır?', 'Cu novum debet pertinacia nam, erat putent fabellas duo no, semper detracto expetenda ut nec. Malorum propriae an mei, ad mei propriae invidunt. Audiam bonorum phaedrum mei ut, eos elitr nullam et primis ocurreret.', 2),
(3, 'Yeni ürünler ne zaman gelir?', 'Diam lorem inimicus mel ne, ei nam equidem sadipscing. Quo ex vivendo ancillae fabellas. Falli audiam an nec, eius vidit timeam mei id, cum te numquam elaboraret. Atqui consul hendrerit per ad assum copiosae.', 3),
(4, 'Çalışmalar kalıcı mıdır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 4),
(5, 'Satın alma işlemi nasıl yapılır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 0),
(6, 'Ürünlerin iade hakkı var mıdır?', 'Cu novum debet pertinacia nam, erat putent fabellas duo no, semper detracto expetenda ut nec. Malorum propriae an mei, ad mei propriae invidunt. Audiam bonorum phaedrum mei ut, eos elitr nullam et primis ocurreret.', 2),
(7, 'Yeni ürünler ne zaman gelir?', 'Diam lorem inimicus mel ne, ei nam equidem sadipscing. Quo ex vivendo ancillae fabellas. Falli audiam an nec, eius vidit timeam mei id, cum te numquam elaboraret. Atqui consul hendrerit per ad assum copiosae.', 3),
(8, 'Çalışmalar kalıcı mıdır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 4),
(9, 'SD', 'SAD', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_baslik` varchar(455) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` varchar(955) COLLATE utf8_turkish_ci NOT NULL,
  `urun_efiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kargo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_vitrin` int(11) NOT NULL DEFAULT '0',
  `urun_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_baslik`, `urun_aciklama`, `urun_efiyat`, `urun_fiyat`, `urun_kargo`, `urun_kategori`, `urun_vitrin`, `urun_title`, `urun_descr`, `urun_keyword`) VALUES
(65, 'Kaliteli Koltuk takımları (ÜCRETSİZ MONTAJ)', '<p>Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix, duo an audire percipit inciderint.</p>\r\n', '4.599', '2.499', '', '3', 1, 'Bosch Klima 24.000 BTU (ÜCRETSİZ MONTAJ)', 'Oporteat urbanitas est et, possit menandri pertinax at quo.', 'Bosch Klima 24.000 BTU (ÜCRETSİZ MONTAJ)'),
(66, 'Kaliteli Koltuk takımları', '<p>Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix, duo an audire percipit inciderint.</p>\r\n', '899', '799', '', '3', 1, 'Kaliteli Koltuk takımları', 'Oporteat urbanitas est et, possit menandri pertinax at quo', 'Kaliteli Koltuk takımları'),
(82, 'DENEME', 'SADGSAGD', '1', '1', '', '2', 1, 'SSADG', 'SADGSADG', 'SADGSDAG'),
(83, 'DENEME', '<p>DENEME DENEME DENEME DENEME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', '1', '1', '', '2', 1, 'DENEME', 'DENEME', 'DENEME');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videogaleri`
--

CREATE TABLE `videogaleri` (
  `video_id` int(11) NOT NULL,
  `video_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `video_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videogaleri`
--

INSERT INTO `videogaleri` (`video_id`, `video_link`, `video_resim`) VALUES
(12, 'G13pElCafy4', 'assets/img/galeri/2808027164.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `whatsapp`
--

CREATE TABLE `whatsapp` (
  `whats_id` int(11) NOT NULL,
  `whats_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_yon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `whatsapp`
--

INSERT INTO `whatsapp` (`whats_id`, `whats_tel`, `whats_yon`, `whats_durum`) VALUES
(0, '05303989651', 'right', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `widget`
--

CREATE TABLE `widget` (
  `widget_id` int(11) NOT NULL,
  `widget_hizmet` int(11) NOT NULL,
  `widget_proje` int(11) NOT NULL,
  `widget_yorum` int(11) NOT NULL,
  `widget_galeri` int(11) NOT NULL,
  `widget_urun` int(11) NOT NULL,
  `widget_counter` int(11) NOT NULL,
  `widget_referans` int(11) NOT NULL,
  `widget_blog` int(11) NOT NULL,
  `widget_bwelcome` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_bwelcome1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_welcome` int(11) NOT NULL,
  `widget_welcome1` int(11) NOT NULL,
  `widget_bhizmet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_bproje` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_byorum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_bblog` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_burun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_html` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `widget`
--

INSERT INTO `widget` (`widget_id`, `widget_hizmet`, `widget_proje`, `widget_yorum`, `widget_galeri`, `widget_urun`, `widget_counter`, `widget_referans`, `widget_blog`, `widget_bwelcome`, `widget_bwelcome1`, `widget_welcome`, `widget_welcome1`, `widget_bhizmet`, `widget_bproje`, `widget_byorum`, `widget_bblog`, `widget_burun`, `widget_html`) VALUES
(1, 1, 1, 1, 1, 1, 0, 0, 1, 'KALİTELİ İŞÇİLİK VE FERAH BİR ORTAM İÇİN BİZE ULAŞIN ', 'İÇ MİMARİNİZİ YENİLEMENİN TAM ZAMANI', 1, 1, 'HİZMETLERİMİZ', 'PROJELERİMİZ', 'MÜŞTERİ YORUMLARI', 'BLOG / DUYURU', 'ÜRÜNLERİMİZ', '<div style=\"text-align: center;\">İÇ MİMARİ VE SANATI BİR ARAYA GETİREREK, KİMİ ZAMAN YÜKSEK KAZANÇLAR, KİMİ ZAMAN YÜKSEK DOZDA EĞLENCEYİ, KİMİ ZAMAN HUZURU VE KİMİ ZAMAN MUTLULUĞU KENDİNE AİT ALANLARDA YAŞAMAYI İNSANLARA SAĞLAMAKTADIR.\r\n\r\nTASARIM STÜDYOSU İÇ MİMARLIK MESLEĞİNİN GEREKLERİNİ EN DOĞRU VE DÜZGÜN BİÇİMDE YERİNE GETİRDİĞİ ÇALIŞMALARI KENDİ DİLİ İLE HAYATA GEÇİRMEKTEDİR.\r\n\r\nHER GECEN GÜN REFERANSLARINI VE AKTİF MÜŞTERİ PORTFÖYÜNÜ GELİŞTİREREK SEKTÖRDE İLERLEMEKTEDİR.\r\n\r\nTASARLADIĞI ALANLARI DOĞRU ŞEKİLDE ANAHTAR TESLİM UYGULAMALARI İLE MÜŞTERİ MEMNUNİYETİNİ İSTİKRARLI BİÇİMDE KAZANMAKTADIR.</div>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `yorum_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_icerik`, `yorum_isim`, `yorum_resim`, `yorum_link`) VALUES
(6, 'Deneme', 'UĞUR ÖREN', 'assets/img/yorumlar/28420259702381924632.jpg', 'uuroren.store');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`counter_id`);

--
-- Tablo için indeksler `flink`
--
ALTER TABLE `flink`
  ADD PRIMARY KEY (`flink_id`);

--
-- Tablo için indeksler `fmenu`
--
ALTER TABLE `fmenu`
  ADD PRIMARY KEY (`fmenu_id`);

--
-- Tablo için indeksler `hesap`
--
ALTER TABLE `hesap`
  ADD PRIMARY KEY (`hesap_id`);

--
-- Tablo için indeksler `hit`
--
ALTER TABLE `hit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Tablo için indeksler `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`marka_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Tablo için indeksler `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`motor_id`);

--
-- Tablo için indeksler `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`odeme_id`);

--
-- Tablo için indeksler `omenu`
--
ALTER TABLE `omenu`
  ADD PRIMARY KEY (`omenu_id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`referans_id`);

--
-- Tablo için indeksler `resim`
--
ALTER TABLE `resim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `resimgaleri`
--
ALTER TABLE `resimgaleri`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `slayt`
--
ALTER TABLE `slayt`
  ADD PRIMARY KEY (`slayt_id`);

--
-- Tablo için indeksler `smenu`
--
ALTER TABLE `smenu`
  ADD PRIMARY KEY (`smenu_id`);

--
-- Tablo için indeksler `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- Tablo için indeksler `sosyal`
--
ALTER TABLE `sosyal`
  ADD PRIMARY KEY (`sosyal_id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`sss_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `videogaleri`
--
ALTER TABLE `videogaleri`
  ADD PRIMARY KEY (`video_id`);

--
-- Tablo için indeksler `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`whats_id`);

--
-- Tablo için indeksler `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`widget_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `counter`
--
ALTER TABLE `counter`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `flink`
--
ALTER TABLE `flink`
  MODIFY `flink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `fmenu`
--
ALTER TABLE `fmenu`
  MODIFY `fmenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `hesap`
--
ALTER TABLE `hesap`
  MODIFY `hesap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hit`
--
ALTER TABLE `hit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=785;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `il`
--
ALTER TABLE `il`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `marka_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `meta`
--
ALTER TABLE `meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `motor`
--
ALTER TABLE `motor`
  MODIFY `motor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `odeme`
--
ALTER TABLE `odeme`
  MODIFY `odeme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `omenu`
--
ALTER TABLE `omenu`
  MODIFY `omenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `referans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `resim`
--
ALTER TABLE `resim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- Tablo için AUTO_INCREMENT değeri `resimgaleri`
--
ALTER TABLE `resimgaleri`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `slayt`
--
ALTER TABLE `slayt`
  MODIFY `slayt_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `smenu`
--
ALTER TABLE `smenu`
  MODIFY `smenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `sms`
--
ALTER TABLE `sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sosyal`
--
ALTER TABLE `sosyal`
  MODIFY `sosyal_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Tablo için AUTO_INCREMENT değeri `videogaleri`
--
ALTER TABLE `videogaleri`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `whats_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `widget`
--
ALTER TABLE `widget`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
