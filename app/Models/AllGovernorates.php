<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllGovernorates extends Model
{
    use HasFactory;
    protected $table = "governorates";
    protected $fillable=['id','governorate_name_ar','governorate_name_en'];

}
