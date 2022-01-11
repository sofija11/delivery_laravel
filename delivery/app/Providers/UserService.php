<?php

namespace App\Providers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class UserService {

    private static $role_keys = [
        'admin'         => 1,
        'korisnik'      => 2,
        'dostavljac'    => 3,
    ];

    public static function registerUser(
        string $firstname,
        string $lastname,
        string $username, 
        string $email,
        string $password, 
        string $confirm_password,
        string $mobile_phone
    ) {
        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->email = $email;
        $user->password = md5($password);
        $user->mobile_phone = $mobile_phone;
        $user->role_id    = 3;
        $user->save();

        // if ($firstname !== '' && ValidationService::validateName($firstname) !== false) {
          
        // } else {
        //     throw new ValidationException("Ime nije odgovarajuceg formata");
        // }

        // if ($lastname !== '' && ValidationService::validateName($lastname) !== false) {
        //     $user->lastname = $lastname;
        // } else {
        //     throw new ValidationException("Prezime nije odgovarajuceg formata");
        // }

        // if ($username !== '' && ValidationService::validateUsername($username) !== false) {
        //     $user->username = $username;
        // } else {
        //     throw new ValidationException("Korisnicko ime nije odgovarajuceg formata");
        // }

        // if ($email !== '' && ValidationService::validateEmail($email) !== false) {
        //     $user->email = $email;
        // } else {
        //     throw new ValidationException("Email nije odgovarajuceg formata");
        // }

        // if ($password !== '' && ValidationService::validatePassword($password) !== false && $password === $confirm_password) {
        //     $user->password = md5($password);
        // } else {
        //     throw new ValidationException("Sifra nije odgovarajuceg formata");
        // }

        // if ($mobile_phone !== '' && ValidationService::validatePhone($mobile_phone) !== false) {
        //     $user->mobile_phone = $mobile_phone;
        // } else {
        //     throw new ValidationException("Mobilni telefon nije odgovarajuceg formata");
        // }

        // $current_date_time = Carbon::now()->toDateTimeString(); 

        // $user->created_at = $current_date_time;
        // $user->role_id    = 3;
        // $user->save();

    }

    public static function loginUser(
        string $usernameOrPassword,
        string $password
    ){
        $md5Password = md5($password);
        $user =  User::where('username', '=', $usernameOrPassword)
        ->orWhere('email', '=', $usernameOrPassword)
        ->where('password', '=', $md5Password)
        ->first();
        if($user !== null) {
         
            if($user->role_id === self::getRoleid('admin')){
                return [
                    'type' => 'admin',
                    'user' => $user,
                ];
            } else if($user->role_id === self::getRoleid('korisnik')) {
                return [
                    'type' => 'korisnik',
                    'user' => $user,
                ];
            } else {
                return [
                    'type' => 'deliverer',
                    'user' => $user,
                ];           
            }
        }
        else {
            var_dump('nema');
        }
        
    }

    /**
     * vraca id uloge
     *
     * @param  string $role
     * @return int
     */    
    public static function getRoleid(string $role):int {
        return self::$role_keys[$role];
    }































}