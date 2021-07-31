<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/iconfavicon-16x16.png">
  <link rel="manifest" href="../icon/site.webmanifest">
  <link rel="mask-icon" href="../icon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00a300">
  <meta name="theme-color" content="#ffffff"> 

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="../main.css">


  <title>Lentera</title>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary flex-sm-nowrap flex-wrap">
    <div class="container-fluid">
      <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php" class="navbar-brand flex-grow-1 ps-4">
        <embed src="../img/logo-white.svg" onerror="this.onerror=null; this.src='image.png'" width="55" height="46">
      </a>
      <div class="navbar-collapse collapse justify-content-center navbarhome" id="navbar5">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../galery.php"><strong>Kursus</strong></a>
          </li>
        </ul>
      </div>

      <div class="flex-grow-1">
        <!--spacer-->
      </div>
      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-login">Login</button>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- modal -->
  <div class="modal fade" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal-loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="list-group rounded border" id="list-tab" role="tablist">
            <ul class="nav">
              <li class="nav-item">
                <a class="list-group-item list-group-item-action active" id="list-login-list" data-bs-toggle="list"
                  href="#list-login" role="tab" aria-controls="login">Login</a>
              </li>
              <li class="nav-item">
                <a class="list-group-item list-group-item-action" id="list-daftar-list" data-bs-toggle="list"
                  href="#list-daftar" role="tab" aria-controls="daftar">Daftar</a>
              </li>
            </ul>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="tab-content">
            <!-- login form -->
            <div class="tab-pane active" id="list-login" role="tabpanel">
              <form>
                <div class="form-group pb-2">
                  <label for="email-login">Email</label>
                  <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp"
                    placeholder="Masukkan Email">
                </div>

                <div class="form-group pb-2">
                  <label for="password-login">Kata Sandi</label>
                  <input type="password" class="form-control" id="password-login" placeholder="Masukkan Kata Sandi">
                </div>

                <div class="form-check pb-1 text-end">
                  <a class="text-dark text-link" href="../user/change-password.php">Lupa Kata Sandi?</a>
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
              </form>
            </div>
            <!-- daftar form -->
            <div class="tab-pane" id="list-daftar" role="tabpanel">
              <form>
                <div class="form-group pb-2">
                  <label for="Nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="Nama" aria-describedby="Nama">
                </div>

                <div class="form-group pb-2">
                  <label for="phone-number">Nomor Telepon</label>
                  <input type="number" class="form-control" id="phone-number" aria-describedby="phone-number">
                </div>

                <div class="form-group pb-2">
                  <label for="email-register">Email</label>
                  <input type="email" class="form-control" id="email-register" aria-describedby="emailHelp">
                </div>

                <div class="form-group pb-2">
                  <label for="password-register">Password</label>
                  <input type="password" class="form-control" id="password-register">
                </div>

                <div class="form-group pb-2">
                  <label for="password-register-validation">Konfirmasi Kata Sandi</label>
                  <input type="password" class="form-control" id="password-register-validation">
                </div>
                <p class="text-center">Dengan mendaftar,Anda menyetujui <a href="tou.php"> Ketentuan Penggunaan</a> dan <a href="">kebijakan Privasi</a>.</p>
                <button type="submit" class="btn btn-dark">Daftar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->

  <div class="container-fluid tou-bg text-center">
    <h1 class="fw-bold"> Cookie Policy Platform LENTERA </h1>
  </div>
  <div class="container-sm tou-container text-break">
    <p class="fw-light fst-italic">Berlaku Efektif sejak April 2021</p>
    <p>Syarat dan Ketentuan ini merupakan perjanjian antara penggguna <span class="fw-bold">(Anda)</span> dan Tim
      Lentera <span class="fw-bold">(kami)</span>, yaitu sebuah tim yang mengembangkan proyek LENTERA <span
        class="fw-bold">(Learn Technology & Entrepeneur Character)</span> Program Studi Sistem Informasi Universitas
      PGRI Madiun yang berdomisili di Madiun.</p>

    <p>Syarat dam ketentuan ini mengatur anda saat mengakses dan menggunakan aplikasi, situs web LENTERA dan situs web
      lain yang kami kelila baik fitur, teknologi, konten dan produk yang kami sediakan selanjutnya , secara
      bersama-sama disebut sebagai <span class="fw-bold">(Platform)</span>.</p>

    <p>Dalam memakai Platofrm Kami Anda setidkanya berusia Minimal 18 Tahun, Diprioritaskan bagi kalangan akademik,
      Pelaku Bisnis, atau calon pelaku Bisnis yang ingin meningkatkan wawasan di bidang Teknologi dan Entrepeneur.
    </p>

    <p>Jika anda tidak menyetujui Syarat & Ketentuan ini, Kami berhak untuk menghentikan akses dan penggunaan anda
      terhadap Platform Kami.
    </p>

    <p>Harap membaca Syarat dan Ketentuan ini secara seksama sebelum anda mulai menggunakan Platform Kami. Syarat dan
      Ketentuan ini mencakup hal-hal sebagai berikut :
    </p>

    <ul>
      <li>
        <p>
          <span class="fw-bold">Pembukaan Akun</span> <br>
          Sebelum menggunakan Platform kami, Anda menyetujui syarat dan ketentuan dan kebijakan privasi dimana anda akan
          mendaftarkan diri dengan memberikan informasi yang kami butuhkan. Saat melakukan pendaftaran , kami akan
          meminta anda untuk memberikan informasi berupa Nama Lengkap, Alamat surat Elektronik, Nomor telpon genggam
          pribadi anda, dan kami berhak menghentikan penggunaan platform apabila data yang anda berikan tidak terbukti
          kebenaranya.
        </p>
        <p>
          Sistem kami akan membuatkan Akun untuk anda yang nantinya dapat digunakan untuk mengakses layanan dari
          platform kami. Keamanan dan kerahasian akun , username, dan password merupakan tanggung jawab pribadi anda.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Informasi Pribadi Anda</span> <br>
          Pengumpulan, Penyimpanan, Pengolahan, Penggunaan, dan Pembagian Informasi pribadi yang anda berikan ketika
          membuka akun tunduk pada kebijakan rpivasi yang merupakan bagian yang tidak terpisahkan dari syarat dan
          ketentuan ini.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Akses Terhadap Paltform Kami</span> <br>
          Kami tidak menjamin bahwa platform kami, maupun konten di dalamnya akan selalu tersedia atau tanpa gangguan.
          Izin untuk mengakses platform kami bersifat sementara. Kami dapat menangguhkan, menarik, memberhentikan ,
          maupun mengganti bagian manapun dari paltform kami tanpa pemberitahuan sebelumnya.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Sertifikat</span> <br>
          Sertifikat yang kami berikan merupakan reward bagi anda yang sudah menyelesaikan seluruh materi yang sudah
          disediakan pada topik tertentu. Sertifikat ini bukan merupakan sertifikasi atas penguasaaan kompetensi kerja
          atau tanda kelulusan atas suatu uji kompetensi kerja , yang pengaturannya diatur terpisah dalam peraturan
          perundang-undangan tersendiri.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Penggunaan Yang dilarang</span> <br>
          Anda hanya diperbolehkan menggunakan platform untuk tujuan yang baik dan sha menurut hukum, anda tidak boleh
          menggunakan platform kami untuk keperluan yang tidak baik seperti melakukan penipuan dan merugikan pihak lain
          baik secara hukum maupun sistem seperti menyelipkan virus,menyebarkan spam, dan tindakan yang sejenis.
        </p>
        <p>
          Anda juga tidak diperbolehkan untuk menggandakan, menyalin, atau menjual kembali bagian manapun dari platform
          kami. Tidak mengakses tanpa izin, Menggangu, merusak, atau mengacak-ngacak bagian manapun dari platform kami.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Tanggung Jawab Anda</span> <br>
          Anda bertanggung jawab penuh atas keputusan yang anda buat dalam mengakses dan menggunakan platform kami. Berperilaku baik dan tidak merugikan pihak lain.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Batasan Tanggung Jawab Kami</span> <br>
          Platform yang kami sediakan adalah sebagaimana adanya dan kami tidak menyatakan menjamin bahwa keandalan, ketepatan waktu, kualitas, kesesuaian, ketersediaan, akurasi, kelengkapan, atau keamanan dari paltform kami dapat memenuhi kebutuhan dan sesuai dengan harapan anda.
        </p>
      <li>
        <p>
          <span class="fw-bold">Keadaan Kahar<span class="fst=italic">(Force Majeure)</span></span> <br>
          Platform kami dapat diinterupsi oleh kejadian di luar kewenangan atau kontrol kami (Keadaan Kahar) seperti bencana alam, gangguan listrik , telekomunikasi, kebijakan pemerintah, dan lainnya. Anda setuju untuk membebaskan kami dari setiap tuntutan dan tanggung jawab jika kami tidak dapat memfasilitasi layanan karna keadaan ini.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Ketentuan Lainnya</span> <br>
          Anda mengerti dan setuju bahwa syarat dan ketentuan ini merupakan perjanjian dalam bentuk elektronik dan tindakan anda menkan tombol daftar saat pembukaan akun dan tombol masuk saaat akan mengakses akun anda merupakan persetujuan aktif anda untuk mengikatkan diri dalam perjanjian dengan kami.
        </p>
        <p>
        Kami berhak merubah syarat dan ketentuan berlaku, memperbaharui paltform dari waktu kewaktu, serta mengubah konten yang ada pada platform kami. Dan anda tidak dapat mengajukan tuntutanatau keberatan terhadap keabsahan dari syarat dan ketentuan atau kebijakan privasi yang dibuat dalam bentuk elektronik.
        </p>
      </li>
      <li>
        <p>
          <span class="fw-bold">Cara Menghubungi Kami </span><br>
          Silahkan mengirimkan surat elektronik ke informasi kontak yang sudah kami sediakan.
        </p>
      </li>
    </ul>
  <p>Saya telah membaca dan mengerti seluruh syarat dan ketentuan ini dan konsekuensinya dan dengan ini menerima setiap hak, kewajiban dan ketentuan yang diatur di dalamnya.</p>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small bg-secondary pt-3 mt-5 text-white">
    <!-- Footer Elements -->
    <div class="container">

      <!--Grid row-->
      <div class="row pt-4 pb-4 ">
        <!--Grid column-->
        <div class="col-md-1">
          <a class="btn-floating btn-fb unstyle-link" href="index.php">
            <embed src="../img/logo-white.svg" width="50" height="65" alt="">
          </a>
        </div>
        <div class="col-md-5 me-4">
          <h3 class="ft-small fw-bold text-white">Subscribe and join our community</h3>
          <span class="ft-small text-disable">We often send free tutorials, updates and discounts on future courses.
            Jump on board, you will love it.</span>
        </div>
        <div class="col-md-5 mx-auto">
          <form class="input-group">
            <input type="text" class="form-control form-daftar" placeholder="Email" aria-label="Your email"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary my-0 ms-2" type="button">Subscribe</button>
            </div>
          </form>
          <span class="ft-small">By clicking Subscribe you agree with our <a href="tou.php">Terms of Use</a> & <a
              href="pp.php">Privacy Policy</a></span>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <hr>

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-1 text-start text-footer">

          <!-- Links -->
          <h5 class="fw-bold mt-3 mb-3 ft-small">Company</h5>
          <ul class="list-unstyled">
            <li>
              <a class="unstyle-link" href="../index.php">About
              </a>
            </li>
            <li>
              <a class="unstyle-link" href="address.php">Contact
              </a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mx-auto text-start text-footer">

          <!-- Links -->
          <h5 class="fw-bold mt-3 mb-3 ft-small">Policy</h5>
          <ul class="list-unstyled">
            <li>
              <a class="unstyle-link" href="tou.php">Terms of use
              </a>
            </li>
            <li>
              <a class="unstyle-link" href="pp.php">Privacy Policy
              </a>
            </li>
            <li>
              <a class="unstyle-link" href="cp.php">Cookie Policy
              </a>
            </li>
          </ul>

        </div>

        <!-- Grid column -->
        <div class="col-md-5 mx-auto ps-4 text-footer me-5 pe-5">
          <!-- Links -->
          <h5 class="fw-bold mt-3 mb-3 text-start ft-small">Kontak Kami</h5>
          <ul class="list-unstyled text-start">
            <li class="mb-2">
              Kampus 4, Lantai 6, Laboratorium Riset Program Studi Sistem
              Informasi Universitas PGRI Madiun.
            </li>
            <li>
              <a class="unstyle-link" href="mailto:lentera.unipma.project@gmail.com">lentera.unipma.project@gmail.com
              </a>
            </li>
            <li class="list-inline-item pt-4">
              <a class="btn-floating btn-fb mx-1 unstyle-link" href="https://www.instagram.com/lentera.project/" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1 unstyle-link" href="https://www.instagram.com/lentera.project/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1 unstyle-link" href="https://www.instagram.com/lentera.project/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1 unstyle-link" href="https://www.instagram.com/lentera.project/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube"
                  viewBox="0 0 16 16">
                  <path
                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
              </a>
            </li>
            <hr class="divider-icons mt-3">
          </ul>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>
    <!-- Social buttons -->
    <!-- <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1 unstyle-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1 unstyle-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1 unstyle-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter"
            viewBox="0 0 16 16">
            <path
              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1 unstyle-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg>
        </a>
      </li>
    </ul> -->
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center pb-3 ft-small">© 2021 Copyright:
      <a class="unstyle-link" href="http://ibagask.rf.gd/?i=1"> Lentera Team</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>