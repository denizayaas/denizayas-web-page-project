<?php 
require_once 'header.php';
require_once 'sidebar.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();

 ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class=""><i class="fa fa-user"></i> Kullanıcı Listeleme</h3>
            <ol class="breadcrumb">
              <p>Kullanıcı Bilgilerini Buradan Düzenleyin</p>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Kullanıcılar
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="fa fa-image"></i> Kullanıcı Fotoğrafı</th>
                    <th><i class="icon_profile"></i> Ad Soyad</th>
                    <th><i class="icon_mail_alt"></i> Mail</th>
                    <th><i class="icon_mobile"></i> Telefon</th>
                    <th></th>
                  </tr>
                  <?php 

                  while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) { ?>

                  <tr>
                    <td><?php echo $kullanicicek['kullanici_resim'] ?></td>
                    <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                    <td><?php echo $kullanicicek['kullanici_mail'] ?></td>
                    <td><?php echo $kullanicicek['kullanici_tel'] ?></td>
                    <td>
                      <a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>"><button class="btn btn-primary" type="submit">Düzenle</button></a>
                      <a href=""><button class="btn btn-danger" type="submit">Sil</button></a>   
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>