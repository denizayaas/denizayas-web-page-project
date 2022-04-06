<?php require_once 'header.php'; ?>


  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $ayarlr['ayar_author']?></h1>
      <p><span class="typed" data-typed-items="Web Geliştirici,Bilgisayar Programcısı, PHP Geliştirici"></span></p>
    </div>
  </section>

  <main id="main">


    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Hakkımda</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/deniz.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Frontend Developer</h3><br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>19 Kasım 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>(534) 720 0905</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bornova-İzmir</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>denizayaas@gmail.com</span></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>


    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Yeteneklerim</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">C# <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>CV</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">İş Tecrübesi:</h3>
            <div class="resume-item pb-0">
              <h4>Deniz Ayas</h4>
              <ul>
              <li>Meslek: Stajyer </li>
              <li>Şehir:İzmir</li>
              <li>İş Yeri: SKY Bilgi Sistemleri</li>
              <li>Başlangıç Tarihi: Eylül 2019</li>
              <li>Bitiş Tarihi: Haziran 2020</li>
              <li>Açıklama: Bilgisayar Yapıları ve Donanım</li>
              </ul>
            </div>

            <h3 class="resume-title"></h3>

          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Eğitim:</h3>
            <div class="resume-item">
              <p><em>Bornova İzmir </em></p>
              <ul>
                <li>Derece : Lise Diploması</li>
                <li>Okul: Yaşar Üniversitesi</li>
                <li>Bitiş Tarihi: 14/06/20 </li>
                <li>Tanım: Bilgisayar Teknolojileri Veri Tabanı ve Yapıları Öğrencisi</li>
                <li>Diploma puanı :85/100</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>İletişim Bilgileri:</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adres:</h4>
                <h3>İzmir/Bornova</h3>
                <p><?php echo $ayarlr['ayar_adres'] ?><?php echo $ayarlr['ayar_il'] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <h3>denizayaas@gmail.com</h3>
                <p><?php echo $ayarlr['ayar_mail'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon Numarası:</h4>
                <h3>0(534) 720 09 05</h3>
                <p><?php echo $ayarlr['ayar_tel'] ?></p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Ad</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Konu</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Mesaj</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesajınız Gönderildi.</div>
              </div>
              <div class="text-center"><button disabled type="submit">Mesaj Gönder</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  <?php require_once 'footer.php'; ?>
