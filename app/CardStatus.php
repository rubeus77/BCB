<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardStatus extends Model
{
    protected $fillable=['first_name_on_card', 'last_name_on_card', 'print_status'];
}
