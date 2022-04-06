<?php 
require_once 'header.php';
require_once 'sidebar.php';
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div  class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> İletişim Ayarlar</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <section  class="panel">
              <header class="panel-heading">
                İletişim Ayarlar
              </header>
              <div  class="panel-body">
                <form role="form" action="../netting/islem.php" method="post">
                  <div class="form-group">
                    <label>Tel:</label>
                    <input type="text" class="form-control" name="ayar_tel" value="<?php echo $ayarlr['ayar_tel'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Gsm:</label>
                    <input type="text" class="form-control" name="ayar_gsm" value="<?php echo $ayarlr['ayar_gsm']?>">
                  </div>
                  <div class="form-group">
                    <label>Faks:</label>
                    <input type="text" class="form-control" name="ayar_faks" value="<?php echo $ayarlr['ayar_faks']?>">
                  </div>
                  <div class="form-group">
                    <label>Mail:</label>
                    <input type="text" class="form-control" name="ayar_mail" value="<?php echo $ayarlr['ayar_mail']?>">
                  </div>
                  <div class="form-group">
                    <label>İlçe:</label>
                    <input type="text" class="form-control" name="ayar_ilce" value="<?php echo $ayarlr['ayar_ilce']?>">
                  </div>
                  <div class="form-group">
                    <label>İl:</label>
                    <input type="text" class="form-control" name="ayar_il" value="<?php echo $ayarlr['ayar_il']?>">
                  </div>
                  <div class="form-group">
                    <label>Adres:</label>
                    <input type="text" class="form-control" name="ayar_adres" value="<?php echo $ayarlr['ayar_adres']?>">
                  </div>
                  <div class="form-group">
                    <label>Mesai:</label>
                    <input type="text" class="form-control" name="ayar_mesai" value="<?php echo $ayarlr['ayar_mesai']?>">
                  </div>
                  <button type="submit" class="btn btn-primary" name="iletisimayarkaydet">Güncelle</button>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>