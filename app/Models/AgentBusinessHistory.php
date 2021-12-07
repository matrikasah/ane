<?php

namespace App\Models;
//here
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentBusinessHistory extends Model
{
    use HasFactory;
    protected $fillable=[
        'how_long_operation',
        'deal_area',
        'totalnumber_student',
        'country_student_send',
        'student_in_austrila',
        'partners',
        'institutions',
        'agent_id',
        
    ];
}
