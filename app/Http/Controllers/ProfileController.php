<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->usertype == 'admin') {
            return view('admin.profile', compact('user'));
        } else {
            return view('user.profile', compact('user'));
        }
    }
}
