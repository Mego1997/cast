<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationsTypes extends Model
{
    use HasFactory;
    protected $table = "locations_types";
    protected $fillable=['ID','type_nameEN','type_nameAR','updated_at','created_at'];
    ################## Begin relations ############
    public function  Locations(){
        return $this ->  hasOne('App\Models\Locations','location_type');
    }
    ################## End relations ############
}
