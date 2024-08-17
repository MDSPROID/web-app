		<div class="row clearfix">
            <div class="col-md-12 col-xs-12" style="margin-top: 30px;">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">Copyright © <time class="year">2019,</time> <a href="#" target="_blank">ALEXANDER PHOTO ALL RIGHTS RESERVED</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="<?php echo base_url('assets/assets/bundles/libscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url('assets/assets/bundles/vendorscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url('assets/assets/plugins/autosize/autosize.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url('assets/assets/plugins/momentjs/moment.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo base_url('assets/resource/js/js.cookie.js');?>"></script>
<script type="text/javascript">var baseURL = '<?php echo base_url();?>';</script>
<script src="<?php echo base_url('assets/assets/bundles/mainscripts.bundle.js');?>"></script>
<script src="<?php echo base_url('assets/resource/js/apply.js');?>"></script>  
<script src="<?php echo base_url('assets/assets/js/pages/forms/basic-form-elements.js');?>"></script>  
<script src="<?php echo base_url('resource/css/datetimepicker/js/bootstrap-datetimepicker.min.js');?>"></script> 

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script type="text/javascript">
        var baseURL = '<?php echo base_url();?>';

    tinymce.init({
        selector: "textarea",
        theme: "modern",
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "responsivefilemanager link image",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor",
            "image"
        ],

        image_advtab: true,
        paste_data_images: true,
        
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image | print preview media fullpage | forecolor backcolor emoticons", 
        
        style_formats: [
            {title: "Bold text", inline: "b"},
            {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
            {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
            {title: "Example 1", inline: "span", classes: "example1"},
            {title: "Example 2", inline: "span", classes: "example2"},
            {title: "Table styles"},
            {title: "Table row 1", selector: "tr", classes: "tablerow1"}
        ],

        external_filemanager_path:" <?php echo base_url('Si345manim/filemanager');?>/",
        filemanager_title:"Filemanager",
        filemanager_access_key:"rOls54iLOFwb874GzQ15d0MmgEa94" ,
        external_plugins: {"filemanager" : "<?php echo base_url('Si345manim/filemanager/plugin.min.js');?>"}
    });        

</script>
<!-- respon carf1 -->
  <div class="modal" id="responCarif" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
    </div>
<!-- End -->
<!-- respon carf2 -->
  <div class="modal" id="responCarif1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID1&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
    </div>
<!-- End -->
<!-- respon carf3-->
  <div class="modal" id="responCarif2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID2&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
    </div>
<!-- End -->
<!-- respon carf3-->
  <div class="modal" id="responCarif3" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID3&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
<!-- respon carf3-->
  <div class="modal" id="responCarif4" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID4&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
<!-- respon carf3-->
  <div class="modal" id="responCarif5" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="javascript:void(0)" style="font-size: 30px;border-radius:inherit;padding:initial;color: black;" class="tutup_modal label" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
        <h3 class="modal-title">File Manager</h3>
      </div>
      <div class="modal-body" style="padding: 0;">
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="<?php echo base_url('Si345manim/');?>filemanager/dialog.php?field_id=carfID5&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
</body>
</html>
