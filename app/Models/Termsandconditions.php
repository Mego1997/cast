<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termsandconditions extends Model
{
    use HasFactory;
    protected $table = "termsandconditions";
    protected $fillable=['ID','TermsEN','TermsAR'];
}
