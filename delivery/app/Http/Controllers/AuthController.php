<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationDataRequest;
use App\Http\Requests\LoginRequest;
use App\Providers\UserService;
use Illuminate\Http\Request;
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
            return redirect()->back()->with('message', 'Succesful registration')->withInput();
        } catch(Exception $ex){
            return redirect()->back()->with('message', $ex->getMessage())->withInput();
            return response(['error' => $ex->getMessage()], 505);
          //  return redirect()->back()->with('message', 'Failed registration');
            Log::error($ex->getMessage());
        }
    }

    public function loginUser(LoginRequest $request) {
        $usernameOrPassword = $request->input('usernameOrPassword');
        $password = $request->input('password');

        try {
           $user =  UserService::loginUser($usernameOrPassword, $password);
           var_dump($user);die;
        } catch(Exception $ex) {
            //var_dump($ex->getMessage());die;
            return redirect()->back()->with('message', $ex->getMessage())->withInput();
         //   return \response(['error' => $ex->getMessage()], 505);
            Log::error($ex->getMessage());
        }

    }

    public function recoverPassword(Request $request){
        $email = $request->input('email');
    
    }
}
