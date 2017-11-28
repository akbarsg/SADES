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

    public static function allNotFinal()
    {
    	return DB::table('jobs')
			->join('proposals', 'proposals.job_id', '=', 'jobs.id')
			->select('jobs.*', 'proposals.final')
			->where('proposals.final', 0)
            ->get();
    }
}
