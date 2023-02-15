<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplicants extends Model
{
    use HasFactory;
    protected $table = 'LoanApplicants';

    protected $fillable = [
        'uid',
        'name',
        'dob',
        'id',
        'idnum',
        'bvn',
        'email',
        'phone',
        'bank',
        'account',
        'loanamount',
        'paymentRef',
        'monnifyRef',
        'paid',
        'availableloan',
        'denied',
        'editedamount',
        'confirmed',
        'disbursed'


    ];
}
