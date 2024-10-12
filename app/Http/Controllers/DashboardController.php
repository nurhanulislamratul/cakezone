<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Odernow;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Ensure this path is correct

class DashboardController extends Controller
{
    // public function dashboard()
    // {
    //     // Fetch current user
    //     $user = Auth::user();

    //     return view('back.dashboard.dashboard', compact('user'));
    // }

    public function allUsers()
    {
        $users = User::all();
        return view('back.dashboard.pages.all_users', compact('users'));
    }

    public function showDashboard()
    {

        $user = Auth::user();

        return view('back.dashboard.dashboard', compact('user'));
        return redirect()->route('dashboard');
    }

    public function homeDashboard()
    {
        $totalCakes = Service::count();
        $totalOrders = Odernow::count();
        $totalTeamMembers = Team::count();

        return view('back.dashboard.admin.pages.home', compact('totalCakes', 'totalOrders', 'totalTeamMembers'));
    }
}
