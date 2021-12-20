<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'product_id', 'supplier_id','qty','price','subtotal','date','invoice'
    ];

    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
