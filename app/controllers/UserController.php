<?php 

	class UserController extends BaseController {

		public function dashboard() {
			if (Auth::guest()) return Redirect::to_route('login');

			$id_jenis_user = Auth::user()->id_jenis_user;
			$jenis_user = JenisUser::where('id_jenis_user', '=', $id_jenis_user)->get(array('jenis_user'));

			return $jenis_user;



		}


		public function get_login() {
			return View::make('login');
		}

		public function post_login() {
			$input = Input::all();
			$rules = array('nim' => 'required|min:1|max:20|exists:admin', 'password' => 'required|min:6');


			$id_user =  trim(Input::get('id_user'));
			$password = trim(Input::get('password'));

			$data = compact('id_user', 'password');

			if (Auth::attempt($data))
			{
			    // return User::where('id_user', '=', $id_user)->get('id_jenis_user');

			    $id_jenis_user = User::where('id_user', '=', $id_user)->get(array('id_jenis_user'));
			    $id_jenis_user = $id_jenis_user[0]['id_jenis_user'];

			    Auth::user()->$id_jenis_user;
			    
			    if($id_jenis_user == '1') {
			    	$nama_user = Mahasiswa::where('nim', '=', $id_user)->get(array('nama'));
			    	$nama = $nama_user[0]['nama'];
			    	Auth::user()->$nama;
			    }

			    $jenis_user = JenisUser::where('id_jenis_user', '=', $id_jenis_user )->get(array('jenis_user'));
			    $jenis_user = $jenis_user[0]['jenis_user'];

			    

			    return Redirect::intended($jenis_user);

			    // $nama_user = Mahasiswa::where('nim', '=', '4311010045')->get(array('nama'));

			    
			    
			    

			}

			else {
				return 'error' . $id_user . $password;

			}
			

		}



	}