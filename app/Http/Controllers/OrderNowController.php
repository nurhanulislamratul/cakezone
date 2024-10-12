<?php

namespace App\Http\Controllers;

use App\Models\Odernow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; // Correctly import DB facade
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrderNowController extends Controller
{
    public function odernow()
    {
        return view('front.pages.odernow');
    }

    public function orderCreate(Request $request)
    {
        // Create a new order
        $order = [
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'cake_type' => $request->cake_type,
            'message' => $request->message,
        ];

        Alert::success('Success', 'Order Created Successfully');
        Odernow::create($order);

        return redirect()->back();
    }

    public function orderStore()
    {
        // Retrieve all orders along with associated user
        $orders = Odernow::with('user')->get();
        return view('back.dashboard.pages.allorder', ['orders' => $orders]);
    }

    public function orderaccept($id)
    {
        // Accept the order by changing status
        $order = Odernow::find($id);
        $order->status = 'accepted';
        $order->save();

        return redirect()->back();
    }

    public function orderreject($id)
    {
        // Reject the order by changing status
        $order = Odernow::find($id);
        $order->status = 'rejected';
        $order->save();

        return redirect()->back();
    }

    public function showOrders()
    {
        // Get the logged-in user
        $user = Auth::user();

        // Fetch orders that belong to this user
        $orders = Odernow::where('user_id', $user->id)->get();

        return view('back.dashboard.pages.showorder', compact('orders'));
    }

    public function homeDashboard()
    {
        // Count the total number of services, orders, and users
        $totalServices = DB::table('services')->count(); // Count of services
        $totalOrders = DB::table('odernows')->count();   // Count of orders
        $totalMembers = DB::table('users')->count();     // Count of users (team members)

        // Pass the counts to the view
        return view('back.dashboard.admin.pages.home', [
            'totalServices' => $totalServices,
            'totalOrders' => $totalOrders,
            'totalMembers' => $totalMembers
        ]);
    }
}
