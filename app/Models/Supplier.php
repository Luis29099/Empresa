<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Model;
use User;

class Supplier extends Model
{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Products(){
        return $this->hasMany(Product::class);
    }
}
