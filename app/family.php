<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class family extends Model
{

    protected $table = 'family';
    protected $primaryKey = 'FID';
    protected $fillable = [
        'Agency',
        'address1',
        'address2',
        'city',
        'postalCode',
        'province',
        'Address',
        'PhoneNo',
    ];
    /*
     * Family can have many members
     */
    public function member(){
        return $this->hasMany('App\member');
    }
    public static function findByid($id, $columns = array('*')) {
        if ( ! is_null($member = static::where('FID',$id)->first($columns))) {
            return $member;
        }

        throw new ModelNotFoundException;
    }

}
