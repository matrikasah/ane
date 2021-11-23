<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantPersonalDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        'stdsurname',
        'stdgivenname',
        'stdhomeaddress',
        'stdsuburb',
        'stdpostcode',
        'stdtelnum',
        'stdemail',
        'stddob',
        'sex',
        'is_disable',
        'disable',
        'offshore_student'
    ];



}
