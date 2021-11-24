<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentDeclaration extends Model
{
    use HasFactory;

protected $fillable=[
    'declaration',
    'agentprintname',
    'agent_sign',
    'agent_position',
    'date',
    'agent_id'
];

}
