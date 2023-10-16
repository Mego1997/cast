<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable=['ID','FirstNameEN','MiddleNameEN','LastNameEN','FirstNameAR','MiddleNameAR','LastNameAR','Email','Phone','Password','Governorate','specialization', 'services','job', 'City','Address','Gender','BirthDate','ServDesc','Image','ProfileImage1','ProfileImage2','Socialfacebook','Socialinstagram','Socialtwitter','Socialyoutube','Videolink','Status'];

    ################## Begin relations ############

    public function  city(){
        return $this ->  belongsTo('App\Models\Cities','City');
    }
    public function  governorates(){
        return $this ->  belongsTo('App\Models\Governorate','Governorate');
    }
    public function  Gender(){
        return $this ->  belongsTo('App\Models\Gender','Gender');
    }
    public function  Services_details(){
        return $this ->  belongsTo('App\Models\Services_details','services');
    }
    public function  Specializations(){
        return $this ->  belongsTo('App\Models\Specializations','specialization');
    }
    public function  jobs(){
        return $this ->  belongsTo('App\Models\jobs','job');
    }
    public function  AllCountries(){
        return $this ->  belongsTo('App\Models\AllCountries','Country');
    }
    public function  all_states(){
        return $this ->  belongsTo('App\Models\all_states','Governorate');
    }

    ################## End relations ############

}
