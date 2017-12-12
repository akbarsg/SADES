<?php

namespace App;

use Illuminate\Http\Request;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'balance',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    public static function login(Request $request)
    {
        $user = User::find($request->email);

        if ($request->email == $user->email && $request->password == $user->password) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function show($id)
    {
        return DB::table('users')->where('id', '=', $id)->first();
    }

    public static function deleteAccount($id)
    {
        return DB::table('users')->where('id', '=', $id)->delete();
    }

    public static function rate($id)
    {
        $rating = DB::table('users')->where('id', $id)->select('rating')->first();
        // dd($rating);
        return DB::table('users')->where('id', $id)->update(['rating' => $rating->rating+1]);
    }

    public static function getBalance()
    {
        return DB::table('users')
            ->where('id', Auth::user()->id)
            ->select('balance');
    }

}
