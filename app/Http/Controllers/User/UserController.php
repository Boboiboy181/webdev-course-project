<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $content = view('auth.auth');

        return response()->json(['content' => $content->render()]);
    }
}
