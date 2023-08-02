<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function changeLang(Request $request, $lang)
    {
        $request->session()->put('website_language', $lang);
        $request->session()->save();
        
        return redirect()->back();
    }
}
