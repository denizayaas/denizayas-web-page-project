<?php 
include 'header.php';
include 'sidebar.php';

$kullanicisor=$db->prepare("SELECT * From kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
  ));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kullanıcılar</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <section class="panel">
              <header class="panel-heading">
                Kullanıcı Ayarları
              </header>
              <div class="panel-body">
                <form role="form" action="../netting/islem.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Kullanıcı Tc:</label>
                    <input type="text" class="form-control" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Ad:</label>
                    <input type="text" class="form-control" name="kullanici_ad" value="<?php echo $kullanicicek['kullanici_ad']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Mail:</label>
                    <input type="text" disabled class="form-control" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Tel:</label>
                    <input type="text" class="form-control" name="kullanici_tel" value="<?php echo $kullanicicek['kullanici_tel']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Ad Soyad:</label>
                    <input type="text" class="form-control" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Adres:</label>
                    <input type="text" class="form-control" name="kullanici_adres" value="<?php echo $kullanicicek['kullanici_adres']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı İl:</label>
                    <input type="text" class="form-control" name="kullanici_il" value="<?php echo $kullanicicek['kullanici_il']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı İlçe:</label>
                    <input type="text" class="form-control" name="kullanici_ilce" value="<?php echo $kullanicicek['kullanici_ilce']?>">
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Ünvan:</label>
                    <input type="text" class="form-control" name="kullanici_unvan" value="<?php echo $kullanicicek['kullanici_unvan']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Yüklü Logo:</label><br>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php 
                          if (strlen($kullanicicek['kullanici_resim'])>0) {?>

                          <img width="200"  src="../<?php echo $kullanicicek['kullanici_resim']; ?>"><br>

                          <?php } else {?>


                          <img width="120"  src="../../dimg/logo-yok.png">


                          <?php } ?>
                            <br>
                            <input type="file" id="exampleInputFile" name="kullanici_resim">
                            <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['kullanici_resim'] ?>">
                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">

                            <br>
                            <button type="submit" name="kullaniciduzenle" class="btn btn-primary">Güncelle</button>
                        </div>
                  </div>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>