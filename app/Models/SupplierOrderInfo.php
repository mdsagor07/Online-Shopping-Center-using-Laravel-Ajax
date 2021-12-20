<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierOrderInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'subtotal', 'supplier_id','date','invoice'
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
