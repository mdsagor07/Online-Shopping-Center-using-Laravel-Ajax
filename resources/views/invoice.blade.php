<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </script>
</head>
<body>

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header bg-info">
                        <h2 class="text-center">
                            Invoice Page
                        </h2>
                </div>
                <div class="card-body">
                    <form action="{{route('invoiceStore')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Customer</label>
                            <select  name="customer_id" class="form-control" id="exampleFormControlSelect1">
                                <option   disabled > Select Customer </option>
                            @foreach ($customers as $customer)
                                
                        
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Product</label>
                            <select name="product_id" class="form-control" id="exampleFormControlSelect1">
                              <option  disabled>Select Product</option> 
                              @foreach($products as $product)
                              <option  value='{{ $product->id }}'>{{ $product->name }}</option>
                            @endforeach  
                            </select>
                          </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Unit Price</label>
                          <input type="text" name="unit_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Quantity:</label>
                          <input type="number" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="enter quantity">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Create Invoice

                        </button>
                      </form>
                </div>
            </div>
        </div>
    </div>


   


</body>
</html>