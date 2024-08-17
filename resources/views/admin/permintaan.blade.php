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
                    <h2>Permintaan Pelanggan</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Permintaan pelanggan</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="table-responsive">
                            <table id="table_data" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                <thead>
                                    <tr style="background-color:#34425a;color:white;">
                                        <th style="text-align:center;">Nomor Permintaan</th>
                                        <th style="text-align:center;">Nama</th>
                                        <th style="text-align:center;">Email</th>
                                        <th style="text-align:center;">Telepon / Whatsapp</th>
                                        <th style="text-align:center;">Permintaan</th>
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($permintaan as $data):
                                        $id = Crypt::encrypt($data->id_permintaan);
                                    ?>
                                    <tr>
                                      <td style="text-align:center;"><a href="{{url('admin/detail_permintaan')}}/<?php echo $id?>">#<?php echo $data->nomor_permintaan?></a></td>
                                      <td style="text-align:center;"><?php echo $data->nama?></td>
                                      <td style="text-align:center;"><?php echo $data->email?></td>
                                      <td style="text-align:center;"><?php echo $data->telpon?></td>
                                      <td style="text-align:center;"><?php echo $data->permintaan?></td>
                                      <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($data->tanggal));?></td>
                                      <td style="text-align:center;"><?php if($data->status == "0"){ echo "Belum Dijawab";}else{ echo "Sudah Dijawab";}?></td>
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