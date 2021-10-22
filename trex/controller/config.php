<?php

try {

	$db=new PDO("mysql:host=localhost;dbname=ozenisya_vt",'ozenisya_uur','05394946430*/' );
	$db->query("SET CHARACTER SET utf8");
	//echo "veritabanı bağlantısı başarılı";

}

catch (PDOExpception $e) {

	echo $e->getMessage();
}