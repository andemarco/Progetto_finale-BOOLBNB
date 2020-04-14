<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'name',
        'price',
        'apartment_id'
    ];

    public $timestamps = false;

    public function apartments()
    {
        return $this->belongsToMany('App\Apartment');
    }

    
}
