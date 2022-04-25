<?php

namespace App\Actions;

use Illuminate\Support\Facades\Hash;

class PasswordEncryption
{
    /* @var  */
    private $password;

    /* Password Encryption constructor. */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /* Generate and encrypt new password*/
    public function generatePassword()
    {
        return $this->encryptPassword();
    }

    /* Encrypt Password */
    private function encryptPassword()
    {
        return $this->encryption($this->password);
    }

    /* Encryption Process */
    private function encryption($password)
    {
        return Hash::make($password);
    }

}
