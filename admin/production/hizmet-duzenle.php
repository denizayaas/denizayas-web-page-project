<?php 
require_once 'header.php';
require_once 'sidebar.php';
 ?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> HıZMET DUZENLE</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <section class="panel">
              <header class="panel-heading">
                Hizmet Güncelle
              </header>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label>Hizmet İçerik</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet Başlık</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Hizmet Detay</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Hizmet Icon</label>
                    <input type="file" id="exampleInputFile">
                  </div>
                  <button type="submit" class="btn btn-primary">Güncelle</button>
                </form>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>