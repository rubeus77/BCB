<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['first_name', 'last_name', 'screen_name','birth_date', 'address', 'mail_address', 'email1', 'email2', 'tel1', 'tel2', 'card_number', 'member_status', 'card_status'];

    //relacje do inntch tabel
    public function member_status(){
        //zastanowić się i uzupełnić
    }
}
