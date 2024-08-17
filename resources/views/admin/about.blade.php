@extends('admin/header-footer')
@section('judul_halaman', '')
@section('konten')
<script type="text/javascript">
  $(document).ready( function () {

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
                    <h2>About Setting</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">About Setting</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <form action="{{url('admin/updateabout1')}}" enctype="multipart/form-data" style="border-bottom:2px solid grey;padding-bottom:20px;padding-top: 15px;">
                        @csrf
                            <h4>Setting #1</h4>
                            <div class="form-group" style="margin-bottom: 0">
                                <div class="form-line">
                                    <input type="text" name="gambar" value="<?php echo $s1['gambar']?>" class="form-control" id="carfID">
                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten1" class="form-resize form-control"><?php echo $s1['konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten1" class="form-resize form-control"><?php echo $s1['set_konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten2" class="form-resize form-control"><?php echo $s1['konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten2" class="form-resize form-control"><?php echo $s1['set_konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" readonly="readonly" name="id_about" value="<?php echo $s1['id_about']?>" required>
                            <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                        </form>
                        <form action="{{url('admin/updateabout2')}}" enctype="multipart/form-data" style="border-bottom:2px solid grey;padding-bottom:20px;padding-top: 15px;">
                        @csrf
                            <h4>Setting #2</h4>
                            <div class="form-group" style="margin-bottom: 0">
                                <div class="form-line">
                                    <input type="text" name="gambar" value="<?php echo $s2['gambar']?>" class="form-control" id="carfID1">
                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif1"><i class="fa fa-image"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten1" class="form-resize form-control"><?php echo $s2['konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten1" class="form-resize form-control"><?php echo $s2['set_konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten2" class="form-resize form-control"><?php echo $s2['konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten2" class="form-resize form-control"><?php echo $s2['set_konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" readonly="readonly" name="id_about" value="<?php echo $s2['id_about']?>" required>
                            <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                        </form>
                        <form action="{{url('admin/updateabout3')}}" enctype="multipart/form-data" style="border-bottom:2px solid grey;padding-bottom:20px;padding-top: 15px;">
                        @csrf
                            <h4>Setting #3</h4>
                            <div class="form-group" style="margin-bottom: 0">
                                <div class="form-line">
                                    <input type="text" name="gambar" value="<?php echo $s3['gambar']?>" class="form-control" id="carfID2">
                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif2"><i class="fa fa-image"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten1" class="form-resize form-control"><?php echo $s3['konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 1 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten1" class="form-resize form-control"><?php echo $s3['set_konten1']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="konten2" class="form-resize form-control"><?php echo $s3['konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan Teks 2 :</h5>
                                        <div class="form-line">
                                            <textarea name="set_konten2" class="form-resize form-control"><?php echo $s3['set_konten2']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" readonly="readonly" name="id_about" value="<?php echo $s3['id_about']?>" required>
                            <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                        </form>
                        <form action="{{url('admin/updateabout4')}}" enctype="multipart/form-data" style="padding-bottom:20px;padding-top: 15px;">
                            @csrf
                            <h4>Setting #4</h4>
                            <div class="form-group" style="margin-bottom: 0">
                                <div class="form-line">
                                    <input type="text" name="gambar" value="<?php echo $s4['gambar']?>" class="form-control" id="carfID3">
                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif3"><i class="fa fa-image"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 0">
                                <h5 style="font-size:14px;">Keterangan Gambar :</h5>
                                <div class="form-line">
                                    <textarea name="konten1" class="form-resize form-control"><?php echo $s4['konten1']?></textarea>
                                </div>
                            </div>
                            <input type="hidden" readonly="readonly" name="id_about" value="<?php echo $s4['id_about']?>" required>
                            <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                        </form>
                        <br><br>
                        <i style="color:red">*Gambar harus ukuran 3200px X 1800px dan kurang dari 2MB</i>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        @endsection