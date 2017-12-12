<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'user_id',
    ];

    public static function store(Request $request)
    {
    	$job = new Job;
		$job->title = $request->title;
		$job->description = $request->description;
		$job->price = $request->price;
		$job->user_id = $request->user_id;
		$job->save();
    }

    public static function allNotAccepted()
    {
   //  	return DB::table('jobs')
			// ->rightJoin('proposals', 'proposals.job_id', '=', 'jobs.id')
			// ->where('proposals.accepted', '=', 1)
   //          ->orWhere('proposals.accepted', '=', null)
   //          ->get();

        return DB::table('jobs')
             ->where('accepted', '=', 0)
             ->get();

        // return DB::table('jobs')
        //     ->leftJoin('proposals', 'proposals.id', '=', 'jobs.id')
        //     ->unionAll($second)
        //     ->where('proposals.accepted', '<>', 1)
        //     ->where('jobs.title', '<>', NULL)
        //     ->get();

    }
}
