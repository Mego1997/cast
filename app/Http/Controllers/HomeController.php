<?php

namespace App\Http\Controllers;

use App\Models\Cast_crew_data;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home');
    }
}
