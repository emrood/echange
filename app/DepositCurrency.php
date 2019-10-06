<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepositCurrency extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'deposit_currencies';

    protected $guarded = ['id'];

    public function deposit(){
        return $this->belongsTo(Deposit::class, 'uid', 'deposit_uid');
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}
