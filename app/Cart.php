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

    /**
     * Return the customer of a cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
