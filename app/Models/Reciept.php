<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciept extends Model
{
    use HasFactory;
    protected $fillable = [
        'paymentID',
        'dateOfPayment',
        'typeOfPayment',
        'amount',
        'cashier',
        'waysOfPayment',
        'accountID'
        


    ];
}
