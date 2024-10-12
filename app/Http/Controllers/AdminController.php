<?php

namespace App\Http\Controllers;

use App\Models\Odernow;
use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        // Get the count of team members
        $teamCount = Team::count();

        // Get the count of services
        $serviceCount = Service::count();

        // Get the count of orders
        $odernow = Odernow::count();

        // Get all services for display
        $services = Service::all();

        // Optionally, you may want to get orders for display
        $orders = Odernow::all(); // Fetch all orders if you need details

        // Pass the data to the view
        return view('back.dashboard.admin.pages.home', compact('teamCount', 'serviceCount', 'odernow', 'services', 'orders'));
    }
}
