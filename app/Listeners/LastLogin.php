<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LastLogin
{
	public function handle(Login $event)
	{
		date_default_timezone_set('Asia/Jakarta');

		$check = DB::table('t_users')
				->where('id_user',AUTH::id())
				->select('*')
				->get();

				$data = $check->toArray();

				$login_count = '';
				foreach ($data as $key => $value) {
					
					if($value->login_count == ''){
						$login_count = 0;
					}else{
						$login_count = $value->login_count;
					}

				}

			$query = DB::table('t_users')
					->where('id_user',AUTH::id())
					->update(
						[
						'last_login' => date('Y-m-d H:i:s'),
						'login_count' => $login_count + 1
					]);
		
		// $event->Users->update(['last_login' => date('Y-m-d H:i:s')]);
	}
}

?>