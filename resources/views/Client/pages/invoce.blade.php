@php
  use Darryldecode\Cart\Facades\CartFacade;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<section class="content" style="justify-content: center; margin-left:20%; margin-top:5%">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8 ">
          <div class="callout callout-info">
            <h5 class="text-success"><i class="fas fa-info"></i> Commande confirmée avec succès !!</h5>
             Nous avons envoyé la copie de facture à votre email <span><a href="{{route('home')}}" class="btn btn-primary text-white">rentrer à l'acceuil</a></span>
          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-8">
                <h4>
                  <i class="fas fa-globe"></i> MNS, Inc.
                  <small class="float-right">Date: 2/10/2014</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                From
                <address>
                  <strong>MDS, Inc.</strong><br>
                  Lubumbashi, kasavubu Ave, Suite 600<br>
                <b>  Phone:</b>  (804) 123-5432<br>
                <b>Email:</b>  info@almasaeedstudio.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                A
                <address>
                  <strong>{{$order->suname}} {{$order->nickname}}</strong><br>
                  {{$order->address}}<br>
                  <b>Phone:</b>  {{$order->phone}}<br>
                  <b>email:</b>  {{$order->email}}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>facture #007612</b><br>
                <br>
                <b>commande ID:</b> 4F3S8J<br>
                <b>Payé le :</b>{{$order->created_at}}<br>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Quantité</th>
                    <th>Produit</th>
                    <th>sous-total</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($commandes as $item)
                    <tr>
                      <td>{{$item->quantity}}</td>
                      <td>{{$item->product->name}}</td>
                      <td>{{$item->quantity * $item->price}}$</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">Methode de paiement:</p>
                <img src="{{asset('admin/dist/img/credit/visa.png')}}" alt="Visa">
                <img src="{{asset('admin/dist/img/credit/mastercard.png')}}" alt="Mastercard">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
        
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>{{$order->amount}} $</td>
                    </tr>
                    <tr>
                      <th>Tax (16 %%)</th>
                      <td>{{($order->amount / 100) * 16}} $</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>{{ $order->amount  +  (($order->amount / 100) * 16)}} $</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- PAGE Admin/plugins -->
<!-- jQuery Mapael -->
<script src="{{asset('Admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('Admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>