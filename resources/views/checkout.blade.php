@extends('products.layout')

@section('content')
    
<h1 style="text-align: center">Orders</h1>
   
<table class="table table-striped table-dark" id="customers">
    <thead>
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
        @foreach ($carts as $cart)
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
  <button><a href="{{route('generatePDF')}}">download</a></button>


@endsection