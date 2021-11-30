@extends('products.layout')
     
@section('content')
    <div class="row">
  
       
        <div class="col-lg-12 margin-tb">
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        
            <div>
        
            
                <div class="container d-flex justify-content-center mt-50 mb-50">
                    <div class="row shadow-sm product_data">
                       
        
                        @foreach  ($products as $product)
                        <div class="col-md-3 mt-2" width="60" height="60">
                            <input type="hidden"   value="{{ $product->id }}" class="product_id">
                                    <input type="hidden"  value="1" class="product_qty">
                            <div class="card shadow-lg ">
                                <div class="card-body">
                                    <div class="card-img-actions"> <img src="/image/{{ $product->image }}" class="card-img img-fluid" width="100" height="150" alt=""> </div>
                                </div>
        
                                
                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true">{{ $product->name }}</a> </h6> <a href="#" class="text-muted" data-abc="true">food</a>
                                    </div>
                                    <h3 class="mb-0 font-weight-semibold">{{ $product->price }}$</h3>
                                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                                    <div class="text-muted mb-3">34 reviews</div> 
        
                                    
                                    
                                    <a class="btn btn-cart mb-2" id="addtocart" href="{{ route('add.to.cart', $product->id) }}">Add to Cart</a> 
        
                                    {{-- <a class="addtocart btn btn-cart mb-2"  >Add To cart</a> --}}
                                    <a class="btn btn-cart mb-2" href="{{ route('products.show',$product->id) }}">View Details</a> 
        
                                    
                                </div>
                               
                              
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                   
                </div>
               
            </div>
        </div>
    </div>
  

 
  
    

    
    
    {{-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th>price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                     <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> 
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')   
        
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table> --}}
    
    {{-- {!! $products->links() !!} --}}
        
@endsection
