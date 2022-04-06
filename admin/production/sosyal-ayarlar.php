<?php 
require_once 'header.php';
require_once 'sidebar.php';
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div  class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Sosyal  Ayarlar</h3>
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
                    <label>Twitter:</label>
                    <input type="text" class="form-control" name="ayar_twitter" value="<?php echo $ayarlr['ayar_twitter'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Facebook:</label>
                    <input type="text" class="form-control" name="ayar_facebook" value="<?php echo $ayarlr['ayar_facebook'] ?>">
                  </div>
                  <div class="form-group">
                    <label>İnstagram:</label>
                    <input type="text" class="form-control" name="ayar_instagram" value="<?php echo $ayarlr['ayar_instagram'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Skype:</label>
                    <input type="text" class="form-control" name="ayar_skype" value="<?php echo $ayarlr['ayar_skype'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Linkedn:</label>
                    <input type="text" class="form-control" name="ayar_linkedn" value="<?php echo $ayarlr['ayar_linkedn'] ?>">
                  </div>
                  <button type="submit" class="btn btn-primary" name="sosyalayarkaydet">Güncelle</button>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>