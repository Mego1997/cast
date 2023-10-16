<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specializations extends Model
{
    use HasFactory;
    protected $table = "specializations";
    protected $fillable=['ID','specialization_nameEN','specialization_nameAR','service_id'];
    ################## Begin relations ############
    public function  services(){
        return $this ->  hasOne('App\Models\Services','specialization');
    }
    ################## End relations ############
}
