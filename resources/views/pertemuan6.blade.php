<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>5026241115 | Linktree</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <script>
      function showme() {
        // alert("Halo Selamat Siang");
        Swal.fire({
          title: "Hallo!",
          text: "Selamat Siang!",
          icon: "success",
        });
        console.log("Ini baris 18, sudah sampai disini");
        a = 18 + 10;
        console.log("Hasil penjumlahaan : " + a);
        c = 1 * 2 * 3;
        console.log("Hasil Perkalian : " + c);
      }
      function changeText() {
        const element = document.getElementById("intro");
        element.innerHTML = "Sistem Informasi ITS";
        // document.getElementById("intro").element.innerHTML = "Sistem Informasi ITS";
      }
      function changeStyle() {
        const element = document.getElementById("tombol");
        element.style.color = "red";
        element.style.background = "yellow";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      body {
        font-family: "Crimson Text", monospace;
        background: #a8a39b;
        min-height: 100vh;
      }

      .c-wrapper {
        max-width: 35rem;
        margin: 0 auto;
        padding: 2rem 1rem 0rem;
      }

      .c-card {
        background: #eee8dc;
        border-radius: 1.5rem 1.5rem 0 0;
        overflow: hidden;
      }

      .c-topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.85rem 1rem 0.5rem;
      }

      .c-topbar-btn {
        background: rgba(255, 255, 255, 0.6);
        border: none;
        border-radius: 50%;
        width: 2rem;
        height: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 0.95rem;
        color: #1a1a1a;
        text-decoration: none;
      }

      .c-avatar {
        width: 5.5rem;
        height: 5.5rem;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto;
      }

      .c-title {
        font-size: 1.25rem;
        color: #1a0101;
        font-weight: 700;
        text-align: center;
        margin-top: 0.75rem;
      }

      .c-subtitle {
        font-size: 0.8rem;
        text-align: center;
        color: #1f0707;
        padding-left: 3.5rem;
        padding-right: 3.5rem;
      }

      @media (max-width: 576px) {
        .c-wrapper {
          margin: 0;
          padding: 0;
        }
        .c-card {
          border-radius: 0 0 0 0;
        }
        .c-subtitle {
          font-size: 0.8rem;
          text-align: center;
          color: #1f0707;
          padding-left: 0rem;
          padding-right: 0rem;
        }
      }

      .c-socials {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 0.75rem 0 1.5rem;
      }

      .c-socials a {
        color: #1a1a1a;
        font-size: 1.4rem;
        text-decoration: none;
      }
      .c-icon {
        color: #1a0101;
      }

      .c-link {
        display: flex;
        align-items: center;
        background: #f6f3eb;
        /* border: 0.08rem solid rgba(0, 0, 0, 0.15); */
        border-radius: 2rem;
        text-decoration: none;
        color: #1a1a1a;
        padding: 0.65rem 0.9rem;
        margin-bottom: 0.6rem;
        min-height: 3.75rem;
        transition: filter 0.15s;
      }

      .c-link:hover {
        filter: brightness(0.9);
        color: #1a1a1a;
      }

      .c-link-body {
        flex: 1;
        min-width: 0;
        color: #1a0101;
        text-align: center;
        font-size: 0.78rem;
        font-weight: 600;
        word-break: break-word;
        padding: 0 0.3rem;
      }

      .c-link-sub {
        font-size: 0.62rem;
        font-weight: 400;
        color: #555;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .c-link-dots {
        color: #999;
        margin-left: 0.25rem;
      }

      .c-join-btn {
        display: block;
        max-width: 18rem;
        margin: 2rem auto 0.5rem;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border-radius: 10rem;
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        font-size: 1rem;
        font-weight: 800;
        color: #1a1a1a;
        padding: 0.65rem 1.25rem;
        text-align: center;
        text-decoration: none;
      }

      .c-footer {
        text-align: center;
        font-size: 0.65rem;
        color: #555;
        padding-bottom: 2rem;
      }

      .c-footer a {
        color: #555;
        text-decoration: none;
        margin: 0 0.3rem;
        font-weight: 400;
        font-family:
          "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }
    </style>
  </head>

  <body>
    <div class="c-wrapper">
      <div class="c-card">
        <div class="c-topbar">
          <button class="c-topbar-btn" aria-label="Linktree">
            <i class="bi bi-star-fill"></i>
          </button>
          <button class="c-topbar-btn" aria-label="Share">
            <i class="bi bi-box-arrow-up"></i>
          </button>
        </div>

        <div class="px-3">
          <img
            class="c-avatar"
            src="images/kai.webp"
            alt="KAI 121"
          />
          <div id="intro" class="c-title">KAI 121</div>
          <div class="c-subtitle">
            Layanan Pelanggan KAI. Call Center: 121. E-Mail: cs@kai.id Mohon
            waspadai scam/penipuan dari akun media sosial atau WhatsApp yang
            mengatasnamakan KAI.
          </div>

          <div class="c-socials">
            <a
              href="https://www.instagram.com/kai121_"
              target="_blank"
              rel="noopener"
              aria-label="Instagram"
            >
              <i class="bi bi-instagram c-icon"></i>
            </a>
            <a
              href="https://www.tiktok.com/@kai121_"
              target="_blank"
              rel="noopener"
              aria-label="Tiktok"
            >
              <i class="bi bi-tiktok c-icon"></i>
            </a>
            <a
              href="https://api.whatsapp.com/send?phone=6281112111121"
              target="_blank"
              rel="noopener"
              aria-label="Whatsapp"
            >
              <i class="bi bi-whatsapp c-icon"></i>
            </a>
            <a
              href="https://x.com/kai121"
              target="_blank"
              rel="noopener"
              aria-label="X"
            >
              <i class="bi bi-twitter-x c-icon"></i>
            </a>
            <a
              href="https://www.facebook.com/www.facebook.com/CCKAI121"
              target="_blank"
              rel="noopener"
              aria-label="Facebook"
            >
              <i class="bi bi-facebook c-icon"></i>
            </a>
            <a
              href="https://www.threads.com/@kai121_"
              target="_blank"
              rel="noopener"
              aria-label="Threads"
            >
              <i class="bi bi-threads c-icon"></i>
            </a>
          </div>

          <a
            id="tombol"
            href="https://api.whatsapp.com/send/?phone=6281122233121&text&type=phone_number&app_absent=0"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">
              Kontak WhatsApp Resmi Contact Center 121
            </div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://drive.google.com/drive/folders/1qRITfvvNkpJhWT7nmXNfsC3YXh7K6MgD?usp=drive_link"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">
              Tata Cara Pengajuan Kereta Luar Biasa (KLB) & Angkutan Rombongan
            </div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://booking.kai.id/"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">
              Website Resmi Pemesanan Tiket Kereta Api
            </div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="http://e-recruitment.kai.id/"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Website Resmi Rekrutmen PT KAI</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://www.kai.id/"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Website Resmi PT KAI</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://apps.apple.com/id/app/access-by-kai/id901804734"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Download Aplikasi Access by KAI (iOS)</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://play.google.com/store/apps/details?id=com.kai.kaiticketing&fbclid=PAZXh0bgNhZW0CMTEAAacDCSXWIJFjtl26aCeQkqkVlVK9zWy5mFGsKUqZ-UjRP0WRDhM0Kefz3T2i8A_aem_Sauu5YdisR1YwfIs_NVVVg&pli=1"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">
              Download Aplikasi Access by KAI (Android)
            </div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://www.instagram.com/kai121_"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Official Instagram KAI 121</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://www.tiktok.com/@kai121_"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Official Tiktok KAI 121</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://x.com/kai121"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Official X (Twitter) KAI 121</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://www.facebook.com/www.facebook.com/CCKAI121"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Official Facebook KAI 121</div>
            <span class="c-link-dots">⋮</span>
          </a>
          <a
            href="https://www.threads.com/@kai121_"
            class="c-link"
            target="_blank"
            rel="noopener"
          >
            <div class="c-link-body">Official Threads KAI 121</div>
            <span class="c-link-dots">⋮</span>
          </a>

          <button class="btn btn-primary" onclick="showme()">Show Me</button>
          <button class="btn btn-primary" onclick="changeText()">
            Change Text
          </button>
          <button class="btn btn-primary" onclick="changeStyle()">
            Change Style
          </button>
          <a
            href="https://linktr.ee"
            class="c-join-btn"
            target="_blank"
            rel="noopener"
            >Join officialkai121 on Linktree</a
          >
          <div class="c-footer">
            <a href="#">Cookie Preferences</a> · <a href="#">Report</a> ·
            <a href="#">Privacy</a> · <a href="#">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<!-- id miliknya javascript -->
<!-- function dan void beda tipis -->