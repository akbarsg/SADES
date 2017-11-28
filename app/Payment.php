<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class Payment extends Model
{
    protected $fillable = [
        'job_id', 'proposal_id', 'user_id', 'price',
    ];

    public static function isPaid($job_id)
    {
    	return $payment = DB::table('payments')
            ->where('job_id', $job_id)
            ->count();

    	// return Payment::where('job_id', '=', $job_id);
    	//output null klo ga ada
    }
}
