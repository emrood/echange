<?php

namespace App\Http\Controllers\Auth;

use App\CashFund;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        activity($user->name)
            ->performedOn($user)
            ->causedBy($user)
            ->log('Connexion');

        if($user->isAdmin()){
            return redirect('dashboard');
        }else{
//            return redirect('change');
        }

        return redirect('change');
    }

    public function logout(Request $request)
    {
        $user = auth()->user();

        activity($user->name)
            ->performedOn($user)
            ->causedBy($user)
            ->log('Déconnection');
        $this->guard()->logout();

        $request->session()->invalidate();

        $cashFund = CashFund::where('cashier_id', $user->id)->whereDate('date', Carbon::today()->toDateString())->where('is_canceled', false)->where('is_locked', true)->where('is_closed', false)->first();

        if($cashFund){
            $cashFund->is_closed = true;
            $cashFund->save();
        }

        return redirect('login')->with('cashFund', $cashFund);
    }
}
