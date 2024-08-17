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
    #reply{
        visibility:inherit!important;
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
                        <li class="breadcrumb-item">Jawab Permintaan pelanggan</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="row clearfix">
                            <div class="col-md-8 col-xs-12">
                                <form action="{{url('admin/reply_permintaan')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group" style="margin-bottom: 0">
                                        <div class="form-line">
                                            <textarea name="reply" class="form-resize form-control"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" readonly="readonly" name="email" value="<?php echo $p['email']?>" required>
                                    <input type="hidden" readonly="readonly" name="nomor" value="<?php echo $p['nomor_permintaan']?>" required>
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <h4 style="margin-top: 20px;">Status : <?php if($p['status'] == 0){echo "<span style='color:orange;'>Belum Dijawab</span>";}else{
                                    echo "<span style='color:green;'>Sudah dijawab</span>";
                                }?></h4>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <input type="text" style="background-color: #eaeaea;padding: 0 15px;" readonly="readonly" name="nomorx" class="form-resize form-control" value="<?php echo $p['nomor_permintaan']?>" required>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <input type="text" style="background-color: #eaeaea;padding: 0 15px;" readonly="readonly" name="namax" value="<?php echo $p['nama']?>" class="form-resize form-control" placeholder="Nama Pelanggan" required>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <input type="email" style="background-color: #eaeaea;padding: 0 15px;" readonly="readonly" name="emailx" class="form-resize form-control" placeholder="Email"  value="<?php echo $p['email']?>" required>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <input type="text" style="background-color: #eaeaea;padding: 0 15px;" name="telponx" readonly="readonly" class="form-resize form-control" placeholder="Telpon/ whatsapp"  value="<?php echo $p['telpon']?>" required>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <input type="text" style="background-color: #eaeaea;padding: 0 15px;" readonly="readonly" name="permintaanx"  value="<?php echo $p['permintaan']?>" class="form-resize form-control" placeholder="Permintaan" required>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12" style="background-color: white;">
                        <div class="table-responsive">
                            <table id="table_data" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                <thead>
                                    <tr style="background-color:#34425a;color:white;">
                                        <th style="text-align:center;">Nomor Permintaan</th>
                                        <th style="text-align:center;">Reply</th>
                                        <th style="text-align:center;">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($reply as $data):
                                    ?>
                                    <tr>
                                      <td style="text-align:center;">#<?php echo $data->nomor_reply?></td>
                                      <td style="text-align:center;"><?php echo $data->reply?></td>
                                      <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($data->tanggal));?></td>
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