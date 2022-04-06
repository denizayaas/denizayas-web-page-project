<?php

ob_start();
session_start();

include 'baglan.php';


if (isset($_POST['admingiris'])) {

	$kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password,
		'yetki' => 5
		));

	$say=$kullanicisor->rowCount();

	echo $say;

	if ($say==1) {
				
		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;



	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
	
}


if (isset($_POST['genelayarkaydet'])) {

	if($_FILES['ayar_logo']["size"] > 0)  {

		$uploads_dir = '../dimg/';
		@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
		@$name = $_FILES['ayar_logo']["name"];
		//resmin isminin benzersiz olması
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);	
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir,3).$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		


		$duzenle=$db->prepare("UPDATE ayar SET
			ayar_title=:ayar_title,
			ayar_logo=:ayar_logo,
			ayar_description=:ayar_description,
			ayar_keywords=:ayar_keywords,
			ayar_author=:ayar_author
			WHERE ayar_id = 0");
		$update=$duzenle->execute(array(
			'ayar_title' => $_POST['ayar_title'],
			'ayar_logo' => $refimgyol,
			'ayar_description' => $_POST['ayar_description'],
			'ayar_keywords' => $_POST['ayar_keywords'],
			'ayar_author' => $_POST['ayar_author']
			));

		if ($update) {

			$resimsilunlink=$_POST['eski_yol'];
			unlink("../$resimsilunlink");
			Header("Location:../production/genel-ayar.php?durum=ok");

		} else {

			Header("Location:../production/genel-ayar.php?durum=no");
		}
	} else {

		$duzenle=$db->prepare("UPDATE ayar SET
			ayar_title=:ayar_title,
			ayar_description=:ayar_description,
			ayar_keywords=:ayar_keywords,
			ayar_author=:ayar_author
			WHERE ayar_id = 0");
		$update=$duzenle->execute(array(
			'ayar_title' => $_POST['ayar_title'],
			'ayar_description' => $_POST['ayar_description'],
			'ayar_keywords' => $_POST['ayar_keywords'],
			'ayar_author' => $_POST['ayar_author']
			));

		if ($update) {

			header("Location:../production/genel-ayar.php?durum=ok");

		} else {

			header("Location:../production/genel-ayar.php?durum=no");
		}

	}

}


if (isset($_POST['kullaniciduzenle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	if($_FILES['kullanici_resim']["size"] > 0)  {

		$uploads_dir = '../dimg/';
		@$tmp_name = $_FILES['kullanici_resim']["tmp_name"];
		@$name = $_FILES['kullanici_resim']["name"];
		//resmin isminin benzersiz olması
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);	
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir,3).$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		


		$duzenle=$db->prepare("UPDATE kullanici SET
			kullanici_tc=:kullanici_tc,
			kullanici_resim=:kullanici_resim,
			kullanici_ad=:kullanici_ad,
			kullanici_mail=:kullanici_mail,
			kullanici_tel=:kullanici_tel,
			kullanici_adsoyad=:kullanici_adsoyad,
			kullanici_adres=:kullanici_adres,
			kullanici_il=:kullanici_il,
			kullanici_ilce=:kullanici_ilce,
			kullanici_unvan=:kullanici_unvan
			WHERE kullanici_id={$_POST['kullanici_id']}");
		$update=$duzenle->execute(array(
			'kullanici_tc' => $_POST['kullanici_tc'],
			'kullanici_resim' => $refimgyol,
			'kullanici_ad' => $_POST['kullanici_ad'],
			'kullanici_mail' => $_POST['kullanici_mail'],
			'kullanici_tel' => $_POST['kullanici_tel'],
			'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
			'kullanici_adres' => $_POST['kullanici_adres'],
			'kullanici_il' => $_POST['kullanici_il'],
			'kullanici_ilce' => $_POST['kullanici_ilce'],
			'kullanici_unvan' => $_POST['kullanici_unvan']
			));

		if ($update) {

			$resimsilunlink=$_POST['eski_yol'];
			unlink("../$resimsilunlink");
			Header("Location:../production/kullanici-duzenle.php?durum=ok");

		} else {

			Header("Location:../production/kullanici-duzenle.php?durum=no");
		}
	} else {

		$duzenle=$db->prepare("UPDATE kullanici SET
			kullanici_tc=:kullanici_tc,
			kullanici_ad=:kullanici_ad,
			kullanici_mail=:kullanici_mail,
			kullanici_tel=:kullanici_tel,
			kullanici_adsoyad=:kullanici_adsoyad,
			kullanici_adres=:kullanici_adres,
			kullanici_il=:kullanici_il,
			kullanici_ilce=:kullanici_ilce,
			kullanici_unvan=:kullanici_unvan
			WHERE $kullanici_id={$_POST['kullanici_id']}");
		$update=$duzenle->execute(array(
			'kullanici_tc' => $_POST['kullanici_tc'],
			'kullanici_ad' => $_POST['kullanici_ad'],
			'kullanici_mail' => $_POST['kullanici_mail'],
			'kullanici_tel' => $_POST['kullanici_tel'],
			'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
			'kullanici_adres' => $_POST['kullanici_adres'],
			'kullanici_il' => $_POST['kullanici_il'],
			'kullanici_ilce' => $_POST['kullanici_ilce'],
			'kullanici_unvan' => $_POST['kullanici_unvan']
			));

		if ($update) {

			header("Location:../production/kullanici-duzenle.php?durum=ok");

		} else {

			header("Location:../production/kullanici-duzenle.php?durum=no");
		}

	}

}


if (isset($_POST['iletisimayarkaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
		));


	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['sosyalayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_instagram=:ayar_instagram,
		ayar_skype=:ayar_skype,
		ayar_linkedn=:ayar_linkedn
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_instagram' => $_POST['ayar_instagram'],
		'ayar_skype' => $_POST['ayar_skype'],
		'ayar_linkedn' => $_POST['ayar_linkedn']
		));


	if ($update) {

		header("Location:../production/sosyal-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/sosyal-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['smtpayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:ayar_smtphost,
		ayar_smtpuser=:ayar_smtpuser,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_smtphost' => $_POST['ayar_smtphost'],
		'ayar_smtpuser' => $_POST['ayar_smtpuser'],
		'ayar_smtppassword' => $_POST['ayar_smtppassword'],
		'ayar_smtpport' => $_POST['ayar_smtpport']
		));


	if ($update) {

		header("Location:../production/mail-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/mail-ayarlar.php?durum=no");
	}
	
}

 ?>