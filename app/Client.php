<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // added
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'dateprofiled',
        'primarylegal',
        'DOB',
        'casedetails',
        'filename'
    ]; 
}
