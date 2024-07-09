<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PT Bias Promosindo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="proyek/style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/bs-brain@2.0.3/components/testimonials/testimonial-3/assets/css/testimonial-3.css"
    />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
    <!-- icon -->
    <link
      rel="icon"
      href="proyek/img\logo\Bias Logo.png"
      type="image/x-icon"
    />
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body style="font-family: 'Poppins', sans-serif">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #32012f">
      <div class="container">
        <a class="navbar-brand text-white" href="#">
          <img
            src="proyek/img\logo\Bias Logo.png"
            alt="Logo"
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />
          Bias Promosindo.
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link fw-medium" aria-current="page" href="#"
              >Home</a
            >
            <a class="nav-link" href="{{route('dashb.about')}}">About Us</a>
            <a class="nav-link" href="{{route('dashb.form')}}">Order</a>
            <a class="nav-link" href="{{route('dashb.product')}}">Product</a>
            <a class="nav-link" href="{{route('dashb.gallery')}}">Gallery</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid text-left p-5">
      <div class="container" data-aos="fade-in">
        <h1 class="display-4 fw-semibold text-white my-text">
          Grow Your Business <br />
          with our Proven <br />
          Marketing Service
        </h1>
        <p class="lead text-white mt-2">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br />
          Iure est, voluptatum id nam porro nobis, minima <br />laudantium autem
          dicta ea similique maxime sunt ratione eaque.
        </p>
        <button type="button" class="btn btn-primary">Get Started</button>
      </div>
    </section>
    <!-- akhir jumbotron -->
    <!-- Product Utama -->
    <div class="container my-5" data-aos="fade-up" data-aos-duration="1500">
      <h4 class="text-center mb-2">APA YANG KAMI TAWARKAN</h4>
      <h2 class="text-center mb-3"><b>Produk Kami</b></h2>
      <P class="text-center mb-5">Kami menghasilkan produk advertising/reklame yang berkualitas serta memberikan pelayanan after sales yang mengutamakan kebutuhan konsumen. Berikut beberapa produk unggulan kami yang bisa Anda pilih.</P>
      <div class="row">
        <div class="col-12 m-auto">
          <div class="owl-carousel owl-theme">
            @foreach($produk as $item)
            <div class="item ms-4 me-4 mb-4">
              <div class="card border-0 shadow">
                <img
                  src="{{ asset('foto_produk/' . $item->foto) }}"
                  alt="Foto {{ $item->foto }}"
                  class="image card-img-top"
                  style="height: 180px; width: 100%;"
                />
                <div class="card-body">
                  <div class="card-title text-center">
                    <h4>{{ $item->judul }}</h4>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary">Selengkapnya</button>
      </div>
    </div>
    
    
    <!-- akhir product utama -->
    <!-- Services -->
    <div class="container services" data-aos="fade-up">
      <div class="row text-center mb-3">
        <div class="col">
          <h2><b>Layanan Kami</b></h2>
          <p>Kami menyediakan berbagai layanan yang dirancang untuk memenuhi kebutuhan dan harapan pelanggan kami. Dengan tim profesional dan berpengalaman, kami berkomitmen untuk memberikan solusi terbaik dan hasil yang memuaskan. Berikut adalah beberapa layanan unggulan yang dapat Anda manfaatkan.</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="\proyek\img\1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- akhir services-->
    <!-- awal testimonial -->

    <!-- Testimonial 3 - Bootstrap Brain Component -->
    <section class="py-5 py-xl-8">
      <div class="container" data-aos="fade-up">
        <div class="row mt-xl-5 mb-5">
          <div class="col text-center">
            <h2><b>TESTIMONI</b></h2>
            <p>Kami bangga dengan umpan balik positif yang kami terima dari pelanggan kami. Testimoni ini adalah bukti komitmen kami untuk memberikan produk dan layanan terbaik. Berikut beberapa testimoni dari pelanggan yang telah merasakan manfaat dari produk dan layanan kami.</p>
          </div>
        </div>
        <div class="row justify-content-md-center"></div>
      </div>

      <div class="container overflow-hidden" data-aos="fade-right">
        <div class="row gy-4 gy-md-0 gx-xxl-5">
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow mb-3">
              <div class="card-body p-4 p-xxl-5">
                <blockquote class="mb-3 fs-5 fw-semibold">
                  "Lorem ipsum dolor sit amet".
                </blockquote>
                <div class="d-flex align-items-center pt-4">
                  <img src="\proyek\img\2.jpg" alt="Profile Picture" class="rounded-circle me-3" width="50" height="50">
                  <div>
                    <h5 class="card-title fw-bold">Jane Doe</h5>
                    <span class="text-secondary">CEO, Example Company</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow mb-3">
              <div class="card-body p-4 p-xxl-5">
                <blockquote class="mb-3 fs-5 fw-semibold">
                  "Lorem ipsum dolor sit amet".
                </blockquote>
                <div class="d-flex align-items-center pt-4">
                  <img src="\proyek\img\2.jpg" alt="Profile Picture" class="rounded-circle me-3" width="50" height="50">
                  <div>
                    <h5 class="card-title fw-bold">Jane Doe</h5>
                    <span class="text-secondary">CEO, Example Company</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card border-0 shadow mb-3">
              <div class="card-body p-4 p-xxl-5">
                <blockquote class="mb-3 fs-5 fw-semibold">
                  "Lorem ipsum dolor sit amet".
                </blockquote>
                <div class="d-flex align-items-center pt-4">
                  <img src="\proyek\img\2.jpg" alt="Profile Picture" class="rounded-circle me-3" width="50" height="50">
                  <div>
                    <h5 class="card-title fw-bold">Jane Doe</h5>
                    <span class="text-secondary">CEO, Example Company</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- akhir testimonial -->
    <!-- Footer -->
    <footer
      class="text-white text-center text-lg-start"
      style="margin-top: 20%; background-color: #524c42"
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">PT. BIAS PROMOSINDO JAYA</h5>
            <p>
              Gejayan Soropadan ( Jembatan Merah ) Condong Catur XII / 80 A
              Yogyakarta <br />
              Phone 0274 - 564143 / 0274 - 564144 <br />
              bias.promosindo@gmail.com
            </p>

            <div class="">
              <!-- Facebook -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-facebook"></i
              ></a>
              <!-- LinkedIn -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-linkedin"></i
              ></a>
              <!-- Youtube -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-youtube"></i
              ></a>
              <!-- Instagram + -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- akhir footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
    ></script>
    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
