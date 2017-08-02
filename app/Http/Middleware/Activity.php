<?php
/**
 * Created by PhpStorm.
 * User: fenlan
 * Date: 17-8-2
 * Time: 下午6:02
 */

namespace App\Http\Middleware;

use Closure;

class Activity
{

    public function handle($request, Closure $next) {

        if (time() < strtotime('2017-08-02')) {

            return redirect('activity0');
        }

        return $next($request);
    }
}