<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table='members';

    protected $primaryKey='memberID';
    public function getChildren(){
        return $this->hasMany('App\Models\Children');
    }
    protected $fillable = [
        'memberID',
        'firstName',
         'lastName',
         'middleName',
         'dateOfBirth',
         'gender',
         'phone',
         'status',
         'occopation',
         'region',
         'zone',
         'woreda',
         'kebele',
         'email',
         'userName',
        'password',
        'member_employeeID',
    ];
}
