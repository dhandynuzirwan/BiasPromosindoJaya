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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="proyek/css/product.css" />
    <!-- icon -->
    <link
      rel="icon"
      href="proyek/img\logo\Bias Logo.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
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
            <a class="nav-link" aria-current="page" href="{{route('dashb.index')}}">Home</a>
            <a class="nav-link" href="{{route('dashb.about')}}">About Us</a>
            <a class="nav-link" href="{{route('dashb.form')}}">Order</a>
            <a class="nav-link active fw-medium" href="{{route('dashb.product')}}">Product</a>
            <a class="nav-link" href="{{route('dashb.gallery')}}">Gallery</a>
           
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- awal produk -->
    <div class="row text-center mt-xl-5 mb-3" style="width: 100%">
      <div class="col mt-5">
          <h2><b>Produk Kami</b></h2>
      </div>
  </div>
  <div class="container mt-5">
      @php
      $counter = 0;
      @endphp
      @foreach($produk as $produk)
      @if($counter < 6)
      <div class="row featurette">
          <div class="col-md-7">
              <h2 class="featurette-heading fw-semibold">{{ $produk->judul }}</h2>
              <p class="lead">{{ $produk->nama }}</p>
              <a type="button" class="btn btn-warning fw-medium shadow-lg" href="{{ route('dashb.form') }}">
                  PESAN SEKARANG
              </a>
          </div>
          <div class="col-md-5">
            <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width: 500px; height: 250px; overflow: hidden; border-radius: 10px;">
              <img src="{{ asset('foto_produk/' . $produk->foto) }}" alt="foto_produk" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
      </div>
      <hr class="featurette-divider" />
      @php
      $counter++;
      @endphp
      @endif
      @endforeach
  </div>
  
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
