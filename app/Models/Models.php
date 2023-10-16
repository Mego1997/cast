<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $table = "models";
    protected $fillable=['ID','FirstNameEN','MiddleNameEN','LastNameEN','FirstNameAR','MiddleNameAR','LastNameAR','Talent','Governorate','City','Address','Gender','BirthDate','Height','EyeColor','SkinColor','Weight','HairQuality','HairColor','AddedDate','Image'];


    ################## Begin relations ############

    public function  city(){
        return $this ->  belongsTo('App\Models\Cities','City');
    }
    public function  governorates(){
        return $this ->  belongsTo('App\Models\AllGovernorates','Governorate');
    }
    public function  all_states(){
        return $this ->  belongsTo('App\Models\all_states','Governorate');
    }
    public function  AllCountries(){
        return $this ->  belongsTo('App\Models\AllCountries','Country');
    }
    public function  EyeColor(){
        return $this ->  belongsTo('App\Models\Eyecolor','EyeColor');
    }
    public function  Gender(){
        return $this ->  belongsTo('App\Models\Gender','Gender');
    }
    public function  HairQuality(){
        return $this ->  belongsTo('App\Models\Hairquality','HairQuality');
    }
    public function  HairColor(){
        return $this ->  belongsTo('App\Models\Haircolor','HairColor');
    }
    public function  Talent(){
        return $this ->  belongsTo('App\Models\Talent','Talent');
    }
    public function  SkinColor(){
        return $this ->  belongsTo('App\Models\SkinColor','SkinColor');
    }
    public function  Talentname(){
        return $this ->  belongsTo('App\Models\Talentname','Talent');
    }
    public function  Experiences(){
        return $this ->  belongsTo('App\Models\Experiences','Experiences');
    }
    public function  Language(){
        return $this ->  belongsTo('App\Models\Language','Language');
    }
    public function  Appearance(){
        return $this ->  belongsTo('App\Models\Appearance','Appearance');
    }
    public function  Uniquedata(){
        return $this ->  belongsTo('App\Models\Uniquedata','Uniquedata');
    }
    public function  Accent(){
        return $this ->  belongsTo('App\Models\Accent','Accent');
    }
    ################## End relations ############

}
