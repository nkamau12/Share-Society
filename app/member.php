<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'MID';
    protected $fillable = [
        'Fname',
        'Lname',
        'Clothing',
        'Furniture',
        'Other'
        ];

    public function family(){
        return $this->belongsTo('App\family','FID','FID');
    }

    public function purchases(){
        return $this->hasMany('App\purchase');
    }

    public function isclient(){
        return $this->hasOne('App\client');
    }

    public static function findByid($id, $columns = array('*')) {
        if ( ! is_null($member = static::where('MID',$id)->first($columns))) {
            return $member;
        }

        throw new ModelNotFoundException;
    }
}
