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
    	Notification::takeJob($request);

    	return redirect('job/'.$request->user_id.'/'.$request->job_id);
    }

    public static function acceptProposal($proposal_id)
    {   
        $proposal = Proposal::find($proposal_id);
        Notification::acceptProposal($proposal);
    }

    
}
