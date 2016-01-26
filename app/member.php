<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'Fname',
        'Lname',
        'Clothing',
        'Furniture',
        'Other'
        ];

    public function family(){
        return $this->belongsTo('App\family');
    }

    public function purchases(){
        return $this->hasMany('App\purchase');
    }

    public function isclient(){
        return $this->hasOne('App\client');
    }
}
