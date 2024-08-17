@extends('admin/header-footer')
@section('judul_halaman', '')
@section('konten')
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row"> 
                <div class="col-md-12 col-xs-12">
                    @if ($success = Session::get('success'))
                        <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-success sukses">{{$success}}</label>
                    @endif
                    @if ($success = Session::get('error'))
                        <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-warning gagal">{{$error}}</label>
                    @endif
                </div>
                <div class="col-md-12 col-xs-12">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item">Halaman utama</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media-icon bg-cyan">
                            <i class="fa fa-globe" style="font-size: 30px;"></i>
                        </div>
                        <div class="media-text">
                            <span class="title">KUNJUNGAN WEBSITE</span>
                            <span class="value"><b><?php echo count($pg)?> KUNJUNGAN</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{url('admin/contact')}}">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media-icon bg-amber">
                            <i class="fa fa-calendar-check-o" style="font-size: 30px;"></i>
                        </div>
                        <div class="media-text">
                            <span class="title">KONTAK PELANGGAN</span>
                            <span class="value"><b><?php echo count($ktk)?> KONTAK</b></span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{url('admin/permintaan')}}">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media-icon bg-blue">
                            <i class="fa fa-tasks" style="font-size: 30px;"></i>
                        </div>
                        <div class="media-text">
                            <span class="title">PERMINTAAN PELANGGAN</span>
                            <span class="value"><b><?php echo count($pmtn)?> PERMINTAAN</b></span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <center><div id="mapcanvas"></div></center>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="card activities">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 ghjo">
                            <div class="header">
                                <h3 class="text-center" style="margin-bottom: 20px;">Trafik Pengunjung</h3>
                            </div>
                            <div class="body">
                                <div id="mygraph2"></div>
                                <div class="text-center">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12" style="display:none;">
                            <div class="header">
                                <h3 class="text-center" style="margin-bottom: 20px;">Permintaan Pelanggan</h3>
                            </div>
                            <div class="body">
                                <div class="streamline b-l b-accent">
                                    <?php foreach($permintaan as $t){
                                        $id = Crypt::encrypt($t->id_permintaan);
                                    ?>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="text-muted"><?php echo date('d F Y H:i:s' ,strtotime($t->tanggal))?></div>
                                            <p><a href="{{url('admin/detail_permintaan/'.$id.'')}}"><?php echo $t->nama?></a> [ <?php echo $t->nomor_permintaan?> ] <?php if($t->status == "0"){ echo "<i style='color:#FFC107;' class='fa fa-clock-o'></i>";}else{ echo "<i style='color:green;' class='fa fa-check'></i>";}?></p>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
var chart2; 
$(document).ready(function() {
    chart2 = new Highcharts.Chart({
         chart: {
            renderTo: 'mygraph2',
            type: 'column',
            options3d: {
          enabled: true,
          alpha: 0,
          beta: 20
              },
         },   
         title: {
            text: ''
         },
         xAxis: {
            categories: ['Jumlah Pengunjung']
         },
         yAxis: {
            title: {
               text: 'Pengunjung'
            }
         },
              series:             
            [
                <?php
                  foreach($page_view as $datax){                             
                ?>
                    {
                      name: '<?php echo $datax->page?>',
                      data: [<?php echo $datax->total; ?>]
                    },
                    <?php }?>
                ]
      });
   });  
</script>
@endsection