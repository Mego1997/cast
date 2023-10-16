<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class all_states extends Model
{
    use HasFactory;
    protected $table = "all_states";
    protected $fillable=['id','name_en','name_ar','name_fr','code','country_id'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Governorate');
    }
    public function  Services(){
        return $this ->  hasOne('App\Models\Services','Governorate');
    }
    ################## End relations ############
}
