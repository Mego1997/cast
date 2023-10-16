<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar_sections extends Model
{
    use HasFactory;

    protected $table = "sidebar_sections";
    protected $fillable=['ID','sidebar_section_name'];
}
