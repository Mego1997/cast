<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTalent extends Model
{
    use HasFactory;
    protected $table = "talent";
    protected $fillable=['ID ','TalentNameEN','TalentNameAR'];
}
