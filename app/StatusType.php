<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MemberStatus;

class StatusType extends Model
{
    //zaznaczenie jakie pole może być wpisane
    protected $fillable=['name'];

    //utworzenie relacji
    public function member_status(){
        return $this->belongsTo(MemberStatus::class);
    }
}
