<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Models;
use App\Models\User;
use Illuminate\Http\Request;

class test extends Controller
{
    public function hasOneRelation()
    {
        return $user = User::with(['phone' => function ($q) {
            $q->select('code', 'phone', 'user_id');
        }])->find(1);

        //return $user -> phone -> code;
        // $phone = $user -> phone;

        return response()->json($user);
    }

}
