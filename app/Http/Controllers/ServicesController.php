<?php

namespace App\Http\Controllers;

use App\Models\all_states;
use App\Models\AllCities;
use App\Models\AllEyeColor;
use App\Models\AllGender;
use App\Models\AllGovernorates;
use App\Models\ALLHairColor;
use App\Models\AllHairQuality;
use App\Models\AllSkinColor;
use App\Models\AllTalent;
use App\Models\Cast_crew_data;
use App\Models\jobs;
use App\Models\Models;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\Ordersqueries;
use App\Models\Services;
use App\Models\Services_details;
use App\Models\Specializations;
use App\Models\Termsandconditions;
use App\Models\User_sms_verification;
use App\Models\User_sms_verification_history;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    //////////Services Page/////////////
    public function services_country()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('tc-country', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    public function services_countryAR()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('tc-countryAR', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }
    public function data(Request $request, $id)
    {
        $results=Services::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);

        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }
        $AllGender=AllGender::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $services_details=Services_details::all();
        $specializations=Specializations::all();
        $jobs=jobs::all();
        $CID = $id;

        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                if ($result->City == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title ">
                                                    <div class="title">' . $result->FirstNameEN . '</div>
                                                    <div class="subtitle">' . $result->LastNameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Services</span>
                                                        <span class="data">' . $result->Services_details->service_nameEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title">
                                                    <div class="title">' . $result->FirstNameEN . '</div>
                                                    <div class="subtitle">' . $result->LastNameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Services</span>
                                                        <span class="data">' . $result->Services_details->service_nameEN . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">Age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                  
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Gov</span>
                                                        <span class="data">' . $result->governorates->governorate_name_en . '</span>
                                                    </li>
                                                   
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                    
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('services',compact(
            'AllStates', 'AllGender',
            'nav_main_items','nav_submain_items',
            'cast_crew_data','services_details','specializations',
            'jobs','CID', 'all_states'));

    }
    public function dataAR(Request $request, $id)
    {
        $results=Services::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);

        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }
        $AllGender=AllGender::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $services_details=Services_details::all();
        $specializations=Specializations::all();
        $jobs=jobs::all();
        $CID = $id;

        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                if ($result->City == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->FirstNameAR . '</div>
                                                    <div class="subtitle-ar">' . $result->LastNameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">الخدمة</span>
                                                        <span class="data">' . $result->Services_details->service_nameAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->FirstNameAR . '</div>
                                                    <div class="subtitle-ar">' . $result->LastNameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">الخدمة</span>
                                                        <span class="data">' . $result->Services_details->service_nameAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('servicesAR',compact(
            'AllStates', 'AllGender',
            'nav_main_items','nav_submain_items',
            'cast_crew_data','services_details','specializations',
            'jobs','CID', 'all_states'));

    }
    public function getspeciali(Request $request)
    {
        $data['Allspeciali'] = Specializations::where("service_id",$request->service_id)
            ->get(["ID","specialization_nameEN","specialization_nameAR"]);
        return response()->json($data);
    }
    public function getjob(Request $request)
    {
        $data['Alljobs'] = jobs::where("specialization_id",$request->specializ_id)
            ->get(["ID","job_nameEN","job_nameAR"]);
        return response()->json($data);
    }
    public function search(Request $request){
        if ($request->ajax()) {
            if ($request->search OR $request->keyGE Or $request->keysS OR $request->keysSE OR $request->keysSA OR $request->keysJB OR $request->fmaxw OR $request->fminw) {
                $Seservices = Services::Where(function ($query1) use ($request) {
                    if ($request->search != "") {
                    $query1->where('FirstNameEN', 'Like', '%' . $request->search . '%');
                    }
                })
                    ->Where(function ($query) use ($request) {
                        if ($request->keyGE != "") {
                            $query->whereIn('Gender', $request->keyGE);
                        }
                        if ($request->keysS != "") {
                            $query->whereIn('Governorate', $request->keysS);
                        }
                        if ($request->keysSE != "") {
                            $query->whereIn('services',  $request->keysSE );
                        }
                        if ($request->keysSA != "") {
                            $query->whereIn('specialization',$request->keysSA );
                        }
                        if ($request->keysJB != "") {
                            $query->whereIn('job',$request->keysJB );
                        }
                        if ($request->fminw != "" || $request->fmaxw != "" ) {
                            $query->whereBetween('experience', [$request->fminw, $request->fmaxw]);
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
                foreach ($Seservices as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title">
                                                    <div class="title">' . $result->FirstNameEN . '</div>
                                                    <div class="subtitle">' . $result->LastNameEN . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">Services</span>
                                                        <span class="data">' . $result->Services_details->service_nameEN . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">Age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                  
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('services');
        }
    }
    public function searchAR(Request $request){
        if ($request->ajax()) {
            if ($request->search OR $request->keyGE Or $request->keysS OR $request->keysSE OR $request->keysSA OR $request->keysJB OR $request->fmaxw OR $request->fminw) {
                $Seservices = Services::Where(function ($query1) use ($request) {
                    if ($request->search != "") {
                        $query1->where('FirstNameAR', 'Like', '%' . $request->search . '%');
                    }
                })
                    ->Where(function ($query) use ($request) {
                        if ($request->keyGE != "") {
                            $query->whereIn('Gender', $request->keyGE);
                        }
                        if ($request->keysS != "") {
                            $query->whereIn('Governorate', $request->keysS);
                        }
                        if ($request->keysSE != "") {
                            $query->whereIn('services',  $request->keysSE );
                        }
                        if ($request->keysSA != "") {
                            $query->whereIn('specialization',$request->keysSA );
                        }
                        if ($request->keysJB != "") {
                            $query->whereIn('job',$request->keysJB );
                        }
                        if ($request->fminw != "" || $request->fmaxw != "" ) {
                            $query->whereBetween('experience', [$request->fminw, $request->fmaxw]);
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

//            return view('search-services-data')->with('Seservices', $Seservices);
            $artilces = '';
            if ($request->ajax()) {
                foreach ($Seservices as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-service-pageAR/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->FirstNameAR . '</div>
                                                    <div class="subtitle-ar">' . $result->LastNameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">الخدمة</span>
                                                        <span class="data">' . $result->Services_details->service_nameAR . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                  
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                   
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('servicesAR');
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
        $services_details=Services_details::all();
        return view('auth/service-register',compact(
            'AllStates','AllGender',
            'Terms','nav_main_items','nav_submain_items',
            'cast_crew_data','services_details'));
    }
    public function RegdataAR()
    {

        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();
        $Terms=Termsandconditions::all();
        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        $services_details=Services_details::all();
        return view('auth/service-registerAR',compact(
            'AllStates','AllGender',
            'Terms','nav_main_items','nav_submain_items',
            'cast_crew_data','services_details'));
    }
    public function insertnewservice(Request $request)
    {
        $SMS_code = User_sms_verification::
        Where(function ($query1) use ($request) {
            $query1->where('verification_code', '=', $request->input('SMSCode'));
        })->get();
        if($SMS_code->count()>0) {
            $data = User_sms_verification::where("user_phone",$request->input('Phone'))->delete();
            if ($request->input('FirstNameEn') != "" And $request->input('MiddelNameEn') != "" And $request->input('LastNameEn') != "" And $request->input('FirstNameAr') != "" And $request->input('MiddelNameAr') != "" And $request->input('LastNameAr') != "" And $request->input('Email') != "" And $request->input('Phone') != "" And $request->input('Password') != "" And $request->input('noexp') != "" And $request->input('Governorate') != "" And $request->input('City') != "" And $request->input('FullAddress') != "" And $request->input('Gender') != "" And $request->input('BirthDate') != "" And $request->input('service') != "" And $request->input('ServDesc') != "") {

                if ($request->input('Password') == $request->input('Re-Password')) {
                    $files = $request->file('Image');
                    $files1 = $request->file('ProfileImage1');
                    $files2 = $request->file('ProfileImage2');

                    $filename = $files->getClientOriginalName();
                    $filename1 = $files1->getClientOriginalName();
                    $filename2 = $files2->getClientOriginalName();

                    $extension = $files->getClientOriginalExtension();
                    $extension1 = $files1->getClientOriginalExtension();
                    $extension2 = $files2->getClientOriginalExtension();

                    $fileName = "MainS" . time() . date("his") . "." . $extension;
                    $fileName1 = "P1S" . time() . date("his") . "." . $extension1;
                    $fileName2 = "P2S" . time() . date("his") . "." . $extension2;

                    $destinationPath = 'public/images/gallery' . '/';
                    $destinationPath1 = 'public/images/gellery_rectengular' . '/';


                    $files->move($destinationPath, $fileName);
                    $files1->move($destinationPath1, $fileName1);
                    $files2->move($destinationPath1, $fileName2);


                    $insertservice = new Services();
                    $insertservice->FirstNameEN = $request->input('FirstNameEn');
                    $insertservice->MiddleNameEN = $request->input('MiddelNameEn');
                    $insertservice->LastNameEN = $request->input('LastNameEn');
                    $insertservice->FirstNameAR = $request->input('FirstNameAr');
                    $insertservice->MiddleNameAR = $request->input('MiddelNameAr');
                    $insertservice->LastNameAR = $request->input('LastNameAr');
                    $insertservice->Email =$request->input('Email');
                    $insertservice->Phone = $request->input('Phone');
                    $insertservice->Password = $request->input('Password');
                    $insertservice->Country = 59;
                    $insertservice->Governorate = $request->input('Governorate');
                    $insertservice->City = $request->input('City');
                    $insertservice->Address = $request->input('FullAddress');
                    $insertservice->Gender = $request->input('Gender');
                    $insertservice->Address = $request->input('FullAddress');
                    $insertservice->BirthDate = $request->input('BirthDate');
                    $insertservice->ServDesc = $request->input('ServDesc');
                    $insertservice->experience = $request->input('noexp');
                    $insertservice->services = $request->input('service');

                    $insertservice->specialization = $request->input('speciali');

                    if ($request->input('job') != "") {
                        $insertservice->job = $request->input('job');
                    } else {
                        $insertservice->job = 1;
                    }

                    $insertservice->Image = $fileName;

                    $insertservice->ProfileImage1 = $fileName1;
                    $insertservice->ProfileImage2 = $fileName2;
                    $insertservice->Socialfacebook = $request->input('Socialfacebook');
                    $insertservice->Socialinstagram = $request->input('Socialinstagram');
                    $insertservice->Socialtwitter = $request->input('Socialtwitter');
                    $insertservice->Socialyoutube = $request->input('Socialyoutube');
                    $insertservice->Videolink = $request->input('Videolink');
                    $insertservice->Status = "0";
                    $insertservice->save();
                    return redirect('service-register')->with('status', "Inserted Successfully");
                } else {
                    return redirect('service-register')->with('warning', "Password missmath");
                }
            } else {
                return redirect('service-register')->with('warning', "You forget something");

            }
        }
        else{
                return redirect('service-register')->with('warning', "Wrong SMS code [be careful, you have 5 attempts per day]");
            }

    }
    /////////////Personal Page///////////////
    public function showservicedata($id)
    {
        $data = Services::find($id);

        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        return view('personal-service-page',compact('data','AllStates','AllGender','nav_main_items','nav_submain_items','cast_crew_data'));

    }
    public function showservicedataAR($id)
    {
        $data = Services::find($id);

        $AllStates=AllGovernorates::all();
        $AllGender=AllGender::all();

        $nav_main_items=Nav_main_items::all();
        $nav_submain_items=Nav_submain_items::all();
        $cast_crew_data=Cast_crew_data::all();
        return view('personal-service-pageAR',compact('data','AllStates','AllGender','nav_main_items','nav_submain_items','cast_crew_data'));

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
//       dd($request);

        $SMS_MSent_history = User_sms_verification_history::
        Where(function ($query1) use ($request) {
            $query1->where('created_at', 'Like', '%' . (\Carbon\Carbon::now())->format('m-d') . '%');
        })
            ->Where(function ($query) use ($request) {
                $query->where('user_phone', '=', $_POST['user_phone']);
            })
            ->get();

        if ($SMS_MSent_history->count() < 5) {
            $data = User_sms_verification::where("user_phone", $_POST['user_phone'])->delete();
            if ($_POST['user_email'] != "" And $_POST['user_phone'] != ""  ){

                $code = mt_rand(100000, 999999);

                $SMS_Sent = new User_sms_verification();
                $SMS_Sent->user_email = $_POST['user_email'];
                $SMS_Sent->user_phone = $_POST['user_phone'];
                $SMS_Sent->verification_code = $code;
                $SMS_Sent->save();

                $SMS_Sent_history = new User_sms_verification_history();
                $SMS_Sent_history->user_email = $_POST['user_email'];
                $SMS_Sent_history->user_phone = $_POST['user_phone'];
                $SMS_Sent_history->verification_code = $code;
                $SMS_Sent_history->save();

                $response =
                    Http::post('https://smsmisr.com/api/SMS/?', [
                        'username' => 'KM3iXebi',
                        'password' => '07d75c42fedde7c10a9d91e5b50a47143e66d8ac2233af55e8d732851eb167ee',
                        'language' => '1',
                        'sender' => '1b20c0db825cd3174a47ec64324cf98c4fdba1001e37a378fd4e3cb2900ab2f7',
                        'mobile' => $_POST['user_phone'],
                        'message' => "Welcome to Cast&Crew your code is :$code",
                        'environment' => '1',
                    ]);
            }
        } else {
            return redirect()->back()->withInput()->with('warning', "You have reached the maximum number of daily messages");

        }


    }
}
