<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllEyeColor extends Model
{
    use HasFactory;
    protected $table = "eyecolor";
    protected $fillable=['ID','ColorEN','ColorAR'];
}
