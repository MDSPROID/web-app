@extends('admin/header-footer')
@section('judul_halaman', '')
@section('konten')
<script type="text/javascript">
  $(document).ready( function () {

      $("#table_customer").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[ 0, "asc" ]]
      });
      $("#table_customer2").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "order": [[ 0, "asc" ]]
      });      
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
                    <h2>Data Customer</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Data Customer</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="row clearfix">
                    <div class="col-md-12 col-xs-12">
                        <h3>Data Customer (contact)</h3>
                        <div class="table-responsive">
                            <table id="table_customer" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                <thead>
                                    <tr style="background-color:#34425a;color:white;">
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Nama</th>
                                        <th style="text-align:center;">Wa</th>
                                        <th style="text-align:center;">Want</th>
                                        <th style="text-align:center;">Email</th>
                                        <th style="text-align:center;">Found</th>
                                        <th style="text-align:center;">Nomor CS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($cs as $datax):
                                        //$idxx = $this->encrypt->encode($datax->id_testimoni);
                                        //$id = base64_encode($idxx);
                                    ?>
                                    <tr>
                                      <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($datax->tanggal));?></td>
                                      <td style="text-align:center;"><?php echo $datax->nama?></td>
                                      <td style="text-align:center;"><?php echo $datax->phone?></td>
                                      <td style="text-align:center;"><?php echo $datax->want?></td>
                                      <td style="text-align:center;"><?php echo $datax->email?></td>
                                      <td style="text-align:center;"><?php echo $datax->found?></td>
                                      <td style="text-align:center;">085210005288</td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h3>Data Customer (Request Price list)</h3>
                        <div class="table-responsive">
                            <table id="table_customer2" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%" style="box-shadow:0px 0px 8px 0px #bababa;">
                                <thead>
                                    <tr style="background-color:#34425a;color:white;">
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Nama</th>
                                        <th style="text-align:center;">Wa</th>
                                        <th style="text-align:center;">Want</th>
                                        <th style="text-align:center;">Email</th>
                                        <th style="text-align:center;">Found</th>
                                        <th style="text-align:center;">Nomor CS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($cs2 as $data2x):
                                        //$idxx = $this->encrypt->encode($datax->id_testimoni);
                                        //$id = base64_encode($idxx);
                                    ?>
                                    <tr>
                                      <td style="text-align:center;"><?php echo date('d F Y H:i:s', strtotime($data2x->tanggal));?></td>
                                      <td style="text-align:center;"><?php echo $data2x->nama?></td>
                                      <td style="text-align:center;"><?php echo $data2x->telpon?></td>
                                      <td style="text-align:center;"><?php echo $data2x->permintaan?></td>
                                      <td style="text-align:center;"><?php echo $data2x->email?></td>
                                      <td style="text-align:center;">-</td>
                                      <td style="text-align:center;">085210005288</td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
                                        