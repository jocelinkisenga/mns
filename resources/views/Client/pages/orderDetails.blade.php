<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('client/assets/css/app.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
 
</head>
<body>
@include("Client.navs.navbar")


<div class="wrapper">
    <section class="content" style="justify-content: center;  margin-top:5%">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">

    
    @if ($order != null)
    <div class="invoice p-3 mb-3">
      <!-- title row -->
      <div class="row">
        <div class="col-md-12">
          <h4>
            <i class="fas fa-globe"></i> MNS, Inc.
            <small class="float-right">Date: {{$order->paid_at}}</small>
          </h4>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">

        <!-- /.col -->
        <div class="col-sm-4 col-md-4 mt-2 invoice-col">
          A
          <address>
            <strong>{{$order->suname}} {{$order->nickname}}</strong><br>
            {{$order->address}}<br>
            <b>Phone:</b>  {{$order->phone}}<br>
            <b>email:</b>  {{$order->email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-4  mt-12  invoice-col" >
          <b>facture #007612</b><br>
          <br>
          <b>commande ID:</b> {{$order->payment_id}}<br>
          <b>Payé le :</b>{{$order->created_at}}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive mt-4">
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
          <p class="lead"></p>

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
          <button type="button" class=" float-right">
          </button>
          <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" >
            <i class="fas fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </div>
    @endif
              <!-- Main content -->
         
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

@include("Client.navs.footer")
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- PAGE admin/plugins -->
<!-- jQuery Mapael -->
<script src="{{asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>