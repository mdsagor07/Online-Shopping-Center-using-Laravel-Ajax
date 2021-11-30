@extends('products.layout')
@section('content')


<table id="cart" class=" table table-hover table-condensed">

    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    

    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%">Action</th>
        </tr>
    </thead>
    <tbody id="cart-item" class="product_cart">

         <div class="form-group">
            
            <select class="form-control customer_id js-example-basic-single" name="user_id">
              <option  disabled selected>Select customer</option> 
               @foreach(App\Models\User::all(); as $customer)
                <option value="{{$customer->id}}" {{ Session::put('user_id', $customer->id)}}>{{ $customer->name }}</option>
                @endforeach   
            </select>
        </div>  
         {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">Select customer</label>
            <select name="user_id" class="form-control customer_id ">
              <option selected disabled >Select customer</option> 
                @foreach(App\Models\User::all(); as $customer)
                <option value="{{$customer->id}}" {{ Session::put('user_id', $customer->id)}}>{{ $customer->name }}</option>
                
                @endforeach   
            </select>
        </div>  --}}
        
      
         
        @php $total = 0 ;
       
        @endphp
        @if(session('cart'))
            @foreach(session('cart') as  $id=>$details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{$id}}">
                    
                    <td data-th="Product">
                        <div class="row ">
                           
                        <input type="hidden" class="product_id" value={{$details['product_id']}} name="product_id" >
                            <div class="col-sm-3 hidden-xs"><img src="/image/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }} {{ Session::put('Product_id', $id)}}</h4>
                                
                            </div>
                        </div>
                    </td>
                    <td data-th="price" name="price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" name="product_qty" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o">remove</i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        
    </tbody>
    <tfoot >
     
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>

        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ route('products.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>

                

                {{-- <button class="cartadd btn btn-success"> Checkout</button> --}}
                <button class=" btn btn-success"><a href="{{route('insertcart')}}">Checkout</a>  </button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection]

@section('script')
<script type="text/javascript">


    $('.js-example-basic-single').select2();
    // $('.js-data-example-ajax').select2({
//   ajax: {
//     url: 'https://api.github.com/search/repositories',
//     dataType: 'json'
//     // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
//   }
// });
   

$(document).ready(function(){

   

$('.cartadd').on('click',function (e) {
        e.preventDefault();
  
        var user_id = $(this).closest('.product_cart').find('.customer_id').val();
       
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        

        alert(user_id);
        // $.ajax({
        //     method:"POST",
        //     url:'{{ route('addcart') }}',
        //     data:{
        //       _token: '{{ csrf_token() }}',

        //       'user_id': user_id,
        //       'price': price,
        //       'product_id':product_id,
        //       'product_qty':product_qty,
        //     },
        //     succes:function(response){

              
        //     }

        // });
      
    });
});

  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                } 

            });
        }
    });
  
</script>
@endsection