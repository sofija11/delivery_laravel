<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationDataRequest;
use App\Providers\UserService;
use Exception;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function registerUser(RegistrationDataRequest $request){
        $first_name         = $request->input('first_name');
        $last_name          = $request->input('last_name');
        $user_name          = $request->input('user_name');
        $mobile_phone       = $request->input('mobile_phone');
        $email              = $request->input('email');
        $password           = $request->input('password');
        $confirm_password   = $request->input('confirm_password');

        try {
            UserService::registerUser($first_name, $last_name, $user_name, $email, $password, $confirm_password, $mobile_phone);
        } catch(Exception $ex){
            return redirect()->back()->with('message', $ex->getMessage());
            return response(['error' => $ex->getMessage()], 505);
          //  return redirect()->back()->with('message', 'Failed registration');
            Log::error($ex->getMessage());
        }
    }
}
