<?php 


try {



	$db=new PDO("mysql:host=localhost;dbname=nanoajan_c2c;charset=utf8",'nanoajan_c2ckul','+896694As@d-');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}



 ?>