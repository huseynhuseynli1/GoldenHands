<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use App;


class LangMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('lang')) {

            $lang_name=Session::get('lang');
        } else{
            $lang_name=Config::get('app.locale');
        }

        App::setLocale($lang_name);
        return $next($request);
    }
}
