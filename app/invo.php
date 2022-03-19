<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invo extends Model
{
    protected $fillable = [
        'card_no',
        'name',
        'birthday',
        'adress',
        'blood_type',
        'ns_no',
        'phone',
        'gender',
        'date_begin',
        'date_end',
        'job',
        'personal_state',
    ];

}
