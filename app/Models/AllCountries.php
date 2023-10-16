<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCountries extends Model
{
    use HasFactory;
    protected $table = "countries";
    protected $fillable=['id','name_ar','name_fr','name_en'];
    ################## Begin relations ############

    public function  models(){
        return $this ->  hasOne('App\Models\Models','Country');
    }
    public function  services(){
        return $this ->  hasOne('App\Models\Services','Country');
    }
    ################## End relations ############
}
