<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class Proposal extends Model
{
    protected $fillable = [
        'job_id', 'user_id', 'link', 'accepted', 'link_final', 'final',
    ];

    public static function getByJobAndID($user_id, $job_id)
    {
    	return DB::table('proposals')
			->join('users', 'proposals.user_id', '=', 'users.id')
            ->select('proposals.*', 'users.name')
			->where('job_id', $job_id)
            ->where('user_id', $user_id);
    }

    public static function getByJob($job_id)
    {
        return DB::table('proposals')
            ->join('users', 'proposals.user_id', '=', 'users.id')
            ->select('proposals.*', 'users.name')
            ->where('job_id', $job_id)
            ->orderBy('accepted', 'desc');
    }

    public static function get($proposal_id)
    {
        return DB::table('proposals')
            ->join('users', 'proposals.user_id', '=', 'users.id')
            ->join('jobs', 'proposals.job_id', '=', 'jobs.id')
            ->select('proposals.*', 'users.name', 'jobs.price')
            ->where('proposals.id', $proposal_id);
    }
}
