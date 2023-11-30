<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function index()
    {
        $content = view('auth.auth');

        return response()->json(['content' => $content->render()]);
    }
}
