<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 
        'email',
        'phone', 
        'username',
        'password', 
        'designation',
        'profile',
    ];
}
