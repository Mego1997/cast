<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $fillable=['id','governorate_id','city_name_ar','city_name_en'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','City');
    }
    public function  services(){
        return $this ->  hasOne('App\Models\Services','City');
    }
    public function  Locations(){
        return $this ->  hasOne('App\Models\Locations','owner_city');
    }
    ################## End relations ############
}
