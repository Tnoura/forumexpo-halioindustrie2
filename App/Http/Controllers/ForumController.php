<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Import the App facade
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function home()
    {
        return view('Principal.home');
    }

    public function switchLanguage($lang)
    {
        if (in_array($lang, ['en', 'fr', 'ar'])) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }

        return redirect()->back();
    }
}
