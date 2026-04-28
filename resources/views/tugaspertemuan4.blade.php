<!doctype html>
<html lang="en">
  <head>
    <title>Tugas Pertemuan 4</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Design and build your own landing pages with ease using our powerful tools."
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
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
        background-color: #fff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      .feature-desc {
        font-size: 0.78rem;
        color: #6c757d;
        line-height: 1.6;
        margin: 0;
      }

      #feature {
        background-color: #fff;
        overflow: hidden;
      }

      #feature .section-heading {
        font-size: 2rem;
        font-weight: 700;
        color: #1a1a2e;
        line-height: 1.3;
        margin-bottom: 20px;
      }

      #feature .section-desc {
        color: #5a6acf;
        font-size: 0.8rem;
        line-height: 1.7;
        margin-bottom: 10px;
      }

      .feature-item {
        display: flex;
        flex-direction: column;
        margin-bottom: 28px;
      }

      .feature-icon {
        width: 28px;
        height: 28px;
        margin-bottom: 10px;
        opacity: 0.85;
        filter: drop-shadow(0px 4px 6px rgba(90, 106, 207, 0.35));
      }

      .feature-item h6 {
        font-weight: 700;
        font-size: 0.95rem;
        color: #1a1a2e;
        margin-bottom: 6px;
      }

      .feature-item p {
        font-size: 0.78rem;
        color: #6c757d;
        line-height: 1.6;
        margin: 0;
      }

      .phone-wrapper {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100%;
      }

      .phone-wrapper img {
        max-height: 580px;
        width: auto;
        object-fit: contain;
      }

      @media (max-width: 767px) {
        #feature .section-heading {
          font-size: 1.6rem;
        }

        .phone-wrapper {
          justify-content: center;
          margin-top: 40px;
        }

        .phone-wrapper img {
          max-height: 400px;
        }
      }
    </style>
  </head>

  <body>
    <section id="feature">
      <div class="container">
        <div class="row align-items-end">
          <!-- Left Column -->
          <div class="col-lg-6 col-md-12">
            <h2 class="section-heading">
              Design &amp; Build Your Own<br />Landing Pages
            </h2>

            <p class="section-desc w-75">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
              commodo ligula eget dolor. Aenean massa. Cum sociis natoque
              penatibus et magnis dis parturient montes, nascetur ridiculus
            </p>
            <p class="section-desc w-75 mb-4">
              mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
              quis, sem. Nulla consequat massa quis enim.
            </p>

            <!-- 2x2 grid -->
            <div class="row">
              <div class="col-6">
                <div class="feature-item">
                  <img
                    src="https://img.icons8.com/ios/44/5a6acf/picture.png"
                    alt="Feature Icon"
                    class="feature-icon"
                  />
                  <h6>Title Goes Here</h6>
                  <p class="feature-desc">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor.
                  </p>
                </div>
              </div>

              <div class="col-6">
                <div class="feature-item">
                  <img
                    src="https://img.icons8.com/ios/44/5a6acf/picture.png"
                    alt="Feature Icon"
                    class="feature-icon"
                  />
                  <h6>Title Goes Here</h6>
                  <p class="feature-desc">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor.
                  </p>
                </div>
              </div>

              <div class="col-6">
                <div class="feature-item">
                  <img
                    src="https://img.icons8.com/ios/44/5a6acf/picture.png"
                    alt="Feature Icon"
                    class="feature-icon"
                  />
                  <h6>Title Goes Here</h6>
                  <p class="feature-desc">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor.
                  </p>
                </div>
              </div>

              <div class="col-6">
                <div class="feature-item">
                  <img
                    src="https://img.icons8.com/ios/44/5a6acf/picture.png"
                    alt="Feature Icon"
                    class="feature-icon"
                  />
                  <h6>Title Goes Here</h6>
                  <p class="feature-desc">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column-->
          <div class="col-lg-6 col-md-12">
            <div class="phone-wrapper">
              <img src="images/Vert.png" alt="App preview on mobile device" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>