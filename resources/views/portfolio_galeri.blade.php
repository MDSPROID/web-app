@extends('header-footer')
@section('judul_halaman', '')
@section('konten')
<section class="contact" style="margin-top:100px;">
  <div class="container container--editorial component hkcom cntcori">
        <div class="col-md-12 col-xs-12">
          <h2 class="heading heading__m4 htext" style="font-weight:700;text-align: center;font-family: cambria;"><?php echo $g->judul;?></h2>
          <h4 class="intext">Abadikan momen indahmu bersama kami</h4>
        </div>
  <?php foreach($port as $x){?>
          <div class="col-md-4 col-xs-4 re-mask" style="padding-bottom:10px;padding-right: 5px;padding-left: 5px;">
            <img class="img-responsive" onclick="imgx(this);"  data-image="<?php echo $x->gambar?>" src="<?php echo $x->gambar?>">
          </div>
  <?php }?>
  </div>
</section>
<!-- The Modal -->
<div id="myModal" class="modal" style="display: none;">
  <span class="close">X</span>
  <img class="modal-content" id="img01">
</div>
@endsection