<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use dompdf;
use PDF;
use session;
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

    public function cart()
    {
        return view('cart');
    }
    
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function cartitem()
    {
        

    }


    public function generatePDF()
    {
        
       

        $pdf = PDF::loadView('invoice');

         return $pdf->download('invoice.pdf');
        //return view('invoice', [ 'pdf' => $pdf]);

    }
}
