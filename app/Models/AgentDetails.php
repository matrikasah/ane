<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentDetails extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'surname',
        'givenname',
        'address_in_aus',
        'suburb',
        'country',
        'address_outside_aus',
        'suburb_outside_aus',
        'post_code',
        'mobile_num',
        'telephone_num',
        'emergency_contact',
        'emgy_address',
        'emgy_telephone',
        'abn',
        'acn'

    ];

    public function businessHistory(){
      return  $this->hasOne(AgentBusinessHistory::class,'agent_id');
    }
    public function contactPerson(){
       return $this->hasMany(AgentContactPerson::class,'agent_id');
    }
    public function declaration(){
       return $this->hasOne(AgentDeclaration::class,'agent_id');
    }

}
