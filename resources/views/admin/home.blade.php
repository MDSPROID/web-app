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
                    <h2>Home Setting</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Home Setting</li>
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
                                <form action="{{url('admin/updatehome1')}}" enctype="multipart/form-data" style="border-bottom:2px solid grey;padding-bottom:20px;padding-top: 15px;">
                                    @csrf
                                    <h4>Setting #1</h4>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red">*Gambar harus ukuran 3200px X 1800px dan kurang dari 2MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" value="<?php echo $s1['gambar']?>" class="form-control" id="carfID">
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <h5 style="font-size:14px;">Gambar tambahan : <i style="color:red;">*Ukuran harus 1116px X 590px .PNG</i> :</h5>
                                                <div class="form-line">
                                                    <input type="text" name="konten1" value="<?php echo $s1['konten1']?>" class="form-control" id="carfID4">
                                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif4"><i class="fa fa-image"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" readonly="readonly" name="id_home" value="<?php echo $s1['id_home']?>" required>
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                </form>
                                <form action="{{url('admin/updatehome2')}}" enctype="multipart/form-data" style="border-bottom:2px solid grey;padding-bottom:20px;padding-top: 15px;">
                                    @csrf
                                    <h4>Setting #2</h4>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red">*Gambar harus ukuran 3200px X 1800px dan kurang dari 2MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" value="<?php echo $s2['gambar']?>" class="form-control" id="carfID1">
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif1"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <div class="form-line">
                                                    <textarea name="konten3" class="form-resize form-control"><?php echo $s2['konten3']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <div class="form-line">
                                                    <textarea name="konten4" class="form-resize form-control"><?php echo $s2['konten4']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" readonly="readonly" name="id_home" value="<?php echo $s2['id_home']?>" required>
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                </form>
                                <form action="{{url('admin/updatehome3')}}" enctype="multipart/form-data" style="padding-bottom:20px;padding-top: 15px;">
                                    @csrf
                                    <h4>Setting #3</h4>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red">*Gambar harus ukuran 3200px X 1800px dan kurang dari 2MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" value="<?php echo $s3['gambar']?>" class="form-control" id="carfID2">
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif2"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" style="margin-bottom: 0">
                                                <h5 style="font-size:14px;">Gambar tambahan : <i style="color:red;">*Ukuran harus 1116px X 590px .PNG</i> :</h5>
                                                <div class="form-line">
                                                    <input type="text" name="konten1" value="<?php echo $s3['konten1']?>" class="form-control" id="carfID5">
                                                    <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif5"><i class="fa fa-image"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" readonly="readonly" name="id_home" value="<?php echo $s3['id_home']?>" required>
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
        