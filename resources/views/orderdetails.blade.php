@extends('products.layout')

@section('content')

<h1 style="text-align: center">Orders found</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col">order no</th>
        <th scope="col">customer name</th>
        <th scope="col">customer phone</th>


        <th scope="col">subtotal</th>
      </tr>
    </thead>
    <tbody>
        @foreach (App\Models\order_info::all(); as $id=> $orders)
      <tr>
        <th scope="row">{{ $id+1 }}</th>
        <td>{{ $orders->order_id }}
        <a href={{ route('summary',$orders->order_id) }}> details</a>
        </td>
        <td>{{ $orders->user->name }}</td>
        <td>{{ $orders->user->phone }}</td>

        <td>{{ $orders->order_value }}</td>
      </tr>
      @endforeach
     
  </table>

@endsection