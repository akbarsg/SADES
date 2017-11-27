<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Notification;
use App\Proposal;

class NotificationController extends Controller
{
    public function takeJob(Request $request)
    {
    	$notification = new Notification;
    	$notification->title = 'Anda telah mengambil Job!';
    	$notification->description = 'Job yang diambil adalah job dengan ID '.$request->job_id;
    	$notification->user_id = $request->user_id;
    	$notification->job_id = $request->job_id;
    	
    	$notification->save();

    	return redirect('job/'.$request->user_id.'/'.$request->job_id);
    }

    public static function acceptProposal($proposal_id)
    {   

        $proposal = Proposal::find($proposal_id);

        $notification = new Notification;
        $notification->title = 'Ajuan prototype Anda telah diterima!';
        $notification->description = 'Ajuan prototype Anda pada job dengan ID '. $proposal->id . ' telah diterima!';
        $notification->user_id = $proposal->user_id;
        $notification->job_id = $proposal->job_id;
        
        $notification->save();
    }

    
}
