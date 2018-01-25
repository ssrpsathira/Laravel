<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * The table associated with the Customer model.
     *
     * @var string
     */
    protected $table = 'Cart';

    protected $primaryKey = 'idCart';
}
