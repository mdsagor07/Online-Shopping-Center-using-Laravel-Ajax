@extends('products.layout')

@section('content')




<div class="row">
  <div class="col-md-8 offset-2">
      <div class="card">
          <div class="card-header bg-info">
                  <h2 class="text-center">
                      Customer Orders
                  </h2>
          </div>
          <div class="card-body">
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
          </div>
      </div>
  </div>
</div>





@endsection