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
    <title>Beasiswa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="style/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="style/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="style/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="style/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="style/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="./">Beasiswa</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data</h3>
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
                    <div class="header-left">
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="style/vendors/jquery/dist/jquery.min.js"></script>
    <script src="style/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="style/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="style/assets/js/main.js"></script>


    <script src="style/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="style/assets/js/dashboard.js"></script>
    <script src="style/assets/js/widgets.js"></script>
    <script src="style/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="style/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
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
