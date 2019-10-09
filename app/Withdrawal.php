<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Withdrawal extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'withdrawals';

    protected $guarded = ['id'];


    public function withdrawals(){
        return $this->hasMany(WithdrawalCurrency::class, 'withdrawal_uid', 'uid');
    }

    public function cashier(){
        return $this->belongsTo(User::class, 'cashier_id', 'id');
    }

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
