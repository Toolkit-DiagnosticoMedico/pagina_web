<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Paciente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) 
        {
            switch($this->auth->user()->id_tipo)
            {
                case '1':
                return redirect()->to('admin/users'); 
                break;

                case '2':
                return redirect()->to('doctores/users'); 
                break;

                case '3':
                //return redirect()->to('pacientes/users');
                break;

            }
            return redirect('admin/auth/login');
        }
        
        return $next($request);
    }
}
