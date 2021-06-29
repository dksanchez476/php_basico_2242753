<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;

    //1 M a Compras
public function  compras(){

    return $this->hasManyThorough('App\Compra',
                                  'App\Disco',
                                  'SupportRepId',
                                  'CustomerId',
                                  'EmployeeId',
                                  'CustomerId' );

}

}
