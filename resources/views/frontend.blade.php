<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Antony Purnamarasid August Ratulangi</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f6f8;
    }

    .banner {
      background: linear-gradient(rgba(13, 27, 42, 0.85), rgba(27, 38, 59, 0.85)),
                  url('https://www.its.ac.id/si/wp-content/uploads/sites/45/2019/08/20190719-gedung_home-2.jpg') no-repeat center center;
      background-size: cover;
      color: #fff;
      padding: 100px 0;
      text-align: left;
    }

    .banner h1 {
      font-weight: 700;
      font-size: 3rem;
      border-bottom: 4px solid #1b75d0;
      display: inline-block;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .banner p {
      font-size: 1.1rem;
      color: #e0e0e0;
      max-width: 600px;
    }

    .profile {
      margin-top: -60px;
      background: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

   .profile img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #1b75d0;
}

    .section-title {
      text-align: center;
      margin: 60px 0 30px;
    }

    .section-title h1 {
      font-weight: 700;
      font-size: 2.5rem;
      color: #0d1b2a;
    }

    .card-link {
      text-decoration: none;
    }

    .card-glass {
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
      border: none;
      color: #fff;
    }

    .card-glass:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .icon {
      font-size: 2.2rem;
      margin-bottom: 15px;
    }

    .title {
      font-size: 1.3rem;
      font-weight: 600;
    }

    .desc {
      font-size: 0.95rem;
    }

  .pertemuan7-btn-light {
    background-color: rgba(255, 255, 255, 0.85);
    color: #b93a56;
    border: none;
    transition: background-color 0.3s ease;
  }

  .pertemuan7-btn-light:hover {
    background-color: #ffd6dd;
    color: #8a2940;
  }

  .pertemuan7-btn-info {
    background-color: #ef476f;
    color: white;
    border: none;
    transition: background-color 0.3s ease;
  }

  .pertemuan7-btn-info:hover {
    background-color: #ff758f;
    color: white;
  }

.bg-1 { background: linear-gradient(135deg, #3a86ff, #89cff0); }
.bg-2 { background: linear-gradient(135deg, #8338ec, #a084f7); }
.bg-3 { background: linear-gradient(135deg, #ffbe0b, #ffd60a); }
.bg-4 { background: linear-gradient(135deg, #06d6a0, #1dd3b0); }
.bg-5 { background: linear-gradient(135deg, #ef476f, #ff758f); }
.bg-6 { background: linear-gradient(135deg, #118ab2, #4fb3bf); }
.bg-7 { background: linear-gradient(135deg, #073b4c, #2a6f97); }
.bg-8 { background: linear-gradient(135deg, #ffb703, #fb8500); }
.bg-9 { background: linear-gradient(135deg, #6c757d, #adb5bd); }

  </style>
</head>
<body>

  <!-- Banner -->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><i class="fa-solid fa-user-graduate me-2"></i></h1>
          <p class="mb-1"></p>
          <p>Selamat datang di portofolio tugas Pemrograman Web. Halaman ini berisi kumpulan tugas saya selama satu semester.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Profile -->
  <section class="container profile">
    <img src="{{ asset('src/img/profilA.jpg') }}" alt="Foto Profil" />
    <h4>Antony Purnamarasid August Ratulangi</h4>
    <p>5026231190 | Mahasiswa Sistem Informasi ITS</p>
  </section>

  <!-- Konten Tugas -->
  <div class="container">
    <div class="section-title">
      <h1><i class="fa-solid fa-book-open-reader me-2"></i>Link Tugas Kuliah</h1>
    </div>

    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <a href="satu" class="card-link">
          <div class="card card-glass bg-1 p-4 text-center text-white">
            <i class="fa-solid fa-code icon"></i>
            <h3 class="title">Pertemuan 1</h3>
            <p class="desc">HTML</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="pertemuan2" class="card-link">
          <div class="card card-glass bg-2 p-4 text-center text-white">
            <i class="fa-brands fa-bootstrap icon"></i>
            <h3 class="title">Pertemuan 2</h3>
            <p class="desc">CSS</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="pertemuan3" class="card-link">
          <div class="card card-glass bg-3 p-4 text-center text-white">
            <i class="fa-brands fa-bootstrap icon"></i>
            <h3 class="title">Pertemuan 3</h3>
            <p class="desc">Bootsrap Intro</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="pertemuan4" class="card-link">
          <div class="card card-glass bg-4 p-4 text-center text-white">
            <i class="fa-solid fa-tree icon"></i>
            <h3 class="title">Layouting</h3>
            <p class="desc">Tugas Membuat Layout sesuai pembagian template</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="pertemuan6" class="card-link">
          <div class="card card-glass bg-7 p-4 text-center text-white">
            <i class="fa-solid fa-window-maximize icon"></i>
            <h3 class="title">Tugas Linktree</h3>
            <p class="desc">Tugas : Clone Linktree</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-glass bg-5 text-white p-4 text-center">
            <i class="fa-brands fa-js icon"></i>
            <h5 class="fw-bold">JavaScript</h5>
            <p class="mb-1">Membuat Form</p>
            <div class="d-flex justify-content-center gap-2 mt-3">
            <a href="pertemuan7.1" class="btn btn-sm pertemuan7-btn-light">Math Operation</a>
            <a href="pertemuan7.2" class="btn btn-sm pertemuan7-btn-info">Form Validation</a>
            </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="pertemuan8" class="card-link">
          <div class="card card-glass bg-8 p-4 text-center text-white">
            <i class="fa-brands fa-laravel icon"></i>
            <h3 class="title">Bootsrap Template (Danantara)</h3>
            <p class="desc">Persiapan ETS</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="ets" class="card-link">
          <div class="card card-glass bg-9 p-4 text-center text-white">
            <i class="fa-brands fa-laravel icon"></i>
            <h3 class="title">ETS</h3>
            <p class="desc">Makeover Website Berdasarkan Pembagian Template</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6">
        <a href="welcome" class="card-link">
          <div class="card card-glass bg-6 p-4 text-center text-white">
            <i class="fa-brands fa-laravel icon"></i>
            <h3 class="title">Welcome</h3>
            <p class="desc">Laravel blog project</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
