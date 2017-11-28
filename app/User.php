<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

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

}
