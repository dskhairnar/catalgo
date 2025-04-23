<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Business;
use App\Models\Service;
use App\Models\Booking;

class BusinessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:business');
    }

    /**
     * Show the business dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $servicesCount = Service::where('business_id', $user->business->id)->count();
        $bookingsCount = Booking::whereHas('service', function ($query) use ($user) {
            $query->where('business_id', $user->business->id);
        })->count();

        return view('dashboard.business.index', compact('servicesCount', 'bookingsCount'));
    }

    /**
     * Show the business dashboard (alias for index).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = Auth::user();
        $servicesCount = Service::where('business_id', $user->business->id)->count();
        $bookingsCount = Booking::whereHas('service', function ($query) use ($user) {
            $query->where('business_id', $user->business->id);
        })->count();

        return view('dashboard.business.index', compact('servicesCount', 'bookingsCount'));
    }
}
