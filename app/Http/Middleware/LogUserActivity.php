<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 紀錄用戶訪問頁面信息 log到stack channel daily     
        Log::stack(['daily'])->info('User visited page', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'ip' => $request->ip(),
            // 'user_agent' => $request->userAgent(),
            // 'user_id' => $request->user() ? $request->user()->id : null,
            'user_name' => $request->user() ? $request->user()->name : 'Guest',
        ]);
        return $next($request);
    }
}
