<?php

namespace App\Http\Controllers;

use App\Models\all_states;
use App\Models\AllCountries;
use App\Models\AllGender;
use App\Models\AllGovernorates;
use App\Models\Blogs;
use App\Models\Gender;
use App\Models\Governorate;
use App\Models\jobs;
use App\Models\Locations;
use App\Models\LocationsTypes;
use App\Models\Ordersqueries;
use App\Models\Services;
use App\Models\Services_details;
use App\Models\Sidebar_sections;
use App\Models\Sidebaritemadmin;
use App\Models\Specializations;
use App\Models\Submenuitems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**SidbarGroup Functions**/
    public function delete_sidebar_group($id)
    {
        if(Auth::check()){
        $sidebar_group = Sidebar_sections::where("ID", $id)->delete();
        return redirect('sidebar-setting')->with('status',"Deleted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function insert_sidebar_group(Request $request)
    {
        if(Auth::check()){
            $insertSidebar_sections = new Sidebar_sections();
            $insertSidebar_sections->sidebar_section_name=$request->input('groupinsertname');
            $insertSidebar_sections->sidebarsectiondesc=$request->input('grouppos');
            $insertSidebar_sections->save();
            return redirect('sidebar-setting')->with('status',"Sidebar group inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function update_sidebar_group(Request $request)
    {
        if(Auth::check()){
            $UpdateSidebar_sections = Sidebar_sections::where("ID", $request->input('groupupdateid'))->update(["sidebar_section_name" => $request->input('groupupdatename'),
                "sidebarsectiondesc" => $request->input('ugrouppos')]);
            return redirect('sidebar-setting')->with('status',"Sidebar group data Updated");
        }else{
            return redirect('/login');
        }
    }
    /**SidbarGroup Functions**/

    /**SidbarItems Functions**/
    public function delete_sidebar_item($id)
    {
        if(Auth::check()){
            $sidebar_item = Sidebaritemadmin::where("ID", $id)->delete();
            return redirect('sidebar-setting')->with('status',"Deleted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function insert_sidebar_item(Request $request)
    {
        if(Auth::check()){
            $insertSidebar_item = new Sidebaritemadmin();
            $insertSidebar_item->sidebaritemName=$request->input('SidebarItemName');
            $insertSidebar_item->sidebaritemHref=$request->input('SidebarItemLinkName');
            if($request->input('SidebarItemHaveSub')=="Yes"){
                $insertSidebar_item->Hassub='1';
            }else{
                $insertSidebar_item->Hassub='0';
            }
            $insertSidebar_item->sidebar_section_name=$request->input('SidebarItemGroupName');
            $insertSidebar_item->sidebar_item_logo=$request->input('SidebarItemIcon');
            $insertSidebar_item->sidebaritemdesc=$request->input('SidebarItempos');
            $insertSidebar_item->save();
            return redirect('sidebar-setting')->with('status',"Sidebar group inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function update_sidebar_item(Request $request)
    {
        if(Auth::check()){

            if ($request->input('uSidebarItemHaveSub')==="No"){
                $UpdateSidebar_item = Sidebaritemadmin::where("ID", $request->input('uSidebarItemid'))->update(["sidebaritemName" => $request->input('uSidebarItemName'),
                    "sidebaritemHref" => $request->input('uSidebarItemLinkName'),
                    "Hassub" => '0',
                    "sidebar_section_name" => $request->input('uSidebarItemGroupName'),
                    "sidebar_item_logo" => $request->input('uSidebarItemIcon'),
                    "sidebaritemdesc" => $request->input('uSidebarItempos')]);
            }
            elseif ($request->input('uSidebarItemHaveSub')==="Yes"){
                $UpdateSidebar_item = Sidebaritemadmin::where("ID", $request->input('uSidebarItemid'))->update(["sidebaritemName" => $request->input('uSidebarItemName'),
                    "sidebaritemHref" => $request->input('uSidebarItemLinkName'),
                    "Hassub" => '1',
                    "sidebar_section_name" => $request->input('uSidebarItemGroupName'),
                    "sidebar_item_logo" => $request->input('uSidebarItemIcon'),
                    "sidebaritemdesc" => $request->input('uSidebarItempos')]);
            }

            return redirect('sidebar-setting')->with('status',"Sidebar group data Updated");
        }else{
            return redirect('/login');
        }
    }
    /**SidbarItems Functions**/

    /**SidbarSub Functions**/
    public function delete_sidebar_sub($id)
    {
        if(Auth::check()){
            $sidebar_sub = Submenuitems::where("ID", $id)->delete();
            return redirect('sidebar-setting')->with('status',"Deleted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function insert_sidebar_sub(Request $request)
    {
        if(Auth::check()){
            $insertSidebar_sub = new Submenuitems();
            $insertSidebar_sub->submenuItemName=$request->input('Subname');
            $insertSidebar_sub->submenuItemHref=$request->input('Subhref');
            $insertSidebar_sub->submenuitemss=$request->input('Subitem');
            $insertSidebar_sub->sidebarsubdesc=$request->input('Subpos');
            $insertSidebar_sub->save();
            return redirect('sidebar-setting')->with('status',"Sidebar group inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    public function update_sidebar_sub(Request $request)
    {
        if(Auth::check()){


                $UpdateSidebar_sub = Submenuitems::where("ID", $request->input('uSubid'))->update(["submenuItemName" => $request->input('uSubname'),
                    "submenuItemHref" => $request->input('uSubhref'),
                    "submenuitemss" => $request->input('uSubitem'),
                    "sidebarsubdesc" => $request->input('uSubpos')]);

            return redirect('sidebar-setting')->with('status',"Sidebar group data Updated");
        }else{
            return redirect('/login');
        }
    }
    /**SidbarSub Functions**/

    /**Get Services Functions**/
    public function Viewallservices(){

        if(Auth::check()){
            $Allservices=Services::all();
            $countries = AllCountries::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/aservices',compact('Allservices','Sidebaritemadmin','Submenuitems','sidebar_setions','countries'));
        }else{
            return redirect('/login');
        }
    }
    public function show_edit_service($id)
    {
        if(Auth::check()){
            $data = Services::find($id);
            $All_states = all_states::all();
            $services=Services_details::All();
            $spicili=Specializations::All();
            $jobs=jobs::All();
            $AllState=AllGovernorates::All();
            $AllGender=AllGender::All();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            return view('admin/edit-service',compact('data','services','spicili','jobs','AllState','AllGender','Sidebaritemadmin','Submenuitems','sidebar_setions','All_states'));
        }else{
            return redirect('/login');
        }
    }
    public function update_service(Request $request, $id)
    {
        if(Auth::check()){
            if($request->file('Image')){
                $image = Services::find($id);
                if($image->Image!=""){
                    unlink("public/images/gallery/".$image->Image);
                }

                $files = $request->file('Image');
                $filename = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $fileName = "Main".time().date("his").".".$extension;
                $destinationPath = 'public/images/gallery'.'/';
                $files->move($destinationPath, $fileName);
                $image=$fileName;
                $insertmodel = Services::where("ID", $id)->update(["Image" => $image]);
                //$Image=$request->input('ImageName');
            }

            if($request->file('ProfileImage1')) {

                $image = Services::find($id);
                if($image->ProfileImage1!="") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage1);
                }

                $files1 = $request->file('ProfileImage1');
                $filename1 = $files1->getClientOriginalName();
                $extension1 = $files1->getClientOriginalExtension();
                $fileName1 = "P1".time().date("his").".".$extension1;
                $destinationPath1 = 'public/images/gellery_rectengular'.'/';
                $files1->move($destinationPath1, $fileName1);
                $ProfileImage1=$fileName1;
                $insertmodel = Services::where("ID", $id)->update(["ProfileImage1" => $ProfileImage1]);
            }

            if($request->file('ProfileImage2')) {

                $image = Services::find($id);
                if($image->ProfileImage2!="") {
                    unlink("public/images/gellery_rectengular/" . $image->ProfileImage2);
                }

                $files2 = $request->file('ProfileImage2');
                $filename2 = $files2->getClientOriginalName();
                $extension2 = $files2->getClientOriginalExtension();
                $fileName2 = "P2".time().date("his").".".$extension2;
                $destinationPath2 = 'public/images/gellery_rectengular'.'/';
                $files2->move($destinationPath2, $fileName2);
                $ProfileImage2=$fileName2;
                $insertmodel = Services::where("ID", $id)->update(["ProfileImage2" => $ProfileImage2]);
            }

            $update_service = Services::where("ID", $id)->update(["FirstNameEN" => $request->input('FirstNameEn'),
                    "MiddleNameEN" => $request->input('MiddelNameEn'),
                    "LastNameEN" => $request->input('LastNameEn'),
                    "FirstNameAR" => $request->input('FirstNameAr'),
                    "MiddleNameAR" => $request->input('MiddelNameAr'),
                    "LastNameAR" => $request->input('LastNameAr'),
                    "Governorate" => $request->input('Governorate'),
                    "City" => $request->input('City'),
                    "Address" => $request->input('FullAddress'),
                    "ServDesc" => $request->input('serviceDesc'),
                    "ServDescAR" => $request->input('serviceDescAR'),
                    "BirthDate" => $request->input('BirthDate'),
                    "Gender" => $request->input('Gender'),
                    "services" => $request->input('service'),
                    "specialization" => $request->input('spicili'),
                    "job" => $request->input('job'),
                    "experience" => $request->input('exp'),
                    "Socialfacebook" => $request->input('Socialfacebook'),
                    "Socialinstagram" => $request->input('Socialinstagram'),
                    "Socialtwitter" => $request->input('Socialtwitter'),
                    "Socialyoutube" => $request->input('Socialyoutube'),
                    "Videolink" => $request->input('Videolink'),
                    "Status" => $request->input('Status')]
            );

            return redirect('aservices')->with('status',"Data Updated");
        }else{
            return redirect('/login');

        }

    }
    public function delete_service($id)
    {

        $image = Services::find($id);
        if($image->Image!=""){
            unlink("public/images/gallery/".$image->Image);
        }
        if($image->ProfileImage1!="") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage1);
        }
        if($image->ProfileImage2!="") {
            unlink("public/images/gellery_rectengular/" . $image->ProfileImage2);
        }

        $data = Services::where("ID", $id)->delete();
        return redirect('aservices')->with('status',"Deleted Successfully");
    }
    public function View_service_InsertData(Request $request){
        if(Auth::check()){
            $countries = AllCountries::all();
            $services=Services_details::All();
            $spicili=Specializations::All();
            $jobs=jobs::All();
            $AllStates=AllGovernorates::all();
            $AllGender=AllGender::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/insert-service',compact('AllStates','AllGender','services','spicili','jobs','Sidebaritemadmin','Submenuitems','sidebar_setions','countries'));
        }else{

            return redirect('/login');

        }


    }
    public function insert_service(Request $request)
    {
        if(Auth::check()){

            $files = $request->file('Image');
            $files1 = $request->file('ProfileImage1');
            $files2 = $request->file('ProfileImage2');


            $filename = $files->getClientOriginalName();
            $filename1 = $files1->getClientOriginalName();
            $filename2 = $files2->getClientOriginalName();


            $extension = $files->getClientOriginalExtension();
            $extension1 = $files1->getClientOriginalExtension();
            $extension2 = $files2->getClientOriginalExtension();


            $fileName = "MainS".time().date("his").".".$extension;
            $fileName1 = "P1S".time().date("his").".".$extension;
            $fileName2 = "P2S".time().date("his").".".$extension;


            $destinationPath ='public/images/gallery'.'/';
            $destinationPath1 = 'public/images/gellery_rectengular'.'/';


            $files->move($destinationPath, $fileName);
            $files1->move($destinationPath1, $fileName1);
            $files2->move($destinationPath1, $fileName2);





            $insertservice = new Services();
            $insertservice->FirstNameEN=$request->input('FirstNameEn');
            $insertservice->MiddleNameEN=$request->input('MiddelNameEn');
            $insertservice->LastNameEN=$request->input('LastNameEn');
            $insertservice->FirstNameAR=$request->input('FirstNameAr');
            $insertservice->MiddleNameAR=$request->input('MiddelNameAr');
            $insertservice->LastNameAR=$request->input('LastNameAr');
            $insertservice->Country = $request->input('Country');
            if ($request->input('City') != "") {
                $insertservice->City = $request->input('City');
            } else {
                $insertservice->City = 200000;
            }
            $insertservice->Governorate=$request->input('Governorate');
            $insertservice->Email=$request->input('Email');
            $insertservice->Phone=$request->input('Phone');
            $insertservice->Password=$request->input('passwordserv');

            $insertservice->Address=$request->input('FullAddress');
            $insertservice->ServDesc=$request->input('serviceDesc');
            $insertservice->ServDescAR=$request->input('serviceDescAR');
            $insertservice->experience=$request->input('exp');
            $insertservice->BirthDate=$request->input('BirthDate');
            $insertservice->Gender=$request->input('Gender');
            $insertservice->services=$request->input('service');
            $insertservice->specialization=$request->input('spicili');
            if($request->input('job')!=""){
                $insertservice->job=$request->input('job');
            }else{
                $insertservice->job='1';
            }
            $insertservice->Image=$fileName;
            $insertservice->ProfileImage1=$fileName1;
            $insertservice->ProfileImage2=$fileName2;

            $insertservice->Socialfacebook=$request->input('Socialfacebook');
            $insertservice->Socialinstagram=$request->input('Socialinstagram');
            $insertservice->Socialtwitter=$request->input('Socialtwitter');
            $insertservice->Socialyoutube=$request->input('Socialyoutube');
            $insertservice->Videolink=$request->input('Videolink');
            $insertservice->Status="1";

            $insertservice->save();
            return redirect('aservices')->with('status',"Inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    /**Get Services Functions**/

    /**Get Locations Functions**/
    public function Viewalllocations(){

        if(Auth::check()){
            $Alllocations=Locations::all();
            $countries = AllCountries::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/alocations',compact('Alllocations','Sidebaritemadmin','Submenuitems','sidebar_setions','countries'));
        }else{
            return redirect('/login');
        }
    }
    public function show_edit_location($id)
    {
        if(Auth::check()){
            $data = Locations::find($id);
            $LType=LocationsTypes::All();
            $AllStates=AllGovernorates::All();
            $AllGender=AllGender::All();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            return view('admin/edit-location',compact('data','LType','AllStates','AllGender','Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{
            return redirect('/login');
        }
    }
    public function update_location(Request $request, $id)
    {
        if(Auth::check()){
            if($request->file('Image')){
                $image = Locations::find($id);
                if($image->Image!=""){
                    unlink("public/images/gallery/".$image->Image);
                }

                $files = $request->file('Image');
                $filename = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $fileName = "Main".time().date("his").".".$extension;
                $destinationPath = 'public/images/gallery'.'/';
                $files->move($destinationPath, $fileName);
                $image=$fileName;
                $insertmodel = Locations::where("ID", $id)->update(["Image" => $image]);
                //$Image=$request->input('ImageName');
            }

            if($request->file('ProfileImage1')) {

                $image = Locations::find($id);
                if($image->location_profileimg1!="") {
                    unlink("public/images/gellery_rectengular/" . $image->location_profileimg1);
                }

                $files1 = $request->file('ProfileImage1');
                $filename1 = $files1->getClientOriginalName();
                $extension1 = $files1->getClientOriginalExtension();
                $fileName1 = "P1".time().date("his").".".$extension1;
                $destinationPath1 = 'public/images/gellery_rectengular'.'/';
                $files1->move($destinationPath1, $fileName1);
                $ProfileImage1=$fileName1;
                $insertmodel = Locations::where("ID", $id)->update(["location_profileimg1" => $ProfileImage1]);
            }

            if($request->file('ProfileImage2')) {

                $image = Locations::find($id);
                if($image->location_profileimg2!="") {
                    unlink("public/images/gellery_rectengular/" . $image->location_profileimg2);
                }

                $files2 = $request->file('ProfileImage2');
                $filename2 = $files2->getClientOriginalName();
                $extension2 = $files2->getClientOriginalExtension();
                $fileName2 = "P2".time().date("his").".".$extension2;
                $destinationPath2 = 'public/images/gellery_rectengular'.'/';
                $files2->move($destinationPath2, $fileName2);
                $ProfileImage2=$fileName2;
                $insertmodel = Locations::where("ID", $id)->update(["location_profileimg2" => $ProfileImage2]);
            }

            if($request->file('ProfileImage3')) {

                $image = Locations::find($id);
                if($image->location_profileimg3!="") {
                    unlink("public/images/gellery_rectengular/" . $image->location_profileimg3);
                }

                $files3 = $request->file('ProfileImage3');
                $filename3 = $files3->getClientOriginalName();
                $extension3 = $files3->getClientOriginalExtension();
                $fileName3 = "P3".time().date("his").".".$extension3;
                $destinationPath3 = 'public/images/gellery_rectengular'.'/';
                $files3->move($destinationPath3, $fileName3);
                $ProfileImage3=$fileName3;
                $insertmodel = Locations::where("ID", $id)->update(["location_profileimg3" => $ProfileImage3]);
            }

            if($request->file('ProfileImage4')) {

                $image = Locations::find($id);
                if($image->location_profileimg4!="") {
                    unlink("public/images/gellery_rectengular/" . $image->location_profileimg4);
                }

                $files4 = $request->file('ProfileImage4');
                $filename4 = $files4->getClientOriginalName();
                $extension4 = $files4->getClientOriginalExtension();
                $fileName4 = "P4".time().date("his").".".$extension4;
                $destinationPath4 = 'public/images/gellery_rectengular'.'/';
                $files4->move($destinationPath4, $fileName4);
                $ProfileImage4=$fileName4;
                $insertmodel = Locations::where("ID", $id)->update(["location_profileimg4" => $ProfileImage4]);
            }

            $update_location = Locations::where("ID", $id)->update(["location_nameEN" => $request->input('LNameEN'),
                    "location_nameAR" => $request->input('LNameAR'),
                    "location_o_nameEN" => $request->input('LONameEN'),
                    "location_o_nameAR" => $request->input('LONameAR'),
                    "owner_email" => $request->input('OEmail'),
                    "owner_phone" => $request->input('LOPhone'),
                    "owner_password" => $request->input('LOPassword'),
                    "owner_governorate" => $request->input('Governorate'),
                    "owner_city" => $request->input('City'),
                    "address" => $request->input('FullAddress'),
                    "location_desc" => $request->input('LDesc'),
                    "area" => $request->input('LArea'),
                    "location_type" => $request->input('LType'),

                    "socialfacebook" => $request->input('Socialfacebook'),
                    "socialinstagram" => $request->input('Socialinstagram'),
                    "socialyoutube" => $request->input('Socialtwitter'),
                    "socialtwitter" => $request->input('Socialyoutube'),
                    "videolink" => $request->input('Videolink'),
                    "Status" => $request->input('Status')]
            );

            return redirect('alocations')->with('status',"Data Updated");
        }else{
            return redirect('/login');

        }

    }
    public function delete_location($id)
    {

        $image = Locations::find($id);
        if($image->Image!=""){
            unlink("public/images/gallery/".$image->Image);
        }
        if($image->location_profileimg1!="") {
            unlink("public/images/gellery_rectengular/" . $image->location_profileimg1);
        }
        if($image->location_profileimg2!="") {
            unlink("public/images/gellery_rectengular/" . $image->location_profileimg2);
        }
        if($image->location_profileimg3!="") {
            unlink("public/images/gellery_rectengular/" . $image->location_profileimg3);
        }
        if($image->location_profileimg4!="") {
            unlink("public/images/gellery_rectengular/" . $image->location_profileimg4);
        }

        $data = Locations::where("ID", $id)->delete();
        return redirect('alocations')->with('status',"Deleted Successfully");
    }
    public function View_location_InsertData(Request $request){
        if(Auth::check()){
            $countries = AllCountries::all();
            $locations=Locations::All();
            $LType=LocationsTypes::All();
            $AllStates=AllGovernorates::all();
            $AllGender=AllGender::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/insert-location',compact('AllStates','AllGender','locations','LType','Sidebaritemadmin','Submenuitems','sidebar_setions','countries'));
        }else{

            return redirect('/login');

        }


    }
    public function insert_location(Request $request)
    {
        if(Auth::check()){
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

            $fileName = "MainS".time().date("his").".".$extension;
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
            $insertlocation->location_nameEN=$request->input('LNameEN');
            $insertlocation->location_nameAR=$request->input('LNameAR');
            $insertlocation->location_o_nameEN=$request->input('LONameEN');
            $insertlocation->location_o_nameAR=$request->input('LONameAR');
            $insertlocation->owner_email=$request->input('OEmail');
            $insertlocation->owner_phone=$request->input('LOPhone');
            $insertlocation->owner_password=$request->input('LOPassword');
            $insertlocation->owner_governorate=$request->input('Governorate');
            $insertlocation->Country = $request->input('Country');
            if ($request->input('City') != "") {
                $insertlocation->owner_city = $request->input('City');
            } else {
                $insertlocation->owner_city = 200000;
            }
            $insertlocation->address=$request->input('FullAddress');
            $insertlocation->area=$request->input('LArea');
            $insertlocation->location_type=$request->input('LType');
            $insertlocation->location_desc=$request->input('LDesc');

            $insertlocation->Image=$fileName;
            $insertlocation->location_profileimg1=$fileName1;
            $insertlocation->location_profileimg2=$fileName2;
            $insertlocation->location_profileimg3=$fileName3;
            $insertlocation->location_profileimg4=$fileName4;

            $insertlocation->socialfacebook=$request->input('Socialfacebook');
            $insertlocation->socialinstagram=$request->input('Socialinstagram');
            $insertlocation->socialtwitter=$request->input('Socialtwitter');
            $insertlocation->socialyoutube=$request->input('Socialyoutube');
            $insertlocation->videolink=$request->input('Videolink');
            $insertlocation->Status="1";

            $insertlocation->save();
            return redirect('alocations')->with('status',"Inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    /**Get Locations Functions**/

    /**Get Blogs Functions**/
    public function Viewallblog(){

        if(Auth::check()){
            $AllBlogs=Blogs::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/ablogs',compact('AllBlogs','Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{
            return redirect('/login');
        }
    }
    public function show_edit_blog($id)
    {
        if(Auth::check()){
            $data = Blogs::find($id);
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            return view('admin/edit-blog',compact('data','Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{
            return redirect('/login');
        }
    }
    public function update_blog(Request $request, $id)
    {
        if(Auth::check()){
            if($request->file('Image')){
                $image = Blogs::find($id);
                if($image->blog_img!=""){
                    unlink("public/images/blog/".$image->blog_img);
                }

                $files = $request->file('Image');
                $filename = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $fileName = "blog".time().date("his").".".$extension;
                $destinationPath = 'public/images/blog'.'/';
                $files->move($destinationPath, $fileName);
                $image=$fileName;
                $insertmodel = Blogs::where("ID", $id)->update(["blog_img" => $image]);

            }


            $update_location = Blogs::where("ID", $id)->update(["blog_titelEN" => $request->input('bNameEN'),
                    "blog_titelAR" => $request->input('bNameAR'),
                    "blog_descEN" => $request->input('blog_descEN'),
                    "blog_descAR" => $request->input('blog_descAR')]);

            return redirect('ablogs')->with('status',"Data Updated");
        }else{
            return redirect('/login');

        }

    }
    public function delete_blog($id)
    {

        $image = Blogs::find($id);
        if($image->blog_img!=""){
            unlink("public/images/blog/".$image->blog_img);
        }


        $data = Blogs::where("ID", $id)->delete();
        return redirect('ablogs')->with('status',"Deleted Successfully");
    }
    public function View_blog_InsertData(Request $request){
        if(Auth::check()){

            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/insert-blog',compact('Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{

            return redirect('/login');

        }


    }
    public function insert_blog(Request $request)
    {
        if(Auth::check()){
            $files = $request->file('Image');

            $filename = $files->getClientOriginalName();

            $extension = $files->getClientOriginalExtension();

            $fileName = "blog".time().date("his").".".$extension;

            $destinationPath ='public/images/blog'.'/';

            $files->move($destinationPath, $fileName);


            $insertblogs = new Blogs();
            $insertblogs->blog_titelEN=$request->input('bNameEN');
            $insertblogs->blog_titelAR=$request->input('bNameAR');
            $insertblogs->blog_descEN=$request->input('blog_descEN');
            $insertblogs->blog_descAR=$request->input('blog_descAR');


            $insertblogs->blog_img=$fileName;



            $insertblogs->save();
            return redirect('ablogs')->with('status',"Inserted Successfully");
        }else{
            return redirect('/login');
        }
    }
    /**Get Blogs Functions**/

    /**Get Queries Functions**/
    public function Viewallqueries(){

        if(Auth::check()){
            $AllOrdersqueries=Ordersqueries::all();
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();

            return view('admin/aqueries',compact('AllOrdersqueries','Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{
            return redirect('/login');
        }
    }
    public function show_edit_query($id)
    {
        if(Auth::check()){
            $data = Ordersqueries::find($id);
            $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
            $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->get();
            $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
            return view('admin/view-query',compact('data','Sidebaritemadmin','Submenuitems','sidebar_setions'));
        }else{
            return redirect('/login');
        }
    }
    public function delete_query($id)
    {
        $data = Ordersqueries::where("ID", $id)->delete();
        return redirect('aqueries')->with('status',"Deleted Successfully");
    }
    /**Get Queries Functions**/
}
