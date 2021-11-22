@extends('products.layout')
   
@section('content')

<div>


    <!--Section: Block Content-->
<section class="mb-5">

    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
  
        <div id="mdb-lightbox-ui"></div>
  
        <div class="mdb-lightbox">
  
          <div class="row product-gallery mx-1">
  
            <div class="col-12 mb-0">
              <figure class="view overlay rounded z-depth-1 main-img">
                <a href="#"
                  data-size="710x823">
                  <img src="/image/{{ $product->image }}"
                    class="img-fluid z-depth-1">
                </a>
              </figure>
             
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
      <div class="col-md-6">
  
        <h5> {{ $product->name }}</h5>
        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
     
        <p><span class="mr-1"><strong>${{ $product->price }}</strong></span></p>
        <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
          error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
          officia quis dolore quos sapiente tempore alias.</p>
        <div class="table-responsive">
          <table class="table table-sm table-borderless mb-0">
            <tbody>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                <td>Shirt 5407X</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                <td>Black</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                <td>USA, Europe</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <div class="table-responsive mb-2">
          <table class="table table-sm table-borderless">
            <tbody>
              <tr>
                <td class="pl-0 pb-0 w-25">Quantity</td>
               
              </tr>
              <tr>
                <td class="pl-0">
                  <div class="def-number-input number-input safari_only mb-0">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                      class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                      class="plus"></button>
                  </div>
                </td>
                <td>
               
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
        <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
      </div>
    </div>
  
  </section>
  <!--Section: Block Content-->
</div>





    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div  class="form-group">
                <strong>Price:</strong>
                {{ $product->price }}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div  class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="200px">
            </div>
        </div>
    </div> --}}
@endsection