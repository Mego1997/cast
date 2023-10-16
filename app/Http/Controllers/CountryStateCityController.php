<?php

namespace App\Http\Controllers;

use App\Models\all_states;
use App\Models\Governorate;
use Illuminate\Http\Request;
use App\Models\AllCities;

class CountryStateCityController extends Controller
{
    public function getCity(Request $request)
    {
        $data['AllCities'] = AllCities::where("governorate_id",$request->governorate_id)
            ->get(["id","city_name_en","city_name_ar"]);
       // return view('welcome',compact('data'));
        return response()->json($data);
    }
    public function getstate(Request $request)
    {
        if($request->country_id=='59'){
            $data['Allstates'] = Governorate::get(["id","governorate_name_en"]);
        }
        else{
            $data['Allstates'] = all_states::where("country_id",$request->country_id)
                ->get(["id","name_en","name_ar"]);
        }

        // return view('welcome',compact('data'));
        return response()->json($data);
    }
}
