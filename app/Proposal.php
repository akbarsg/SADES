<?php

namespace App;

use Illuminate\Http\Request;

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

    public static function count($job_id)
    {
        return DB::table('proposals')
            ->where('job_id', $job_id)
            ->count();
    }

    public static function prototypeUpload(Request $request, $imageName)
    {
        $proposal = new Proposal;
        $proposal->job_id = $request->get('job_id');
        $proposal->user_id = $request->get('user_id');
        $proposal->link = $imageName;
        $proposal->save();
    }

    public static function updateFinalDesign(Request $request, $imageName)
    {
        return DB::table('proposals')
            ->where('id', $request->get('proposal_id'))
            ->update(['final' => 1, 'link_final' => $imageName]);
    }

    public static function getForPrototype($job_id)
    {
        return DB::table('proposals')
            ->join('users', 'proposals.user_id', '=', 'users.id')
            ->join('jobs', 'proposals.job_id', '=', 'jobs.id')
            ->select('proposals.*', 'users.name', 'jobs.title')
            ->where('proposals.job_id', $job_id);
    }
}
