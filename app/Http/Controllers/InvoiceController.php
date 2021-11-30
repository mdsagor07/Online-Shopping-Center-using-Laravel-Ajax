<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use dompdf;
use PDF;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\OrderInvoice;
use App\Models\cart;

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

       
        $total =  $invoice['unit_price'] * $invoice['quantity'];
        $invoice['Total_price'] = $total;

        

        $invoice->save();

        return redirect(route('viewinvoicelist'));
    }

    public function addCart(Request $request){

        $product_id=$request->input('product_id');
        $user_id=$request->input('user_id');
        $price=$request->input('price');
        $product_qty=$request->input('product_qty');

        $cartItem=new Cart();
        $cartItem->user_id	=$user_id;
        $cartItem->price=$price;
        $cartItem->product_id =$product_id;
        $cartItem->qty =$product_qty;
        $cartItem->subtotal=$price*$product_qty;
        $cartItem->save();

        return redirect('/products')->with('success', 'order added successfully !');

    }

    public function invoicelist(){
         $datas=OrderInvoice::all();

         
        $pdf = PDF::loadView('createInvoice',$datas);

        return $pdf->download('invoice.pdf');
       
        


        
    }

    public function cart(User $customers)
    {
        $cart = session()->get('cart');
        //Session::forget('cart');
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
                "product_id" => $product->id,
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

    public function search(Request $request)
    {
        $customers=User::All();

    }

  
    //checkout

    public function checkout(Cart $carts)
    {
        $carts=Cart::all();
        return view('checkout',compact('carts'));
    }

    public function insertcart(Request $request)
    {
       
        
        $userid=session::get('user_id');
        $content=session()->get('cart');
        
       //dd($content);
       

       $newarr=[];
       foreach ($content as  $items){

        unset($items["image"],$items["name"]);
        
        $items["qty"] = $items['quantity'];
        $items["user_id"] = $userid;
        $items["subtotal"] =$items["qty"]*$items["price"];

        unset($items["quantity"]);

        array_push($newarr, $items);

       }
       cart::insert($newarr);
       Session::forget('cart');
     //dd($newarr);
     return redirect('/products')->with('success', 'order added successfully !');
     
    }


    public function generatePDF(Cart $carts)
    {
        $carts=Cart::all();
        $pdf = PDF::loadView('download',$carts);

         return $pdf->download('invoice.pdf');
        

    }
}
