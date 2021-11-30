@extends('products.layout')

@section('content')
   
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
      {{-- <td>{{$datas->user->name}}</td> --}}
      <td>{{$datas->product->name}}</td>
      <td>{{$datas->unit_price}}</td>
      <td>{{$datas->quantity}}</td>
      <td>{{$datas->Total_price}}</td> 
    </tr>

  </tbody>
</table>
<button class="btn btn-info"  ><a href="{{route('generatePDF')}}">pdf</a></button>
@endsection