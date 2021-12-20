@extends('products.layout')
@section('content')


<ul >
    @foreach ($errors->all() as $error)
       <p class = "alert alert-danger">{{ $error }}</p>
    @endforeach
 </ul>
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header bg-info">
                    <h2 class="text-center">
                        Add new Supplier
                    </h2>
            </div>
            <div class="card-body">
                <form action="{{route('supplier.add')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Supplier Name:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number</label>
                      <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address:</label>
                      <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="enter address">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Create Supplier

                    </button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection