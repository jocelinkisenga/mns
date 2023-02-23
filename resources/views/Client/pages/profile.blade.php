<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
 href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('Client/assets/css/app.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Client/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('Client/assets/css/style.css')}}">
</head>

<body>
    @include('Client.navs.navbar')

    <div class="row r">
        <div class="class  col-md-12 col-sm-12 p-6 ">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title color-orange">Mes commandes</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0 ">


                  @if ($mesCommandes != null)
                  <div class="table-responsive ">
                    <table class="table m-0">
                        <thead>
                            <tr>
                           
                                <th>code</th>
                                <th>montant</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mesCommandes as $key => $item)
                                <tr>
                                  
                                    <td>jocelin kisenga</td>
                                    <td><span class="badge badge-success">{{ $item->amount }} $</span></td>
                                    <td>{{ $item->created_at }}</td>
                                    <td> <a href="{{ route('myOrders', ['id' => $item->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                  @else
                     <h3>aucune commande disponible pour le moment</h3>
                  @endif
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>

    @include('Client.navs.footer')
    <!-- jQuery -->
    <script src="{{ asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('Admin/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('Admin/dist/js/demo.js') }}"></script>
    <!-- PAGE Admin/plugins -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('Admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('Admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('Admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('Admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('Admin/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('Admin/dist/js/pages/dashboard2.js') }}"></script>
    <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
        <script  src="{{asset('Client/assets/js/app.js')}}"></script>
</body>

</html>
