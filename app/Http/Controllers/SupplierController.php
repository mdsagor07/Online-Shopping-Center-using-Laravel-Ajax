<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\SupplierOrder;
use App\Models\SupplierOrderInfo;
use App\Models\SupplierStock;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    public function index()
    {

        return view('addsupplier');
    }

    public function addsupplier(Request $request )
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required ',
            'phone' => 'required',
            'address' => 'required'
         ]);
         $supplier=new Supplier;
         $supplier->name=$request->name;
         $supplier->email=$request->email;
         $supplier->phone=$request->phone;
         $supplier->address=$request->address;

         $supplier->save();

         return response()->json(['status'=>'supplier added successfully']);


    }

    public function orderIndex()
    {

        return view('supplierOrder');

    }

    public function createsupplierOrder(Request $request)
    {

        $this->validate($request,[
            'supplier_id' => 'required',
            'purchaseDate' => 'required ',
            'invoice' => 'required',
         
         ]);


         $latestOrder = SupplierOrderInfo::orderBy('id', 'DESC')->first();

       
         if($latestOrder)
         {
             
         $last_order_id=$latestOrder->order_id;
         $outputString = preg_replace('/[^0-9]/', '', $last_order_id);  
 
         $order_id = 'PS-'.str_pad($outputString +1, 8, "0", STR_PAD_LEFT);
         }
         else
         {
             $order_id = 'PS-'.str_pad( 1, 8, "0", STR_PAD_LEFT);
         }

         $supplier_id=$request->supplier_id;
       
           $invoice=$request->invoice;
           $date=$request->purchaseDate;

        
        foreach($request->product as $key=>$insert) {

            $saveRecord [] = [
                'price'   =>$request->price[$key],
                'qty'     =>$request->qty[$key],
                'subtotal'     =>$request->qty[$key]*$request->price[$key],
              
                'order_id'=>$order_id,
                'product_id'=>$request->product[$key],
                'supplier_id'=>$supplier_id,

                'invoice'=>$invoice,
                'date'=>$date,

            ];
        
        }
        $order_info=new SupplierOrderInfo;
        $order_info->order_id=$order_id ;
        $order_info->supplier_id=$supplier_id ;
        $order_info->invoice=$invoice;
        $order_info->date=$date;
        $order_info->subtotal=100;
        
        
        //SupplierOrder::insert($saveRecord);

        foreach ($saveRecord as $saveRecords) {
            $product = SupplierStock::where('product_id',$saveRecords['product_id'])->first();
            $stock=$product->stock;
            $i=0;

            if($saveRecords['qty'] < $stock && $saveRecords['qty'] >i ){

                $order_info->save();
                SupplierOrder::insert($saveRecords);
                 $product->decrement('stock', $saveRecords['qty']);
            }
            else{
                $product_name=Product::where('id',$saveRecords['product_id'])->first();
                $product_name_get= $product_name->name;
               
               // $request->session()->flash('flash_message', $product_name_get.' stock is shortage please enter <='.$stock);
               return redirect()->back()->with('message','order placed without'. $product_name_get.' product  is Shortage Storage!, Minimum Enter quantity is'.$stock);
            }
           
        }
      
         return response()->json(['status'=>'supplier order added successfully']);


    }

    public function supplierordersummary($order_id)
    {

        $order_summary=SupplierOrder::where('order_id',$order_id)->get();


        $order_id_frist=SupplierOrder::where('order_id',$order_id)->first();

        $order=$order_id_frist->order_id;
        $invoice=$order_id_frist->invoice;

        $supplier_id=$order_id_frist->supplier_id;
        $supplier_name_get=Supplier::where('id', $supplier_id)->first();
        $supplier_name=$supplier_name_get->name;
        $supplier_phone=$supplier_name_get->phone;


        $grandtotal=SupplierOrder::where('order_id',$order_id)->sum('subtotal');

        return view('supplier_ordersummary',compact('order_summary','grandtotal','order','supplier_name','supplier_phone','invoice'));


    }

    public function supplierorderdetails()
    {


        return view('supplierorder_details');
    }

    public function stockProduct()
    {
        

        return view('stock');
        
    }
}
