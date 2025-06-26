<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Stokes(){
        return $this->hasMany(Stoke::class);
    }
}
