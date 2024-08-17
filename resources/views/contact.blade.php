@extends('header-footer')
@section('judul_halaman', '')
@section('konten')
<?php
    use Illuminate\Support\Facades\Request;
?>
<section class="contact">
  <header class="contact__header" style="background-image: url(<?php echo $g->gambar;?>);background-repeat: no-repeat;background-size: cover;display:none;">
    <div class="row row--dual dlmn">
      <div class="col-md-6 col-xs-12">
        <div class="text__wrapper clmnx">
          <h1 class="heading heading__m5 text--bold" style="color:white;font-family: cambria;"><?php echo $g->text1;?></h1>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="text__wrapper clmnxx">
          <?php echo $g->text2;?>
        </div>
      </div>
    </div>
  </header>
    <div class="contact__form__wrapper background--blue" style="background-color:#053426 !important;padding:15px 0;">
        <div class="contact__form container container--editorial">
            <div class="row">
                <div class="box box--large">
                    <div class="paddcont">
                        @if ($message = Session::get('thanks'))
                            <div class="col-md-12 text-center alert-contact" style="border: 1px solid white;padding: 10px;">{{ $message }}</div>
                        @endif
                        <div class="col-md-6 col-xs-12 paddcont titlecnt">
                            <br><br><br>
                            <p style="font-weight:100;text-align:justify">Ijinkan kami mengetahui apa yang Anda butuhkan dan apa yang Anda inginkan.<br><br>Silahkan isi form untuk menghubungi kami.
                            Untuk informasi pricelist dan promo yang menarik bulan ini silahkan chat customer services kami di :<br>
                            <a style="color:white;" href="https://api.whatsapp.com/send/?phone=6285967174008&text=Hallo,%20Bisa%20tolong%20infokan%20pricelist%20dan%20promo%20yang%20menarik%20di%20Alexander%20Photo?%20Saya%20lihat%20dari%20website&app_absent=0"><i class="fab fa-whatsapp"></i> 085967174008</a>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-12 paddform">
                            <form action="{{url('contact-us')}}" method="post">
                                @csrf
                                <input type="hidden" name="lang" value="id">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" value="{{ old('name') }}" maxlength="50" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="15" name="telepon" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" maxlength="50" value="{{ old('email') }}" name="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Subjek</label>
                                    <input type="text" name="subjek" value="{{ old('subjek') }}" maxlength="50" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom:5px;">Pesan</label>
                                    <textarea required="" name="pesan" class="form-control" cols="50" rows="5">{{ old('pesan') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-block" style="color: #053426;font-weight:bold;">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="contact__form__wrapper" style="padding:15px 0;background-image:url('<?php echo asset('assets/bg-contact-grey.jpg');?>');">
        <div class="contact__form container container--editorial">
            <div class="row">
                <div class="box box--large">
                    <div class="col-md-6 col-xs-12 paddcont  titlecnt" style="color: black;">
                        <p>Let	us know	what you need and what you want.<br><br>Please fill in the form to contact us. 
                        For pricelist information and interesting promotions this month, please chat with our customer service at:<br> 
                        <a style="color:black;" href="https://api.whatsapp.com/send/?phone=6285967174008&text=Hallo,%20Bisa%20tolong%20infokan%20pricelist%20dan%20promo%20yang%20menarik%20di%20Alexander%20Photo?%20Saya%20lihat%20dari%20website&app_absent=0"><i class="fab fa-whatsapp"></i> 085967174008</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-xs-12 paddform1">
                    
                        <form action="{{url('contact-us')}}" method="post">
                            @csrf
                            <input type="hidden" name="lang" value="en">
                            <div class="form-group">
                                <label style="color:black;margin-bottom:5px;">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" maxlength="50" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label style="color:black;margin-bottom:5px;">Nomor Telepon</label>
                                <input type="number" name="telepon" value="{{ old('telepon') }}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="15" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label style="color:black;margin-bottom:5px;">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" maxlength="50" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label style="color:black;margin-bottom:5px;">Subjek</label>
                                <input type="text" name="subjek" value="{{ old('subjek') }}" maxlength="50" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:5px;color:black;">Pesan</label>
                                <textarea required="" name="pesan" class="form-control" style="color:black;border:1px solid #cacaca !important;" cols="50" rows="5">{{ old('pesan') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-block" style="background-color: #053426;color: #edbf61;font-weight: bold;">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="col-md-12 col-xs-12" style="margin-bottom:50px;padding: 15px;background-color: #053426;border-top: 5px solid #eabc5f;border-bottom: 5px solid #eabc5f;">
        <h2 style="font-size:25px;font-weight:bold;color:#eabc5f" class="text-center">For collaboration please contact us :<br><br>
            <a class="btn btn-success" style="border:1px solid #eabc5f;color:#e5b864;background-color:#053426;" href="https://api.whatsapp.com/send/?phone=6285967174008&text=Hallo,%20Saya%20ingin%20berkolaborasi%20dengan%20Alexander%20Photo%20Studio&app_absent=0">
                <i class="fab fa-whatsapp"></i> 0852 1000 5288
            </a>
            <a class="btn btn-success" style="border:1px solid #eabc5f;color:#e5b864;background-color:#053426;" href="mailto:alexanderphoto01@gmail.com">
                <i class="fa fa-envelope"></i> alexanderphoto01@gmail.com
            </a>
        </h2>
        <p class="text-center" style="color:#e5b864;margin-top:20px;">PT Alexander	Karya Sukses.<br><br><small>Unit A	no 7-8 lantai 2. Tangcity Mall 
        Jl.	Jend Sudirman no 1 Kota	Tangerang<br>(021) 2930	9745</small></p>
    </div>
</section>
@endsection