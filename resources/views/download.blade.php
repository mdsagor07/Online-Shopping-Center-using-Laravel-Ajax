<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body>
  <h1 style="text-align: center; text-coler">Orders</h1>
    <table style="text-align: center;  width: 100%; border: 1px solid #ddd; padding: 8px; margin:1px "  id="customers">
        <thead style=" padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #52997b;
        color: white;">
          <tr>
         
            <th scope="col">customer name</th>
            <th scope="col">customer phone</th>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( App\Models\Cart::all(); as $cart)
            <tr>
           
                <td>{{$cart->user->name}}</td>
                <td>{{$cart->user->phone}}</td>
                <td>{{$cart->product->name}}</td>
                <td>{{$cart->price}}</td>
                <td>{{$cart->qty}}</td>
                <td>{{$cart->subtotal}}</td>
              </tr>
            @endforeach
          
          
        </tbody>
      </table>
</body>
</html>