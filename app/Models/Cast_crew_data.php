<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast_crew_data extends Model
{
    use HasFactory;
    protected $table = "cast_crew_data";
    protected $fillable=['ID','cast_crew_nameen','cast_crew_namear','cast_crew_facebook','cast_crew_instagram','cast_crew_youtube','cast_crew_twitter','cast_crew_phone','cast_crew_email','cast_crew_addres'];
}
