@extends('admin/header-footer')
@section('judul_halaman', '')
@section('konten')
<script type="text/javascript">
  $(document).ready( function () {

      $("#table_data").DataTable();
      $('#datetimepicker1').datetimepicker({
        format: 'yyyy-MM-dd'
      });         
      $('#datetimepicker2').datetimepicker({
        format: 'yyyy-MM-dd'
      });
  });
</script>
<style type="text/css">
    #progressbar li {
        width: 100px;
    }
</style>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @if ($success = Session::get('success'))
                        <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-success sukses">{{$success}}</label>
                    @endif
                    @if ($error = Session::get('error'))
                        <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-warning gagal">{{$error}}</label>
                    @endif
                </div>
                <div class="col-md-12 col-xs-12">
                    <h2>Edit Promo</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
                        <li class="breadcrumb-item">Edit Promo</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="row clearfix">
                            <div class="col-md-12 col-xs-12">
                                <?php echo form_open_multipart('admin/update_promo');?>
                                <form action="{{url('admin/update_promo')}}"
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red;font-size: 12px;">*Gambar harus 1691px X 1036px (Maks 2 MB)</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" value="<?php echo $d['gambar']?>" class="form-control" id="carfID" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Judul & Sub Judul :</h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Judul" value="<?php echo $d['title']?>" style="padding: 0 15px;" name="title" class="form-resize form-control" required>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" placeholder="Sub Judul" value="<?php echo $d['sub_title']?>" style="padding: 0 15px;" name="sub" class="form-resize form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Harga : <i style="color:red;font-size: 10px">*Masukkan Angka saja</i></h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Harga dicoret" value="<?php echo $d['harga_dicoret']?>" style="padding: 0 15px;" name="coret" class="form-resize form-control">
                                        </div>
                                        <div class="form-line">
                                            <input type="text" placeholder="Harga Fix" value="<?php echo $d['harga_fix']?>" style="padding: 0 15px;" name="fix" class="form-resize form-control" required>
                                        </div>
                                        <i style="color:red;font-size: 12px;">*Jika tidak ada harga dicoret, masukkan saja harga fix di kolom harga fix</i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <h5 style="font-size:14px;">Keterangan 1 :</h5>
                                                <div class="form-line">
                                                    <textarea name="ket1" class="form-resize form-control"><?php echo $d['keterangan1']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <h5 style="font-size:14px;">Keterangan 2 :</h5>
                                                <div class="form-line">
                                                    <textarea name="ket2" class="form-resize form-control"><?php echo $d['keterangan2']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_promo" value="<?php echo $d['id_promo']?>">
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        @endsection