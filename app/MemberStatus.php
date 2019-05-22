<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberStatus extends Model
{
    //zabazpieczenie wprowadzanych pól
    protected $fillable=['status_type', 'accession_date', 'leave_date', 'declaration_scan_URL', 'adding_scan_URL', 'leave_reason_scan_URL'];

    //tworzenie relacji
    public function status_type(){
        return $this->hasMany(StatusType::class);
    }
    public function member(){
        return $this->belongsTo(Member::class);
    }
}
