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
                    <h2>Tambah Testimoni</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Tambah Testimoni</li>
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
                                <form action="{{url('admin/simpan_testimoni')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Judul & Sub Judul :</h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Judul" style="padding: 0 15px;" name="title" class="form-resize form-control" required>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" placeholder="Sub Judul" style="padding: 0 15px;" name="sub" class="form-resize form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Video : <i style="color:red;font-size: 12px;">*Maks 5 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="video" class="form-control" id="carfID1" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif1"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 1 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar1" class="form-control" id="carfID" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 2 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar2" class="form-control" id="carfID2" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif2"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 3 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar3" class="form-control" id="carfID3" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif3"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        