<?php

namespace App\Http\Controllers;

use App\Models\all_states;
use App\Models\AllCountries;
use App\Models\AllGender;
use App\Models\AllGovernorates;
use App\Models\Cast_crew_data;
use App\Models\Locations;
use App\Models\LocationsTypes;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\Ordersqueries;
use App\Models\Termsandconditions;
use App\Models\User_sms_verification;
use App\Models\User_sms_verification_history;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LocationsController extends Controller
{

    public function locations_country()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('lo-country', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    public function locations_countryAR()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('lo-countryAR', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }
    public function data(Request $request, $id)
    {
        $AllLocations=Locations::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);
        $AllTypes=LocationsTypes::all();
        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $CID = $id;
        $artilces = '';
        if ($request->ajax()) {
            foreach ($AllLocations as $result) {
                if ($result->owner_city == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title ">
                                                    <div class="title">' . $result->location_nameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Area</span>
                                                        <span class="data">' . $result->area . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">Location Type</span>
                                                        <span class="data">' . $result->LocationsTypes->GenderEN . '</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title">
                                                    <div class="title">' . $result->location_nameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Area</span>
                                                        <span class="data">' . $result->area . '</span>
                                                    </li>
                                                  
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                     <li>
                                                        <span class="title">Location Type</span>
                                                        <span class="data">' . $result->LocationsTypes->type_nameEN . '</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('locations',compact(
            'AllStates','nav_main_items','nav_submain_items',
            'cast_crew_data','AllLocations','AllTypes','CID', 'all_states'));

    }
    public function dataAR(Request $request, $id)
    {
        $AllLocations=Locations::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);
        $AllTypes=LocationsTypes::all();
        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $CID = $id;
        $artilces = '';
        if ($request->ajax()) {
            foreach ($AllLocations as $result) {
                if ($result->owner_city == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->location_nameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">المساحة</span>
                                                        <span class="data">م² ' . $result->area . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->LocationsTypes->GenderAR . '</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->location_nameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">المساحة</span>
                                                        <span class="data">م² ' . $result->area . '</span>
                                                    </li>
                                                  
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                     <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->LocationsTypes->type_nameAR . '</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('locationsAR',compact(
            'AllStates','nav_main_items','nav_submain_items',
            'cast_crew_data','AllLocations','AllTypes','CID', 'all_states'));

    }
    public function search(Request $request){
        if ($request->ajax()) {
            if ($request->search OR $request->ftype
                Or $request->fcity OR $request->fmax_area
                OR $request->fmin_area OR $request->fgov ) {

                $Selocations = Locations::Where(function ($query1) use ($request) {
                    $query1->where('location_nameEN', 'Like', '%' . $request->search . '%');
                })
                    ->Where(function ($query) use ($request) {
                        if ($request->ftype != "") {
                            $query->whereIn('location_type', $request->ftype);
                        }
                        if ($request->fcity != "") {
                            $query->whereIn('owner_city', $request->fcity);
                        }
                        if ($request->fcity != "") {
                            $query->whereIn('owner_city', $request->fcity);
                        }
                        if ($request->fgov != "") {
                            $query->whereIn('owner_governorate', $request->fgov);
                        }
                        if ($request->fmin_area != "" || $request->fmax_area != "") {
                            $query->whereBetween('area', [$request->fmin_area,$request->fmax_area] );
                        }
//                            ->whereIn('Governorate', $request->keysS)
//                            ->where('services', 'Like','%' .$request->keysSE. '%')
//                            ->where('specialization', 'Like','%' .$request->keysSA. '%')
//                            ->where('job', 'Like','%' .$request->keysJB. '%')
//                            ->whereBetween('experience', [$request->fminw,$request->fmaxw] );
                    })
                    ->where('Country', '=', $request->CID)
                    ->where('Status', '=', '1')
                    ->paginate(12);
            }

            $artilces = '';
            if ($request->ajax()) {
                foreach ($Selocations as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title ">
                                                    <div class="title">' . $result->location_nameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Area</span>
                                                        <span class="data">' . $result->area . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">Location Type</span>
                                                        <span class="data">' . $result->LocationsTypes->GenderEN . '</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('locations');
        }

    }
    public function searchAR(Request $request){
        if ($request->ajax()) {
            if ($request->search OR $request->ftype
                Or $request->fcity OR $request->fmax_area
                OR $request->fmin_area OR $request->fgov ) {

                $Selocations = Locations::Where(function ($query1) use ($request) {
                    $query1->where('location_nameAR', 'Like', '%' . $request->search . '%');
                })
                    ->Where(function ($query) use ($request) {
                        if ($request->ftype != "") {
                            $query->whereIn('location_type', $request->ftype);
                        }
                        if ($request->fcity != "") {
                            $query->whereIn('owner_city', $request->fcity);
                        }
                        if ($request->fcity != "") {
                            $query->whereIn('owner_city', $request->fcity);
                        }
                        if ($request->fgov != "") {
                            $query->whereIn('owner_governorate', $request->fgov);
                        }
                        if ($request->fmin_area != "" || $request->fmax_area != "") {
                            $query->whereBetween('area', [$request->fmin_area,$request->fmax_area] );
                        }
//                            ->whereIn('Governorate', $request->keysS)
//                            ->where('services', 'Like','%' .$request->keysSE. '%')
//                            ->where('specialization', 'Like','%' .$request->keysSA. '%')
//                            ->where('job', 'Like','%' .$request->keysJB. '%')
//                            ->whereBetween('experience', [$request->fminw,$request->fmaxw] );
                    })
                    ->where('Country', '=', $request->CID)
                    ->where('Status', '=', '1')
                    ->paginate(12);
            }

            $artilces = '';
            if ($request->ajax()) {
                foreach ($Selocations as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-location-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->location_nameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">المساحة</span>
                                                        <span class="data">م² ' . $result->area . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->LocationsTypes->type_nameAR . '</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('locationsAR');
        }

    }
    //////////Services-Register Page/////////////
    public function Regdata()
    {

        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();
        $Terms=Termsandconditions::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $locations_type=LocationsTypes::all();
        return view('auth/locations-register',compact(
            'AllStates','AllGender',
            'Terms','nav_main_items','nav_submain_items',
            'cast_crew_data','locations_type'));
    }
    public function RegdataAR()
    {

        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();
        $Terms=Termsandconditions::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $locations_type=LocationsTypes::all();
        return view('auth/locations-registerAR',compact(
            'AllStates','AllGender',
            'Terms','nav_main_items','nav_submain_items',
            'cast_crew_data','locations_type'));
    }
    public function insertnewlocation(Request $request)
    {
        $SMS_code = User_sms_verification::
        Where(function ($query1) use ($request) {
            $query1->where('verification_code', '=', $request->input('SMSCode'));
        })->get();
        if($SMS_code->count()>0) {
            $data = User_sms_verification::where("user_phone", $request->input('Phone'))->delete();
        if($request->input('LocationNameEn')!="" And $request->input('OwnerNameEn')!=""And $request->input('LocationNameAr')!=""And $request->input('OwnerNameAr')!=""And $request->input('Email')!=""And $request->input('Phone')!=""And $request->input('Password')!=""And $request->input('Governorate')!=""And $request->input('City')!=""And $request->input('FullAddress')!=""And $request->input('LocationDesc')!=""And $request->input('Area')!=""And $request->input('LocationType')!=""){

            if($request->input('Password')==$request->input('Re-Password')){
                $files = $request->file('Image');
                $files1 = $request->file('ProfileImage1');
                $files2 = $request->file('ProfileImage2');
                $files3 = $request->file('ProfileImage3');
                $files4 = $request->file('ProfileImage4');


                $filename = $files->getClientOriginalName();
                $filename1 = $files1->getClientOriginalName();
                $filename2 = $files2->getClientOriginalName();
                $filename3 = $files3->getClientOriginalName();
                $filename4 = $files4->getClientOriginalName();


                $extension = $files->getClientOriginalExtension();
                $extension1 = $files1->getClientOriginalExtension();
                $extension2 = $files2->getClientOriginalExtension();
                $extension3 = $files3->getClientOriginalExtension();
                $extension4 = $files4->getClientOriginalExtension();


                $fileName = "MainL".time().date("his").".".$extension;
                $fileName1 = "P1L".time().date("his").".".$extension1;
                $fileName2 = "P2L".time().date("his").".".$extension2;
                $fileName3 = "P3L".time().date("his").".".$extension3;
                $fileName4 = "P4L".time().date("his").".".$extension4;


                $destinationPath ='public/images/gallery'.'/';
                $destinationPath1 = 'public/images/gellery_rectengular'.'/';


                $files->move($destinationPath, $fileName);
                $files1->move($destinationPath1, $fileName1);
                $files2->move($destinationPath1, $fileName2);
                $files3->move($destinationPath1, $fileName3);
                $files4->move($destinationPath1, $fileName4);



                $insertlocation = new Locations();
                $insertlocation->location_nameEN=$request->input('LocationNameEn');
                $insertlocation->location_nameAR=$request->input('LocationNameAr');
                $insertlocation->location_o_nameEN=$request->input('OwnerNameEn');
                $insertlocation->location_o_nameAR=$request->input('OwnerNameAr');
                $insertlocation->owner_email=$request->input('Email');
                $insertlocation->owner_phone=$request->input('Phone');
                $insertlocation->owner_password=$request->input('Password');
                $insertlocation->Country = 59;
                $insertlocation->owner_governorate=$request->input('Governorate');
                $insertlocation->owner_city=$request->input('City');
                $insertlocation->address=$request->input('FullAddress');
                $insertlocation->area=$request->input('Area');
                $insertlocation->location_type=$request->input('LocationType');
                $insertlocation->location_desc=$request->input('LocationDesc');

                $insertlocation->Image=$fileName;

                $insertlocation->location_profileimg1=$fileName1;
                $insertlocation->location_profileimg2=$fileName2;
                $insertlocation->location_profileimg3=$fileName3;
                $insertlocation->location_profileimg4=$fileName4;

                $insertlocation->socialfacebook=$request->input('Socialfacebook');
                $insertlocation->socialinstagram=$request->input('Socialinstagram');
                $insertlocation->socialyoutube=$request->input('Socialyoutube');
                $insertlocation->socialtwitter=$request->input('Socialtwitter');
                $insertlocation->videolink=$request->input('Videolink');
                $insertlocation->Status="0";
                $insertlocation->save();
                return redirect('locations-register')->with('status',"Inserted Successfully");
            }
            else{
                return redirect()->back()->withInput()->with('warning',"Password missmath");
            }
        }
        else{
            return redirect()->back()->withInput()->with('warning',"You forget something");


        }
        }
        else{
            return redirect()->back()->withInput()->with('warning', "Wrong SMS code [be careful, you have 5 attempts per day]");
        }

    }
    ////////////////personal Location//////////////////
    public function showlocationdata($id)
    {
        $data = Locations::find($id);

        $countries = AllCountries::all();
        $AllGender=AllGender::all();

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        return view('personal-location-page',compact('data','countries','AllGender','nav_main_items','nav_submain_items','cast_crew_data'));

    }
    public function showlocationdataAR($id)
    {
        $data = Locations::find($id);

        $countries = AllCountries::all();
        $AllGender=AllGender::all();

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        return view('personal-location-pageAR',compact('data','countries','AllGender','nav_main_items','nav_submain_items','cast_crew_data'));

    }
    public function addquery(Request $request)
    {


        $insertmodel = new Ordersqueries();
        $insertmodel->OMName=$request->input('OMName');
        $insertmodel->OFullName=$request->input('OFullName');
        $insertmodel->OPhone=$request->input('OPhone');
        $insertmodel->OEmail=$request->input('OEmail');
        $insertmodel->OMassage=$request->input('OMassage');

        $insertmodel->save();
        return Redirect::back()->with('status','The data has been sent and we will reply to you as soon as possible');
    }

    /**SMS Verification**/
    public function SMSSent(Request $request)
    {

        $SMS_MSent_history = User_sms_verification_history::
        Where(function ($query1) use ($request) {
            $query1->where('created_at', 'Like', '%' .(\Carbon\Carbon::now())->format('m-d'). '%');
        })
            ->Where(function ($query) use ($request) {
                $query->where('user_phone', '=', $request->Phones);
            })
            ->get();

        if($SMS_MSent_history->count()<5){
            $data = User_sms_verification::where("user_phone", $request->Phones)->delete();

            $code = mt_rand(100000, 999999);

            $SMS_Sent = new User_sms_verification();
            $SMS_Sent->user_email = $request->Emails;
            $SMS_Sent->user_phone = $request->Phones;
            $SMS_Sent->verification_code = $code;
            $SMS_Sent->save();

            $SMS_Sent_history = new User_sms_verification_history();
            $SMS_Sent_history->user_email = $request->Emails;
            $SMS_Sent_history->user_phone = $request->Phones;
            $SMS_Sent_history->verification_code = $code;
            $SMS_Sent_history->save();

            $response =
                Http::post('https://smsmisr.com/api/SMS/?', [
                    'username' => 'KM3iXebi',
                    'password' => '07d75c42fedde7c10a9d91e5b50a47143e66d8ac2233af55e8d732851eb167ee',
                    'language' => '1',
                    'sender' => '1b20c0db825cd3174a47ec64324cf98c4fdba1001e37a378fd4e3cb2900ab2f7',
                    'mobile' => $request->input('Phones'),
                    'message' => "Welcome to Cast&Crew your code is :$code",
                    'environment' => '1',
                ]);
      }


    }
}
