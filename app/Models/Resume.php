<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicantImage',
        'applicantLastName',
        'applicantFirstName',
        'applicantMiddleInitial',
        'address',
        'contactNo',
        'email',
        'objective',
        'dateOfBirth',
        'placeOfBirth',
        'sex',
        'civilStatus',
        'religion',
        'nationality',
        'fatherName',
        'motherName',
        'tertiarySchool',
        'tertiaryAddress',
        'tertiaryCourse',
        'tertiaryYear',
        'secondaryShsSchool',
        'secondaryShsAddress',
        'secondaryShsYear',
        'secondaryJhsSchool',
        'secondaryJhsAddress',
        'secondaryJhsYear',
        'primarySchool',
        'primaryAddress',
        'primaryYear',
        'applicantStatus',
        'applyingFor',
        'applicationFrom',
    ];
}
