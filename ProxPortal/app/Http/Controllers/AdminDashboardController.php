<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->type !== 'admin') {
            return redirect()->route('user.dashboard');
        }

        return view('admin.dashboard');
    }
}
