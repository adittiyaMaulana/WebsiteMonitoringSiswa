<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class OnlineMiddleware
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
        
        $user_offline = User::where('last_activity', '<', now());
        $user_online = User::where('last_activity', '>=', now());
        if (isset($user_offline)) {
            $user_offline->update(['is_online' => false]);
        }
        if (isset($user_online)) {
            $user_online->update(['is_online' => true]);
        }
        if (auth()->check()) {
            $cache_value = Cache::put('user-is-online', auth()->id(), \Carbon\Carbon::now()->addMinutes(1));
            $user = User::find(Cache::get('user-is-online'));
            $user->last_activity = now()->addMinutes(1);
            $user->is_online = true;
            $user->save();
        } elseif (!auth()->check() and filled(Cache::get('user-is-online'))) {
            $user = User::find(Cache::get('user-is-online'));
            if (isset($user)) {
                $user->is_online = false;
                $user->save();
            }
        }
        return $next($request);
    }
}
