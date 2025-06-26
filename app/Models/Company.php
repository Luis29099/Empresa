<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function Suppliers(){
        return $this->hasMany(Supplier::class);
    }
    public function Users(){
        return $this->hasMany(User::class);
    }
    public function Applications(){
        return $this->hasMany(Application::class);
    }
    public function Products(){
        return $this->hasMany(Product::class);
    }
    public function Warehouses(){
        return $this->hasMany(Warehouse::class);
    }
    public function Stokes(){
        return $this->hasMany(Stoke::class);
    }
}
