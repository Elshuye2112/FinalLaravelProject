<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $primaryKey='employeeID';
    protected $fillable = [
        'employeeID',
        'adminID',
        'firstName',
        'lastName',
        'dateOfBirth',
         'gender',
         'email',
         'region',
         'zone',
         'woreda',
         'kebele',
         'phone',
         'profession',
         'levelOfEducation',
         'userName',
         'password',
         'role',
         'schemeID'
    ];
}
