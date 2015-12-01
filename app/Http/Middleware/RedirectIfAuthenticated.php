<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blog;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}


    /*public function handle($request, Closure $next)
    {
        if ($this->auth->check())     //用户是否登录
        {
            if (!Auth::users()->is_admin) {
                return new RedirectResponse(url('/stu/home'));// <!--不是管理员 -->
            } else {
                return new RedirectResponse(url('/admin'));// <!--管理员 -->         }
            }
            return $next($request);
        }
    }
}*/