@php
    use Darryldecode\Cart\Facades\CartFacade;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <section class="content" style="justify-content: center; margin-left:20%; margin-top:5%">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 ">
                        <div class="callout callout-info">
                            <h5 class="text-success"><i class="fas fa-info"></i> Commande confirmée avec succès !!</h5>
                            Nous avons envoyé la copie de facture à votre email <span><a href="{{ route('home') }}"
                                    class="btn btn-primary text-white">rentrer à l'acceuil</a></span>
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                          <div class="html-content">
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
                                        <b> Phone:</b> (804) 123-5432<br>
                                        <b>Email:</b> info@almasaeedstudio.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    A
                                    <address>
                                        <strong>{{ $order->suname }} {{ $order->nickname }}</strong><br>
                                        {{ $order->address }}<br>
                                        <b>Phone:</b> {{ $order->phone }}<br>
                                        <b>email:</b> {{ $order->email }}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>facture #007612</b><br>
                                    <br>
                                    <b>commande ID:</b> 4F3S8J<br>
                                    <b>Payé le :</b>{{ $order->created_at }}<br>
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
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->product->name }}</td>
                                                    <td>{{ $item->quantity * $item->price }}$</td>
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
                                    <img src="{{ asset('admin/dist/img/credit/visa.png') }}" alt="Visa">
                                    <img src="{{ asset('admin/dist/img/credit/mastercard.png') }}" alt="Mastercard">

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
                                                <td>{{ $order->amount }} $</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (16 %%)</th>
                                                <td>{{ ($order->amount / 100) * 16 }} $</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>{{ $order->amount + ($order->amount / 100) * 16 }} $</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                          </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <button  onclick="myPrintFunction()"   class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                                    <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" onclick="CreatePDFfromHTML()" class="btn btn-primary float-right"
                                        style="margin-right: 5px;">
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
        <!-- jQuery -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script> 
        <!-- Bootstrap -->

        <!-- overlayScrollbars -->

        <!-- PAGE admin/plugins -->
        <!-- jQuery Mapael -->
        <script src="{{ asset('Client/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('Client/assets/js/printThis.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
        <!-- ChartJS -->



        <!-- AdminLTE for demo purposes -->

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

        <script>
            //nav bar function

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



            //Create PDf from HTML...
            function CreatePDFfromHTML() {
                var HTML_Width = $(".html-content").width();
                var HTML_Height = $(".html-content").height();
                var top_left_margin = 15;
                var PDF_Width = HTML_Width + (top_left_margin * 2);
                var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
                var canvas_image_width = HTML_Width;
                var canvas_image_height = HTML_Height;

                var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

                html2canvas($(".html-content")[0]).then(function(canvas) {
                    var imgData = canvas.toDataURL("image/jpeg", 1.0);
                    var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width,
                        canvas_image_height);
                    for (var i = 1; i <= totalPDFPages; i++) {
                        pdf.addPage(PDF_Width, PDF_Height);
                        pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4),
                            canvas_image_width, canvas_image_height);
                    }
                    pdf.save("mafacture.pdf");
                    $(".html-content").hide();
                });
            }

            // print facture 
            function myPrintFunction() {
                var printable = document.getElementById('.html-content');
                $('.html-content').printThis({
                    // debug: false, // show the iframe for debugging
                    // importCSS: false, // import parent page css
                    // importStyle: true, // import style tags
                    // printContainer: true, // print outer container/$.selector
                    // loadCSS: "admin/dist/css/adminlte.min.css", // path to additional css file - use an array [] for multiple
                    pageTitle: "ma facture", // add title to print page
                    // removeInline: false, // remove inline styles from print elements
                    // removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
                    // printDelay: 333, // variable print delay
                    // header: null, // prefix to html
                    // footer: null, // postfix to html
                    // base: false, // preserve the BASE tag or accept a string for the URL
                    // formValues: true, // preserve input/form values
                    // canvas: false, // copy canvas content
                    // doctypeString: '...', // enter a different doctype for older markup
                    // removeScripts: false, // remove script tags from print content
                    // copyTagClasses: false, // copy classes from the html & body tag
                    // beforePrintEvent: null, // function for printEvent in iframe
                    // beforePrint: null, // function called before iframe is filled
                    // afterPrint: null // function called before iframe is removed
                });

            }
        </script>
</body>

</html>
