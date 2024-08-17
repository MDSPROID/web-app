<?php 
$user_log = info_user_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="robots" content="index,nofollow"/>
<meta name="copyright" content="This website has been registered and trademark of ALEXANDER PHOTO "/>
<meta name="author" content="ALEXANDER PHOTO">
<meta name="language" content="Indonesia"> 
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">
<title>:: Administrator Alexander ::</title>
<!-- Favicon-->
<link rel="icon" href="<?php echo asset('assets/fav.png');?>" type="image/x-icon">
<link rel="stylesheet" href="<?php //echo asset('resource/css/style.css')?>">
<?php if(request()->segment(2) == 'detail_permintaan' || request()->segment(2) == "permintaan" || request()->segment(2) == "promo_and_pricelist" || request()->segment(2) == "portfolio"  || request()->segment(2) == "contact" || request()->segment(2) == "detail_kontak" || request()->segment(2) == "testimonial" ) {?>
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap.css')?>">
<?php }else if(request()->segment(1) == 'dashboard/laporan_asm'){?>
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap.css')?>">
<?php }else if(request()->segment(1) == 'dashboard/filter_laporan_visit_asm'){?>
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap.css')?>"> 
<?php }else if(request()->segment(1) == 'dashboard/filter_laporan_pi_asm'){?>
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap.css')?>"> 
<?php }else if(request()->segment(1) == 'dashboard/filter_laporan_sampling_asm' || request()->segment(1) == 'dashboard/toko'){?>
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap.css')?>"> 
<?php }else{?>  
    <link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap/css/bootstrap1.css')?>">
<?php }?>
<link rel="stylesheet" href="<?php //echo asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css');?>"/>
<link rel="stylesheet" href="<?php echo asset('assets/assets/plugins/bootstrap-select/css/bootstrap-select.css')?>">
<!-- Custom Css -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo asset('assets/assets/css/main.css');?>">
<link rel="stylesheet" href="<?php echo asset('assets/assets/css/all-themes.css');?>" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<script src="<?php echo asset('assets/resource/js/JQuery.min.js')?>"></script>
<script src="<?php echo asset('assets/resource/js/jquery-3.1.1.min.js')?>"></script>
<script src="<?php echo asset('assets/resource/js/jquery-1.10.2.min.js')?>"></script>
<script src="<?php echo asset('assets/resource/js/jquery.form.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/assets/js/highcharts.js');?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/assets/js/highcharts-3d.js');?>"></script>
<script type='text/javascript' src="<?php echo asset('assets/assets/js/tinymce/tinymce.min.js');?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/assets/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?php echo asset('assets/assets/js/dataTables.bootstrap.min.js');?>"></script>
<script type="text/javascript" src=""></script>
</head>

<body class="theme-red">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar" style="background-color: #016301;padding-left: 15px;padding-right: 15px;">
    <div class="col-md-12">
        <div class="navbar-header" style="padding:0 !important;">     
            <a href="javascript:void(0);" class="bars" style="left:10px !important;"></a>      
            <a class="navbar-brand" href="{{url('/')}}" target="_new"><img class="hidden-xs img-responsive" src="<?php echo asset('assets/logo.png');?>" style="height:50px;"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo asset('admin/logout');?>" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="<?php if(empty(Session::get('gambar'))){ echo "".asset('assets/fav.png').""; }else{ echo Session::get('gambar'); }?>" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown"><?php echo $user_log->nama?></div>
            <div class="email">Last Login : <?php echo date('d F Y H:i:s', strtotime(Session::get('last_login')));?></div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">PENGATURAN HALAMAN</li>
            <li>
                <a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{url('admin/home')}}"><i class="fa fa-home"></i><span>Home</span></a>
            </li>
            <li>
                <a href="{{url('admin/about')}}"><i class="fa fa-bookmark"></i><span>About</span></a>
            </li>
            <li>
                <a href="{{url('admin/promo_and_pricelist')}}"><i class="fa fa-certificate"></i><span>Promo & Pricelist</span></a>
            </li>
            <li>
                <a href="{{url('admin/portfolio')}}"><i class="fa fa-file-text-o"></i><span>Portfolio</span></a>
            </li>
            <li>
                <a href="{{url('admin/testimonial')}}"><i class="fa fa-commenting-o"></i><span>Testimonial</span></a>
            </li>
            <li>
                <a href="{{url('admin/contact')}}"><i class="fa fa-phone"></i><span>Contact</span></a>
            </li>
            <li>
                <a href="{{url('admin/customer')}}"><i class="fa fa-users"></i><span>Customers</span></a>
            </li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#skins">Pengaturan Akun</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="skins">
            <div class="col-md-12 col-xs-12">
            <form action="{{url('admin/update_akun')}}" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="nama_akun" class="form-resize form-control" placeholder="Nama Akun" value="<?php echo $user_log->nama?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="username" class="form-resize form-control" value="<?php echo $user_log->username?>" placeholder="Username" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="password" name="password" class="form-resize form-control" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn-go btn btn-block btn-primary btn-raised">Update Akun</button>
            </form>
            <form action="{{url('admin/update_email')}}" method="post">
                @csrf
            <?php 
                $h = info_user_email();
            ?>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="mail" class="form-resize form-control" placeholder="Email" value="<?php echo $h['konten']?>" required>
                    </div>
                </div>
                <input type="hidden" name="id_setting" value="<?php echo $h['id_setting']?>">
                <button type="submit" class="btn-go btn btn-block btn-primary btn-raised">Update Email Master</button>            
            </form>
            </div>
        </div>
    </div>
</aside>
    @yield('konten')
		<div class="row clearfix">
            <div class="col-md-12 col-xs-12" style="margin-top: 30px;">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">
                            Copyright © <time class="year">2019,</time> <a href="javascript:void(0);">ALEXANDER PHOTO ALL RIGHTS RESERVED</a><br>
                            Response Server time <strong>{{ (microtime(true) - LARAVEL_START) }}</strong> seconds.<br>
			                App Version {{ Illuminate\Foundation\Application::VERSION }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="<?php echo asset('assets/assets/bundles/libscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo asset('assets/assets/bundles/vendorscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo asset('assets/assets/plugins/autosize/autosize.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo asset('assets/assets/plugins/momentjs/moment.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
<script src="<?php echo asset('assets/resource/js/js.cookie.js');?>"></script>
<script type="text/javascript">var baseURL = '{{url("/")}}';</script>
<script src="<?php echo asset('assets/assets/bundles/mainscripts.bundle.js');?>"></script>
<script src="<?php echo asset('assets/resource/js/apply.js');?>"></script>  
<script src="<?php echo asset('assets/assets/js/pages/forms/basic-form-elements.js');?>"></script>  
<script src="<?php echo asset('resource/css/datetimepicker/js/bootstrap-datetimepicker.min.js');?>"></script> 

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script type="text/javascript">
        var baseURL = '{{url("/")}}';

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

        external_filemanager_path: "{{url('Si345manim/filemanager')}}/",
        filemanager_title:"Filemanager",
        filemanager_access_key:"rOls54iLOFwb874GzQ15d0MmgEa94" ,
        external_plugins: {"filemanager" : "{{url('Si345manim/filemanager/plugin.min.js')}}"}
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID1&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID2&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID3&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID4&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
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
            <iframe  frameborder="0" style="width: 100%;height: 565px;" src="{{url('Si345manim')}}/filemanager/dialog.php?field_id=carfID5&lang=en_EN&akey=rOls54iLOFwb874GzQ15d0MmgEa94">
            </iframe>
        </div>
      </div>
    </div>
  </div>
<!-- End -->
</body>
</html>
