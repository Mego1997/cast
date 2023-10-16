<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebaritemadmin extends Model
{
    use HasFactory;

    protected $table = "sidebaritemadmin";
    protected $fillable=['ID','sidebaritemName','sidebaritemHref','Hassub','sidebar_section_name'];
}
