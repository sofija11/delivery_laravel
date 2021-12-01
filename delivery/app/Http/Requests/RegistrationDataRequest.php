<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'   => 'required|regex:/[A-Z]{1}[a-z]{3,20}/',
            'last_name'    => 'required|regex:/[A-Z]{1}[a-z]{3,20}/',
            'user_name'    => 'required|regex:/^[a-zA-Z0-9_.@]{8,30}$/|unique:users,username',
            'mobile_phone' => 'required|regex:/([+(\d]{1})(([\d+() -.]){5,16})([+(\d]{1})/|unique:users,mobile_phone',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/',
            'confirm_password' => 'required|same:password',

        ];
    }

    public function messages()
    {
        return [
            'first_name.required'       => 'Morate uneti Vase ime',
            'first_name.regex'          => 'Ime nije u ispravnom formatu',
            'last_name.required'        => 'Morate uneti Vase prezime',
            'last_name.regex'           => 'Prezime nije u ispravnom formatu',
            'user_name.required'        => 'Morate uneti korisnicko ime',
            'user_name.regex'           => 'Korisnicko 
            ime nije u ispravnom formatu, mora sadrzati bar jedno veliko slovobar jedan broj kao i neki specijalni karakter',
            'username.unique'           => 'Unesite drugo korisnicko ime, ovo je zauzeto',
            'mobile_phone.required'     => 'Morate uneti mobilni telefon',
            'mobile_phone.regex'        => 'Mobilni telefon nije u dobrom formatu',
            'mobile_phone.unique'       => 'Mobilni telefon vec postoji',
            'email.required'            => 'Morate uneti email',
            'email.email'               => 'Email nije u ispravnom formatu',
            'email.unique'              => 'Ovaj email je vec u upotrebi',
            'password.required'         =>  'Morate uneti sifru',
            'password.regex'            =>  'Sifra mora sadrzati bar jedno veliko slova, brojeve kao i neki specijalni karakter',
            'confirm_password.required' => 'Niste ponovili lozinku',
            'confirm_password.same'     => 'Lozinke se ne poklapaju',
        ];
    }
}
