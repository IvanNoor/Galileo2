<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/simple-sidebar.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link href="/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>

<body>
    <nav class="navbar navbar-default no-margin navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
              <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i>GALILEO</a>        
      </div><!-- navbar-header-->

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="" ><button class="navbar-toggle collapse in btn-xs" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
        </ul>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

            <li>
                <a href="{{ url('/pegawai') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Data Pegawai</a>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Akademik</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="{{ url('/siswa') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Siswa</a></li>
                    <li><a href="{{ url('/pelajaran') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Pelajaran</a></li>
                    <li><a href="{{ url('/raport') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Raport</a></li>
                    <li><a href="{{ url('/penilaian_siswa') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Penilaian</a></li>
                    <li><a href="{{ url('/bobot_soal') }}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Bobot Soal</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid xyz">
            <div class="row">
                <div class="col-lg-8">
                  @if(Session::has('message'))

                  <p class="alert alert-info">{{ Session::get('message') }}</p>
                  
                  <?php Session()->flush(); ?>
                  @endif
                  @yield('content')            
              </div>
          </div>
      </div>
  </div>

  <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<!-- jQuery -->

<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/sidebar_menu.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




</body>

</html>
