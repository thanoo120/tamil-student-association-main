<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $primaryKey = "id";
    protected $fillable = [
        "firstname",
        "lastname",
        "father_name",
        "mother_name",
        "father_job",
        "mother_job",
        "course",
        "email",
        "sibiling",
        "phone",
        "stu_number",
        "dob",
        "gender",
        "district",
        "address",
        "grade",
        "faculty",
        "student_mail",
        "ag_office_division",
        "gs_office_division",
    ];
}
