<?php

namespace App\Http\Controllers;

use App\Models\Accent;
use App\Models\all_states;
use App\Models\AllCountries;
use App\Models\AllEyeColor;
use App\Models\AllGender;
use App\Models\AllGovernorates;
use App\Models\ALLHairColor;
use App\Models\AllHairQuality;
use App\Models\AllSkinColor;
use App\Models\AllTalent;
use App\Models\Appearance;
use App\Models\Cast_crew_data;
use App\Models\Experiences;
use App\Models\Language;
use App\Models\Models;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\Ordersqueries;
use App\Models\Uniquedata;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PersonalModal extends Controller
{
    public function showPdata($id)
    {
            $data = Models::find($id);
            $AllEyes=AllEyeColor::all();
            $AllStates=AllGovernorates::all();
            $AllGender=AllGender::all();
            $AllHairQuality=AllHairQuality::all();
            $AllHairColor=ALLHairColor::all();
            $AllSkinColor=AllSkinColor::all();
            $AllTalent=AllTalent::all();
        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();
        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();

        $countries = AllCountries::all();
        $All_states=all_states::all();
            return view('personal-modal-page',compact('data','AllEyes','AllStates','AllGender'
                ,'AllHairQuality','AllHairColor','AllSkinColor'
                ,'AllTalent','nav_main_items','nav_submain_items'
                ,'cast_crew_data', 'AllExperiences', 'AllLanguage',
                'AllAppearance', 'AllUniquedata', 'AllAccent','countries','All_states'));

    }
    public function showPdataAR($id)
    {
        $data = Models::find($id);
        $AllEyes=AllEyeColor::all();
        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();
        $AllHairQuality=AllHairQuality::all();
        $AllHairColor=ALLHairColor::all();
        $AllSkinColor=AllSkinColor::all();
        $AllTalent=AllTalent::all();
        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();

        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $countries = AllCountries::all();
        $All_states=all_states::all();
        return view('personal-modal-pageAR',compact('data','AllEyes','AllStates','AllGender'
            ,'AllHairQuality','AllHairColor','AllSkinColor'
            ,'AllTalent','nav_main_items','nav_submain_items'
            ,'cast_crew_data', 'AllExperiences', 'AllLanguage',
            'AllAppearance', 'AllUniquedata', 'AllAccent','countries','All_states'));

    }
    public function addquery(Request $request)
    {


            $insertmodel = new Ordersqueries();
            $insertmodel->OMName=$request->input('OMName');
            $insertmodel->OFullName=$request->input('OFullName');
            $insertmodel->OPhone=$request->input('OPhone');
            $insertmodel->OEmail=$request->input('OEmail');
            $insertmodel->OMassage=$request->input('OMassage');




            Mail::to('cast@attractionme.net');
            return new JsonResponse(
                [
                    'success' => true,
                    'message' => "Thank you for subscribing to our email, please check your inbox"
                ],
                200
            );


            $insertmodel->save();
        return Redirect::back()->with('status','The data has been sent and we will reply to you as soon as possible');
    }

}
