<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    protected $fillable = [
        'job_id', 'proposal_id', 'user_id', 'price',
    ];
}
