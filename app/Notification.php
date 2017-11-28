<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class Notification extends Model
{
    protected $fillable = [
        'title', 'description', 'job_id', 'user_id', 'to_user_id', 'type',
    ];

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
