<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;
    protected $fillable = [
       'schemeID',
       'name',
       'Region',
       'zone',
       'woreda',
        'officeTelephone',
        'fax',
        'email',
        'bankAccountID'
       
    ];
}
