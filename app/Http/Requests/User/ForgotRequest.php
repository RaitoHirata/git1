<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\User\PasswordExistsRule;

class ForgotRequest extends FormRequest
{
    private $email;

    public function authorize()
    {
        return true;
    }

    public function all($keys = null)
    {
        $results = parent::all($keys);

        $this->email = $results['email'];

        return $results;
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                new PasswordExistsRule(
                    $this->email
                )
            ],
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'メールアドレス',
        ];
    }

}