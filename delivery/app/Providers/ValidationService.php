<?php

namespace App\Providers;

use Exception;

class ValidationService {

    public static function validatePassword(string $password) {
        if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/', $password)) {
            return false;
        } else {
            return $password;
        }
    }

    public static function validateEmail(string $email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return $email;
        }
    }

    public static function validateName($name) {
        if (!preg_match('/[A-Z]{1}[a-z]{3,20}/', $name)) {
            return false;
        } else {
            return $name;
        }
    }

    public static function validatePhone(string $phone) {
        if (!preg_match('/([+(\d]{1})(([\d+() -.]){5,16})([+(\d]{1})/', $phone)) {
            return false;
        } else {
            return $phone;
        }
    }

    public static function validateUsername(string $username) {
        if (!preg_match('/^[a-zA-Z0-9_.@]{8,30}$/', $username)) {
            return false;
        } else {
            return $username;
        }
    }
}