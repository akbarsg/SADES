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

class PaymentController extends Controller
{
	public function paymentUploadPost(Request $request)
	{
		request()->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'price' => 'required',
			'job_id' => 'required',
			'proposal_id' => 'required',
			'user_id' => 'required'
		]);

		$imageName = time().'.'.request()->image->getClientOriginalExtension();
		request()->image->move(public_path('payments'), $imageName);

		Payment::proofUpload($request, $imageName);

		return back()
		->with('success','Bukti pembayaran berhasil diunggah. Tunggu validasi oleh freelancer')
		->with('image',$imageName);
	}

	public function validatePayment($payment_id)
	{
		Payment::validatePayment($payment_id);
		return back()
		->with('success','Pembayaran telah divalidasi. Terima kasih telah menggunakan layanan SADES!');
	}
}
