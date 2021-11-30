@extends('products.layout')
   
@section('content')

<div>


    <!--Section: Block Content-->
<section class="mb-5">

    <div class="row ">
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
      <div class="col-md-6 product_data">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select customer</label>
          <select class="form-control customer_id js-example-basic-single">
            <option  disabled selected>Select customer</option> 
              @foreach($customers as $customer)
              <option value="{{$customer->id}}">{{ $customer->name }}</option>
              @endforeach   
          </select>
        </div> 
  
        <h5> {{ $product->name }}</h5>
        <input type="hidden" class="product_id" value="{{$product->id }}">
        <input type="hidden" class="price" value="{{$product->price }}">
       
        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
     
        <p><span class="product_price mr-1"><strong>${{ $product->price }}</strong></span></p>
        <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
          error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
          officia quis dolore quos sapiente tempore alias.</p>
        <div class="table-responsive">
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
                    <input class="quantity" min="0" name="quantity" value="2" type="number">
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
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2">wisht-list</button>
        <button type="button" class=" addtocart btn btn-light btn-md mr-1 mb-2"><i
          class=" fas fa-shopping-cart pr-2"></i>Add to cart</button>
      </div>
    </div>
  
  </section>
  <!--Section: Block Content-->
</div>

@endsection
@section('script')
    <script>
$(document).ready(function(){
  $('.js-example-basic-single').select2();

$('.addtocart').on('click',function (e) {

        e.preventDefault();
  
        //catch by class
        var user_id = $(this).closest('.product_data').find('.customer_id').val();
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var product_qty = $(this).closest('.product_data').find('.quantity').val();
        var price = $(this).closest('.product_data').find('.price').val();
        
        
//alert(user_id);
    
        $.ajax({
            method:"POST",
            url:'{{ route('addcart') }}',
            data:{
              _token: '{{ csrf_token() }}',

              'user_id': user_id,
              'price': price,
              'product_id':product_id,
              'product_qty':product_qty,
            },
            succes:function(response){
              aler('add product successfully');
              
            }


        });
  

      
    });
});
    </script>
@endsection