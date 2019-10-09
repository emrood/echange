<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WithdrawalCurrency extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'withdrawal_currencies';

    protected $guarded = ['id'];

    public function withdrawal(){
        return $this->belongsTo(Withdrawal::class, 'uid', 'withdrawal_uid');
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}
