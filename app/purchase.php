<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table = 'purchase';

    protected $fillable = [
        'Category',
        'DateOfPurchase',
        'Total'
        ];

    public function purchasedby(){
        return $this->belongsTo('App\member');
    }
}
