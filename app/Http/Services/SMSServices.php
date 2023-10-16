<?php

namespace App\Http\Services;

use App\Models\User_sms_verification;

class SMSServices
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param $data
     * @return User_sms_verification
     */
    protected function setverificationCode($data)
    {
        $code = mt_rand(100000, 999999);
        $data['code'] = $code;
        User_sms_verification::whereNotNull('user_id')->where(['user_id' => $data['user_id']])->delete();

        return User_sms_verification::create($data);
    }
}
