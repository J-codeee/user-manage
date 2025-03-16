<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index (Request $request) {
        $users = User::all();
    
        return Inertia::render('Dashboard', [ 'users' => $users]);
        }
}
