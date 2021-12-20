@extends('products.layout')
@section('content')
    

<div class="row">
  <div class="col-md-8 offset-2">
      <div class="card">
          <div class="card-header bg-info">
                  <h2 class="text-center">
                    Purchase
                  </h2>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">serial</th>
                  <th scope="col">order no</th>
                  <th scope="col">Supplier name</th>
                  <th scope="col">Supplier phone</th>
          
          
                  <th scope="col">subtotal</th>
                </tr>
              </thead>
              <tbody>
                  @foreach (App\Models\SupplierOrderInfo::all(); as $id=> $orders)
                <tr>
                  <th scope="row">{{ $id+1 }}</th>
                  <td>{{ $orders->order_id }}
                  <a href={{ route('supplierordersummary',$orders->order_id) }}> details</a>
                  </td>
                  <td>{{ $orders->supplier->name }}</td>
                  <td>{{ $orders->supplier->phone }}</td>
          
                  @php 
                  $value = App\Models\SupplierOrder::where('order_id',$orders->order_id)->sum('subtotal');
                  @endphp
          
                  <td>{{ $value}}</td>
                </tr>
                @endforeach
               
            </table>
          </div>
      </div>
  </div>
</div>




@endsection