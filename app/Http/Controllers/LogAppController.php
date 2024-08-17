<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Facades\Agent;
use App\Models\Users;
use App\Models\PageView;
use App\Models\Permintaan;
use App\Models\ContactCustomer;
use App\Models\PageHome;
use App\Models\PageAbout;
use App\Models\PermintaanReply;
use App\Models\Settings;
use App\Models\Promo;
use App\Models\Portfolio;
use App\Models\ContactReply;
use App\Models\PageContact;
use App\Models\Testimoni;
use App\Mail\SendContact;
use Log;
use Validator;
use Crypt;
use Redirect;
use Str;
use Carbon;

class LogAppController extends Controller
{   
    function log_user(){
	    return view('admin/login');
	}

    function log_process(Request $request){
        $rules = array(
            'user_asm'         => 'required',
            'pass_asm'         => 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return Redirect::back()->with('error',$error->errors()->all())->withInput();
        }    

		$user = $request->user_asm;
		$pass = $request->pass_asm;

		$cek = Users::where('username', $user);
		if($cek->count() > 0){
			$data = $cek->first();
            if(Hash::check($pass, $data->password)){ // check password jika ada maka redirect        	
                Session::put('asm_id',$data->id);
                Session::put('username',$data->username);
                Session::put('last_login',$data->last_login);
                Session::put('log_access','log_d_V_1');
                Users::where('id',$data->id)->update(['last_login' => date('Y-m-d H:i:s')]);
                Log::channel('administrator')->info("".$user." Login web admin Alexanderphotostudio.com");
                return redirect('admin/dashboard');
			}else{
                return Redirect::back()->with('error','Password salah!.')->withInput();
			}
		}else{
            return Redirect::back()->with('error','Password salah!.')->withInput();
		}
    }

	function logout(Request $request){
		Session::flush();
		return redirect('logadminalexander')->with('success','Anda Berhasil Logout');
    }

	function dashboard2(){
		return redirect('admin/dashboard');
	}

    function dashboard(Request $request){
        $id_user_asm    = $request->session()->get('asm_id');
        $pl = array('windows 10','ios','android');

        // count
        // $aktifitas_log  = $this->adm_model->log_aktifitas($id_user_asm);
        $page_view      = PageView::select(DB::raw('COUNT(id_page) as total'), 'page', 'ip', 'browser', 'platform')->orderBy('total','desc')->groupBy('page')->get();
        $android        = PageView::select(DB::raw('COUNT(platform) as android'))->where('platform','android')->first();
        $ios            = PageView::select(DB::raw('COUNT(platform) as ios'))->where('platform','iOS')->first();
        $win10          = PageView::select(DB::raw('COUNT(platform) as win10'))->where('platform','Windows 10')->first();
        $other          = PageView::select(DB::raw('COUNT(platform) as other'))->whereNotIn('platform',$pl)->first();
        $permintaan     = Permintaan::orderBy('tanggal','desc')->get();
        $pmtn = Permintaan::orderBy('tanggal','desc')->get();
		$ktk  = ContactCustomer::get();
        $pg   = PageView::get();

        return view('admin/dashboard',[
            'page_view'     => $page_view,
            'android'       => $android,
            'ios'           => $ios,
            'win10'         => $win10,
            'other'         => $other,
            'permintaan'    => $permintaan,
            'pg'            => $pg,
            'pmtn'          => $pmtn,
            'ktk'           => $ktk
        ]);
	}

    function home(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('admin/home', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

	function updatehome1(Request $request){

		$x1 = $request->gambar;
		$x2 = $request->konten1;
		//$x5 = $this->security->xss_clean($this->input->post('set_konten1'));
		//$x7 = $this->security->xss_clean($this->input->post('set_right_konten1'));
		//$x3 = $this->security->xss_clean($this->input->post('konten2'));
		//$x6 = $this->security->xss_clean($this->input->post('set_konten2'));
		//$x8 = $this->security->xss_clean($this->input->post('set_right_konten2'));
		$x4 = $request->id_home;

		PageHome::where('id_home',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
			//'set_konten1' 	=> $x5,
			//'set_right_konten1' 	=> $x7,
			//'konten2'		=> $x3,
			//'set_konten2' 	=> $x6,
			//'set_right_konten2' 	=> $x8,
		]);
		return Redirect::back()->with('success','Home #1 telah diupdate');
	}

	function updatehome2(Request $request){

		$x1 = $request->gambar;
		$x2 = $request->konten3;
		$x3 = $request->konten4;
		$x4 = $request->id_home;

		PageHome::where('id_home',$x4)->update([
			'gambar'		=> $x1,
			'konten3'		=> $x2,
			'konten4'		=> $x3,
		]);
		return Redirect::back()->with('success','Home #2 telah diupdate');
	}

	function updatehome3(Request $request){
		
		$x1 = $request->gambar;
		$x2 = $request->konten1;
		$x4 = $request->id_home;

		PageHome::where('id_home',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
		]);
		return Redirect::back()->with('success','Home #3 telah diupdate');
	}

	function about(){
		// section 1
        $data1 = PageAbout::select('*')->where('id_about',1)->first();
		// section 2
        $data2 = PageAbout::select('*')->where('id_about',2)->first();
		// section 3
        $data3 = PageAbout::select('*')->where('id_about',3)->first();
		// section 4
        $data4 = PageAbout::select('*')->where('id_about',4)->first();
        return view('admin/about', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3,'s4'=>$data4]);
	}

	function updateabout1(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->konten1;
		$x3 = $request->konten2;
		$x4 = $request->id_about;
		$x5 = $request->set_konten1;
		$x6 = $request->set_konten2;

		PageAbout::where('id_about',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
			'set_konten1' 	=> $x5,
			'konten2'		=> $x3,
			'set_konten2' 	=> $x6,
		]);
		return Redirect::back()->with('success','About #1 telah diupdate');
	}

	function updateabout2(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->konten1;
		$x3 = $request->konten2;
		$x4 = $request->id_about;
		$x5 = $request->set_konten1;
		$x6 = $request->set_konten2;

		PageAbout::where('id_about',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
			'set_konten1' 	=> $x5,
			'konten2'		=> $x3,
			'set_konten2' 	=> $x6,
		]);
		return Redirect::back()->with('success','About #2 telah diupdate');
	}

	function updateabout3(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->konten1;
		$x3 = $request->konten2;
		$x4 = $request->id_about;
		$x5 = $request->set_konten1;
		$x6 = $request->set_konten2;

		PageAbout::where('id_about',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
			'set_konten1' 	=> $x5,
			'konten2'		=> $x3,
			'set_konten2' 	=> $x6,
		]);
		return Redirect::back()->with('success','About #3 telah diupdate');
	}

	function updateabout4(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->konten1;
		$x4 = $request->id_about;

		PageAbout::where('id_about',$x4)->update([
			'gambar'		=> $x1,
			'konten1'		=> $x2,
		]);
		return Redirect::back()->with('success','About #4 telah diupdate');
	}

	function permintaan(){
	
		$data = Permintaan::orderBy('tanggal','desc')->get();
		return view('admin/permintaan',['permintaan'=>$data]);
	}

	function detail_permintaan($id){

		$idxx = Crypt::decrypt($id);
		$data1 = Permintaan::where('id_permintaan', $idxx)->first(); 
		$data2 = DB::table('permintaan_reply as a')
		->select('a.*')
		->join('permintaan as b','b.nomor_permintaan','=','a.nomor_reply')
		->where('b.id_permintaan', $idxx)
		->get();
		return view('admin/jawab_permintaan', ['p'=>$data1,'reply'=>$data2]);
	}

	function reply_permintaan(Request $request){

		$akun = $request->reply;
		$mail = $request->email;
		$user = $request->nomor;

		// isi email
		$isi_email = array(
			'nomor' 	=> $user,
			
		);

	///////////////// EMAIL KE CUSTOMER ////////////////////////////////

		// ambil data email admim
		// $adm = Settings::where('setting','email')->first();
		// $admin_email = $adm->konten;

		 // isi email 
    	$mailData = array(
            'nomor' 	=> $user,
            'attach'    => '',
			'thanks'	=> '',
            'content'	=> 'Nomor Permintaan anda <b>'.$user.'</b><br><br>'.$akun.''
		);

        Mail::to($mail)->send(new SendContact($mailData));

		//simpan reply
		PermintaanReply::create([
			'nomor_reply'	=> $user,
			'reply'			=> $akun,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]); 
		
		// ubah status reply
		Permintaan::where('nomor_permintaan',$user)->update([
			'status' => '1',
		]);

		return Redirect::back()->with('success','Permintaan Berhasil Dibalas');

	}

	function promo_and_pricelist(){
		$data = Promo::get();
		return view('admin/promo_and_pricelist', ['promo'=>$data]);
	}

	function tambah_promo(){
		return view('admin/tambah_promo');
	}

	function simpan_promo(Request $request){
		
		$x1 = $request->gambar;
		$x2 = $request->title;
		$x3 = $request->sub;
		$x4 = $request->coret;
		$x5 = $request->fix;
		$x6 = $request->ket1;
		$x7 = $request->ket2;

		Promo::create([
			'gambar'		=> $x1,
			'title'			=> $x2,
			'sub_title'		=> $x3,
			'harga_dicoret'	=> $x4,
			'harga_fix'		=> $x5,
			'keterangan1'	=> $x6,
			'keterangan2'	=> $x7,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]);
		return Redirect::back()->with('success','Promo Berhasil Disimpan');
	}

	function hapus_promo($id){

		$idxx = Crypt::decrypt($id);
		Promo::where('id_promo',$idxx)->delete();
		return Redirect::back()->with('success','Promo Berhasil Dihapus');
	}

	function edit_promo($id){

		$idxx = Crypt::decrypt($id);
		$data = Promo::where('id_promo',$idxx)->get();
		return view('admin/edit_promo', ['d'=>$data]);
	}

	function update_promo(Request $request){
		
		$x1 = $request->gambar;
		$x2 = $request->title;
		$x3 = $request->sub;
		$x4 = $request->coret;
		$x5 = $request->fix;
		$x6 = $request->ket1;
		$x7 = $request->ket2;
		$x8 = $request->id_promo;

		Promo::where('id_promo',$x8)->update([
			'gambar'		=> $x1,
			'title'			=> $x2,
			'sub_title'		=> $x3,
			'harga_dicoret'	=> $x4,	
			'harga_fix'		=> $x5,
			'keterangan1'	=> $x6,
			'keterangan2'	=> $x7,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]);
		return Redirect::back()->with('success','Promo Berhasil Diupdate');
	}

	function portfolio(){
		$data1 = Portfolio::get();
		$data2 = DB::table('portfolio_galeri as a')->select('a.*','b.id_port','b.judul')->join('portfolio as b','b.id_port','=','a.id_portfolio')->get();
		return view('admin/portfolio', ['port'=>$data1, 'galeri'=>$data2]);
	}

	function contact(){
		$data = ContactCustomer::get();
		return view('admin/contact', ['list'=>$data]);
	}

	function detail_kontak($id){
		$idxx = Crypt::decrypt($id);
		$data1 = ContactCustomer::where('id_cs',$idxx)->first();
		$data2 = DB::table('contact_reply as a')->select('a.*')->join('contact_customer as b','b.nomor_cs','=','a.nomor_reply')->where('b.id_cs',$idxx)->get();
		return view('admin/jawab_kontak', ['p'=>$data1,'reply'=>$data2]);
	}

	function reply_kontak(Request $request){

		$akun = $request->reply;
		$mail = $request->email;
		$user = $request->nomor;

		// isi email
		$mailData = array(
			'nomor' 	=> $user,
			'content'	=> 'Nomor Pelanggan anda <b>'.$user.'</b><br><br>'.$akun.'',
			'thanks'	=> 'Reply #'.$user.'',
		);

	///////////////// EMAIL KE CUSTOMER ////////////////////////////////
		//ambil data email admim
		$get_adm = $this->adm_model->email_admin();
		foreach($get_adm as $adm){
			$admin_email = $adm->konten;
		}

		Mail::to($mail)->send(new SendContact($mailData)); // $admin_email;

		//simpan reply
		ContactReply::create([
			'nomor_reply'	=> $user,
			'reply'			=> $akun,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]);

		// ubah status reply
		ContactCustomer::where('nomor_cs',$user)->update([
			'status' => '1',
		]);

		return Redirect::back()->with('success','Kontak Berhasil Dibalas');
	}

	function hapus_kontak($id){
		$idxx = Crypt::decrypt($id);
		ContactCustomer::where('nomor_cs',$idxx)->delete();
		ContactReply::where('nomor_reply',$idxx)->delete();
		return Redirect::back()->with('success','Kontak #'.$idxx.' berhasil dihapus');
	}

	function update_contact(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->ket1;
		$x3 = $request->ket2;
		$x4 = $request->id_contact;

		PageContact::where('id_contact',$x4)->update([
			'gambar'	=> $x1,
			'text1'		=> $x2,
			'text2'		=> $x3,
		]);
		return Redirect::back()->with('success','Informasi kontak berhasil diupdate');
	}

	function tambah_port(){
		return view('admin/tambah_port');
	}

	function tambah_galeri(){
		$data = Portfolio::get();
		return view('admin/tambah_galeri', ['kat'=>$data]);
	}

	function simpan_galeri(Request $request){

		$x1 = $request->gambar;
		$x2 = $request->kategori;

		Portfolio::create([
			'id_portfolio'	=> $x2,
			'gambar'		=> $x1,
		]);	
		return Redirect::back()->with('success','Galeri berhasil disimpan');
	}

	function edit_galeri($id){

		$idxx = Crypt::decrypt($id);
		$data1 = DB::table('portfolio_galeri')->where('id_galeri',$idxx)->first();
		$data2 = Portfolio::get();
		return view('admin/edit_galeri', ['d'=>$data1,'kat'=>$data2]);
	}

	function update_galeri(Request $request){
		
		$x1 = $request->gambar;
		$x2 = $request->kategori;
		$x3 = $request->id_galeri;

		$data_port = array(
			'id_portfolio'	=> $x2,
			'gambar'		=> $x1,
		);	
		DB::table('portfolio_galeri')->where('id_galeri',$x3)->update($data_port);
		return Redirect::back()->with('success','Galeri berhasil diupdate');
	}

	function hapus_galeri($id){		
		$idxx = Crypt::decrypt($id);
		DB::table('portfolio_galeri')->where('id_galeri',$idxx)->delete();
		return Redirect::back()->with('success','Galeri berhasil dihapus');
	}

	function testimonial(){
		$data	= Testimoni::get();
		return view('admin/testimoni', ['testi'=>$data]);
	}

	function tambah_testimoni(){
		$data = Portfolio::get();
		return view('admin/tambah_testimonial', ['kat',$data]);
	}

	function simpan_testimoni(Request $request){
		$x1 = $request->title;
		$x2 = $request->sub;
		$x3 = $request->video;
		$x4 = $request->gambar1;
		$x5 = $request->gambar2;
		$x6 = $request->gambar3;

		Testimoni::create([
			'judul'			=> $x1,
			'sub_judul'		=> $x2,
			'video'			=> $x3,
			'gb1'			=> $x4,
			'gb2'			=> $x5,
			'gb3'			=> $x6,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]);	

		return Redirect::back()->with('success','Testimoni berhasil dihapus');
	}

	function edit_testimoni($id){
		$idxx = Crypt::decrypt($id);
		$data = Testimoni::where('id_testimonial',$idxx)->first();
		return view('admin/edit_testimonial', ['d'=>$data]);
	}

	function update_testimoni(Request $request){
	
		$x1 = $request->title;
		$x2 = $request->sub;
		$x3 = $request->video;
		$x4 = $request->gambar1;
		$x5 = $request->gambar2;
		$x6 = $request->gambar3;
		$x7 = $request->id_testi;

		Testimoni::where('id_testimonial',$x7)->update([
			'judul'			=> $x1,
			'sub_judul'		=> $x2,
			'video'			=> $x3,
			'gb1'			=> $x4,
			'gb2'			=> $x5,
			'gb3'			=> $x6,
			'tanggal'		=> date('Y-m-d H:i:s'),
		]);		

		return Redirect::back()->with('success','Testimoni berhasil diupdate');
	}

	function hapus_testimoni($id){
		$idxx = Crypt::decrypt($id);
		Testimoni::where('id_testimonial',$idxx)->delete();
		return Redirect::back()->with('success','Testimoni berhasil dihapus');
	}

	function simpan_port(Request $request){		
		$x1 = $request->gambar;
		$x2 = $request->judul;
		$x3 = $request->keterangan;

		$sl1 = $x2;
		$sl2 = strtolower($sl1);
		$sl3 = str_replace(' ','-',$sl2);
		$sl4 = str_replace('%','-persen',$sl3);

		Portfolio::create([
			'slug'			=> $sl4,
			'gambar'		=> $x1,
			'judul'			=> $x2,
			'keterangan'	=> $x3,
		]);
		return Redirect::back()->with('success','Port berhasil disimpan');
	}

	function hapus_port($id){
		$idxx = Crypt::decrypt($id);
		Portfolio::where('id_port',$idxx)->delete();
		return Redirect::back()->with('success','Portfolio berhasil dihapus');
	}

	function edit_port($id){
		$idxx = Crypt::decrypt($id);
		$data = Portfolio::where('id_port',$idxx)->first();
		return view('admin/edit_port', ['d'=>$data]);
			
	}

	function update_port(Request $request){
		$x1 = $request->gambar;
		$x2 = $request->judul;
		$x3 = $request->keterangan;
		$x4 = $request->id_port;

		$sl1 = $x2;
		$sl2 = strtolower($sl1);
		$sl3 = str_replace(' ','-',$sl2);
		$sl4 = str_replace('%','-persen',$sl3);

		Portfolio::where('id_port',$x4)->update([
			'slug'			=> $sl4,
			'gambar'		=> $x1,
			'judul'			=> $x2,
			'keterangan'	=> $x3,
		]);
		return Redirect::back()->with('success','Portfolio berhasil diupdate');

	}

	function update_akun(Request $request){
	 	$akun = $request->nama_akun;
		$user = $request->username;
		$pass = $request->password;
			
		if($pass == "" || empty($pass)){
			Users::where('id',$request->session()->get('asm_id'))->update([
				'nama'			=> $akun,
				'username'		=> $user, 
			]);
		}else if($pass != "" || !empty($pass)){
			Users::where('id',$request->session()->get('asm_id'))->update([
				'nama'			=> $akun,
				'username'		=> $user,
				'password'		=> Hash::make($pass)
			]);
		}
		return Redirect::back()->with('success','Perubahan akun telah disimpan');
	 } 

	 function update_email(Request $request){
	 	$x1 = $request->id_setting;
	 	$mail = $request->mail;

		Settings::where('id_setting',$x1)->update([
			'konten'	=> $mail,
		]);
		return Redirect::back()->with('success','Perubahan akun telah disimpan');
	 }

	function customer(){
		$data1 = ContactCustomer::orderBy('id_cs','desc')->get();
		$data2 = Permintaan::orderBy('id_permintaan','desc')->get();
		return view('admin/customer', ['cs'=>$data1, 'cs2'=>$data2]);
	}
}
