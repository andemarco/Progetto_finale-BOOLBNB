<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
      'user_id',
      'title',
      'description',
      'number_of_rooms',
      'number_of_bath',
      'number_of_beds',
      'meters',
      'address',
      'latitude',
      'longitude',
      'price_for_night',
      'image_path',
      'published'
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    public function messages()
    {
      return $this->hasMany('App\Message');
    }
    public function orders()
    {
      return $this->hasMany('App\Order');
    }

    public function sponsors()
    {
        return $this->belongsToMany('App\Sponsor');
    }
}
