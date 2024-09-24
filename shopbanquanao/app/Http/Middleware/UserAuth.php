<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use View;
use Illuminate\Support\Facades\Cookie;

class UserAuth
{
    public function handle($request, Closure $next)
    {
        $userToken = $request->cookie('user_token');

        if ($userToken) {
            $user = User::where("user_token", "=", $userToken)->first();
            if ($user) {
                // Kiểm tra nếu vào trang admin và yêu cầu level > 1
                if ($this->isAdminRoute($request) && $user->level < 1) {
                    return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập trang quản trị.');
                }

                View::share("authenticatedUser", $user);
                $request->merge(['authenticatedUser' => $user]);

                return $next($request);
            }
        } else {
            if ($request->new_guest == 1) {

                $userToken = Str::random(50);
                Cookie::queue(Cookie::make('user_token', $userToken, 999999, '/', null, false, false));
                $randomUser = Str::random(10);
                User::insert([
                    "user_full_name" => "Khách hàng #" . $randomUser,
                    "username" => $randomUser,
                    "password" => md5(Str::random(50)),
                    "is_guest" => 1,
                    "user_token" => $userToken
                ]);

                $user = User::where("user_token", "=", $userToken)->first();
                if ($user) {
                    View::share("authenticatedUser", $user);
                    $request->merge(['authenticatedUser' => $user]);
                    return $next($request);
                }
            }
        }

        if ($this->shouldRedirect($request)) {
            return redirect()->route('home');
        } else {
            View::share("authenticatedUser", null);
            $request->merge(['authenticatedUser' => null]);
        }

        return $next($request);
    }

    public function shouldRedirect(Request $request)
    {
        // Danh sách các URL cần chuyển hướng nếu không đăng nhập
        $protectedRoutes = [
            'shopping-cart',
        ];

        return in_array($request->path(), $protectedRoutes);
    }

    // Hàm kiểm tra xem có phải route admin hay không
    protected function isAdminRoute(Request $request)
    {
        // Danh sách các route hoặc prefix dành cho admin
        $adminRoutes = [
            'admin', // Ví dụ: nếu URL có chứa 'admin'
        ];

        foreach ($adminRoutes as $adminRoute) {
            if (Str::startsWith($request->path(), $adminRoute)) {
                return true;
            }
        }

        return false;
    }
}
