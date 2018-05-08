<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    static function getUserById(){
    	$query = DB::table('t_users')
    	->select('*')
    	->where('id_user',AUTH::id())
    	->limit('1')
    	->get();

    	return $query->toArray();
    }
}
