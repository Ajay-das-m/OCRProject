<?php

namespace App\Models;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model implements Authenticatable
{
    public function getAuthIdentifierName()
{
    return 'id'; // replace with the name of the primary key column in your users table
}

public function getAuthIdentifier()
{
    return $this->id; // replace with the name of the primary key column in your users table
}

public function getAuthPassword()
{
    return $this->password; // replace with the name of the password column in your users table
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
    return 'remember_token';
}
    use HasFactory;
    // use Authenticatable;
    protected $table = 'login_user';
    protected $primarykey='id';
    public $incrementing= true;
     protected $fillable=['name','date_of_birth','password','email'];
     
}
