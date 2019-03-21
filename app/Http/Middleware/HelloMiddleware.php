<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{

    public function handle($request, Closure $next)
    {
        $data = [
            ['name'=>'taro','mail'=>'taro@yamada'],
            ['name'=>'hanako','mail'=>'hanako@yamada'],
            ['name'=>'sachiko','mail'=>'sachiko@yamada'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
