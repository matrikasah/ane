<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentContactPerson extends Model
{
    use HasFactory;

    protected $fillable=[
        'keyStaff',
        'useragentname',
        'userinstname',
        'userinsttitle',
        'userinstphone',
        'userinstfax',
        'userinstemail',
        'agent_id',
    ];
}
