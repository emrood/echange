<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'deposits';

    protected $guarded = ['id'];


    public function deposits(){
        return $this->hasMany(DepositCurrency::class, 'deposit_uid', 'uid');
    }

    public function cashier(){
        return $this->belongsTo(User::class, 'cashier_id', 'id');
    }

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
