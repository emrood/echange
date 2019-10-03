<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashFund extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cash_funds';

    protected $guarded = ['id'];

    public function funds(){
        return $this->hasMany(CashFundCurrency::class, 'cash_fund_uid', 'uid');
    }

    public function cashier(){
        return $this->belongsTo(User::class, 'cashier_id', 'id');
    }

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
