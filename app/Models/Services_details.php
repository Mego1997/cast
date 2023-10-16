<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_details extends Model
{
    use HasFactory;
    protected $table = "services_details";
    protected $fillable=['ID','service_nameEN','service_nameAR'];

    ################## Begin relations ############
    public function  services(){
        return $this ->  hasOne('App\Models\Services','services');
    }
    ################## End relations ############
}
