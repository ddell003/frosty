<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //orders have order items, order items have a foreign key to orders through the column order_id
    public function items()
    {
        return $this->hasMany(OrderItem::class,'order_id');
    }
}
