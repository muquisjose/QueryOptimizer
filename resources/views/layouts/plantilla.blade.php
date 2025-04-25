<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">
   <!-- Select2 -->
   <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AppNet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('permissions.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Permissions
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Roles
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('agencias.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Agencias
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('bitacoras.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bitacoras
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('colores.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Colores
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('cultivadores.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cultivadores
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('empresas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Empresas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('bodegas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bodegas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('estados.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Estados
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('fincas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Fincas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('flores.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Flores
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('laereas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Lineas aereas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('largos.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Largos
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('longitudes.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Longitudes
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('motcreditos.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Motivo de creditos
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('paises.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Paises
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('proveedores.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Proveedores
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tipocajas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tipo de cajas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('clientes.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Clientes
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('precios.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Precios
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('preparas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Prepara
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('bunches.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bunche
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('prepackings.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Prepacking
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024-2024 <a href="">AppNet</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- Page specific script -->
<script>
  $(function () {
    $('.dtbSystem').DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo(
      '#dtbPermisos_wrapper .col-md-6:eq(0),#dtbBitacoras_wrapper .col-md-6:eq(0)'
    );
    $('.alert').fadeOut(5000)
    $('.select2').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
  });
  
  $(".nav li").click(function() {
    $(".nav li").removeClass('active');
    $(this).addClass('active');    
  });

  $('#cod_varie').change(function(e) {
    $.ajax({
        url: "{{ URL::route('bunches.getLargo') }}",
        type: 'POST',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $(this).val(),
        },
        success: function(data) {
          $('#largo').empty();
          $('#largo').append('<option value="">Seleccione...</option>');
          $(data[0]).each(function(i, v){ // indice, valor
            $('#largo').append('<option value="' + v.id + '">' + v.largo + '</option>');
          });
        },
      });
   });

   $('#cliente').change(function(e) {
    $.ajax({
        url: "{{ URL::route('prepackings.getCliente') }}",
        type: 'POST',
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre': $(this).val(),
        },
        success: function(data) {
          $('#cod_client').empty();
          $('#cod_client').append('<option value="">Seleccione...</option>');
          $(data[0]).each(function(i, v){ // indice, valor
            $('#cod_client').append('<option value="' + v.id + '">' + v.nombre + '</option>');
          });
        },
      });
   });

  $('#dia').change(function(e) {
    if ($('#bodega').val() == '') {
      $('#bodega').prop('required',true);
      $('#bodega').required = true;
    }
    let dias = document.getElementById('dia').selectedOptions;
    $('thead tr').empty();
    $('thead tr').append('<th>Variedad</th><th>Longitud</th><th>Disponible</th><th>Reserva</th>');
    for(let i = 0;  i < dias.length; i++){
      $('thead tr').append('<th>Dia '+dias[i].value+'</th>');
    }
  });

  $('#btnDispo').on( "click", function() {
    $.ajax({
        url: "{{ URL::route('prepackings.getDisponibilidad') }}",
        type: 'POST',
        data: {
            '_token': $('input[name=_token]').val(),
            'bodega': $("#bodega").val(),
            'empaque': $("#empaque").val(),
            'botones': $("#botones").val(),
            'dia': $("#dia").val(),
        },
        success: function(data) {
          $('tbody tr').empty();
          $(data[0]).each(function(i, v){ // indice, valor
            var variedad = v.variedad;
            $('.dispo').append('<tr><td>'+v.variedad+'</td><td>'+v.tallos+'</td><td>0  <button type="button" id="btnVariedad" onclick="dispo('+v.id+')" name="btnVariedad" class="btn btn-success btn-sm float-right"><i class="fas fa-search"></i></button></td></tr>');
          });
        },
      });
  } );

  function dispo(id){
    $.ajax({
        url: "{{ URL::route('prepackings.getVariedad') }}",
        type: 'POST',
        data: {
            '_token': $('input[name=_token]').val(),
            'bodega': $("#bodega").val(),
            'empaque': $("#empaque").val(),
            'botones': $("#botones").val(),
            'dia': $("#dia").val(),
            'id' : id,
        },
        success: function(data) {
          $('#dispo tbody').empty();
          for (let index = 0; index < data.length; index++) {
            $(data[index]).each(function(i, v){
              var dispo = parseInt(v.cero)+parseInt(v.uno)+parseInt(v.dos)+parseInt(v.tres)+parseInt(v.cuatro)+parseInt(v.cinco);
              $('#dispo').append('<tr><td>'+v.variedad+'</td><td>'+v.largo+'</td><td>'+dispo+'</td><td style="width: 150px;"><input type="number" id="reserva" name="reserva" data-variedad="'+v.variedad+'" data-largo="'+v.largo+'" min="1" class="form-control form-control-sm" onchange="crearPacking()" style="width: 150px;"></td><td>'+v.cero+'</td><td>'+v.uno+'</td><td>'+v.dos+'</td><td>'+v.tres+'</td><td>'+v.cuatro+'</td><td>'+v.cinco+'</td></tr>');
            });
          }
        },
      });
  };

  function crearPacking(){
    const element = document.getElementById("reserva").value;
    const variedad = document.getElementById("reserva");
    $.ajax({
        url: "{{ URL::route('prepackings.store') }}",
        type: 'POST',
        data: {
            '_token': $('input[name=_token]').val(),
            'bodega': $("#bodega").val(),
            'empaque': $("#empaque").val(),
            'botones': $("#botones").val(),
            'reserva': $("#reserva").val(),
            'fecha': $("#fecha").val(),
            'largo': $("#largo").val(),
            'cod_client': $("#cod_client").val(),
            'marca': $("#marca").val(),
            'tipo': $("#tipo").val(),
            'desde': $("#desde").val(),
            'hasta': $("#hasta").val(),
            'variedad': variedad.getAttribute("data-variedad"),
            'largo': variedad.getAttribute("data-largo"),
            'dia': $("#dia").val(),
        },
        success: function(data) {
          $(data[0]).each(function(i, v){ // indice, valor
            dispo(v.id);
          });
          $(data[1]).each(function(i, v){ // indice, valor
            $('#carga').append('<tr><td>'+v.marca+'</td><td>'+v.tipo_precio+'</td><td>'+v.tipo_venta+'</td><td>'+v.tipo_caja+'</td><td>'+v.variedad+'</td><td>'+v.longitud+'</td></tr>');
          });
        },
      });
  };
  
  //var stepper = new Stepper($('.bs-stepper')[0]);
</script>
</body>
</html>
