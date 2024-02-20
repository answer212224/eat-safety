<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserHasNewVersion
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
        alert()->info("請注意", "您正在使用舊版的食安巡檢系統，請儘速切換新版以獲得最佳的使用體驗。點擊選單中的「稽核任務列表 v.2」即可切換至新版。");
        return $next($request);
    }
}
