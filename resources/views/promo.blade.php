@extends('header-footer')
@section('judul_halaman', '')
@section('konten')
<section class="container-fluid" style="margin-top:60px;background-image: url(<?php echo asset('assets/resource/liputan.png');?>);background-size: cover;background-repeat: no-repeat;">
  <div class="row">
    <div class="col-md-12 contact__form__wrapper componentx" style="margin-top: 50px;">
      <div class="contact__form background--bluex container--editorial">
        <div class="row">
          <div class="box box--large">
            <div class="contact__form__contentx columnx column--largex" style="padding-top: 0;">
              <div class="heading heading__m2--tall">
                <div role="form" class="wpcf7" id="wpcf7-f1782-o1" lang="pt-BR" dir="ltr">
                  @if ($message = Session::get('msg'))
                    <div class="msg col-md-12 col-xs-12" style="text-align: center;background-color: #c19746;width: 100%;padding: 5px;margin-bottom: 20px;">{{ $message }}</div>
                  @endif

                  <div class="container">
                    <h4 class="titsendme">Silahkan isi data di bawah untuk mendapatkan info pricelist dan promo menarik dari Alexander Photo Studio.</h4>
                  </div>
                  <div class="screen-reader-response"></div>
                  <form action="{{url('submit_pl')}}" method="post" class='wpcf7-form'>
                    @csrf
                    <div class="col-md-6 col-xs-12">
                      <b style="font-weight: bold">Nama </b> <input style="color: black;" id="nameform" value="{{ old('nama') }}" required="" type="text" name="nama" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contact__form__input" />
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <b style="font-weight: bold">Nomor WA </b> <input style="color:black;" id="waform" required="" type="number" value="{{ old('phone') }}" name="phone" value="" size="40" minlength="12" maxlength="15" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel contact__form__input" aria-invalid="false"/>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <b style="font-weight: bold">Email </b> <input style="color:black;" id="mailform" required="" type="email" name="email" value="{{ old('email') }}"size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contact__form__input" aria-required="true" aria-invalid="false"/>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <b style="font-weight: bold">Paket Foto </b> 
                          <select required="" name="jenis" id="jenisform" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required contact__form__select" aria-required="true" aria-invalid="false">
                            <option style="color: black;" value="">Pilih</option>
                            <option style="color: black;" value="1">Paket  Foto  Prewedding Indoor</option>
                            <option style="color: black;" value="2">Paket  Foto  Prewedding Outdoor</option>
                            <option style="color: black;" value="3">Paket Wedding Day</option>
                            <option style="color: black;" value="4">Paket  Foto  Keluarga</option>
                            <option style="color: black;" value="5">Paket  Foto  Wisuda</option>
                            <option style="color: black;" value="6">Paket  Foto  Masa Kehamilan</option>
                            <option style="color: black;" value="7">Paket  Foto All You Can Pose (Paket Foto Semua Momen)</option>
                          </select>
                    </div>                      
                    <div class="col-md-12 col-xs-12 text-center" style="margin-bottom: 60px;"><input type="submit" value="SEND" style="background-color: #c19746;margin-top: 30px;color: white;font-weight: bold;border: none;border-radius: 20px;padding: 5px 25px;text-decoration: underline;"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection