<!doctype html>
<html lang="en">
  <head>
    <title>Jelajah Nusantara</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: "Open Sans", sans-serif;
        scroll-behavior: smooth;
      }

      .navbar {
        padding: 15px 40px;
        position: absolute;
        width: 100%;
        z-index: 10;
        background: linear-gradient(
          to bottom,
          rgba(0, 0, 0, 0.7) 0%,
          rgba(0, 0, 0, 0) 100%
        );
      }
      .navbar-brand,
      .nav-link {
        color: white !important;
      }

      .carousel-item {
        height: 100vh;
      }
      .carousel-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
        filter: brightness(0.7);
      }
      .carousel-caption {
        bottom: 30%;
      }
      .carousel-caption h1 {
        font-weight: 700;
        font-size: 3.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }

      @media (max-width: 767px) {
        .carousel-caption h1 {
          font-size: 2rem;
        }
        .carousel-caption p {
          font-size: 1rem;
        }
        .carousel-caption {
          bottom: 32%;
        }
      }
      .carousel-caption p {
        font-size: 1.2rem;
      }

      .section-padding {
        padding: 80px 0;
      }
      .section-title {
        font-weight: 700;
        margin-bottom: 50px;
        text-align: center;
      }
      .card-img-custom {
        width: 100%;
        height: 250px;
        object-fit: cover;
      }

      .card {
        height: 100%;
      }
    </style>
  </head>

  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-weight-bold" href="#">Nusantara.</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destinasi">Destinasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div
      id="heroCarousel"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/5.webp" alt="Kawah Ijen" />
          <div class="carousel-caption">
            <h1>Pesona Api Biru Kawah Ijen</h1>
            <p>
              Saksikan fenomena alam langka dan pemandangan danau asam terbesar
              di dunia.
            </p>
            <a href="#destinasi" class="btn btn-warning btn-lg mt-3"
              >Jelajahi Sekarang</a
            >
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/6.webp" alt="Taman Nasional Baluran" />
          <div class="carousel-caption">
            <h1>Eksotisme Sabana Baluran</h1>
            <p>
              Rasakan nuansa "Africa van Java" dengan keanekaragaman satwa liar
              di habitat aslinya.
            </p>
            <a href="#destinasi" class="btn btn-warning btn-lg mt-3"
              >Jelajahi Sekarang</a
            >
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/4.webp" alt="Pantai Bangsring" />
          <div class="carousel-caption">
            <h1>Pagi di Pantai Bangsring</h1>
            <p>
              Nikmati keindahan bawah laut dan panorama matahari terbit yang
              memukau.
            </p>
            <a href="#destinasi" class="btn btn-warning btn-lg mt-3"
              >Jelajahi Sekarang</a
            >
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#heroCarousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a
        class="carousel-control-next"
        href="#heroCarousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>

    <!-- Services Section -->
    <section id="layanan" class="section-padding bg-light">
      <div class="container text-center">
        <h2 class="section-title">Mengapa Memilih Kami?</h2>
        <div class="row">
          <div class="col-md-4">
            <h4>Pemandu Lokal</h4>
            <p class="text-muted">
              Ditemani oleh warga lokal yang sangat memahami rute dan cerita
              sejarah setiap tempat.
            </p>
          </div>
          <div class="col-md-4">
            <h4>Fasilitas Lengkap</h4>
            <p class="text-muted">
              Transportasi nyaman dan penginapan terbaik untuk menjaga stamina
              liburan Anda.
            </p>
          </div>
          <div class="col-md-4">
            <h4>Harga Transparan</h4>
            <p class="text-muted">
              Tanpa biaya tersembunyi. Semua tiket dan akomodasi sudah termasuk
              dalam paket.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Destination Section -->
    <section id="destinasi" class="section-padding">
      <div class="container">
        <h2 class="section-title text-center mb-5">Destinasi Favorit</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm">
              <img
                src="/images/5.webp"
                class="card-img-top card-img-custom"
                alt="Destinasi 1"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Kawah Ijen</h5>
                <p class="card-text">
                  Nikmati pendakian menantang untuk menyaksikan pesona Blue Fire
                  yang langka dan danau kawah asam berwarna toska.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm">
              <img
                src="/images/6.webp"
                class="card-img-top card-img-custom"
                alt="Destinasi 2"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Taman Nasional Baluran</h5>
                <p class="card-text">
                  Rasakan sensasi berada di savana Afrika dengan pemandangan
                  satwa liar yang berkeliaran bebas di alam terbuka.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm">
              <img
                src="/images/4.webp"
                class="card-img-top card-img-custom"
                alt="Destinasi 3"
              />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Pulau Merah</h5>
                <p class="card-text">
                  Bersantai di pantai berpasir bersih dengan pemandangan bawah
                  laut yang ikonik. Surganya para penyelam.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="section-padding bg-dark text-white text-center">
      <div class="container">
        <h2>Siap Memulai Petualangan?</h2>
        <p class="lead mt-3 mb-4">
          Hubungi tim kami sekarang untuk menyusun rencana perjalanan impian
          Anda.
        </p>
        <a href="https://wa.me/6281332945900" target="_blank">
          <button class="btn btn-primary btn-lg">
            Hubungi Kami via WhatsApp
          </button>
        </a>
      </div>
    </section>
  </body>
</html>