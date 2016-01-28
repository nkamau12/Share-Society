<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table = 'purchase';
    protected $primaryKey = 'PID';
    protected $fillable = [
        'ClothingTotal',
        'FurnitureTotal',
        'OtherTotal',
        'DateOfPurchase',
        'MID'
        ];

    public function purchasedby(){
        return $this->belongsTo('App\member','MID','MID');
    }
}
