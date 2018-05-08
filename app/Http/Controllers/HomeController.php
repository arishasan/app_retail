<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use hisorange\BrowserDetect\Facade\Parser;

class HomeController extends Controller
{
    public function index(){
        $laravel = app();
        $data['listActivities'] = \App\homeModel::getActivity();
        $data['rekordPendapatan'] = \App\homeModel::getPendapatan();
        $data['count'] = \App\homeModel::getCountLogin();
        $data['version'] = $laravel::VERSION;
        $data['jmlProduk'] = \App\homeModel::getJumlahProduk(); 
        $data['jmlProd'] = \App\homeModel::getJumlahProdusen(); 
        $data['jmlPel'] = \App\homeModel::getJumlahPelanggan();
    	return view('v_landing_home')->with($data);
    }

    public function usageCek(){
        $memoryPeak = memory_get_peak_usage();
        echo $memoryPeak.' bytes';
    }

    public function todoSimpan(Request $request){
        $input = $request->all();

        if($input['toDoNew'] == ''){
            echo '<div class="alert alert-danger">
                <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Tidak ada yang di input.
                </div>';
        }else {

            try {
                
                $query = DB::table('to_do')
                        ->insert([
                            'to_do' => $input['toDoNew'],
                            'status' => 'BELUM SELESAI',
                            'id_user' => AUTH::id()
                        ]);


                        echo '<div class="alert alert-success">
                            <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Berhasil di input
                            </div>';
            } catch (Exception $e) {
                echo '<div class="alert alert-danger">
                    <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Gagal di input
                    </div>';
            }

        }

    }

    public function selesaiTODO($id){
        $query = DB::table('to_do')
                ->where('id',$id)
                ->update([ 'status' => 'SELESAI' ]);
    }

    public function belumTODO($id){
        $query = DB::table('to_do')
                ->where('id',$id)
                ->update([ 'status' => 'BELUM SELESAI' ]);
    }

    public function deleteTODO($id){
        try {
            $query = DB::table('to_do')
                ->where('id',$id)
                ->delete();

                echo '<div class="alert alert-success">
                        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Berhasil di hapus
                        </div>';

        } catch (Exception $e) {
            echo '<div class="alert alert-danger">
                        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Gagal di hapus
                        </div>';
        }
    }

    public function getTodo(){
        $list = \App\homeModel::getTodoByUser();

        foreach ($list as $key => $value) {
            
        ?>
            
            <tr>
                <?php if($value->status == 'SELESAI'){ ?>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm hapusBaris">x</button>
                </td>
                <?php }else{ ?>
                <td>
                    
                </td>
                <?php } ?>
                <td>
                    <input type="hidden" class="id" value="<?php echo $value->id ?>">
                </td>
                <td>
                    <div class="item d-flex">
                        <?php if($value->status == 'SELESAI'){ ?>
                       <input type="checkbox" id="input-1" name="input-1" class="checkbox-template ceklis" checked="true">
                        <?php }else{ ?>
                        <input type="checkbox" id="input-1" name="input-1" class="checkbox-template ceklis"</div>
                        <?php } ?>
                    </div>
                </td>
                <td style="font-size: 20px">
                    <?php if($value->status == 'SELESAI'){ ?>
                    <label for="input-1" style="text-decoration: line-through;"><?php echo $value->to_do ?></label>
                    <?php }else{ ?>
                    <label for="input-1"><?php echo $value->to_do ?></label>
                    <?php } ?>
                </td>
            </tr>

            
    
        <?php

        }
    }

    public function deleteUser($id){

    	if($id == AUTH::id()){
    		return redirect('/')->with('error','User yang dihapus sedang digunakan.');
    	}else{
    		
    		try {
    			$query = DB::table('t_users')
    				->where('id_user',$id)
    				->delete();
    			return redirect('/')->with('success','User dihapus.');
    		} catch (Exception $e) {
    			return redirect('/')->with('success','User gagal dihapus.');
    		}


    	}

    }

    public function insertUser(Request $request){
    	date_default_timezone_set('Asia/Jakarta');
    	$input = $request->all();

    	$rules = [
    		'username' => 'required',
    		'password' => 'required',
    		'akses' => 'required'
    	];

    	$this->validate($request,$rules);

    	try {
    		
    		$quer2y = DB::table('t_users')
    					->insert([
    						'username' => $input['username'],
    						'password' => bcrypt($input['password']),
    						'status' => '1',
    						'akses' => $input['akses'],
    						'created_at' => date('Y-m-d H:i:s'),
    						'updated_at' => date('Y-m-d H:i:s'),
    					]);
    		return redirect('/')->with('success','Pembuatan akun berhasil.');
    	} catch (Exception $e) {
    		return redirect('/')->with('error','Pembuatan akun gagal.');
    	}

    }

    public function ubahData(Request $request){
    	date_default_timezone_set('Asia/Jakarta');
    	$input = $request->all();

    	$rules = [
    		'username' => 'required'
    	];

    	$this->validate($request,$rules);

    	if($input['password'] != ''){
    		
    		$rules2 = [
    		'c-password' => 'required'
	    	];

	    	$this->validate($request,$rules2);

    		if($input['c-password'] != $input['password']){

    			return redirect('/')->with('error','Password dan Konfirmasi password tidak sama.');

    		}else{

    			try {

    				$query = DB::table('t_users')
    						->where('id_user',AUTH::id())
    						->update([
    							'username' => $input['username'],
    							'password' => bcrypt($input['password']),
    							'updated_at' => date('Y-m-d H:i:s')
    						]);

    				return redirect('/')->with('success','Berhasil mengubah data akun.');
    			} catch (Exception $e) {
    				return redirect('/')->with('error','Gagal merubah data akun.');
    			}

    		}

    	}else{

    		try {

    				$query = DB::table('t_users')
    						->where('id_user',AUTH::id())
    						->update([
    							'username' => $input['username']
    						]);

    				return redirect('/')->with('success','Berhasil mengubah data akun.');
    			} catch (Exception $e) {
    				return redirect('/')->with('error','Gagal merubah data akun.');
    			}

    	}
    	

    }

}
