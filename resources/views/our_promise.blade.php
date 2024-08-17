@extends('header-footer')
@section('judul_halaman', '')
@section('konten')
<section class="contact bg-new">
    <div class="contact__form__wrapper" style="padding:100px 0 30px 0;">
        <div class="contact__form container container--editorial">
            <div class="row">
                <div class="box box--large">
                    <div class="col-md-12 col-xs-12 paddform1 text-center">
                        <h3 class="text-center" style="font-weight:700;font-size: 24px;">Garansi Kepuasan</h3>
                        <center><img src="<?php echo asset('assets/resource/thumb.png');?>" style="height: 80px;image-rendering:-webkit-optimize-contrast;width:auto;margin-top:20px;margin-bottom:20px;"></center>
                        <p style="font-size:16px;line-height:2rem;text-align: center;">Bila Kamu tidak puas dengan pelayanan dan hasil kerja tim di studio, kamu bisa request sesi foto ulang<br>atau makeup ulang tanpa tambahan biaya<br><br>Karena momen yang kamu abadikan di studio kami adalah sejarah yang perlu dikenang selamanya</p>
                    </div>
                    <div class="col-md-12 col-xs-12 paddform1 text-center">
                        <h3 class="text-center" style="font-weight:700;font-size: 24px;">Garansi Foto Tidak Cacat</h3>
                        <center><img src="<?php echo asset('assets/resource/check.png');?>" style="height: 80px;image-rendering:-webkit-optimize-contrast;width:auto;margin-top:20px;margin-bottom:20px;"></center>
                        <p style="font-size:16px;line-height:2rem;text-align: center;">Kami menjamin foto yang kamu terima di saat serah terima dengan tim studio tidak cacat<br><br>Bila ada baret, tergores, salah cetak maka kami akan ganti tanpa tambahan biaya.<br>Berlaku untuk semua paket foto di studio kami.</p>
                    </div>
                    <div class="col-md-12 col-xs-12 paddform1 text-center">
                        <h3 class="text-center" style="font-weight:700;font-size: 24px;">Garansi Warna Foto Tidak Pudar Sampai 20 Tahun</h3>
                        <center><img src="<?php echo asset('assets/resource/20.png');?>" style="height: 80px;image-rendering:-webkit-optimize-contrast;width:auto;margin-top:20px;margin-bottom:20px;"></center>
                        <p style="font-size:16px;line-height:2rem;text-align: center;">Bila produk yang kamu terima warna fotonya sudah pudar, maka kamu berhak mendapatkan<br>cetak ulang tanpa biaya.Berlaku sampai 20 tahun dari tanggal kamu transaksi.</p>
                    </div>
                    <div class="col-md-6 col-xs-12 border-right-g">
                        <h3 class="hidden-xs" style="font-size:24px;margin-bottom: 15px;line-height: 2rem;font-weight: bold;letter-spacing: 3px;"><i class="fa fa-check" style="font-size: 30px;color:#cfaa38;"></i> SYARAT<br>& KETENTUAN</h3>
                        <h3 class="hidden-lg" style="margin-bottom: 20px;" class="hidden-md"><span class="term-text">SYARAT & KETENTUAN</span></h3>
                        <h4 style="font-weight: bold;font-size: 16px;margin-bottom: 15px;"><i class="fa fa-check hidden-md" style="font-size: 30px;color:#cfaa38;"></i> Garansi 20 tahun berlaku bila :</h4>
                        <p class="hidden-xs"  style="line-height: 1.5rem;margin-bottom: 15px;">A. Foto dipajang di lingkungan terjaga (Suhu ruang normal,<br>tidak terkena panas dan sinar matahari langsung, tidak<br>terendam air, tidak terkena tumpahan cairan dan tidak<br>lembab)</p>
                        <p class="hidden-lg" style="line-height: 1.5rem;margin-bottom: 15px;">A. Foto dipajang di lingkungan terjaga (Suhu ruang normal, tidak terkena panas dan sinar matahari langsung, tidak terendam air, tidak terkena tumpahan cairan dan tidak lembab)</p>
                        <p class="hidden-xs" style="line-height: 1.5rem">B. Nota transaksi di Alexander Photo masih ada (bentuk<br>print atau file digital di email)</p>
                        <p class="hidden-lg" style="line-height: 1.5rem">B. Nota transaksi di Alexander Photo masih ada (bentuk print atau file digital di email)</p>
                    </div>
                    <div class="col-md-6 col-xs-12 left-g">
                        <h3 class="hidden-xs" style="font-size:20px;margin-bottom: 5px;line-height: 1.5rem;font-weight: bold;"><i class="fa fa-times" style="font-size: 30px;color:#cfaa38;"></i> Garansi 20 tahun tidak berlaku bila :</h3>
                        <h3 class="hidden-lg" style="font-size:16px;margin-bottom: 5px;line-height: 1.5rem;font-weight: bold;"><i class="fa fa-times" style="font-size: 30px;color:#cfaa38;"></i> Garansi 20 tahun tidak berlaku bila :</h3>
                        <p style="line-height: 1.5rem;margin-bottom: 15px;">Foto dipajang di tempat yang tidak terjaga. ( Kena matahari langsung, ruangan panas dan lembab, kena api/panas , terendam, kena tumpahan cairan, jatuh, kena benda keras, tercoret dan bentuk ketidaksengajaan lainnya )</p>
                        <p style="line-height: 1.5rem;margin-bottom: 15px;">Untuk klaim garansi cetak ulang warna foto tidak pudar 20 tahun silahkan ke studio tunjukan nota, hasil foto yang warna pudar dan file foto yang mau dicetak ulang agar bisa kami review dan proses.</p>
                        <p style="line-height: 1.5rem;margin-bottom: 15px;">Dengan adanya Bonus Garansi ini kami percaya momen berharga Anda dapat dikenang sampai generasi berikutnya</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>    
</section>
@endsection