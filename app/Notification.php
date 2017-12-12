<?php

namespace App;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class Notification extends Model
{
    protected $fillable = [
        'title', 'description', 'job_id', 'user_id', 'to_user_id', 'type',
    ];

    public static function takeJob(Request $request)
    {
        $notification = new Notification;
        $notification->title = 'Anda telah mengambil Job!';
        $notification->description = 'Job yang diambil adalah job dengan ID '.$request->job_id;
        $notification->user_id = $request->user_id;
        $notification->job_id = $request->job_id;
        $notification->type = 0;
        
        $notification->save();
    }

    public static function acceptProposal($proposal)
    {
        
        $notification = new Notification;
        $notification->title = 'Ajuan prototype Anda telah diterima!';
        $notification->description = 'Ajuan prototype Anda pada job dengan ID '. $proposal->id . ' telah diterima!';
        $notification->user_id = $proposal->user_id;
        $notification->job_id = $proposal->job_id;
        $notification->type = 2;
        
        $notification->save();
    }

    public static function rated($from_id, $to_id)
    {
    	$notification = new Notification;
        $notification->user_id = $from_id;
        $notification->to_user_id = $to_id;
        $notification->type = 1;
        $notification->title = 'Anda telah memberi rating';
        $notification->description = 'Anda telah memberi peringkat pada pengguna dengan ID ' . $to_id;
        $notification->save();
    }

    public static function isRated($from_id, $to_id)
    {
        return DB::table('notifications')
            ->where('user_id', $from_id)
            ->where('to_user_id', $to_id)
            ->where('type', 1)
            ->count();
    }
}
