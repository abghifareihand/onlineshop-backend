<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Jumlah semua user
        $totalAllUser = User::count();

        // Jumlah user dengan rola 'ADMIN'
        $totalAdmin = User::where('roles', 'ADMIN')->count();

        // Jumlah user dengan rola 'STAFF'
        $totalStaff = User::where('roles', 'STAFF')->count();

        // Jumlah user dengan rola 'USER'
        $totalUser = User::where('roles', 'USER')->count();

        return view('pages.dashboard', compact('totalAllUser', 'totalAdmin' , 'totalStaff', 'totalUser'));
    }
}
