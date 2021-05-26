<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next , string $role)
    {
        if($role== 'admin' && auth()->user()->role_id !='1'){
          abort(code:403);  
        }
        if($role== 'client' && auth()->user()->role_id !='2'){
            abort(code:403);  
          }
          if($role== 'chefprojet' && auth()->user()->role_id !='3'){
            abort(code:403);  
          }
          if($role== 'consultant' && auth()->user()->role_id !='4'){
              abort(code:403);  
            }
        return $next($request);
    }
}
