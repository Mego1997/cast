<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_sms_verification_history extends Model
{
    use HasFactory;
    protected $table = "user_sms_verification_history";
    protected $fillable=['ID','user_email','user_phone','verification_code'];
}
