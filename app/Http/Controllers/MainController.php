<?php

namespace App\Http\Controllers;

use App\Models\Cast_crew_data;
use App\Models\Cities;
use App\Models\Models;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about_us_data()
    {

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();

        return view('about-us',compact('nav_main_items','nav_submain_items',
            'cast_crew_data'));
    }
    public function contact_us_data()
    {

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();

        return view('contact-us',compact('nav_main_items','nav_submain_items',
            'cast_crew_data'));
    }
    public function about_us_dataAR()
    {

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();

        return view('about-usAR',compact('nav_main_items','nav_submain_items',
            'cast_crew_data'));
    }
    public function contact_us_dataAR()
    {

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();

        return view('contact-usAR',compact('nav_main_items','nav_submain_items',
            'cast_crew_data'));
    }

}
