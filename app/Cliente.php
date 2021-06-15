<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "customerId";
    public $timestamps = false;
}
