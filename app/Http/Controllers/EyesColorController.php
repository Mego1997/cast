<?php

namespace App\Http\Controllers;

use App\Models\AllEyeColor;
use App\Models\Models;
use Illuminate\Http\Request;

class EyesColorController extends Controller
{
    public function ViewAllEyeColor(){
        $Eyes=AllEyeColor::all();
        return view('models',compact('Eyes'));

    }
}
