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
                    <h2>Tambah Portfolio</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
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
                                <?php echo form_open_multipart('admin/update_port');?>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red;font-size: 12px;">*Gambar harus 1691px X 1036px (Maks 2 MB)</i></h5>
                                        <div class="form-line">
                                            <input type="text" name="gambar" value="<?php echo $d['gambar']?>" class="form-control" id="carfID" required>
                                            <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Judul :</h5>
                                        <div class="form-line">
                                            <input type="text" placeholder="Judul" value="<?php echo $d['judul']?>" style="padding: 0 15px;" name="judul" class="form-resize form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <h5 style="font-size:14px;">Keterangan :</h5>
                                        <div class="form-line">
                                            <textarea name="keterangan" class="form-resize form-control"><?php echo $d['keterangan']?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_port" value="<?php echo $d['id_port']?>">
                                    <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        