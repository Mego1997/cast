<?php

namespace App\Http\Controllers;

use App\Http\Services\SMSServices;
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
use App\Models\Blogs;
use App\Models\Cast_crew_data;
use App\Models\Experiences;
use App\Models\Language;
use App\Models\Locations;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\Services;
use App\Models\Sidebar_sections;
use App\Models\Sidebaritemadmin;
use App\Models\Submenuitems;
use App\Models\Talent;
use App\Models\Termsandconditions;
use App\Models\Uniquedata;
use App\Models\User;
use App\Models\User_sms_verification;
use App\Models\User_sms_verification_history;
use Gr8Shivam\SmsApi\SmsApi;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Models;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;
use function Symfony\Component\Mime\Header\get;
use function Symfony\Component\Mime\toString;


class ModelsController extends Controller
{
    public function viewlogin(){
        return view('loginpage1');
    }


    //////////Home Page/////////////
    public function ViewModels()
    {
        $MainBlogs = Blogs::orderBy('created_at', 'desc')->take(5)->get();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        return view('welcome', compact('MainBlogs', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    public function ViewModelsAR()
    {
        $MainBlogs = Blogs::orderBy('created_at', 'desc')->take(5)->get();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        return view('welcomeAR', compact('MainBlogs', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    //////////Models Page/////////////
    public function talent_country()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('ta-country', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    public function talent_countryAR()
    {
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('ta-countryAR', compact('nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            if ($request->search OR $request->fmin_age Or $request->fmax_age OR
                $request->fmin_Height OR $request->fmax_Height OR $request->fmaxw OR
                $request->fminw OR $request->talent OR $request->Eyecolorf OR
                $request->Hairqf OR $request->Haircf OR $request->Skincf OR
                $request->Statef OR $request->Experiencesf OR $request->Languagef OR
                $request->Appearancef OR $request->Uniquef OR $request->Accentf OR
                $request->CID) {

                $results = Models::
                Where(function ($query1) use ($request) {
                    $query1->where('FirstNameEN', 'Like', '%' . $request->search . '%');
                })
                    ->Where(function ($query) use ($request) {
                        if($request->talent!=""){
                            $query-> whereIn('Talent', $request->talent);
                        }
                        if($request->Eyecolorf!=""){
                            $query->whereIn('EyeColor', $request->Eyecolorf);
                        }
                         if($request->Genderf!=""){
                            $query-> whereIn('Gender', $request->Genderf);
                        }
                         if($request->Hairqf!=""){
                            $query-> whereIn('HairQuality', $request->Hairqf);
                        }
                         if($request->Haircf!=""){
                            $query-> whereIn('HairColor', $request->Haircf);
                        }
                         if($request->Skincf!=""){
                            $query-> whereIn('SkinColor', $request->Skincf);
                        }
                         if($request->Statef!=""){
                            $query-> whereIn('Governorate', $request->Statef);
                        }
                         if($request->Experiencesf!=""){
                            $query-> whereIn('Experiences', $request->Experiencesf);
                        }
                         if($request->Languagef!=""){
                            $query-> whereIn('Language', $request->Languagef);
                        }
                         if($request->Appearancef!=""){
                            $query-> whereIn('Appearance', $request->Appearancef);
                        }
                         if($request->Uniquef!=""){
                            $query-> whereIn('Uniquedata', $request->Uniquef);
                        }
                         if($request->Accentf!=""){
                            $query-> whereIn('Accent', $request->Accentf);
                        }
                         if($request->fmax_age!="" || $request->fmin_age!=""){
                            $query-> whereBetween('BirthDate', [$request->fmin_age, $request->fmax_age]);
                        }
                         if($request->fmin_Height!="" || $request->fmax_Height!=""){
                            $query-> whereBetween('Height', [$request->fmin_Height, $request->fmax_Height]);
                        }
                         if($request->fminw!="" || $request->fmaxw!=""){
                            $query-> whereBetween('Weight', [$request->fminw, $request->fmaxw]);
                        }




//                        $query->whereIn('EyeColor', $request->Eyecolorf)
//                            ->whereIn('Gender', $request->Genderf)
//                            ->whereIn('HairQuality', $request->Hairqf)
//                            ->whereIn('HairColor', $request->Haircf)
//                            ->whereIn('SkinColor', $request->Skincf)
//                            ->whereIn('Governorate', $request->Statef)
//                            ->whereIn('Experiences', $request->Experiencesf)
//                            ->whereIn('Language', $request->Languagef)
//                            ->whereIn('Appearance', $request->Appearancef)
//                            ->whereIn('Uniquedata', $request->Uniquef)
//                            ->whereIn('Accent', $request->Accentf)
//                            ->whereBetween('BirthDate', [$request->fmin_age, $request->fmax_age])
//                            ->whereBetween('Height', [$request->fmin_Height, $request->fmax_Height])
//                            ->whereBetween('Weight', [$request->fminw, $request->fmaxw])
//                            ->where('Country', '=', $request->CID)
//                            ->where('Status', '=', '1');
                    })
                    ->where('Country', '=', $request->CID)
                    ->where('Status', '=', '1')
                    ->paginate(12);
            }
//            return view('search')->with('SeModels', $SeModels);
            $artilces = '';
            if ($request->ajax()) {
                foreach ($results as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-talent-page/' . $result->id . '" class="item-media h-100 w-100 d-block">

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
                                                        <span class="title">height</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">weight</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">eyes</span>
                                                        <span class="data">' . $result->eyecolor->ColorEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.Q</span>
                                                        <span class="data">' . $result->hairquality->HairQualityEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.C</span>
                                                        <span class="data">' . $result->haircolor->HairColorEN . '</span>
                                                    </li>
                                                    
                                                  
                                                    <li>
                                                        <span class="title">Talent</span>
                                                        <span class="data">' . $result->talent->TalentNameEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >Skin.C</span>
                                                        <span class="data">' . $result->skincolor->SkinColorEN . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('models');
        }


    }

    public function searchAR(Request $request)
    {
        if ($request->ajax()) {
            if ($request->search OR $request->fmin_age Or $request->fmax_age OR
                $request->fmin_Height OR $request->fmax_Height OR $request->fmaxw OR
                $request->fminw OR $request->talent OR $request->Eyecolorf OR
                $request->Hairqf OR $request->Haircf OR $request->Skincf OR
                $request->Statef OR $request->Experiencesf OR $request->Languagef OR
                $request->Appearancef OR $request->Uniquef OR $request->Accentf OR
                $request->CID) {

                $results = Models::
                Where(function ($query1) use ($request) {
                    $query1->where('FirstNameAR', 'Like', '%' . $request->search . '%');
                })
                    ->Where(function ($query) use ($request) {
                        if($request->talent!=""){
                            $query-> whereIn('Talent', $request->talent);
                        }
                        if($request->Eyecolorf!=""){
                            $query->whereIn('EyeColor', $request->Eyecolorf);
                        }
                        if($request->Genderf!=""){
                            $query-> whereIn('Gender', $request->Genderf);
                        }
                        if($request->Hairqf!=""){
                            $query-> whereIn('HairQuality', $request->Hairqf);
                        }
                        if($request->Haircf!=""){
                            $query-> whereIn('HairColor', $request->Haircf);
                        }
                        if($request->Skincf!=""){
                            $query-> whereIn('SkinColor', $request->Skincf);
                        }
                        if($request->Statef!=""){
                            $query-> whereIn('Governorate', $request->Statef);
                        }
                        if($request->Experiencesf!=""){
                            $query-> whereIn('Experiences', $request->Experiencesf);
                        }
                        if($request->Languagef!=""){
                            $query-> whereIn('Language', $request->Languagef);
                        }
                        if($request->Appearancef!=""){
                            $query-> whereIn('Appearance', $request->Appearancef);
                        }
                        if($request->Uniquef!=""){
                            $query-> whereIn('Uniquedata', $request->Uniquef);
                        }
                        if($request->Accentf!=""){
                            $query-> whereIn('Accent', $request->Accentf);
                        }
                        if($request->fmax_age!="" || $request->fmin_age!=""){
                            $query-> whereBetween('BirthDate', [$request->fmin_age, $request->fmax_age]);
                        }
                        if($request->fmin_Height!="" || $request->fmax_Height!=""){
                            $query-> whereBetween('Height', [$request->fmin_Height, $request->fmax_Height]);
                        }
                        if($request->fminw!="" || $request->fmaxw!=""){
                            $query-> whereBetween('Weight', [$request->fminw, $request->fmaxw]);
                        }
                    })
                    ->where('Country', '=', $request->CID)
                    ->where('Status', '=', '1')
                    ->paginate(12);
            }

            $artilces = '';
            if ($request->ajax()) {
                foreach ($results as $result) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="personal-talent-page/' . $result->ID . '" class="item-media h-100 w-100 d-block">

                                                <img src="../public/images/gallery/' . $result->Image . '" alt="img">
                                                <div class="media-links"></div>
                                            </a>
                                            <div class="item-content">
                                                <div class="item-title item-title-ar">
                                                    <div class="title">' . $result->FirstNameAR . '</div>
                                                    <div class="subtitle subtitle-ar">' . $result->LastNameAR . '</div>
                                                </div>
                                                <ul class="model-data">
                                                    <li>
                                                        <span class="title">الطول</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الوزن</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العين</span>
                                                        <span class="data">' . $result->eyecolor->ColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الشعر</span>
                                                        <span class="data">' . $result->hairquality->HairQualityAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">لون الشعر</span>
                                                        <span class="data">' . $result->haircolor->HairColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الموهبة</span>
                                                        <span class="data">' . $result->talent->TalentNameAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >البشرة</span>
                                                        <span class="data">' . $result->skincolor->SkinColorAR . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
                return $artilces;
            }
            return view('talentAR');
        }


    }


    public function ViewAllModels(Request $request, $id)
    {

        $results = Models::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);

        $AllEyes = AllEyeColor::all();

        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }

        $AllGender = AllGender::all();
        $AllHairQuality = AllHairQuality::all();
        $AllHairColor = ALLHairColor::all();
        $AllSkinColor = AllSkinColor::all();
        $AllTalent = AllTalent::all();
        $countries = AllCountries::all();
        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();
        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        $CID = $id;
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                if ($result->City == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-talent-page/' . $result->id . '" class="item-media h-100 w-100 d-block">

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
                                                        <span class="title">height</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">weight</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">eyes</span>
                                                        <span class="data">' . $result->eyecolor->ColorEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.Q</span>
                                                        <span class="data">' . $result->hairquality->HairQualityEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.C</span>
                                                        <span class="data">' . $result->haircolor->HairColorEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Country</span>
                                                        <span class="data">' . $result->AllCountries->name_en . '</span>
                                                    </li>
                                                   
                                                    <li>
                                                        <span class="title">Talent</span>
                                                        <span class="data">' . $result->talent->TalentNameEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >Skin.C</span>
                                                        <span class="data">' . $result->skincolor->SkinColorEN . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-talent-page/' . $result->id . '" class="item-media h-100 w-100 d-block">

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
                                                        <span class="title">height</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">weight</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">age</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">eyes</span>
                                                        <span class="data">' . $result->eyecolor->ColorEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.Q</span>
                                                        <span class="data">' . $result->hairquality->HairQualityEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">hair.C</span>
                                                        <span class="data">' . $result->haircolor->HairColorEN . '</span>
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
                                                        <span class="title">Talent</span>
                                                        <span class="data">' . $result->talent->TalentNameEN . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Gender</span>
                                                        <span class="data">' . $result->gender->GenderEN . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >Skin.C</span>
                                                        <span class="data">' . $result->skincolor->SkinColorEN . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('models', compact('AllEyes',
            'AllStates', 'AllGender', 'AllHairQuality',
            'AllHairColor', 'AllSkinColor', 'AllTalent', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data', 'AllExperiences', 'AllLanguage',
            'AllAppearance', 'AllUniquedata', 'AllAccent', 'CID', 'all_states'));

    }

    public function ViewAllModelsAR(Request $request, $id)
    {

        $results = Models::where('Status', '=', '1')->where('Country', '=', $id)->paginate(12);

        $AllEyes = AllEyeColor::all();
        if ($id == '59') {
            $AllStates = AllGovernorates::all();
            $all_states = "";
        } else {
            $AllStates = "";
            $all_states = all_states::where('country_id', '=', $id)->get();
        }
        $AllGender = AllGender::all();
        $AllHairQuality = AllHairQuality::all();
        $AllHairColor = ALLHairColor::all();
        $AllSkinColor = AllSkinColor::all();
        $AllTalent = AllTalent::all();
        $countries = AllCountries::all();

        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();
        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        $CID = $id;

        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                if ($result->City == 200000) {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-talent-pageAR/' . $result->id . '" class="item-media h-100 w-100 d-block">

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
                                                        <span class="title">الطول</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الوزن</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">لون العين</span>
                                                        <span class="data">' . $result->eyecolor->ColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الشعر</span>
                                                        <span class="data">' . $result->hairquality->HairQualityAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">لون الشعر</span>
                                                        <span class="data">' . $result->haircolor->HairColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    
                                                    <li>
                                                        <span class="title">الموهبة</span>
                                                        <span class="data">' . $result->talent->TalentNameAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >البشرة</span>
                                                        <span class="data">' . $result->skincolor->SkinColorAR . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                } else {
                    $artilces .= '<div class="col-xl-3 col-sm-6 " style="padding: 20px">
                                        <div class="vertical-item item-gallery content-absolute text-center ds">
                                            <a href="../personal-talent-pageAR/' . $result->id . '" class="item-media h-100 w-100 d-block">

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
                                                        <span class="title">الطول</span>
                                                        <span class="data">' . $result->Height . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الوزن</span>
                                                        <span class="data">' . $result->Weight . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">العمر</span>
                                                        <span class="data">' . Carbon::parse($result->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">لون العين</span>
                                                        <span class="data">' . $result->eyecolor->ColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الشعر</span>
                                                        <span class="data">' . $result->hairquality->HairQualityAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">لون الشعر</span>
                                                        <span class="data">' . $result->haircolor->HairColorAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">البلد</span>
                                                        <span class="data">' . $result->AllCountries->name_ar . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">المحافظة</span>
                                                        <span class="data">' . $result->governorates->governorate_name_ar . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">الموهبة</span>
                                                        <span class="data">' . $result->talent->TalentNameAR . '</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">النوع</span>
                                                        <span class="data">' . $result->gender->GenderAR . '</span>
                                                    </li>
                                                    <li style="width: 31%">
                                                        <span class="title" >البشرة</span>
                                                        <span class="data">' . $result->skincolor->SkinColorAR . '</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                }
            }
            return $artilces;
        }
        return view('talentAR', compact('AllEyes',
            'AllStates', 'AllGender', 'AllHairQuality',
            'AllHairColor', 'AllSkinColor', 'AllTalent', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data', 'AllExperiences', 'AllLanguage',
            'AllAppearance', 'AllUniquedata', 'AllAccent','CID', 'all_states'));

    }


    //////////Dashboard Page/////////////
    public function index()
    {

        if (Auth::check()) {
            $AllModels = Models::paginate(8);
            $AllEyes = AllEyeColor::all();
            $AllStates = AllGovernorates::all();
            $AllGender = AllGender::all();
            $AllHairQuality = AllHairQuality::all();
            $AllHairColor = ALLHairColor::all();
            $AllSkinColor = AllSkinColor::all();
            $AllTalent = AllTalent::all();
            $Sidebaritemadmin = Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems = Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions = Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            $AllModelsin = Models::all();
            $Allservicesin = Services::all();
            $Alllocationsin = Locations::all();
            $modelsCount = $AllModelsin->count();
            $servicesCount = $Allservicesin->count();
            $locationsCount = $Alllocationsin->count();
            //////////egypt counter///////
            $Allegypt = Models::where('country','=','59');
            $EgyptCount = $Allegypt->count();
            //////////egypt counter///////
            $AllSyria = Models::where('country','=','195');
            $SyriaCount = $AllSyria->count();
            //////////egypt counter///////
            $AllLebnanon = Models::where('country','=','116');
            $LebnanonCount = $AllLebnanon->count();

            return view('admin/home', compact('AllEyes', 'AllStates',
                'AllGender', 'AllHairQuality', 'AllHairColor', 'AllSkinColor',
                'AllTalent', 'AllModels', 'Sidebaritemadmin', 'Submenuitems',
                'sidebar_setions', 'modelsCount', 'servicesCount', 'locationsCount',
                'EgyptCount','SyriaCount','LebnanonCount'));

        } else {
            // user is not logged in
            return redirect('/login');

            // redirect back to login

            // return redirect('/login');
        }


    }

    public function ViewAllaModels()
    {

        if (Auth::check()) {
            $AllModels = Models::all();
            $AllEyes = AllEyeColor::all();
            $AllStates = AllGovernorates::all();
            $AllGender = AllGender::all();
            $AllHairQuality = AllHairQuality::all();
            $AllHairColor = ALLHairColor::all();
            $AllSkinColor = AllSkinColor::all();
            $AllTalent = AllTalent::all();
            $Sidebaritemadmin = Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems = Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions = Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/amodels', compact('AllEyes', 'AllStates', 'AllGender', 'AllHairQuality', 'AllHairColor', 'AllSkinColor', 'AllTalent', 'AllModels', 'Sidebaritemadmin', 'Submenuitems', 'sidebar_setions'));
        } else {
            return redirect('/login');
        }


    }

    public function ViewInsertData(Request $request)
    {
        if (Auth::check()) {
            $AllEyes = AllEyeColor::all();
            $countries = AllCountries::all();
            $AllStates = AllGovernorates::all();
            $AllGender = AllGender::all();
            $AllHairQuality = AllHairQuality::all();
            $AllHairColor = ALLHairColor::all();
            $AllSkinColor = AllSkinColor::all();
            $AllTalent = AllTalent::all();
            $AllExperiences = Experiences::all();
            $AllLanguage = Language::all();
            $AllAppearance = Appearance::all();
            $AllUniquedata = Uniquedata::all();
            $AllAccent = Accent::all();
            $Sidebaritemadmin = Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems = Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions = Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/insert', compact('AllEyes', 'AllStates', 'AllGender'
                , 'AllHairQuality', 'AllHairColor', 'AllSkinColor'
                , 'AllTalent', 'Sidebaritemadmin', 'Submenuitems'
                , 'sidebar_setions', 'AllExperiences', 'AllLanguage',
                'AllAppearance', 'AllUniquedata', 'AllAccent', 'countries'));
        } else {
            return redirect('/login');
        }
    }

    public function delete($id)
    {

        $image = Models::find($id);
        if ($image->Image != "") {
            unlink("public/images/gallery/" . $image->Image);
        }
        if ($image->ProfileImage1 != "") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage1);
        }
        if ($image->ProfileImage2 != "") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage2);
        }
        if ($image->ProfileImage3 != "") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage3);
        }
        if ($image->ProfileImage4 != "") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage4);
        }
        if ($image->ThubImage != "") {
            unlink("public/images/blog/" . $image->ThubImage);
        }

        $data = Models::where("id", $id)->delete();
        return redirect('amodels')->with('status', "Deleted Successfully");
    }

    public function update(Request $request, $id)
    {
        if (Auth::check()) {


            if ($request->file('Image')) {
                $image = Models::find($id);
                if ($image->Image != "") {
                    unlink("public/images/gallery/" . $image->Image);
                }

                $files = $request->file('Image');
                $filename = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $fileName = "Main" . time() . date("his") . "." . $extension;
                $destinationPath = 'public/images/gallery' . '/';
                $files->move($destinationPath, $fileName);
                $image = $fileName;
                $insertmodel = Models::where("id", $id)->update(["Image" => $image]);
                //$Image=$request->input('ImageName');
            }

            if ($request->file('ProfileImage1')) {

                $image = Models::find($id);
                if ($image->ProfileImage1 != "") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage1);
                }

                $files1 = $request->file('ProfileImage1');
                $filename1 = $files1->getClientOriginalName();
                $extension1 = $files1->getClientOriginalExtension();
                $fileName1 = "P1" . time() . date("his") . "." . $extension1;
                $destinationPath1 = 'public/images/gellery_rectengular' . '/';
                $files1->move($destinationPath1, $fileName1);
                $ProfileImage1 = $fileName1;
                $insertmodel = Models::where("id", $id)->update(["ProfileImage1" => $ProfileImage1]);
            }

            if ($request->file('ProfileImage2')) {

                $image = Models::find($id);
                if ($image->ProfileImage2 != "") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage2);
                }

                $files2 = $request->file('ProfileImage2');
                $filename2 = $files2->getClientOriginalName();
                $extension2 = $files2->getClientOriginalExtension();
                $fileName2 = "P2" . time() . date("his") . "." . $extension2;
                $destinationPath2 = 'public/images/gellery_rectengular' . '/';
                $files2->move($destinationPath2, $fileName2);
                $ProfileImage2 = $fileName2;
                $insertmodel = Models::where("id", $id)->update(["ProfileImage2" => $ProfileImage2]);
            }

            if ($request->file('ProfileImage3')) {

                $image = Models::find($id);
                if ($image->ProfileImage3 != "") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage3);
                }

                $files3 = $request->file('ProfileImage3');
                $filename3 = $files3->getClientOriginalName();
                $extension3 = $files3->getClientOriginalExtension();
                $fileName3 = "P3" . time() . date("his") . "." . $extension3;
                $destinationPath3 = 'public/images/gellery_rectengular' . '/';
                $files3->move($destinationPath3, $fileName3);
                $ProfileImage3 = $fileName3;
                $insertmodel = Models::where("id", $id)->update(["ProfileImage3" => $ProfileImage3]);
            }

            if ($request->file('ProfileImage4')) {
                $image = Models::find($id);
                if ($image->ProfileImage4 != "") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage4);
                }

                $files4 = $request->file('ProfileImage4');
                $filename4 = $files4->getClientOriginalName();
                $extension4 = $files4->getClientOriginalExtension();
                $fileName4 = "P4" . time() . date("his") . "." . $extension4;
                $destinationPath4 = 'public/images/gellery_rectengular' . '/';
                $files4->move($destinationPath4, $fileName4);
                $ProfileImage4 = $fileName4;
                $insertmodel = Models::where("id", $id)->update(["ProfileImage4" => $ProfileImage4]);
            }
            if ($request->file('Thumbnail')) {
                $image = Models::find($id);
                if ($image->Thumbnail != "") {
                    unlink("public/images/blog/" . $image->Thumbnail);
                }

                $files5 = $request->file('Thumbnail');
                $filename5 = $files5->getClientOriginalName();
                $extension5 = $files5->getClientOriginalExtension();
                $fileName5 = "Th" . time() . date("his") . "." . $extension5;
                $destinationPath5 = 'public/images/blog' . '/';
                $files5->move($destinationPath5, $fileName5);
                $Thumbnail = $fileName5;
                $insertmodel = Models::where("id", $id)->update(["ThubImage" => $Thumbnail]);
            }

            $insertmodel = Models::where("id", $id)->update(["FirstNameEN" => $request->input('FirstNameEn'),
                    "MiddleNameEN" => $request->input('MiddelNameEn'),
                    "LastNameEN" => $request->input('LastNameEn'),
                    "FirstNameAR" => $request->input('FirstNameAr'),
                    "MiddleNameAR" => $request->input('MiddelNameAr'),
                    "LastNameAR" => $request->input('LastNameAr'),
                    "Talent" => $request->input('Talent'),
                    "Governorate" => $request->input('Governorate'),
                    "City" => $request->input('City'),
                    "Address" => $request->input('FullAddress'),
                    "Gender" => $request->input('Gender'),
                    "BirthDate" => $request->input('BirthDate'),
                    "Height" => $request->input('Height'),
                    "EyeColor" => $request->input('EyeColor'),
                    "SkinColor" => $request->input('SkinColor'),
                    "Weight" => $request->input('Weight'),
                    "HairQuality" => $request->input('HairQuality'),
                    "HairColor" => $request->input('HairColor'),

                    "Experiences" => $request->input('Experiences'),
                    "Language" => $request->input('Language'),
                    "Appearance" => $request->input('Appearance'),
                    "Uniquedata" => $request->input('Unique'),
                    "Accent" => $request->input('Accent'),

                    "ModelDesc" => $request->input('ModelDesc'),
                    "ModelDescAR" => $request->input('ModelDescAR'),
                    "Socialfacebook" => $request->input('Socialfacebook'),
                    "Socialinstagram" => $request->input('Socialinstagram'),
                    "Socialtwitter" => $request->input('Socialtwitter'),
                    "Socialyoutube" => $request->input('Socialyoutube'),
                    "Videolink" => $request->input('Videolink'),
                    "Status" => $request->input('Status')]
            );

            return redirect('amodels')->with('status', "Data Updated");
        } else {
            return redirect('/login');

        }

    }

    public function showeditdata($id)
    {
        if (Auth::check()) {
            $data = Models::find($id);
            $AllEyes = AllEyeColor::all();
            $AllStates = AllGovernorates::all();
            $AllGender = AllGender::all();
            $AllHairQuality = AllHairQuality::all();
            $AllHairColor = ALLHairColor::all();
            $AllSkinColor = AllSkinColor::all();
            $AllTalent = AllTalent::all();
            $AllExperiences = Experiences::all();
            $AllLanguage = Language::all();
            $AllAppearance = Appearance::all();
            $AllUniquedata = Uniquedata::all();
            $AllAccent = Accent::all();
            $All_states = all_states::all();
            $Sidebaritemadmin = Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems = Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions = Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            return view('admin/edit-model', compact('data', 'AllEyes', 'AllStates', 'AllGender',
                'AllHairQuality', 'AllHairColor', 'AllSkinColor',
                'AllTalent', 'Sidebaritemadmin', 'Submenuitems',
                'sidebar_setions', 'AllExperiences', 'AllLanguage',
                'AllAppearance', 'AllUniquedata', 'AllAccent','All_states'));
        } else {
            return redirect('/login');

        }


    }

    public function insert(Request $request)
    {
        if (Auth::check()) {

            $files = $request->file('Image');
            $files1 = $request->file('ProfileImage1');
            $files2 = $request->file('ProfileImage2');
            $files3 = $request->file('ProfileImage3');
            $files4 = $request->file('ProfileImage4');
            $files5 = $request->file('Thumbnail');

            $filename = $files->getClientOriginalName();
            $filename1 = $files1->getClientOriginalName();
            $filename2 = $files2->getClientOriginalName();
            $filename3 = $files3->getClientOriginalName();
            $filename4 = $files4->getClientOriginalName();
            $filename5 = $files5->getClientOriginalName();

            $extension = $files->getClientOriginalExtension();
            $extension1 = $files1->getClientOriginalExtension();
            $extension2 = $files2->getClientOriginalExtension();
            $extension3 = $files3->getClientOriginalExtension();
            $extension4 = $files4->getClientOriginalExtension();
            $extension5 = $files5->getClientOriginalExtension();

            $fileName = "Main" . time() . date("his") . "." . $extension;
            $fileName1 = "P1" . time() . date("his") . "." . $extension;
            $fileName2 = "P2" . time() . date("his") . "." . $extension;
            $fileName3 = "P3" . time() . date("his") . "." . $extension;
            $fileName4 = "P4" . time() . date("his") . "." . $extension;
            $fileName5 = "Th5" . time() . date("his") . "." . $extension;

            $destinationPath = 'public/images/gallery' . '/';
            $destinationPath1 = 'public/images/gellery_rectengular' . '/';
            $destinationPath2 = 'public/images/blog' . '/';

            $files->move($destinationPath, $fileName);
            $files1->move($destinationPath1, $fileName1);
            $files2->move($destinationPath1, $fileName2);
            $files3->move($destinationPath1, $fileName3);
            $files4->move($destinationPath1, $fileName4);
            $files5->move($destinationPath2, $fileName5);

            $insertmodel = new Models();
            $insertmodel->FirstNameEN = $request->input('FirstNameEn');
            $insertmodel->MiddleNameEN = $request->input('MiddelNameEn');
            $insertmodel->LastNameEN = $request->input('LastNameEn');
            $insertmodel->FirstNameAR = $request->input('FirstNameAr');
            $insertmodel->MiddleNameAR = $request->input('MiddelNameAr');
            $insertmodel->LastNameAR = $request->input('LastNameAr');
            $insertmodel->Email = $request->input('Email');
            $insertmodel->Phone = $request->input('Phone');
            $insertmodel->Password = $request->input('Password');
            $insertmodel->Talent = $request->input('Talent');
            $insertmodel->Country = $request->input('Country');
            $insertmodel->Governorate = $request->input('Governorate');
            $insertmodel->City = $request->input('City');
            if ($request->input('City') != "") {
                $insertmodel->City = $request->input('City');
            } else {
                $insertmodel->City = 200000;
            }
            $insertmodel->Address = $request->input('FullAddress');
            $insertmodel->Gender = $request->input('Gender');
            $insertmodel->BirthDate = $request->input('BirthDate');
            $insertmodel->Height = $request->input('Height');
            $insertmodel->EyeColor = $request->input('EyeColor');
            $insertmodel->SkinColor = $request->input('SkinColor');
            $insertmodel->Weight = $request->input('Weight');
            $insertmodel->HairQuality = $request->input('HairQuality');
            $insertmodel->HairColor = $request->input('HairColor');
            $insertmodel->ModelDesc = $request->input('ModelDesc');
            $insertmodel->ModelDescAR = $request->input('ModelDescAR');
            $insertmodel->Experiences = $request->input('Experiences');
            $insertmodel->Language = $request->input('Language');
            $insertmodel->Appearance = $request->input('Appearance');
            $insertmodel->Uniquedata = $request->input('Unique');
            $insertmodel->Accent = $request->input('Accent');

            $insertmodel->Image = $fileName;

            $insertmodel->ProfileImage1 = $fileName1;
            $insertmodel->ProfileImage2 = $fileName2;
            $insertmodel->ProfileImage3 = $fileName3;
            $insertmodel->ProfileImage4 = $fileName4;
            $insertmodel->ThubImage = $fileName5;

            $insertmodel->Socialfacebook = $request->input('Socialfacebook');
            $insertmodel->Socialinstagram = $request->input('Socialinstagram');
            $insertmodel->Socialtwitter = $request->input('Socialtwitter');
            $insertmodel->Socialyoutube = $request->input('Socialyoutube');
            $insertmodel->Videolink = $request->input('Videolink');
            $insertmodel->Status = "1";

            $insertmodel->save();
            return redirect('amodels')->with('status', "Inserted Successfully");

        } else {
            return redirect('/login');
        }
    }

    //////////Model-Register Page/////////////
    public function Regdata()
    {
        $AllEyes = AllEyeColor::all();
        $AllStates = AllGovernorates::all();
        $AllGender = AllGender::all();
        $AllHairQuality = AllHairQuality::all();
        $AllHairColor = ALLHairColor::all();
        $AllSkinColor = AllSkinColor::all();
        $AllTalent = AllTalent::all();
        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();
        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $Terms = Termsandconditions::all();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('auth/model-register', compact('AllEyes',
            'AllStates', 'AllGender', 'AllHairQuality',
            'AllHairColor', 'AllSkinColor', 'AllTalent',
            'Terms', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data', 'AllExperiences', 'AllLanguage',
            'AllAppearance', 'AllUniquedata', 'AllAccent'));
    }

    public function RegdataAR()
    {
        $AllEyes = AllEyeColor::all();
        $AllStates = AllGovernorates::all();
        $AllGender = AllGender::all();
        $AllHairQuality = AllHairQuality::all();
        $AllHairColor = ALLHairColor::all();
        $AllSkinColor = AllSkinColor::all();
        $AllTalent = AllTalent::all();
        $AllExperiences = Experiences::all();
        $AllLanguage = Language::all();
        $AllAppearance = Appearance::all();
        $AllUniquedata = Uniquedata::all();
        $AllAccent = Accent::all();
        $Terms = Termsandconditions::all();
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        return view('auth/model-registerAR', compact('AllEyes',
            'AllStates', 'AllGender', 'AllHairQuality',
            'AllHairColor', 'AllSkinColor', 'AllTalent',
            'Terms', 'nav_main_items', 'nav_submain_items',
            'cast_crew_data', 'AllExperiences', 'AllLanguage',
            'AllAppearance', 'AllUniquedata', 'AllAccent'));
    }

    public function insertnewuser(Request $request)
    {

        $SMS_code = User_sms_verification::
        Where(function ($query1) use ($request) {
            $query1->where('verification_code', '=', $request->input('SMSCode'));
        })->get();
        if($SMS_code->count()>0) {
            $data = User_sms_verification::where("user_phone",$request->input('Phone'))->delete();
            if ($request->input('FirstNameEn') != "" And $request->input('MiddelNameEn') != "" And $request->input('LastNameEn') != "" And $request->input('FirstNameAr') != "" And $request->input('MiddelNameAr') != "" And $request->input('LastNameAr') != "" And $request->input('Email') != "" And $request->input('Phone') != "" And $request->input('Password') != "" And $request->input('Talent') != "" And $request->input('Governorate') != "" And $request->input('City') != "" And $request->input('FullAddress') != "" And $request->input('Gender') != "" And $request->input('BirthDate') != "" And $request->input('Height') != "" And $request->input('EyeColor') != "" And $request->input('SkinColor') != "" And $request->input('Weight') != "" And $request->input('HairQuality') != "" And $request->input('HairColor') != "" And $request->input('ModelDesc') != "") {

                if ($request->input('Password') == $request->input('Re-Password')) {
                    $files = $request->file('Image');
                    $files1 = $request->file('ProfileImage1');
                    $files2 = $request->file('ProfileImage2');
                    $files3 = $request->file('ProfileImage3');
                    $files4 = $request->file('ProfileImage4');
                    $files5 = $request->file('Thumbnail');

//                    $filename = $files->getClientOriginalName();
//                    $filename1 = $files1->getClientOriginalName();
//                    $filename2 = $files2->getClientOriginalName();
//                    $filename3 = $files3->getClientOriginalName();
//                    $filename4 = $files4->getClientOriginalName();
//                    $filename5 = $files5->getClientOriginalName();

                    $extension = $files->getClientOriginalExtension();
                    $extension1 = $files1->getClientOriginalExtension();
                    $extension2 = $files2->getClientOriginalExtension();
                    $extension3 = $files3->getClientOriginalExtension();
                    $extension4 = $files4->getClientOriginalExtension();
                    $extension5 = $files5->getClientOriginalExtension();

                    $fileName = "Main" . time() . date("his") . "." . $extension;
                    $fileName1 = "P1" . time() . date("his") . "." . $extension1;
                    $fileName2 = "P2" . time() . date("his") . "." . $extension2;
                    $fileName3 = "P3" . time() . date("his") . "." . $extension3;
                    $fileName4 = "P4" . time() . date("his") . "." . $extension4;
                    $fileName5 = "Th5" . time() . date("his") . "." . $extension5;

                    $destinationPath = 'public/images/gallery' . '/';
                    $destinationPath1 = 'public/images/gellery_rectengular' . '/';
                    $destinationPath2 = 'public/images/blog' . '/';

                    $files->move($destinationPath, $fileName);
                    $files1->move($destinationPath1, $fileName1);
                    $files2->move($destinationPath1, $fileName2);
                    $files3->move($destinationPath1, $fileName3);
                    $files4->move($destinationPath1, $fileName4);
                    $files5->move($destinationPath2, $fileName5);

                    $insertmodel = new Models();
                    $insertmodel->FirstNameEN = $request->input('FirstNameEn');
                    $insertmodel->MiddleNameEN = $request->input('MiddelNameEn');
                    $insertmodel->LastNameEN = $request->input('LastNameEn');
                    $insertmodel->FirstNameAR = $request->input('FirstNameAr');
                    $insertmodel->MiddleNameAR = $request->input('MiddelNameAr');
                    $insertmodel->LastNameAR = $request->input('LastNameAr');
                    $insertmodel->Email = $request->input('Email');
                    $insertmodel->Phone = $request->input('Phone');
                    $insertmodel->Password = $request->input('Password');
                    $insertmodel->Talent = $request->input('Talent');
                    $insertmodel->Country = 59;
                    $insertmodel->Governorate = $request->input('Governorate');
                    $insertmodel->City = $request->input('City');
                    $insertmodel->Address = $request->input('FullAddress');
                    $insertmodel->Gender = $request->input('Gender');
                    $insertmodel->BirthDate = $request->input('BirthDate');
                    $insertmodel->Height = $request->input('Height');
                    $insertmodel->EyeColor = $request->input('EyeColor');
                    $insertmodel->SkinColor = $request->input('SkinColor');
                    $insertmodel->Weight = $request->input('Weight');
                    $insertmodel->HairQuality = $request->input('HairQuality');
                    $insertmodel->HairColor = $request->input('HairColor');
                    $insertmodel->ModelDesc = $request->input('ModelDesc');
                    $insertmodel->ModelDescAR = $request->input('ModelDescAR');
                    $insertmodel->Experiences = $request->input('Experiences');
                    $insertmodel->Language = $request->input('Language');
                    $insertmodel->Appearance = $request->input('Appearance');
                    $insertmodel->Uniquedata = $request->input('Unique');
                    $insertmodel->Accent = $request->input('Accent');

                    $insertmodel->Image = $fileName;

                    $insertmodel->ProfileImage1 = $fileName1;
                    $insertmodel->ProfileImage2 = $fileName2;
                    $insertmodel->ProfileImage3 = $fileName3;
                    $insertmodel->ProfileImage4 = $fileName4;
                    $insertmodel->ThubImage = $fileName5;

                    $insertmodel->Socialfacebook = $request->input('Socialfacebook');
                    $insertmodel->Socialinstagram = $request->input('Socialinstagram');
                    $insertmodel->Socialtwitter = $request->input('Socialtwitter');
                    $insertmodel->Socialyoutube = $request->input('Socialyoutube');
                    $insertmodel->Videolink = $request->input('Videolink');
                    $insertmodel->Status = "0";
                    $insertmodel->save();

                    User::create([
                        'name' => $request->input('FirstNameEn'),
                        'email' => $request->input('Email'),
                        'password' => Hash::make($request->input('Password')),
                    ]);

                    return redirect('model-register')->with('status', "Your Acoount Inserted Successfully - Need Admin Approve");
                } else {
                    return redirect('model-register')->with('warning', "Password missmath");
                }
            } else {
                return redirect('model-register')->with('warning', "You forget something");
            }
        } else {
            return redirect('model-register')->with('warning', "Wrong SMS code [be careful, you have 5 attempts per day]");
        }

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
//            $data = User_sms_verification::where("user_phone", $_POST['user_phone'])->delete();
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
            }else {
                return redirect()->back()->withInput()->with('warning', "You Forget Some Data");

            }
        } else {
            return redirect()->back()->withInput()->with('warning', "You have reached the maximum number of daily messages");

        }


    }
}
