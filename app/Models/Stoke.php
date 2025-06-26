<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stoke extends Model
{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Warehouse(){
        return $this->belongsTo(Warehouse::class);
    }
}
