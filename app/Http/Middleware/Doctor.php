<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Doctor
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
         if($this->auth->check())
       {
            if($this->auth->user()->id_tipo =1)
            {
                return redirect()->to('admin/users');
            }
                elseif($this->auth->user()->id_tipo != 2)
                {
                    return redirect()->to('admin/users');
                }
       }
        return $next($request);
    }
}
