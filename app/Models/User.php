<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, CanResetPassword;


    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'id_user',
        'level_user',
        'created_at',
        'updated_at',
        'username',
        'password',
    ];
    
    protected $primaryKey = 'id_user'; // Nama kolom yang digunakan sebagai identifier
    public function getAuthIdentifierName()
    {
        return 'id_user'; // Nama kolom yang digunakan sebagai identifier
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password; // Kolom yang berisi kata sandi pengguna
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Nama kolom yang digunakan untuk menyimpan token pengingat sesi
    }
}
