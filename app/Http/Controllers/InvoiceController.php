<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use dompdf;
use PDF;

use App\Models\User;
use App\Models\Product;
use App\Models\OrderInvoice;
class InvoiceController extends Controller
{
    
    public function invoiceIndex()
    {
       
        $customers=User::all();
        $products=Product::all();
        
        // dd($product);

        // Fetch customer
        // $customerData['data'] =User ::orderby("name","asc")
        // 			   ->select('id','name')
        // 			   ->get();
        
        // $productData['data']==Product ::orderby("name","asc")
        //              ->select('id','name')
        //              ->get();    
        //              dd($productData);           
        
        return view('invoice',compact('customers','products'));

    }

    public function invoiceStore(Request $request)
    {
        $invoice = new OrderInvoice;

        $invoice->customer_id = $request->customer_id;
        $invoice->product_id = $request->product_id;
        $invoice->unit_price = $request->unit_price;
        $invoice->quantity = $request->quantity;

        //dd($request->all());
        $total =  $invoice['unit_price'] * $invoice['quantity'];
        $invoice['Total_price'] = $total;

        

        $invoice->save();

        return redirect(route('viewinvoicelist'));
    }

    public function invoicelist(){
         $datas=OrderInvoice::latest()->first();
         
         
       return view('createInvoice',compact('datas'));
        


        
    }
    
    public function invoiceStore1()
    {
        return view('createInvoice');
    }


    public function generatePDF()
    {
        
       

        $pdf = PDF::loadView('invoice');

         return $pdf->download('invoice.pdf');
        //return view('invoice', [ 'pdf' => $pdf]);

    }
}
