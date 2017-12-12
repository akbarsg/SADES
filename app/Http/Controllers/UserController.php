<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Notification;

class UserController extends Controller
{
	public function register(Request $request)
	{
		User::register($request);

		return redirect('home');
	}

    public function deleteAccount()
    {
    	route('logout');
    	User::deleteAccount(Auth::user()->id);
    	return view('layout.index');
    }

    public function show($id)
    {
        $profil = User::show($id);
    	$isRated = Notification::isRated(Auth::user()->id, $id);
        return view('layout.profil', ['profil' => $profil, 'isRated' => $isRated]);
    }

    public function rate($id)
    {
    	User::rate($id);
    	Notification::rated(Auth::user()->id, $id);
    	return back()->with('success','Rating telah ditambahkan!');
    }

    public function edit(){
    	$user = User::find(Auth::user()->id);
    	return view('layout.editProfil', ['user' => $user]);
    }

    public function logout(){
        return redirect();
    }
}
