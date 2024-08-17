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
                    <?php if($this->session->flashdata('success')):?>
                        <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-success sukses"><?php echo $this->session->flashdata('success')?></label>
                    <?php endif ?>
                    <?php if($this->session->flashdata('error')):?>
                    <label style="font-size: 14px;padding: 5px" class="col-md-12 col-xs-12 label label-warning gagal"><?php echo $this->session->flashdata('error')?></label>
                    <?php endif?>
                </div>
                <div class="col-md-12 col-xs-12">
                    <h2>Edit Testimoni</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
                        <li class="breadcrumb-item">Edit Testimoni</li>
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
                                <?php echo form_open_multipart('admin/update_testimoni');?>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Judul & Sub Judul :</h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Judul" value="<?php echo $d['judul'];?>" style="padding: 0 15px;" name="title" class="form-resize form-control" required>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" placeholder="Sub Judul" value="<?php echo $d['sub_judul'];?>" style="padding: 0 15px;" name="sub" class="form-resize form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Video : <i style="color:red;font-size: 12px;">*Maks 5 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="video" value="<?php echo $d['video'];?>" class="form-control" id="carfID1" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif1"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 1 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar1" value="<?php echo $d['gb1'];?>" class="form-control" id="carfID" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 2 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar2" class="form-control" value="<?php echo $d['gb2'];?>" id="carfID2" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif2"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar 3 : <i style="color:red;font-size: 12px;">*Maks 2 MB</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar3" class="form-control" value="<?php echo $d['gb3'];?>" id="carfID3" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif3"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_testi" value="<?php echo $d['id_testimoni']?>">
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        