<!DOCTYPE html>
<html>
<head>

 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

      
    <script>
     
      
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

 



  //details page

  $(document).ready(function () {
  // MDB Lightbox Init
  $(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
  });
});
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title> Product Details   </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    

  
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/validate.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
  <script>
        @if (Session::has('success'))
        toastr.success("{{Session::get('success')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('warning'))
        toastr.info("{{Session::get('info')}}")
        {{-- expr --}}
        @endif
        @if (Session::has('error'))
        toastr.error("{{Session::get('error')}}")
        {{-- expr --}}
        @endif
    </script>
  </head>

  <body>
<div class="container">
    <div class="card">

         <!-- NAVBAR-->
         <nav class="navbar navbar-expand-lg py-2 navbar-dark  bg-dark shadow-lg p-3 mb-2">
          <div class="container">
          <a href="#" class="navbar-brand">
              <!-- Logo Image -->
              <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
              <!-- Logo Text -->
              <span class="text-uppercase font-weight-bold">Company</span>
          </a>
      
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ">
              <li class="nav-item "><a href="{{ route('users') }}"class="nav-link">Home </a></li>
              <li class="nav-item"><a href="#" class="nav-link">About</a></li>
              <li class="nav-item"><a href="{{route('products.index')}}" class="nav-link">Products</a></li>
              <li class="nav-item"><a href="{{route('order_details')}}" class="nav-link">order page</a></li>
              <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Add supplier</a></li>
              <li class="nav-item"><a href="{{route('supplier.order')}}" class="nav-link"> New Purchase</a></li>
              <li class="nav-item"><a href="{{route('supplier.order_details')}}" class="nav-link">Purchases</a></li>

              <li class="nav-item"><a href="{{url('/invoiceIndex')}}" class="nav-link">invoice</a></li>
              <button class="btn btn-secondary mr-3 pull-right" style="float: right;" ><a href="{{route('cart')}}">Cart({{ count((array) session('cart')) }})</a></button>
              </ul>
          </div>
          </div>
      </nav>
      


       <h1 class="" style="text-align: center">   </h1>
        <div class="pull-right">
          <a class="btn btn-primary ml-3" href="{{ route('products.create') }}"> Add New Product</a>
          
          
      </div> 

    @yield('content')
    @yield('script')
        
    
   
</div>
   
</body>
</html>