<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Job;
use App\Notification;
use App\Proposal;
use App\Payment;

class JobController extends Controller
{
	public function index()
	{
		// $jobs = Job::all();

        $jobs = Job::allNotAccepted();
        $myJobs = DB::table('proposals')
            ->join('jobs', 'jobs.id', '=', 'proposals.job_id')
            ->select('jobs.id','jobs.title','jobs.description','jobs.user_id','jobs.price', 'proposals.accepted', 'proposals.final', 'proposals.user_id')
            ->where('proposals.user_id', Auth::user()->id)
            ->get();
            // dd($myJobs);

		// $jobs = DB::table('jobs')
		// 	->join('proposals', 'proposals.job_id', '=', 'jobs.id')
		// 	->select('jobs.*', 'proposals.final')
		// 	->where('proposals.final', 0)
  //           ->get();

		// return view('job/job', ['jobs' => $jobs]);
		return view('layout.lihatJob', ['jobs' => $jobs, 'myJobs' => $myJobs]);
	}

	public function showMine($user_id)
	{
		// $job = Job::all();
		$jobs = DB::table('jobs')->where('user_id', $user_id)->get();
    	//dd($job->taken);
		// return view('job/job', ['jobs' => $jobs]);
		return view('layout.lihatJob', ['jobs' => $jobs]);
	}

	public function show($user_id, $job_id)
	{
		$job = Job::find($job_id);
		$job->taken = DB::table('notifications')->where('user_id', $user_id)->where('job_id', $job_id)->value('id');
        $consumer = DB::table('jobs')
            ->join('users', 'jobs.user_id', '=', 'users.id')
            ->select('jobs.*', 'users.name')
            ->where('jobs.id', $job_id)
            ->first();
        
// dd(Auth::user()->id);
		// if (Auth::user()->role == 1) {
		// 	$proposed = Proposal::getByJobAndID(Auth::user()->id, $job_id)->get();
		// } else {
			$proposed = Proposal::getByJob($job_id)->get();
			
		// }

        $countProposal = Proposal::count($job_id);
		
        $isPaid = Payment::isPaid($job_id);
        $isValidated = 0;
        $payment = 0;
        if ($isPaid != 0) {
            $isValidated = Payment::isValidated($job_id);
            $payment = Payment::getByJob($job_id)->first();
        }
        
        
        // dd($isPaid);
		$balance = DB::table('users')->where('id', Auth::user()->id)->value('balance');

		// $final = DB::table('proposals')
		// 	->where('user_id', $user_id)
		// 	->where('job_id', $job_id)
		// 	->where('accepted', 1)
		// 	->where('final', 1)
		// 	->get();
    	// dd($proposed);
		// return view('job/single', ['job' => $job]);
		return view('layout.detail', ['countProposal' => $countProposal, 'job' => $job, 'proposed' => $proposed, 'balance' => $balance, 'isPaid' => $isPaid, 'isValidated' => $isValidated, 'payment' => $payment, 'consumer' => $consumer]);
	}

	public function create()
	{
		// return view('job.create');
		return view('layout.pasangJob');
	}

	public function store(Request $request)
	{
		Job::store($request);

		return redirect('home');
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	/*public function imageUpload()
	{
		return view('imageUpload');
	}*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
    	request()->validate([
    		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'job_id' => 'required',
    		'user_id' => 'required'
    	]);

    	$imageName = time().'.'.request()->image->getClientOriginalExtension();
    	request()->image->move(public_path('images'), $imageName);

    	Proposal::prototypeUpload($request, $imageName);

    	return back()
    	->with('success','You have successfully upload image.')
    	->with('image',$imageName);
    }

    public function imageUploadPostFinal(Request $request)
    {
    	request()->validate([
    		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'job_id' => 'required',
    		'user_id' => 'required',
    		'proposal_id' => 'required'
    	]);

    	$imageName = time().'.'.request()->image->getClientOriginalExtension();
    	request()->image->move(public_path('images'), $imageName);

		$acc = Proposal::updateFinalDesign($request, $imageName);

    	return back()
    	->with('success','You have successfully upload image.')
    	->with('image',$imageName);
    }

    public function checkProposal($job_id)
    {
    	// $proposals = DB::table('proposals')->where('job_id', $job_id)->get();

    	$proposals = Proposal::getForPrototype($job_id)->get();

    	return view('layout.lihatPrototype', ['proposals' => $proposals]);
    }

    public function acceptProposal($proposal_id)
    {
    	$acc = DB::table('proposals')
        	->where('id', $proposal_id)
            ->update(['accepted' => 1]);



        $proposal = Proposal::find($proposal_id);

        $acc = DB::table('jobs')
            ->where('id', $proposal->job_id)
            ->update(['accepted' => 1]);

        NotificationController::acceptProposal($proposal_id);

    	return redirect('job/' . $proposal->user_id . '/' . $proposal->job_id);
    	// Redirect::route('route.name',array('param1' => $param1,'param2' => $param2))
    }

    public function showFinal($proposal_id)
    {
    	$acc = DB::table('proposals')
        	->where('id', $proposal_id)
            ->update(['accepted' => 1]);

        $proposal = Proposal::find($proposal_id);

        NotificationController::acceptProposal($proposal_id);

    	return redirect('job/' . $proposal->user_id . '/' . $proposal->job_id);
    	// Redirect::route('route.name',array('param1' => $param1,'param2' => $param2))
    }

    public function bayar($proposal_id)
    {
    	// $proposal = Proposal::get($proposal_id)->get();
    	$proposal = Proposal::get($proposal_id)
            ->get();
    	 // dd($proposal);
    	$saldo = User::getBalance()
            ->get();
    	$sisa = ((int)$saldo[0]->balance - (int) $proposal[0]->price);
    	// dd($sisa);

        // $payment = new Payment;
        // $payment->job_id = $proposal[0]->job_id;
        // $payment->proposal_id = $proposal[0]->id;
        // $payment->user_id = $proposal[0]->user_id;
        // $payment->price = $proposal[0]->price;
        // $payment->save();

        Payment::pay($proposal);

    	$kurangi = DB::table('users')
        	->where('id', Auth::user()->id)
            ->update(['balance' => $sisa]);

        return back()
        ->with('success','Anda telah menerima dan membayar hasil desain akhir dari ' . $proposal[0]->name . '. Saldo Anda menjadi ' . $sisa);
    }
}
