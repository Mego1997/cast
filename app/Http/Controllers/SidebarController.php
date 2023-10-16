<?php

namespace App\Http\Controllers;


use App\Models\Sidebar_sections;
use App\Models\Sidebaritemadmin;
use App\Models\Submenuitems;
use App\Models\Talent;
use App\Models\Termsandconditions;
use App\User;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Models;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Mime\Header\get;
use function Symfony\Component\Mime\toString;


class SidebarController extends Controller
{
    public function Viewsidebardata(){
        if(Auth::check()){
        $sidebargroup=Sidebar_sections::paginate(10,['*'],'sidebargroup');
        $sidebaritems=Sidebaritemadmin::paginate(10,['*'],'sidebaritems');
        $sidebarsubmainitems=Submenuitems::paginate(10,['*'],'sidebarsubmainitems');
        $sidebargroupbox=Sidebar_sections::All();
        $sidebaritemsbox=Sidebaritemadmin::All();
        $sidebar_setions=Sidebar_sections::orderBy('sidebarsectiondesc', 'ASC')->get();
        $Sidebaritemadmin=Sidebaritemadmin::orderBy('sidebaritemdesc', 'ASC')->get();
        $Submenuitems=Submenuitems::orderBy('sidebarsubdesc', 'ASC')->paginate(10);

        return view('admin/sidebar-setting',compact('sidebargroup',
            'sidebaritems','sidebarsubmainitems','sidebar_setions'
            ,'Sidebaritemadmin','Submenuitems','sidebargroupbox','sidebaritemsbox'));
        }else{
            return redirect('/login');
        }
    }
}
