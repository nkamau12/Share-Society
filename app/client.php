<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'client';

    protected $fillable = [
        'MID',
        'UID',
        'page',
        'data'
    ];

    /*
     * a client is helped by a user
     */
    public function helpedby(){
        return $this->belongsTo('App\User');
    }

    /*
     * Clients information is stored on the member table
     */
    public function info(){
        return $this->belongsTo('App\member');
    }

}
