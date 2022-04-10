<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Digital Creative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="{{ asset('assets/blog/img/icon.png') }}" rel="icon">
  <link href="{{ asset('assets/blog/img/icon.png') }}" rel="img">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/blog/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/blog/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/blog/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/blog/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/blog/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/blog/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('beranda') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/blog/img/icon.png') }}" alt="">
        <span>Fidi IT Kreatif</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('beranda') }}">Home</a></li>
          <li class="dropdown active"><a href="{{ route('it-development') }}"><span>IT Development</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('programming') }}}">Programming</a></li>
              <li><a href="{{ route('systems-analyst') }}">Systems Analyst</a></li>
              <li><a href="{{ route('business-analyst') }}">Business Analyst</a></li>
              <li><a href="{{ route('quality-assurance') }}">QA (Quality Assurance)</a></li>
              <li><a href="{{ route('management-project') }}">Management Project</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{ route('digital-marketing') }}"><span>Digital Marketing</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('audit-social-media-marketing') }}">Audit Social Media Marketing</a></li>
              <li><a href="{{ route('strategic-digital-marketing-plan-content') }}">Strategic Digital Marketing Plan Content</a></li>
              <li><a href="{{ route('audit-content-marketing') }}">Audit Content Marketing</a></li>
              <li><a href="{{ route('strategic-digital-marketing-distribution-content') }}">Strategic Digital Marketing Distribution Content</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{ route('digital-creative') }}"><span>Digital Creative</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('ui-ux') }}">UI/UX</a></li>
              <li><a href="{{ route('video-creator') }}">Video Creator</a></li>
              <li><a href="{{ route('content-creator') }}">Content Creator</a></li>
              <li><a href="{{ route('design-graphic') }}">Design Graphic</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <!-- <div class="container">

        <ol>
          <li><a href="blog.html">Home</a></li>
         

      </div> -->
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          @foreach($postingan as $pst)
            <article class="entry">
              <div class="entry-img">
                <img src="{{ asset('images/'.$pst->gambar) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{ $pst->judul }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>{{ $pst->penulis }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="2020-01-01">{{ $pst->created_add }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a>{{ $pst->kategori->kategori }}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {!! Str::limit($pst->isi, 250) !!}
                </p>
                <div class="read-more">
                  <a href="{{ url('detail', $pst->slug) }}">Baca Selengkapnya</a>
                </div>
              </div>
            </article>
            @endforeach
            <!-- End blog entry -->

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->
            {{ $postingan->links() }}

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach ($kategori as $item)
                  <li><a href="#">{{ $item->kategori }}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                @foreach($post as $posting)
                <div class="post-item clearfix">
                  <img src="{{ asset('images/'.$posting->gambar ) }}" alt="">
                  <h4><a href="{{ url('detail', $posting->slug) }}">{{ $posting->judul }}</a></h4>
                  <time datetime="2020-01-01">{{ $posting->created_add }}</time>
                </div>
                @endforeach

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  @foreach ($penanda as $item)
                  <li><a href="#">{{ $item->penanda }}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fidi IT Kreatif</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
          <a href="http://www.instagram.com/fidiitkreatif"><i class="fab fa-instagram-square fa-2x"></i></a>
          <a href="https://www.facebook.com/pages/category/Information-Technology-Company/Fidi-Inovasi-Teknologi-Kreatif-102015534556970/"><i class="fab fa-facebook-square fa-2x"></i></a>
          <a href="https://id.linkedin.com/in/pt-fidi-it-kreatif-8b6a91195"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/blog/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/blog/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/blog/js/main.js') }}"></script>

</body>

</html>