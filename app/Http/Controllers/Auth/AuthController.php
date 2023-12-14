<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        $content = view('auth.auth');

        return response()->json(['content' => $content->render()]);
    }
}
