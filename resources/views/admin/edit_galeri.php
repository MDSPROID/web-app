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
                    <h2>Edit Galeri</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
                        <li class="breadcrumb-item">Edit Galeri</li>
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
                                <?php echo form_open('admin/update_galeri',array('id'=>'add_galeri'));?>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <h5 style="font-size:14px;">Kategori :</h5>
                                        <select class="form-control show-tick" name="kategori" required>
                                            <option value="">Pilih</option>
                                            <?php foreach($kat as $data){ 
                                              if($data->id_port == $d['id_portfolio']){?>
                                                <option value="<?php echo $data->id_port;?>" SELECTED><?php echo $data->judul;?></option>
                                            <?php }else{?>
                                                <option value="<?php echo $data->id_port;?>"><?php echo $data->judul;?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="form-line">
                                        <h5 style="font-size:14px;">Gambar : <i style="color:red;font-size: 10px;">*Ukuran harus 1:1 (Square)</i></h5>
                                        <input type="text" name="gambar" value="<?php echo $d['gambar']?>" class="form-control" id="carfID" required>
                                        <span class="input-group-addon"><a data-toggle="modal" href="javascript:;" data-target="#responCarif"><i class="fa fa-image"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <input type="hidden" name="id_galeri" value="<?php echo $d['id_galeri']?>">
                                <button type="submit" class="btn-go btn btn-primary btn-raised">Simpan</button>
                            <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        