<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ALLHairColor extends Model
{
    use HasFactory;
    protected $table = "haircolor";
    protected $fillable=['ID ','HairColorEN','HairColorAR'];
}
