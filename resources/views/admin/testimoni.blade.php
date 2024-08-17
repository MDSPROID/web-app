@extends('admin/header-footer')
@section('judul_halaman', '')
@section('konten')
<script type="text/javascript">
  $(document).ready( function () {

      $("#table_data").DataTable();
      $("#table_data2").DataTable();
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
                    <h2>Testimonial</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Testimonial</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <a href="{{url('admin/tambah_testimoni')}}" style="padding: 10px;color: white;" class="btn btn-success">+ Tambah Testimonial</a>
                        <div class="col-md-12 col-xs-12" style="background-color: white;">
                            <div class="table-responsive">
                                <table id="table_data2" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                    <thead>
                                        <tr style="background-color:#34425a;color:white;">
                                            <th style="text-align:center;">Tanggal</th>
                                            <th style="text-align:center;">Judul</th>
                                            <th style="text-align:center;">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($testi as $datax):
                                            $id = Crypt::encrypt($datax->id_testimoni);
                                        ?>
                                        <tr>
                                          <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($datax->tanggal));?></td>
                                          <td style="text-align:center;"><?php echo $datax->judul?> - <?php echo $datax->sub_judul?></td>
                                          <td style="text-align:center;">
                                            <a class="label label-default" href="{{url('admin/edit_testimoni')}}/<?php echo $id?>">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </a> 
                                            <a class="label label-danger" href="{{url('admin/hapus_testimoni')}}/<?php echo $id?>">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection