<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function permissionsList(){
        $roles = $this->roles;
        $permissions = [];
        foreach ($roles as $role){
            $permissions[] = $role->permissions()->pluck('name')->implode(',');
        }
       return collect($permissions);
    }

    public function permissions(){
        $permissions = [];
        $role = $this->roles->first();
        $permissions = $role->permissions()->get();
        return $permissions;
    }

    public function isAdmin(){
       $is_admin =$this->roles()->where('name','admin')->first();
       if($is_admin != null){
           $is_admin = true;
       }else{
           $is_admin = false;
       }
       return $is_admin;
    }

    public function isSupervisor(){
        $is_supervisor = $this->roles()->where('name','Supervisor')->first();
        if($is_supervisor != null){
            $is_supervisor = true;
        }else{
            $is_supervisor = false;
        }
        return $is_supervisor;
    }


    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function funds(){
//        $fund = CashFund::whereDate('date', Carbon::today()->toDateString())->where('cashier_id', $this->id)->first();
//        if($fund){
//            return $fund;
//        }else{
//            return null;
//        }
        return $this->hasMany(CashFund::class, 'cashier_id', 'id');
    }
}
