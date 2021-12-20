@extends('products.layout')

@section('content')
<ul >
    @foreach ($errors->all() as $error)
       <p class = "alert alert-danger">{{ $error }}</p>
    @endforeach
 </ul>
 <span id="message_error"></span>

<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card">
    
@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
            <div class="card-header bg-info">
                    <h2 class="text-center">
                        Add new Purchase
                    </h2>
            </div>
            <div class="card-body">
             <form action="{{route('supplier.order.create')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Supplier</label>
                        <select  name="supplier_id" class="form-control" id="exampleFormControlSelect1" required>
                            <option    > Select Supplier </option>
                        @foreach (App\Models\Supplier::all(); as $supplier)
                            
                    
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                            @endforeach
                        
                        </select>
                      </div>
                  

                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" id="birthday" name="purchaseDate">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Invoice:</label>
                      <input type="text" name="invoice" class="form-control" id="exampleInputPassword1" placeholder="enter Invoice">
                    </div>

                    <table id="emptbl" class="table table-bordered border-primar">
                        <thead class="table">
                            <tr>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Product</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td id="col0"><input type="text" class="form-control" name="price[]" placeholder="Enter  price" required></td> 
                                <td id="col1"><input type="tel" class="form-control" name="qty[]" placeholder="Enter quantity" required></td> 
                                <td id="col2"> 
                                    <select class="form-control" name="product[]" id="dept" required> 
                                        <option selected disabled>-- Select --</option> 
                                        @foreach (App\Models\Product::all(); as $products)
                            
                    
                                        <option value="{{$products->id}}">{{$products->name}}</option>
                                        @endforeach
                                    </select> 
                                </td>
                            </tr>
                        </tbody>  
                    </table> 
                    <table>
                        <br>
                        <tr> 
                            <td><button type="button" class="btn btn-sm btn-info mr-2" onclick="addRows()" >Add</button></td>
                            <td><button type="button" class="btn btn-sm btn-danger mr-2" onclick="deleteRows()">Remore</button></td>
                            <td><button type="submit" class="btn btn-sm btn-success" style="margin-left:512px">Save</button></td> 
                        </tr>  
                    </table>
        

                   
                    
                   </form> 
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('script')
<script>
    function addRows()
    { 
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        var cellCount = table.rows[0].cells.length; 
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++)
        {
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('col'+i).innerHTML;
            cell.innerHTML=copycel;
            // if(i == 2)
            // { 
            //     var radioinput = document.getElementById('col2').getElementsByTagName('input'); 
            //     for(var j = 0; j <= radioinput.length; j++)
            //     { 
            //         if(radioinput[j].type == 'radio')
            //         { 
            //             var rownum = rowCount;
            //             radioinput[j].name = 'gender['+rownum+']';
            //         }
            //     }
            // }
        }
    }

    function deleteRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        if(rowCount > '2')
        {
            var row = table.deleteRow(rowCount-1);
            rowCount--;
        }else{
            alert('There should be atleast one row');
        }
    }
</script>
<!-- alert blink text -->
<script>
    function blink_text()
    {
        $('#message_error').fadeOut(700);
        $('#message_error').fadeIn(700);
    }
    setInterval(blink_text,1000);
</script>
<!-- script validate form -->
<script>
    $('#validate').validate({
        reles: {
            'price[]': {
                required: true,
            },
            'qty[]': {
                required:true,
            },
            'product[]': {
                required:true,
            },
        },
        messages: {
            'price[]' : "Please input file*",
            'qty[]' : "Please input file*",
            'product[]' : "Please input file*",
        },
    });
</script>

    
@endsection


