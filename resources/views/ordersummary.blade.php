@extends('products.layout')
@section('content')

<div >


    <section id="print" class="h-100 h-custom" style="background-color: #eee;">
        <div   class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                <div class="card-body p-5">
      
                  <p class="lead fw-bold mb-5" style="color: #f37a27;">Purchase Reciept</p>
      
                  <div class="row">
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Customer</p>
                      <p> {{ $username }}</p>
                    </div>
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Customer Phone</p>
                      <p> {{ $userphone }}</p>
                    </div>
                    <div class="col mb-3">
                      <p class="small text-muted mb-1">Order no</p>
                      <p>{{ $order }}</p>
                    </div>
                  </div>
      
                  <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                    @foreach ( $order_summary as $item)
                        
                    
                    <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p>{{ $item->product->name }}</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p> {{ $item->qty }}* {{ $item->product->price }}$</p>
                      </div>
                     
                      <div class="col-md-4 col-lg-3">
                        <p>{{ $item->product->subtotal }}</p>
                        
                      </div>
                    </div>

                    {{-- <div class="row">
                      <div class="col-md-8 col-lg-9">
                        <p class="mb-0">Shipping</p>
                      </div>
                      <div class="col-md-4 col-lg-3">
                        <p class="mb-0">£33.00</p>
                      </div>
                    </div> --}}
                  </div>
                  @endforeach
      
                  <div class="row my-4">
                    <div class="col-md-3 offset-md-8 col-lg-3 offset-lg-9">
                      <p class=" fw-bold mb-0" style="color: #f37a27;">total={{ $grandtotal }}$</p>
                      
                    </div>
                  </div>
      
             
      
                  <div class="row">
                    <div class="col-lg-12">
      
                      <div class="horizontal-timeline">
      
                       
      
                      </div>
      
                    </div>
                  </div>
      
                  <input type="button" value="print" onclick="printDiv()">
                </div>
                
              </div>
              
            </div>

          </div>
          
        </div>
       
      </section>
     
      
</div>

@endsection

<script>
  function printDiv() {
      var divContents = document.getElementById("print").innerHTML;
      var a = window.open('', '', 'height=500, width=500');
      a.document.write('<html>');
      a.document.write(divContents);
     
      a.document.close();
      a.print();
  }
</script>