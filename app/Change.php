<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    //

    protected $table = 'changes';

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fromCurrency(){
        return $this->belongsTo(Currency::class, 'from_currency_id', 'id');
    }

    public function toCurrency(){
        return $this->belongsTo(Currency::class, 'to_currency_id', 'id');
    }
}
