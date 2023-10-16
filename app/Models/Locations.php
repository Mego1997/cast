<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    protected $table = "locations";
    protected $fillable=['ID','location_nameEN','location_nameAR','	location_o_nameEN','location_o_nameAR','owner_email','owner_phone','owner_password','Country','owner_governorate','owner_city','address','height','width','area','location_type','location_desc','location_descAR"','Image','location_profileimg1','location_profileimg2','location_profileimg3','location_profileimg4','socialfacebook','socialinstagram','socialyoutube','socialtwitter','videolink','Status','updated_at','created_at'];
    ################## Begin relations ############

    public function  city(){
        return $this ->  belongsTo('App\Models\Cities','owner_city');
    }
    public function  governorates(){
        return $this ->  belongsTo('App\Models\Governorate','owner_governorate');
    }
    public function  all_states(){
        return $this ->  belongsTo('App\Models\all_states','owner_governorate');
    }
    public function  AllCountries(){
        return $this ->  belongsTo('App\Models\AllCountries','Country');
    }
    public function  LocationsTypes(){
        return $this ->  belongsTo('App\Models\LocationsTypes','location_type');
    }
    ################## End relations ############
}
