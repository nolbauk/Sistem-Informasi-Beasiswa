<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Calon Penerima Beasiswa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('style/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('style/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('style/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="./">Beasiswa</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Calon Penerima</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('calonindex')}}">Calon Penerima Beasiswa</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('prestasiindex')}}">Prestasi</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{route('hasilindex')}}">Hasil Perangkingan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        
        <div class="breadcrumbs">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body"><br>
                    <form class="row g-3" action="{{ route('calonedit', $data->id) }}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="nama_calon" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_calon" name="nama_calon" value="{{ $data->nama_calon}}">
                    </div>
                    <div class="col-12">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $data->tempat_lahir}}">
                    </div>
                    <div class="col-12">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir}}">
                    </div>
                    <div class="col-12">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                            <option value=""></option>    
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat}}">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $data->email}}">
                    </div>
                    <div class="col-12">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{ $data->agama}}">
                    </div>
                    <div class="col-12">
                        <label for="penghasilan" class="form-label">Penghasilan</label>
                        <input type="number" class="form-control" id="penghasilan" name="penghasilan" value="{{ $data->penghasilan}}"> 
                    </div>
                    <div class="col-12">
                        <label for="nilai_tes" class="form-label">Nilai</label>
                        <input type="number" class="form-control" id="nilai_tes" name="nilai_tes" value="{{ $data->nilai_tes}}">
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary float-left">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('style/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('style/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('style/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


    <script src="{{asset('style/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('style/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('style/assets/js/widgets.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('style/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
