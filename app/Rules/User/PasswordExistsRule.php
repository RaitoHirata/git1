<?php

namespace App\Rules\User;
use App\Models\user;

use Illuminate\Contracts\Validation\Rule;

class PasswordExistsRule implements Rule
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function passes($attribute, $value)
    {
        if(!user::where('email', $this->email)->first()) return false;
        return true;
    }

    public function message()
    {
        return 'そのメールアドレスは登録されていません';
    }
}