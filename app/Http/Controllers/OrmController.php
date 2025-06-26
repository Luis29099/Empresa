<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Company;
use App\Models\Product;
use App\Models\Stoke;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consulta(){
        //Consultas de Company
        // $Company=Company::find(1);
        // return $Company->Suppliers;
        // $Company=Company::find(1);
        // return $Company->Products;
        // $Company=Company::find(1);
        // return $Company->Applications;
        // $Company=Company::find(1);
        // return $Company->Users;
        // $Company=Company::find(1);
        // return $Company->Warehouses;
        // $Company=Company::find(1);
        // return $Company->Stokes;
        
        //Consultas de supplier
        // $Supplier=Supplier::find(1);
        // return $Supplier->Company;
        // $Supplier=Supplier::find(3);
        // return $Supplier->User;
        // $Supplier=Supplier::find(1);
        // return $Supplier->Products;

        // consulta de user
        // $User=User::find(1);
        // return $User->Company;
        // $User=User::find(1);
        // return $User->Suppliers;
        // $User=User::find(1);
        // return $User->Applications;

        //Consultas de Product
        // $Product=Product::find(1);
        // return $Product->Company;
        // $Product=Product::find(2);
        // return $Product->Supplier;
        // $Product=Product::find(1);
        // return $Product->Stokes;

        //consultas de Warehouse
        // $Warehouse=Warehouse::find(1);
        // return $Warehouse->Company;
        // $Warehouse=Warehouse::find(1);
        // return $Warehouse->Stokes;

        //Consultas de Stoke
        // $Stoke=Stoke::find(1);
        // return $Stoke->Company;
        // $Stoke=Stoke::find(1);
        // return $Stoke->Product;
        // $Stoke=Stoke::find(1);
        // return $Stoke->Warehouse;

        // consulta de aplication
        // $Aplication=Application::find(1);
        // return $Aplication->Company;
        // $Aplication=Application::find(1);
        // return $Aplication->User;




    }
}
