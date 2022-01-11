<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'usernameOrPassword' => 'required|max:100',
            'password'           => 'required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/',
        ];
    }

    public function messages()
    {
        return [
            'usernameOrPassword.required'  => 'Morate uneti Vase korisnicko ili mejl',
            'usernameOrPassword.max'       => 'Morate uneti Vase korisnicko ili mejl',
            'password.required'            => 'Morate uneti sifru',
            'password.regex'               => 'Sifra mora sadrzati bar jedno veliko slova, brojeve kao i neki specijalni karakter',
        ];
    }
}
