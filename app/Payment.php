<?php

namespace App;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class Payment extends Model
{
    protected $fillable = [
        'job_id', 'proposal_id', 'user_id', 'price', 'link_proof', 'validated',
    ];

    public static function getByJob($job_id)
    {
        return DB::table('payments')
            // ->join('proposals', 'payments.proposal_id', '=', 'proposals.id')
            // ->select('payments.*', 'proposals.link_final')
            ->where('job_id', $job_id);
    }

    public static function isPaid($job_id)
    {
    	return $payment = DB::table('payments')
            ->where('job_id', $job_id)
            ->count();

    	// return Payment::where('job_id', '=', $job_id);
    	//output null klo ga ada
    }

    public static function isValidated($job_id)
    {
        return $payment = DB::table('payments')
            ->where('job_id', $job_id)
            ->where('validated', 1)
            ->count();
    }

    public static function validatePayment($payment_id)
    {
        return DB::table('payments')
            ->where('id', $payment_id)
            ->update(['validated' => 1]);
    }

    public static function pay($proposal)
    {
        $payment = new Payment;
        $payment->job_id = $proposal[0]->job_id;
        $payment->proposal_id = $proposal[0]->id;
        $payment->user_id = $proposal[0]->user_id;
        $payment->price = $proposal[0]->price;
        $payment->save();
        return 1;
    }

    public static function proofUpload(Request $request, $imageName)
    {
        $payment = new Payment;
        $payment->job_id = $request->get('job_id');
        $payment->proposal_id = $request->get('proposal_id');
        $payment->price = $request->get('price');
        $payment->user_id = $request->get('user_id');
        $payment->link_proof = $imageName;
        $payment->validated = 0;
        $payment->save();
        return 1;
    }
}
