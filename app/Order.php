<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'apartment_id',
        'sponsor_id',
        'sponsor_due_date'
    ];
    
    public function apartments()
    {
        return $this->belongsTo('App\Apartment');
    }
}
