<?php 
require_once 'header.php';
require_once 'sidebar.php';
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div  class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Medya Ayarları</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <section  class="panel">
              <header class="panel-heading">
                İletişim Ayarları
              </header>
              <div  class="panel-body">
                <form role="form" method="post" action="../netting/islem.php">
                  <div class="form-group">
                    <label>SMTP Host:</label>
                    <input type="text" class="form-control" name="ayar_smtphost" value="<?php echo $ayarlr['ayar_smtphost'] ?>">
                  </div>
                  <div class="form-group">
                    <label>SMTP Username:</label>
                    <input type="text" class="form-control" name="ayar_smtpuser" value="<?php echo $ayarlr['ayar_smtpuser'] ?>">
                  </div>
                  <div class="form-group">
                    <label>SMTP password:</label>
                    <input type="text" class="form-control" name="ayar_smtppassword" value="<?php echo $ayarlr['ayar_smtppassword'] ?>">
                  </div>
                  <div class="form-group">
                    <label>SMTP Port:</label>
                    <input type="text" class="form-control" name="ayar_smtpport" value="<?php echo $ayarlr['ayar_smtpport'] ?>">
                  </div>
                  <button type="submit" class="btn btn-primary" name="smtpayarkaydet">Güncelle</button>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>