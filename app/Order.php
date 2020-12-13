<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
