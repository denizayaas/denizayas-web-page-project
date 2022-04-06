<?php 
require_once 'header.php';
require_once 'sidebar.php';

 ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class=""><i class="fa fa-user"></i> Hizmetler Listeleme</h3>
            <ol class="breadcrumb">
              <p>Hizmetlerinizi Buradan Düzenleyebilirsiniz.</p>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Hizmetler 
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="fa fa-clone"></i> Hizmet İkon</th>
                    <th><i class="fa fa-sliders"></i> Hizmet İçerik</th>
                    <th><i class="fa fa-bookmark-o"></i> Hizmet Başlık</th>
                    <th><i class="fa fa-bars"></i> Hizmet Detay</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>Angeline Mcclain</td>
                    <td>2004-07-06</td>
                    <td>dale@chief.info</td>
                    <td>İbrahim Koca</td>
                    <td>
                      <a href="hizmet-duzenle.php?hizmet_id="><button class="btn btn-primary" type="submit">Düzenle</button></a>
                      <button class="btn btn-danger" type="submit" name="hizmet-sil">Sil</button>     
                    </td>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      <?php require_once 'footer.php'; ?>