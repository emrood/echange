<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashFundCurrency extends Model
{
    //

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cash_fund_currencies';

    protected $guarded = ['id'];

    public function cashfund(){
        return $this->belongsTo(CashFund::class, 'uid', 'cash_fund_uid');
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}
