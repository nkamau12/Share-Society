<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class family extends Model
{

    protected $table = 'family';

    protected $fillable = [
        'Agency',
        'letterdate',
        'Address',
        'PhoneNo',
        'StartDate'

    ];
    /*
     * Family can have many members
     */
    public function member(){
        return $this->hasMany('App\member');
    }
}
