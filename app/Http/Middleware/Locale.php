<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
{
    $lang = $request->session()->get('website_language', config('app.locale'));
    // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config
    $lang1 = Session::get('website_language', config('app.locale'));
    App::setLocale($lang);
    // Chuyển ứng dụng sang ngôn ngữ được chọn

    return $next($request);
}
}
