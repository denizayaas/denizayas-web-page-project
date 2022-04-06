<?php
include 'header.php';
include 'sidebar.php';
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Genel Ayarlar</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <section class="panel">
              <header class="panel-heading">
                Genel Ayarlar
              </header>
              <div class="panel-body">
                <form role="form" action="../netting/islem.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Site Başlığı:</label>
                    <input type="text" class="form-control" name="ayar_title" value="<?php echo $ayarlr['ayar_title']?>">
                  </div>
                  <div class="form-group">
                    <label>Site Açıklaması:</label>
                    <input type="text" class="form-control" name="ayar_description" value="<?php echo $ayarlr['ayar_description']?>">
                  </div>
                  <div class="form-group">
                    <label>Site Anahtar Kelimeleri:</label>
                    <input type="text" class="form-control" name="ayar_keywords" value="<?php echo $ayarlr['ayar_keywords']?>">
                  </div>
                  <div class="form-group">
                    <label>Site Yazar:</label>
                    <input type="text" class="form-control" name="ayar_author" value="<?php echo $ayarlr['ayar_author']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Yüklü Logo:</label><br>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <?php
                          if (strlen($ayarlr['ayar_logo'])>0) {?>

                          <img width="200"  src="../<?php echo $ayarlr['ayar_logo']; ?>"><br>

                          <?php } else {?>


                          <img width="120"  src="../../dimg/logo-yok.png">


                          <?php } ?>
                            <br>
                            <input type="file" id="exampleInputFile" name="ayar_logo">
                            <input type="hidden" name="eski_yol" value="<?php echo $ayarlr['ayar_logo'] ?>">

                            <br>
                            <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
                        </div>
                  </div>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>
