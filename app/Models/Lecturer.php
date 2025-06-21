<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';
    protected $primarykey = 'id';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'email',
        'phone', 
        'nic',
        'gender', 
        'district', 
        'address',
        'bio', 
    ];
}
