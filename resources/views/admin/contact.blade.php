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
                    <h2>Kontak Pelanggan</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Kontak Pelanggan</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="row clearfix">
                            <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="table-responsive">
                            <table id="table_data" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                <thead>
                                    <tr style="background-color:#34425a;color:white;">
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Nomor Pelanggan</th>
                                        <th style="text-align:center;">Nama</th>
                                        <th style="text-align:center;">Email</th>
                                        <th style="text-align:center;">Nomor Telepon</th>
                                        <th style="text-align:center;">Keperluan</th>
                                        <th style="text-align:center;">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($list as $datax):
                                        $id = Crypt::encrypt($datax->id_cs);
                                        $idx = Crypt::encrypt($datax->nomor_cs);
                                    ?>
                                    <tr>
                                      <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($datax->tanggal));?></td>
                                      <td style="text-align:center;">#<?php echo $datax->nomor_cs?></td>
                                      <td style="text-align:center;"><?php echo $datax->nama?></td>
                                      <td style="text-align:center;"><?php echo $datax->email?></td>
                                      <td style="text-align:center;"><?php echo $datax->phone?></td>
                                      <td style="text-align:center;"><?php echo $datax->want?> - <?php echo $datax->for?></td>
                                      <td style="text-align:center;">
                                        <a class="label label-default" href="{{url('admin/detail_kontak')}}/<?php echo $id?>">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a> 
                                        <a class="label label-danger" href="{{url('admin/hapus_kontak')}}/<?php echo $idx?>">
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
                <br><br>
            </div>
        </div>
        @endsection
        