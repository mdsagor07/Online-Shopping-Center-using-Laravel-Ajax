<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'order_id', 'order_value'
    ];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cart()
    {
        return $this->belongsTo(cart::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
