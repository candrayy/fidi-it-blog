<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin - Ubah Postingan</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/admin/img/brand/icon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/argon.css?v=1.2.0') }}" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
  </head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand">
          <img src="{{ asset('assets/admin/img/brand/fidi.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('postingan') }}">
                <i class="ni ni-send text-orange"></i>
                <span class="nav-link-text">Postingan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('kategori') }}">
                <i class="ni ni-books text-primary"></i>
                <span class="nav-link-text">Kategori</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('postingan') }}">
                <i class="ni ni-tag text-yellow"></i>
                <span class="nav-link-text">Penanda</span>
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/admin/img/theme/team-4.jpg') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Melisa</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    
    <!-- Page content -->
    <div class="card-body">
        <h1 class="mb-4">Ubah Data Postingan</h1>
        <form action="{{ route('ubah-postingan',$dtPost->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <label for="gambar" class="form-label">Gambar Post</label>
            <div class="custom-file mb-3">
                <label for="gambar" class="custom-file-label">Gambar Post</label>
                <input type="file" id="gambar" name="gambar" class="custom-file-input" lang="en" required>
            </div>
                <img src="{{ asset('images/'.$dtPost->gambar ) }}" width="95px" height="80px" alt="img">
            <div class="form-group mt-3">
                <label for="judul" class="form-label">Judul Post</label>
                <input type="text" id="judul" name="judul" value="{{$dtPost->judul}}" class="form-control" placeholder="Masukan Judul Post" required>
            </div>
            <div class="form-group">
                <label for="penulis" class="form-label">Penulis Post</label>
                <input type="text" id="penulis" name="penulis" value="{{$dtPost->penulis}}" class="form-control" placeholder="Masukan Penulis Post" required>
            </div>
            <div class="form-group">
                <label for="created_add" class="form-label">Dibuat Tanggal</label>
                <input type="date" id="created_add" name="created_add" value="{{$dtPost->created_add}}" class="form-control" min="1990-01-01" max="2050-01-01" placeholder="dd-mm-yyyy" required>
            </div>
            <div class="form-group">
                <label for="isi" class="form-label">Isi Post</label>
                <textarea type="text" id="isi" name="isi" class="form-control" placeholder="Masukan Isi Post" required>{{$dtPost->isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-control" name="kategori_id" id="kategori_id">
                    <option value="{{ $dtPost->kategori_id }}">{{ $dtPost->kategori->kategori }}</option>
                    @foreach($ktgr as $item)
                    <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group">
            <label for="select2Multiple">Penanda</label>
              <select class="select2-multiple form-control" name="penanda[]" multiple="multiple"
                id="select2Multiple">
                      @foreach ($dtPost->penanda as $tag)
                      <option selected value="{{ $tag->id }}">{{ $tag->penanda }}</option>
                      @endforeach
                      @foreach ($pend as $tags)
                      <option value="{{ $tags->id }}">{{ $tags->penanda }}</option>
                      @endforeach
                  </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-submit">Ubah</button>
            </div>
        </form>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/admin/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/admin/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/admin/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/admin/js/argon.js?v=1.2.0') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

    </script>
    <script>
        CKEDITOR.replace( 'isi' );
    </script>
</body>

</html>