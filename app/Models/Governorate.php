<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use HasFactory;
    protected $table = "governorates";
    protected $fillable=['id','governorate_name_ar','governorate_name_en'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Governorate');
    }
    public function  Services(){
        return $this ->  hasOne('App\Models\Services','Governorate');
    }
    public function  Locations(){
        return $this ->  hasOne('App\Models\Locations','owner_governorate');
    }
    ################## End relations ############
}
