<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'image','price'
    ];

    public function order_invoices()
    {
        return $this->belongsToMany(OrderInvoice::class, 'order_invoices');
    }
    public function cart()
    {
        return $this->belongsTo(cart::class);
    }

    public function order_info()
    {
        return $this->belongsTo(order_info::class);
    }

}
