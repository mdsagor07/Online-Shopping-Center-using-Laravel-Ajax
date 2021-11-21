<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 'product_id', 'unit_price','quantity','Total_price'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'users');
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'products');
    }

}
