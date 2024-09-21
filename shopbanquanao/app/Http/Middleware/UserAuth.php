<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use View;

class UserAuth
{
    public function handle($request, Closure $next)
    {
        $userToken = $request->cookie('user_token');

        if ($userToken) {
            $user = User::where("user_token", "=", $userToken)->first();
            if ($user) {
                View::share("authenticatedUser", $user);
                
                return $next($request);
            }
        }
        if ($this->shouldRedirect($request)) {
            return redirect()->route('login');
        } else {
            View::share("authenticatedUser", null);
        }
        
        return $next($request);

    }

    public function shouldRedirect(Request $request)
    {
        // Danh sách các URL cần chuyển hướng nếu không đăng nhập
        $protectedRoutes = [
            '/shopping-cart',
            '/profile',
            '/settings',
        ];

        return in_array($request->path(), $protectedRoutes);
    }
}