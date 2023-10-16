<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllHairQuality extends Model
{
    use HasFactory;
    protected $table = "hairquality";
    protected $fillable=['ID ','HairQualityEN','HairQualityAR'];
}
