<!DOCTYPE html>
<html>
<head>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
    </script>

    <title> Product Details   </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

  

<!-- end nav menu--></div>
  
<div class="container">
    <div class="card">
        <h1 class="" style="text-align: center">Product Details </h1>

    @yield('content')
</div>
   
</body>
</html>