<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Facades\Agent; 
use App\Models\ContactCustomer;
use App\Models\Permintaan;
use App\Models\PageHome;
use App\Models\PageView;
use App\Models\PageAbout;
use App\Models\PageContact;
use App\Models\Promo;
use App\Models\Portfolio;
use App\Models\Testimoni;
use App\Models\Settings;
use App\Mail\SendContact;
use App\Mail\SendContactToAdmin;
use App\Mail\SendPricelist;
use App\Mail\SendPricelistToAdmin;
use Log;
use Validator;
use Crypt;
use Redirect;
use Str;
use Carbon;
 
class AxController extends Controller
{
    public function index(Request $request) 
	{	
        $time = Carbon\Carbon::now();

		$page = "Home";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

		// section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('homepage', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

    function about(Request $request){

        $time = Carbon\Carbon::now();

		$page = "About";
		// check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

		// section 1
        $data1 = PageAbout::select('*')->where('id_about',1)->first();
		// section 2
        $data2 = PageAbout::select('*')->where('id_about',2)->first();
		// section 3
        $data3 = PageAbout::select('*')->where('id_about',3)->first();
		// section 4
        $data4 = PageAbout::select('*')->where('id_about',4)->first();
        return view('about', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3,'s4'=>$data4]);
	}

	function why(Request $request){

        $time = Carbon\Carbon::now();

		$page = "Why Choose Us";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

        $data = PageAbout::select('*')->where('id_about',1)->first();
        return view('why', ['wh'=>$data]);
	}

	function promo_dan_pricelist(Request $request){
        $time = Carbon\Carbon::now();

		$page = "Promo";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }
		
        $data = Promo::select('*')->get();
        return view('promo', ['list'=>$data]);	
	}

	function portfolio(Request $request){
        $time = Carbon\Carbon::now();

		$page = "Portfolio";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

        $data = Portfolio::select('*')->get();
        return view('portfolio', ['port'=>$data]);	
	}

    function detail_portfolio(Request $request, $slug){
		$time = Carbon\Carbon::now();

		$page = "Portfolio";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

        $data1 = Portfolio::select('portfolio.*')->join('portfolio_galeri as b','b.id_portfolio','=','portfolio.id_port')->where('portfolio.slug',$slug)->get();
        $data2 = Portfolio::select('*')->where('slug',$slug)->first();
        return view('portfolio_galeri', ['port'=>$data1,'g'=>$data2]);	
	}

	function testimoni(Request $request){
		$time = Carbon\Carbon::now();

		$page = "Testimonial";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

        $data = Testimoni::select('*')->where('status',1)->get();
        return view('testimoni', ['testi'=>$data]);	
	}

	function our_promise(Request $request){
		$time = Carbon\Carbon::now();

		$page = "Our Promise";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }
        
        return view('our_promise');	
	}

	function gown_suit(Request $request){
		$time = Carbon\Carbon::now();

		$page = "Our Promise";
        // check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

		return view('gown_suit');

	}

	function contact(Request $request){
		$time = Carbon\Carbon::now();

		$page = "Kontak";
		// check IP View 
        $now = date("Y-m-d");
        $checkView = PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->count();
        if($checkView == 0){ // jika sudah terdaftar per hari ini maka tidak perlu input lagi
            PageView::create([
                'page'          => $page,
                'ip'            => $request->ip(),
                'browser'       => Agent::browser(),
                'platform'      => Agent::platform(),
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }else{
            PageView::where([['page',$page],['ip',$request->ip()]])->whereDate('tanggal',$now)->update([
                'tanggal'       => $time->toDateTimeString(),
            ]);
        }

        $data = PageContact::select('*')->first();
        return view('contact', ['g'=>$data]);	
	}

    function send_contact(Request $request){
        $rules = array(
            'name'          => 'required',
            'telepon'       => 'required',
            'email'         => 'email|required',
            'subjek'        => 'required',
            'pesan'         => 'required',
            'lang'          => 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return Redirect::back()->with('thanks',$error->errors()->all())->withInput();
        }    

		$nama 	 = $request->name;
		$phone 	 = $request->telepon;
		$email   = $request->email;
		$subjek	 = $request->subjek;
		$pesan   = $request->pesan;
		$lang    = $request->lang;

		//// GENERATE NOMOR  /////////////////////////////

		$length =3;
		$random= "";
		srand((double)microtime()*1000000);

		$data = "ABCDEFGHI21JKLMN02OPQRS94TUVWXYZ";
		$data .= "1234567890";

		for($i = 0; $i < $length; $i++){
			$random .= substr($data, (rand()%(strlen($data))), 1);
		}

		// Awalan Invoice
		$utama = "AXP";

		// Hasil generate
		$invoice = $utama.$random;

		$tglx = date('Y-m-d H:i:s');

        ///////////// SIMPAN DATA ////////////////////////////////
      	ContactCustomer::create([
      		'nomor_cs'	=> $invoice,
      		'nama'		=> $nama,      		
      		'phone'		=> $phone,
      		'email'		=> $email,
      		'subjek'	=> $subjek,
      		'pesan'		=> $pesan,
      		'lang'		=> $lang,
      		'tanggal'	=> date('Y-m-d H:i:s'),   
      		'status'   	=> '0',
      	]);
    
		///////////////// EMAIL KE CUSTOMER ////////////////////////////////

        if($lang == "en"){
			// isi email
			$mailData = array(
				'nomor' 	=> $invoice,
				'content'	=> '<p style="text-align:justify;">Thank you for contacting us, your request number <b>'. $invoice.'</b> we have received, we will contact you immediately. thank you<br><br>Best Regards<br><br>Alexander Photo</p>',
                'thanks'    => 'Thankyou for contact us'
			);
		}else{
			// isi email
			$mailData = array(
				'nomor' 	=> $invoice,
				'content'	=> '<p style="text-align:justify;">Terima kasih telah menghubungi kami, nomor permintaan anda <b>'.$invoice.'</b> telah kami terima, kami akan segera menghubungi anda. terima kasih<br><br>Best Regards<br><br>Alexander Photo</p>',
                'thanks'    => 'Terima Kasih Telah Menghubungi Kami'
			);
		}

        Mail::to($email)->send(new SendContact($mailData));

      	///////////////// EMAIL KE ADMIN //////////////////////////////////////

        if($lang == "en"){
			// isi email
			$mailDatax = array(
				'nomor' 	=> $invoice,
				'content'	=> '<p style="text-align:left;">
				<b>Customer Information :</b><br>
				Name : <b>'.$nama.'</b><br>
				Phone : <b>'.$phone.'</b><br>
				Email : <b>'.$email.'</b><br>
				Subject : <b>'.$subjek.'</b><br>
				Message : <b>'.$pesan.'</b><br>
				</p>',
			);
		}else{
			// isi email
			$mailDatax = array(
				'nomor' 	=> $invoice,
				'content'	=> '<p style="text-align:left;">
				<b>Informasi  Pelanggan :</b><br>
				Nama : <b>'.$nama.'</b><br>
				Nomor Telepon : <b>'.$phone.'</b><br>
				Email : <b>'.$email.'</b><br>
				Subjek : <b>'.$subjek.'</b><br>
				Pesan : <b>'.$pesan.'</b><br>
				</p>',
			);
		}

        //ambil data email admim
		$adm = Settings::where('setting','email')->first();
		$admin_email = $adm->konten;
        Mail::to($admin_email)->send(new SendContactToAdmin($mailDatax)); //$admin_email
        
        return Redirect::back()->with('thanks','Pesan Anda Telah Terkirim, Terima Kasih.');
	}

	function submit_pl(Request $request){
	    $rules = array(
            'nama'          => 'required',
            'jenis'         => 'required',
            'email'         => 'email|required',
            'phone'          => 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return Redirect::back()->with('msg','Isi Form Dengan Lengkap')->withInput();
        }    
	   
		$nama  = $request->nama;
		$jenis = $request->jenis;
		$email = $request->email;
		$nohp  = $request->phone;
        
        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")","",$nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".","",$nohp);
        // cek apakah no hp mengandung karakter + dan 0-9
        if(!preg_match('/[^+0-9]/',trim($nohp))){
             // cek apakah no hp karakter 1-3 adalah 62
             if(substr(trim($nohp), 0, 2)=='62'){
                 $hp = trim($nohp);
             }
             // cek apakah no hp karakter 1 adalah 0
             elseif(substr(trim($nohp), 0, 1)=='0'){
                 $hp = '62'.substr(trim($nohp), 1);
             }else{
                 $hp = $nohp;
             }
        }
        
        if(strlen($nohp) < 10 || strlen($nohp) > 13){
            return Redirect::back()->with('msg','Harap Isi Nomor Telpon Dengan Benar.');
        }
            
    		//// GENERATE NOMOR  /////////////////////////////
    
    		$length = 3;
    		$random = "";
    		srand((double)microtime()*1000000);
    
    		$data = "ABCDEFGHI21JKLMN02OPQRS94TUVWXYZ";
    		$data .= "1234567890";
    
    		for($i = 0; $i < $length; $i++){
    			$random .= substr($data, (rand()%(strlen($data))), 1);
    		}
    
    		// Awalan Invoice
    		$utama = "AX";
    
    		// Hasil generate
    		$invoice = $utama.$random;
    
    		$tglx = date('Y-m-d H:i:s');
            
        if($jenis == "1"){
            $jenisx = "Paket Foto Prewedding Indoor";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_Prewedding_Indoor.pdf');
            $attach2 = "";
        }else if($jenis == "2"){
            $jenisx = "Paket Foto Prewedding Outdoor";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_Prewedding_Outdoor.pdf');
            $attach2 = "";
        }else if($jenis == "3"){
            $jenisx = "Paket Wedding Day";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Wedding_Day.pdf');
            $attach2 = "";
        }else if($jenis == "4"){
            $jenisx = "Paket Foto Keluarga";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_Keluarga.pdf');
            $attach2 = "";
        }else if($jenis == "5"){
            $jenisx = "Paket Foto Wisuda";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_Wisuda.pdf');
            $attach2 = "";
        }else if($jenis == "6"){
            $jenisx = "Paket Foto Masa Kehamilan";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_Masa_Kehamilan.pdf');
            $attach2 = "";
        }else if($jenis == "7"){
            $jenisx = "Paket Foto All You Can Pose (Paket Foto Semua Momen)";
            $attach1 = public_path('assets/resource/pdf/2022_new/Paket_Foto_All_You_Can_Pose.pdf');
            $attach2 = "";
        }

        // isi email 
    	$mailData = array(
            'nomor' 	=> $invoice,
            'attach'    => $attach1,
            'content'	=> 'Hi!<br>
    Terima kasih karena berminat dengan paket foto dari studio kami.<br>
    Terlampir detil paket foto yang kakak tanyakan.<br><br>
    Silahkan download pricelist di lampiran dan klik link nomor whatsapp dibawah untuk chat langsung dengan customer support. Dan dapatkan penawaran promo menarik dan berbeda setiap bulannya.<br><br>
    WA Customer Support : <br>
     <a href="https://api.whatsapp.com/send/?phone=6285967174008&text=Hallo,%20Bisa%20tolong%20infokan%20pricelist%20dan%20promo%20yang%20menarik%20di%20Alexander%20Photo?%20Saya%20lihat%20dari%20website&app_absent=0">085967174008</a><br><br>
    
    "Alexander Photo hadir untuk calon pengantin dan keluarga yang mendambakan memiliki foto profesional dan mewah, namun masih terjangkau di jaman yang serba mahal ini."<br><br>
    
    <img src="'.public_path('assets/logo.png').'" style="display:initial;width:350px;height:auto;"><br>
    Cabang Tangcity :<br>
    Tangcity Mall Unit A No. 7-8<br>
    (Sebelah XXI) Tangcity Mall lt 2<br>
    Jalan Jend Sudirman No. 1, RT.001/RW.005,<br>
    Cikokol, Kec. Tangerang Phone<br>
    <a href="https://www.instagram.com/alexanderphotostudio">Instagram Tangcity</a><br><br>
    AEON MALL Jakarta Garden City<br>
    Lantai 3 Unit 3.03<br>
    (Sebelah CGV Cinema).<br>
    Jaktim<br>
    <a href="https://www.instagram.com/alexanderphoto_aeonjakarta">Instagram AEON Mall</a><br><br>
    		');
    
    ///////////// SIMPAN DATA ////////////////////////////////
          	Permintaan::create([
          		'nomor_permintaan'	=> $invoice,
          		'nama'				=> $nama,
          		'permintaan'		=> $jenisx,
          		'email'				=> $email,
          		'telpon'			=> $hp,
          		'tanggal'			=> $tglx,
          		'status'			=> '0',
          	]);
    
    ///////////////// EMAIL KE CUSTOMER ////////////////////////////////

            Mail::to($email)->send(new SendPricelist($mailData));
          
        
    ///////////////// EMAIL KE ADMIN ////////////////////////////////////// 
    
          	$mailDatax = array(
    			'nomor' 	=> $invoice,
    			'content'	=> 'Permintan pricelist dari Pelanggan :<br><br>Nama Pelanggan : '.$nama.'<br> Keinginan : '.$jenisx.'.<br>Email : '.$email.'<br>Nomor Telephone / Whatsapp : '.$hp.' ',
    		);
    
          	//ambil data email admim
    		$adm = Settings::where('setting','email')->first();
    		$admin_email = $adm->konten;

            Mail::to($admin_email)->send(new SendPricelistToAdmin($mailDatax)); //$admin_email

            return Redirect::back()->with('msg','Permintaan Telah Dikirim.');
	}

    // LANDING PAGE
    function promovoucher(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('promovoucher', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

    function chatcs(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('chatcs', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

    function wacs(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('wacs', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

    function kontakcs(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('kontakcs', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}

    function kawai(){
        // section 1
        $data1 = PageHome::select('*')->where('id_home',1)->first();
		// section 2
        $data2 = PageHome::select('*')->where('id_home',2)->first();
		// section 3
        $data3 = PageHome::select('*')->where('id_home',3)->first();
        return view('kawai', ['s1'=>$data1,'s2'=>$data2,'s3'=>$data3]);
	}
    // END LANDING PAHGE
}
