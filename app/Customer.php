<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the Customer model.
     *
     * @var string
     */
    protected $table = 'customer';

    protected $primaryKey = 'idCustomer';
}
