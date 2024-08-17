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
                    <h2>Tambah Portfolio</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Tambah Portfolio</li>
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
                                <form enctype="multipart/form-data" action="{{url('admin/simpan_port')}}" method="post">
                                    @csrf
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red;font-size: 12px;">*Gambar harus 1691px X 1036px (Maks 2 MB)</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" class="form-control" id="carfID" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Judul :</h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Judul" style="padding: 0 15px;" name="judul" class="form-resize form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan :</h5>
                                        <div class="form-line">
                                            <textarea name="keterangan" class="form-resize form-control"></textarea>
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
        