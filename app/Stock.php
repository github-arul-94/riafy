<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Stock extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'current_market_price','market_cap','stock_pe','divident_yield','roce','roce_previous','debt_to_equit','eps','reservs','debt',
    ];

}
