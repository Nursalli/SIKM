<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SIKM Papua Barat</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icons -->
      <link rel="icon" href="images/fevicon/logoPabar3d.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{!! asset('../css/bootstrap.min.css') !!}" />
      <!-- site css -->
      <link rel="stylesheet" href="{!! asset('../css/style.css') !!}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{!! asset('../css/responsive.css') !!}" />
      <!-- colors css -->
      <link rel="stylesheet" href="{!! asset('../css/responsive.css') !!}" />
      <!-- wow animation css -->
      <link rel="stylesheet" href="{!! asset('../css/animate.css') !!}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="default_theme" class="home_page1">
      @yield('content')
         <!-- footer bottom -->
         <div class="footer_bottom">
            <p>Dessigned and developed by <strong>Diskominfo Papua Barat</strong></p>
         </div>
      </footer>
      <!-- end footer -->
      <!--=========== js section ===========-->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="{!! asset('../adminlte/plugins/jquery/jquery.min.js') !!}"></script>
      <script src="{!! asset('../adminlte/plugins/pooper/popper.min.js') !!}"></script>
      <script src="{!! asset('../adminlte/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
      <!-- wow animation -->
      <script src="{!! asset('../js/wow.js') !!}"></script>
      <!-- custom js -->
      <script src="{!! asset('../js/custom.js') !!}"></script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>