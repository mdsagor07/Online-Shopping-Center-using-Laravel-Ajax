<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    
    <table class="table table-dark table-striped">
        <thead>

          <tr>
            <th scope="col">NO</th>
            <th scope="col">Customer name</th>
            <th scope="col">Product name</th>
            <th scope="col">unit price</th>
            <th scope="col">quantity</th>
            <th scope="col">Total price</th>
          </tr>
        </thead>
        <tbody>
         
         
              
          <tr>
           
            <td>1</td>
            <td>{{$datas->customer_id}}</td>
          <td>{{$datas->product_id}}</td>
            <td>{{$datas->unit_price}}</td>
            <td>{{$datas->quantity}}</td>
            <td>{{$datas->Total_price}}</td> 
          </tr>
     
         
          
        
        </tbody>
      </table>

</body>
</html>