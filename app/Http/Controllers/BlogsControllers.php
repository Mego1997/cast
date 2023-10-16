<?php

namespace App\Http\Controllers;

use App\Models\Accent;
use App\Models\all_states;
use App\Models\AllEyeColor;
use App\Models\AllGender;
use App\Models\AllGovernorates;
use App\Models\ALLHairColor;
use App\Models\AllHairQuality;
use App\Models\AllSkinColor;
use App\Models\AllTalent;
use App\Models\Appearance;
use App\Models\Blogs;
use App\Models\Cities;
use App\Models\Experiences;
use App\Models\Eyecolor;
use App\Models\Gender;
use App\Models\Governorate;
use App\Models\Haircolor;
use App\Models\Hairquality;
use App\Models\Language;
use App\Models\LocationsTypes;
use App\Models\Models;
use App\Models\jobs;
use App\Models\Ordersqueries;
use App\Models\Services;
use App\Models\Services_details;
use App\Models\SkinColor;
use App\Models\Specializations;
use App\Models\Talent;
use App\Models\Talents;
use App\Models\Locations;
use App\Models\AllCountries;
use App\Models\Cast_crew_data;
use App\Models\Nav_main_items;
use App\Models\Nav_submain_items;
use App\Models\Uniquedata;
use App\Models\User;
use App\Models\User_sms_verification;
use App\Models\User_sms_verification_history;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Null_;

class BlogsControllers extends Controller
{
    // Start api's

    // all blogs
    public function blog()
    {
        return response([
            'blog' => Blog::orderby('created_at', 'desc')->get()

        ], 200);
    }

    // show blog
    public function show_blog($id){
        return response([
            'blog' => Blogs::where('ID',$id)->get()

        ],200);
    }


    // all models
    public function models(Models $models)
    {

        $models = Models::with('Talent', 'EyeColor', 'governorates' ,'AllCountries' , 'city', 'Gender', 'SkinColor' , 'HairQuality', 'HairColor', 'Experiences', 'Language', 'Appearance', 'Uniquedata', 'Accent')->get();
        $allcolors = Eyecolor::all();
        $talents = Talent::all();
        $states = Governorate::all();
        $skincolors = SkinColor::all();
        $hairqualities = Hairquality::all();
        $genders = Gender::all();
        $haircolors = Haircolor::all();
        $experiences = Experiences::all();
        $languages = Language::all();
        $accents = Accent::all();
        $appearance = Appearance::all();
        $unique = Uniquedata::all();
        $cites = Cities::all();
        $response = [

            'allcolors' =>$allcolors,
            'talent' => $talents,
            'states' => $states,
            'skincolors' => $skincolors,
            'hairqualities' => $hairqualities,
            'genders' => $genders,
            'haircolors' => $haircolors,
            'experiences' => $experiences,
            'languages' => $languages,
            'accents' => $accents,
            'appearance' => $appearance,
            'unique' => $unique,
            'cites' => $cites,

            'model' => $models->map(function ($model) {
                return [
                    'id' => $model->id,
                    'FirstNameEN' => $model->FirstNameEN,
                    'MiddleNameEN' => $model->MiddleNameEN,
                    'LastNameEN' => $model->LastNameEN,
                    'FirstNameAR' => $model->FirstNameAR,
                    'MiddleNameAR' => $model->MiddleNameAR,
                    'LastNameAR' => $model->LastNameAR,
                    'Email' => $model->Email,
                    'Phone' => $model->Phone,
                    'Password' => $model->Password,
                    'Talent' => $model->talent->TalentNameEN,
                    'Country' => $model->AllCountries->name_en,
                    'City' => $model->city->city_name_en,
                    'Governorate' => $model->governorates->governorate_name_en,
                    'Address' => $model->Address,
                    'Gender' => $model->gender->GenderEN,
                    'Age' => Carbon::parse($model->BirthDate)->diff(Carbon::now())->format('%y'),
                    'Height' => $model->Height,
                    'EyeColor' => $model->eyeColor->ColorEN,
                    'SkinColor' => $model->skincolor->SkinColorEN,
                    'Weight' => $model->Weight,
                    'HairQuality' => $model->hairquality->HairQualityEN,
                    'HairColor' => $model->haircolor->HairColorEN,
                    'Experiences' => $model->experiences->experiences_nameEN,
                    'Language' => $model->language->LanguageEN,
                    'Appearance' => $model->appearance->appearanceEN,
                    'Uniquedata' => $model->uniquedata->UniqueEN,
                    'Accent' => $model->accent->accent_nameEN,
                    'ModelDesc' => $model->ModelDesc,
                    'ModelDescAR' => $model->ModelDescAR,
                    'Image' =>$model->Image,
                    'Images' =>[$model->ProfileImage1,$model->ProfileImage2,$model->ProfileImage3,$model->ProfileImage4] ,
                    'YoutubeImage' =>$model->ThubImage,
                    'Socialfacebook' => $model->Socialfacebook,
                    'Socialinstagram' => $model->Socialinstagram,
                    'Socialtwitter' => $model->Socialtwitter,
                    'Socialyoutube' => $model->Socialyoutube,
                    'Videolink' => $model->Videolink,
                    'Status' => $model->Status,
                    'created_at' => $model->created_at,
                    'updated_at' => $model->updated_at,
                ];
            }),
        ];

        return response()->json($response);
    }

    // show model
    public function show_model(Models $models)
    {
        $models = Models::with('Talent', 'EyeColor', 'governorates' ,'AllCountries' , 'city', 'Gender', 'SkinColor' , 'HairQuality', 'HairColor', 'Experiences', 'Language', 'Appearance', 'Uniquedata', 'Accent')->where('ID',$models->id)->get();

        $response = [
            'model' => $models->map(function ($model) {
                return [
                    'id' => $model->id,
                    'FirstNameEN' => $model->FirstNameEN,
                    'MiddleNameEN' => $model->MiddleNameEN,
                    'LastNameEN' => $model->LastNameEN,
                    'FirstNameAR' => $model->FirstNameAR,
                    'MiddleNameAR' => $model->MiddleNameAR,
                    'LastNameAR' => $model->LastNameAR,
                    'Email' => $model->Email,
                    'Phone' => $model->Phone,
                    'Password' => $model->Password,
                    'Talent' => $model->talent->TalentNameEN,
                    'Country' => $model->AllCountries->name_en,
                    'City' => $model->city->city_name_en,
                    'Governorate' => $model->governorates->governorate_name_en,
                    'Address' => $model->Address,
                    'Gender' => $model->gender->GenderEN,
                    'Age' => Carbon::parse($model->BirthDate)->diff(Carbon::now())->format('%y'),
                    'Height' => $model->Height,
                    'EyeColor' => $model->eyeColor->ColorEN,
                    'SkinColor' => $model->skincolor->SkinColorEN,
                    'Weight' => $model->Weight,
                    'HairQuality' => $model->hairquality->HairQualityEN,
                    'HairColor' => $model->haircolor->HairColorEN,
                    'Experiences' => $model->experiences->experiences_nameEN,
                    'Language' => $model->language->LanguageEN,
                    'Appearance' => $model->appearance->appearanceEN,
                    'Uniquedata' => $model->uniquedata->UniqueEN,
                    'Accent' => $model->accent->accent_nameEN,
                    'ModelDesc' => $model->ModelDesc,
                    'ModelDescAR' => $model->ModelDescAR,
                    'Image' =>$model->Image,
                    'Images' =>[$model->ProfileImage1,$model->ProfileImage2,$model->ProfileImage3,$model->ProfileImage4] ,
                    'YoutubeImage' =>$model->ThubImage,
                    'Socialfacebook' => $model->Socialfacebook,
                    'Socialinstagram' => $model->Socialinstagram,
                    'Socialtwitter' => $model->Socialtwitter,
                    'Socialyoutube' => $model->Socialyoutube,
                    'Videolink' => $model->Videolink,
                    'Status' => $model->Status,
                    'created_at' => $model->created_at,
                    'updated_at' => $model->updated_at,

                ];
            }),
        ];

        return response()->json($response);

//        return response()->json([
//            'response' => $response,
//            'model' => $models,
//        ]);

    }

    // all countries
    public function countries()
    {
        $countries = AllCountries::all();
         return response()->json([
             'All Countries' => $countries
         ]);
    }
    // all Services
    public function services()
    {
        $services = Services::all();
        return response()->json([
            'All Services' => $services
        ]);
    }
    // all Locations
    public function locations()
    {
        $locations = Locations::all();
        return response()->json([
            'All locations' => $locations
        ]);
    }
    // show tanlents
    public function talents($id){

        $models = Models::with('Talent', 'EyeColor', 'governorates' ,'AllCountries' , 'city', 'Gender', 'SkinColor' , 'HairQuality', 'HairColor', 'Experiences', 'Language', 'Appearance', 'Uniquedata', 'Accent')->where('Country', $id)->get();
        $allcolors = Eyecolor::all();
            $talents = Talent::all();
            $states = Governorate::all();
            $skincolors = SkinColor::all();
            $hairqualities = Hairquality::all();
            $genders = Gender::all();
            $haircolors = Haircolor::all();
            $experiences = Experiences::all();
            $languages = Language::all();
            $accents = Accent::all();
            $appearance = Appearance::all();
            $unique = Uniquedata::all();
        $response = [

            'allcolors' =>$allcolors,
            'talent' => $talents,
            'states' => $states,
            'skincolors' => $skincolors,
            'hairqualities' => $hairqualities,
            'genders' => $genders,
            'haircolors' => $haircolors,
            'experiences' => $experiences,
            'languages' => $languages,
            'accents' => $accents,
            'appearance' => $appearance,
            'unique' => $unique,


            'talents' => $models->map(function ($model) {
                return [
                    'id' => $model->id,
                    'FirstNameEN' => $model->FirstNameEN,
                    'MiddleNameEN' => $model->MiddleNameEN,
                    'LastNameEN' => $model->LastNameEN,
                    'FirstNameAR' => $model->FirstNameAR,
                    'MiddleNameAR' => $model->MiddleNameAR,
                    'LastNameAR' => $model->LastNameAR,
                    'Email' => $model->Email,
                    'Phone' => $model->Phone,
                    'Password' => $model->Password,
                    'TalentEN' => $model->talent->TalentNameEN,
                    'TalentAR' => $model->talent->TalentNameAR,
                    'CountryEN' => $model->AllCountries->name_en,
                    'CountryAR' => $model->AllCountries->name_ar,
                    'CityEN' => $model->city->city_name_en,
                    'CityAR' => $model->city->city_name_ar,
                    'GovernorateEN' => $model->governorates->governorate_name_en,
                    'GovernorateAR' => $model->governorates->governorate_name_ar,
                    'Address' => $model->Address,
                    'GenderEN' => $model->gender->GenderEN,
                    'GenderAR' => $model->gender->GenderAR,
                    'Age' => Carbon::parse($model->BirthDate)->diff(Carbon::now())->format('%y'),
                    'Height' => $model->Height,
                    'EyeColorEN' => $model->eyeColor->ColorEN,
                    'EyeColorAR' => $model->eyeColor->ColorAR,
                    'SkinColorEN' => $model->skincolor->SkinColorEN,
                    'SkinColorAR' => $model->skincolor->SkinColorAR,
                    'Weight' => $model->Weight,
                    'HairQualityEN' => $model->hairquality->HairQualityEN,
                    'HairQualityAR' => $model->hairquality->HairQualityAR,
                    'HairColorEN' => $model->haircolor->HairColorEN,
                    'HairColorAR' => $model->haircolor->HairColorAR,
                    'ExperiencesEN' => $model->experiences->experiences_nameEN,
                    'ExperiencesAR' => $model->experiences->experiences_nameAR,
                    'LanguageEN' => $model->language->LanguageEN,
                    'LanguageAR' => $model->language->LanguageAR,
                    'AppearanceEN' => $model->appearance->appearanceEN,
                    'AppearanceAR' => $model->appearance->appearanceAR,
                    'UniquedataEN' => $model->uniquedata->UniqueEN,
                    'UniquedataAR' => $model->uniquedata->UniqueAR,
                    'AccentEN' => $model->accent->accent_nameEN,
                    'AccentAR' => $model->accent->accent_nameAR,
                    'ModelDescEN' => $model->ModelDesc,
                    'ModelDescAR' => $model->ModelDescAR,
                    'Image' =>$model->Image,
                    'Images' =>[$model->ProfileImage1,$model->ProfileImage2,$model->ProfileImage3,$model->ProfileImage4] ,
                    'YoutubeImage' =>$model->ThubImage,
                    'Socialfacebook' => $model->Socialfacebook,
                    'Socialinstagram' => $model->Socialinstagram,
                    'Socialtwitter' => $model->Socialtwitter,
                    'Socialyoutube' => $model->Socialyoutube,
                    'Videolink' => $model->Videolink,
                    'Status' => $model->Status,
                    'created_at' => $model->created_at,
                    'updated_at' => $model->updated_at,
                ];
            }),
        ];

        return response()->json($response);

    }
// show allservices
    public function alltech(){

        $services = Services::with( 'governorates' ,'AllCountries' , 'city', 'Gender', 'Specializations', 'Services_details')->get();
        $genders = Gender::all();
        $states = Governorate::all();
        $service = Services_details::all();
        $production = Specializations::where('service_id', 201)->get();
        $photography = Specializations::where('service_id', 202)->get();
        $writing = Specializations::where('service_id', 203)->get();
        $audio = Specializations::where('service_id', 204)->get();
        $technican = Specializations::where('service_id', 205)->get();
        $art = Specializations::where('service_id', 206)->get();
        $postproduction = Specializations::where('service_id', 207)->get();
        $music = jobs::where('specialization_id', 307)->get();
        $editorial = jobs::where('specialization_id', 308)->get();
        $visualeffects = jobs::where('specialization_id', 309)->get();





        $response = [

            'genders' => $genders,
            'states' => $states,
            "service" => $service,
            'productionlist' => $production,
            'photographylist' => $photography,
            'writinglist' => $writing,
            'audiolist' => $audio,
            'technicanlist' => $technican,
            'artlist' => $art,
            'postproductionlist' => $postproduction,
            'musiclist' => $music,
            'editoriallist' => $editorial,
            'visualeffects' => $visualeffects,






            'tech' => $services->map(function ($service) {

                return [
                    'id' => $service->ID,
                    'FirstNameEN' => $service->FirstNameEN,
                    'MiddleNameEN' => $service->MiddleNameEN,
                    'LastNameEN' => $service->LastNameEN,
                    'FirstNameAR' => $service->FirstNameAR,
                    'MiddleNameAR' => $service->MiddleNameAR,
                    'LastNameAR' => $service->LastNameAR,
                    'Email' => $service->Email,
                    'Phone' => $service->Phone,
                    'Password' => $service->Password,
                    'CountryEN' => $service->AllCountries->name_en,
                    'CountryAR' => $service->AllCountries->name_ar,
                    'GovernorateEN' => $service->governorates->governorate_name_en,
                    'GovernorateAR' => $service->governorates->governorate_name_ar,
                    'CityEN' => $service->city->city_name_en,
                    'CityAR' => $service->city->city_name_ar,
                    'Address' => $service->Address,
                    'GenderEN' => $service->gender->GenderEN,
                    'GenderAR' => $service->gender->GenderAR,
                    'Age' => Carbon::parse($service->BirthDate)->diff(Carbon::now())->format('%y'),
                    'TechDescEN' => $service->ServDesc,
                    'TechDescAR' => $service->ServDescAR,
                    'Experiences' => $service->experience,
                    'servicesEN' => $service->services_details->service_nameEN,
                    'servicesAR' => $service->services_details->service_nameAR,
                    'specializationEN' => $service->specializations->specialization_nameEN,
                    'specializationAR' => $service->specializations->specialization_nameAR,
                    'job' => $service->jobs,
                    'Image' =>$service->Image,
                    'Images' =>[$service->ProfileImage1,$service->ProfileImage2] ,
                    'Socialfacebook' => $service->Socialfacebook,
                    'Socialinstagram' => $service->Socialinstagram,
                    'Socialtwitter' => $service->Socialtwitter,
                    'Socialyoutube' => $service->Socialyoutube,
                    'Videolink' => $service->Videolink,
                    'Status' => $service->Status,
                    'created_at' => $service->created_at,
                    'updated_at' => $service->updated_at,
                ];
            }),
        ];

        return response()->json($response);

    }

    // show services
    public function tech($id){

        $services = Services::with( 'governorates' ,'AllCountries' , 'city', 'Gender', 'Specializations', 'Services_details')->where('Country', $id)->get();
        $genders = Gender::all();
        $states = Governorate::all();
        $service = Services_details::all();
        $production = Specializations::where('service_id', 201)->get();
        $photography = Specializations::where('service_id', 202)->get();
        $writing = Specializations::where('service_id', 203)->get();
        $audio = Specializations::where('service_id', 204)->get();
        $technican = Specializations::where('service_id', 205)->get();
        $art = Specializations::where('service_id', 206)->get();
        $postproduction = Specializations::where('service_id', 207)->get();
        $music = jobs::where('specialization_id', 307)->get();
        $editorial = jobs::where('specialization_id', 308)->get();
        $visualeffects = jobs::where('specialization_id', 309)->get();





        $response = [

            'genders' => $genders,
            'states' => $states,
            "service" => $service,
            'productionlist' => $production,
            'photographylist' => $photography,
            'writinglist' => $writing,
            'audiolist' => $audio,
            'technicanlist' => $technican,
            'artlist' => $art,
            'postproductionlist' => $postproduction,
            'musiclist' => $music,
            'editoriallist' => $editorial,
            'visualeffects' => $visualeffects,






            'tech' => $services->map(function ($service) {

                    return [
                    'id' => $service->ID,
                    'FirstNameEN' => $service->FirstNameEN,
                    'MiddleNameEN' => $service->MiddleNameEN,
                    'LastNameEN' => $service->LastNameEN,
                    'FirstNameAR' => $service->FirstNameAR,
                    'MiddleNameAR' => $service->MiddleNameAR,
                    'LastNameAR' => $service->LastNameAR,
                    'Email' => $service->Email,
                    'Phone' => $service->Phone,
                    'Password' => $service->Password,
                    'CountryEN' => $service->AllCountries->name_en,
                    'CountryAR' => $service->AllCountries->name_ar,
                    'GovernorateEN' => $service->governorates->governorate_name_en,
                    'GovernorateAR' => $service->governorates->governorate_name_ar,
                    'CityEN' => $service->city->city_name_en,
                    'CityAR' => $service->city->city_name_ar,
                    'Address' => $service->Address,
                    'GenderEN' => $service->gender->GenderEN,
                    'GenderAR' => $service->gender->GenderAR,
                    'Age' => Carbon::parse($service->BirthDate)->diff(Carbon::now())->format('%y'),
                    'TechDescEN' => $service->ServDesc,
                    'TechDescAR' => $service->ServDescAR,
                    'Experiences' => $service->experience,
                    'servicesEN' => $service->services_details->service_nameEN,
                    'servicesAR' => $service->services_details->service_nameAR,
                    'specializationEN' => $service->specializations->specialization_nameEN,
                    'specializationAR' => $service->specializations->specialization_nameAR,
                     'job' => $service->jobs,
                    'Image' =>$service->Image,
                    'Images' =>[$service->ProfileImage1,$service->ProfileImage2] ,
                    'Socialfacebook' => $service->Socialfacebook,
                    'Socialinstagram' => $service->Socialinstagram,
                    'Socialtwitter' => $service->Socialtwitter,
                    'Socialyoutube' => $service->Socialyoutube,
                    'Videolink' => $service->Videolink,
                    'Status' => $service->Status,
                    'created_at' => $service->created_at,
                    'updated_at' => $service->updated_at,
                ];
            }),
        ];

        return response()->json($response);

    }

    // show locations
    public function location($id){

        $locations = Locations::with( 'governorates' ,'AllCountries' , 'city')->where('Country', $id)->get();
        $cities = Cities::all();
        $states = Governorate::all();
        $types = LocationsTypes::all();

        $response = [

            "type" => $types,
            'states' => $states,
            'cities' => $cities,

            'locations' => $locations->map(function ($location) {
                return [
                    'id' => $location->ID,
                    'location_nameEN' => $location->location_nameEN,
                    'location_nameAR' => $location->location_nameAR,
                    'location_owner_nameEN' => $location->location_o_nameEN,
                    'location_owner_nameAR' => $location->location_o_nameAR,
                    'owner_email' => $location->owner_email,
                    'owner_phone' => $location->owner_phone,
                    'owner_password' => $location->owner_password,
                    'CountryEN' => $location->AllCountries->name_en,
                    'CountryAR' => $location->AllCountries->name_ar,
                    'owner_governorateEN' => $location->governorates->governorate_name_en,
                    'owner_governorateAR' => $location->governorates->governorate_name_ar,
                    'owner_cityEN' => $location->city->city_name_en,
                    'owner_cityAR' => $location->city->city_name_ar,
                    'Address' => $location->address,
                    'Area' => $location->area,
                    'location_typeEN' => $location->LocationsTypes->type_nameEN	,
                    'location_typeAR' => $location->LocationsTypes->type_nameAR	,
                    'locationDesc' => $location->location_desc,
                    'locationDescAR' => $location->location_descAR,
                    'Image' =>$location->Image,
                    'Images' =>[$location->location_profileimg1,$location->location_profileimg2,$location->location_profileimg3,$location->location_profileimg4] ,
                    'Socialfacebook' => $location->socialfacebook,
                    'Socialinstagram' => $location->socialinstagram,
                    'Socialtwitter' => $location->socialtwitter,
                    'Socialyoutube' => $location->socialyoutube,
                    'Videolink' => $location->videolink,
                    'Status' => $location->Status,
                    'created_at' => $location->created_at,
                    'updated_at' => $location->updated_at,
                ];
            }),
        ];

        return response()->json($response);

    }
    //sent massege
    public function massage(Request $request)
    {


         Ordersqueries::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "The data has been sent and we will reply to you as soon as possible"
        ],
            200);

    }

    public function register_talent(Request $request)
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

                    return response()->json([
                        'success' => true,
                        'message' =>  "Your Acoount Inserted Successfully - Need Admin Approve"
                    ],
                        200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' =>  "Password missmath"
                    ],
                        400);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' =>  "You forget something"
                ],
                    400);
            }
        } else {

            return response()->json([
                'success' => false,
                'message' =>  "Wrong SMS code [be careful, you have 5 attempts per day"
            ],
                400);

        }

    }

    //Service Register//
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
                    return response()->json([
                        'success' => true,
                        'message' =>  "Your Acoount Inserted Successfully - Need Admin Approve"
                    ],
                        200);

                } else {
                    return response()->json([
                        'success' => false,
                        'message' =>  "Password missmath"
                    ],
                        400);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' =>  "You forget something"
                ],
                    400);


            }
        }
        else{

            return response()->json([
                'success' => false,
                'message' =>  "Wrong SMS code [be careful, you have 5 attempts per day]"
            ],
                400);


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
                $query->where('user_phone', '=', $request->input('Email'));
            })
            ->get();

        if ($SMS_MSent_history->count() < 5) {
//            $data = User_sms_verification::where("user_phone",$request->input('Phone'))->delete();
            if ($request->input('Email') != "" And $request->input('Phone') != ""  ){

                $code = mt_rand(100000, 999999);

                $SMS_Sent = new User_sms_verification();
                $SMS_Sent->user_email = $request->input('Email');
                $SMS_Sent->user_phone = $request->input('Phone');
                $SMS_Sent->verification_code = $code;
                $SMS_Sent->save();

                $SMS_Sent_history = new User_sms_verification_history();
                $SMS_Sent_history->user_email = $request->input('Email');
                $SMS_Sent_history->user_phone = $request->input('Phone');
                $SMS_Sent_history->verification_code = $code;
                $SMS_Sent_history->save();

                $response =
                    Http::post('https://smsmisr.com/api/SMS/?', [
                        'username' => 'KM3iXebi',
                        'password' => '07d75c42fedde7c10a9d91e5b50a47143e66d8ac2233af55e8d732851eb167ee',
                        'language' => '1',
                        'sender' => '1b20c0db825cd3174a47ec64324cf98c4fdba1001e37a378fd4e3cb2900ab2f7',
                        'mobile' => $request->input('Phone'),
                        'message' => "Welcome to Cast&Crew your code is :$code",
                        'environment' => '1',
                    ]);
                return response()->json([
                    'success' => true,
                    'message' =>  "Your OTP Code Send To Your Mobile Number"
                ],
                    200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' =>  "You Must Inseret Phone Number"
                ],
                    400);
            }
        } else {

            return response()->json([
                'success' => false,
                'message' =>  "You have reached the maximum number of daily messages"
            ],
                400);

        }


    }



    // End api's
    public function Viewblogs(Request $request)
    {
        $results = Blogs::paginate(9);
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces .= ' <div class="col-xl-4 col-md-6">
                                    <article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
                                        <div class="item-media post-thumbnail">
                                            <a href="single-blog/'.$result->ID.'">
                                                <img src="public/images/blog/'.$result->blog_img.'" alt="img">
                                            </a>
                                        </div><!-- .post-thumbnail -->
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h4 class="entry-title">
                                                    <a href="single-blog/'.$result->ID.'" rel="bookmark">
                                                        '.Str::limit($result->blog_titelEN, 50).'
                                                    </a>
                                                </h4>
                                                <div class="entry-meta">
                                                    <span class="screen-reader-text">Posted on</span>
                                                    <a href="single-blog/'.$result->ID.'" rel="bookmark">
                                                        <time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">'.$result->created_at.'
                                                        </time>
                                                    </a>
                                                </div>
                                                <!-- .entry-meta -->
                                            </header>
                                            <!-- .entry-header -->

                                            <div class="entry-content">
                                                <p>'.Str::limit($result->blog_descEN, 100).'</p>
                                            </div><!-- .entry-content -->
                                        </div><!-- .item-content -->
                                    </article><!-- #post-## -->
                                </div>';
            }
            return $artilces;
        }
        return view('blogs', compact( 'nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }
    public function ViewblogsAR(Request $request)
    {
        $results = Blogs::paginate(9);
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();

        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces .= ' <div class="col-xl-4 col-md-6">
                                    <article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
                                        <div class="item-media post-thumbnail">
                                            <a href="single-blogAR/'.$result->ID.'">
                                                <img src="public/images/blog/'.$result->blog_img.'" alt="img">
                                            </a>
                                        </div><!-- .post-thumbnail -->
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h4 class="entry-titleAR" style="text-align: right">
                                                    <a class="aAR" href="single-blogAR/'.$result->ID.'" rel="bookmark">
                                                        '.Str::limit($result->blog_titelAR, 35).'
                                                    </a>
                                                </h4>
                                                <div class="entry-meta" style="text-align: right">
                                                    <span class="screen-reader-text">Posted on</span>
                                                    <a href="single-blogAR/'.$result->ID.'" rel="bookmark">
                                                        <time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">'.$result->created_at.'
                                                        </time>
                                                    </a>
                                                </div>
                                                <!-- .entry-meta -->
                                            </header>
                                            <!-- .entry-header -->

                                            <div class="entry-content" style="text-align: right">
                                                <p>'.Str::limit($result->blog_descAR, 70).'</p>
                                            </div><!-- .entry-content -->
                                        </div><!-- .item-content -->
                                    </article><!-- #post-## -->
                                </div>';
            }
            return $artilces;
        }
        return view('blogsAR', compact( 'nav_main_items', 'nav_submain_items',
            'cast_crew_data'));
    }
    public function singleblogs($id)
    {
        $data = Blogs::find($id);
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        return view('single-blog', compact( 'data','nav_main_items', 'nav_submain_items',
            'cast_crew_data'));

    }
    public function singleblogsAR($id)
    {
        $data = Blogs::find($id);
        $nav_main_items = Nav_main_items::all();
        $nav_submain_items = Nav_submain_items::all();
        $cast_crew_data = Cast_crew_data::all();
        return view('single-blogAR', compact( 'data','nav_main_items', 'nav_submain_items',
            'cast_crew_data'));

    }
    public function blogsapi(){

        return Blogs::get();
    }
}
