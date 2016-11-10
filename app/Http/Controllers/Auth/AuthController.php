<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laracasts\Flash\Flash;
use App\Http\Requests\userRequest;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    
    protected $redirectPath ="/admin/users";

    protected $loginPath = "/admin/auth/login";

    protected function getLogin()
    {
        return view('admin.auth.login');
    }


   protected function getRegister()
    {
        return view('admin.auth.register');
    }

    protected function getLogout(){
        Auth::logout();
        return view('admin.auth.login'); 
    }


    protected function postRegister(userRequest $request)
    {

        $paciente = new User([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'id_tipo' => '3',
            ]);
        
        $paciente->save();

        Flash::success('Paciente '  .$paciente->nombre. ' Registrado');
        return redirect()->route('admin.auth.login');
    }
}
