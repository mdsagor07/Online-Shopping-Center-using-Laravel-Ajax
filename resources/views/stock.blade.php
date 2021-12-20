@extends('products.layout')

@section('content')
    


<div class="row">
  <div class="col-md-8 offset-2">
      <div class="card">
          <div class="card-header bg-info">
                  <h2 class="text-center">
                     Stock Product
                  </h2>
          </div>
          <div class="card-body">
            
            <table class="table table-striped table-bordered border-primar mr-5">
              <thead>
                <tr>
                  <th scope="col">serial</th>
                  <th scope="col">product name</th>
                  <th scope="col">Stock Available</th>
             
                </tr>
              </thead>
              <tbody>
                  @foreach (App\Models\SupplierStock::all(); as $id=> $stocks)
                <tr>
                  <th scope="row">{{ $id+1 }}</th>
                  <td>{{ $stocks->product->name }}
                  
                  </td>
                  <td>{{ $stocks->stock }}</td>
                </tr>
                @endforeach
               
            </table>

          </div>
      </div>
  </div>
</div>


@endsection

