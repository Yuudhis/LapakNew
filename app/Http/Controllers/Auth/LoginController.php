<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function redirectTo()
    {
        if (Auth::user()->role == 'admin') {
            $this->redirectTo = route('admin.index');
            return $this->redirectTo;
        } else {
            $this->redirectTo = route('users.index', Auth::user()->users_id);
            return $this->redirectTo;
        }
    }
}
