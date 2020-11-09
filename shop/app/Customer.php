<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    protected $table = 'customers';

    public function bills() {
        return $this->hasMany(Bill::class, 'customer_id');
    }
}
