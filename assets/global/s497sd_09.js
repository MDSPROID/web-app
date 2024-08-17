$(document).ready(function(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
    //var bs = window.location.href.match(/^.*\//);

    //$('.slick-slider').slick({
    //    dots: true,
    //    infinite: true,
    //    speed: 500,
    //    autoplay:true,
    //    autoplaySpeed: 4000,
    //    arrows:false,
    //    slidesToShow: 1,
    //    slidesToScroll: 1
    //});
});

jQuery(document).ready(function($){

    // GLOBAL VARIABLE
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');

$(function() {

        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    //$( "#draggable" ).draggable({ axis: "x", containment: "parent" });
        //$("img.lazy").lazyload({effect : "fadeIn"});// untuk dipasang di <img src='xxxx'>
        //$("div.lazy").lazyload({effect : "fadeIn"});// untuk dipasang sebagai background / div
        $('.research').autocomplete({
            serviceUrl: Bs + 'pencarian', 
            onSelect: function (res) {
                window.location.href = res.link;
            }
        });
        $('.search-bar').autocomplete({
            serviceUrl: Bs + 'cariB',
            onSelect: function (suggestion) {
                window.location.href = suggestion.link;
            }
        });
    }); 
$(window).scroll(function(){
    if($(window).scrollTop() > 120){
        $(".hd-v2").removeClass("hidden"); 
        $(".hd-v2").slideDown(); 
    }else{
        $(".hd-v2").addClass("hidden");  
        $(".hd-v2").slideUp();
    } 
}); 

$(".mask-img img").one('lazyloaded load', function() {
  $(this).parent().find(".curtain").remove();
}).each(function(e){
  if(this.complete){
      $(this).trigger("lazyloaded load");
    $(this).parent().find(".curtain").remove();
  }
});


$(".sostomb").click(function(){
    $(".sosmed").slideToggle();
});

$(".cart-btn-clk").click(function(){
    window.location.href= Bs + "cart";
});

$(".info-close").click(function(){
    $(".info-info").remove();
});

$(".inf-log").click(function(){
    window.location.href= Bs + "login-pelanggan";
});

$(".menus1").click(function(){
    $(".category-line").slideToggle("fast");
});

$(".kategori-btn").click(function(){
    $(".menu-menu").addClass("hidden");
    $(".menu-menu-kategori").removeClass("hidden");
});

$(".back-to-menu").click(function(){
    $(".menu-menu").removeClass("hidden");
    $(".menu-menu-kategori").addClass("hidden");
});

$("#ps2").keyup(pwsv);

$(".menus").hover(function(){
    $(".menu-tab").fadeIn("fast");
    $(".bg-form").fadeIn("fast");  
    //$(".body").css("overflow", "hidden"); 
    }, function(){ 
    $(".menu-tab").fadeOut("fast").hide();
    $(".bg-form").fadeOut("fast").hide();  
    //$(".body").css("overflow", ""); 
});

$(".search-ico-for-mobile").click(function(){
    $(".search-bar-mobile").slideDown("fast");
    $(".for-search-mobile").fadeIn("fast");
});

$(".close-bar").click(function(){
    $(".search-bar-mobile").slideUp("fast");
    $(".for-search-mobile").fadeOut("fast");
    $(".for-search").fadeOut("fast");
});

    $(".log-in, .batal-log").click(function(e){
        e.preventDefault();
        $(".form-log").fadeToggle("fast");
    });

    $(".reg").click(function(e){
        e.preventDefault();
        $(".form-log").fadeOut("fast");
        $(".bg-form").fadeIn("fast");
        $(".reg-form").fadeIn("fast");
        //$(".body").css("overflow", "hidden");
    });

    $(".btn-filter-sort, .btn-x-filter").click(function(){
        $(".sidebar-filter").fadeOut();
    });

    $(".fil-btn").click(function(){
        $(".sidebar-filter").fadeIn();
    });

    $(".sub-btn1").click(function(){
        $(".sub-filter1").slideToggle();
        $(".sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn2").click(function(){
        $(".sub-filter2").slideToggle();
        $(".sub-filter1,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn3").click(function(){
        $(".sub-filter3").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn4").click(function(){
        $(".sub-filter4").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn5").click(function(){
        $(".sub-filter5").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn6").click(function(){
        $(".sub-filter6").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter7,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn7").click(function(){
        $(".sub-filter7").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter8,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn8").click(function(){
        $(".sub-filter8").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter9,.sub-filter10").slideUp();
    });
    $(".sub-btn9").click(function(){
        $(".sub-filter9").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter10").slideUp();
    });
    $(".sub-btn10").click(function(){
        $(".sub-filter10").slideToggle();
        $(".sub-filter1,.sub-filter2,.sub-filter3,.sub-filter4,.sub-filter5,.sub-filter6,.sub-filter7,.sub-filter8,.sub-filter9").slideUp();
    });

    $(".harga-btn").click(function(){
        $(".harga-filter").slideToggle();
        $(".merk-filter").slideUp();
        $(".ukuran-filter").slideUp();
        $(".warna-filter").slideUp();
    });

    $(".merk-btn").click(function(){
        $(".harga-filter").slideUp()
        $(".merk-filter").slideToggle();
        $(".ukuran-filter").slideUp();
        $(".warna-filter").slideUp();
    });

    $(".ukuran-btn").click(function(){
        $(".harga-filter").slideUp()
        $(".merk-filter").slideUp();
        $(".ukuran-filter").slideToggle();
        $(".warna-filter").slideUp();
    });

    $(".warna-btn").click(function(){
        $(".harga-filter").slideUp()
        $(".merk-filter").slideUp();
        $(".ukuran-filter").slideUp();
        $(".warna-filter").slideToggle();
    });

    $('.customer_logout').click(function(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        window.location.href = Bs + "trueaccon2194/info_type_user_log/logout_ad";
    });

    $(".batal-reg").click(function(e){
        e.preventDefault();
        $(".reg-form").fadeOut("fast");
        $(".bg-form").fadeOut("fast");
        $(".reg-form").fadeOut("fast");
        $(".body").css("overflow", "");
    });

    $(".daftar_for_order").click(function(){
        $(".form-log").fadeOut("fast");
        $(".bg-form").fadeIn("fast");
        $(".reg-form-order").fadeIn("fast");
        //$(".body").css("overflow", "hidden");
    }); 

     $(".batal-reg-order").click(function(e){
        e.preventDefault();
        $(".reg-form").fadeOut("fast");
        $(".bg-form").fadeOut("fast");
        $(".reg-form-order").fadeOut("fast");
        $(".body").css("overflow", "");
    });

    $(".close-bg-side").click(function(){
        $("#mySidenav").css("left", "-1000px");
        $("#filNavfil").css("left", "-1000px");
        $(".body").removeClass("side-body");
        $(".bg-nav-side").fadeOut("fast");
        $(".body").css("overflow", "");
    });

    $(".keranjang").click(function(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        window.location.href = Bs + "cart";
    });

    $(".select_ya_kat").click(function(){
        if($(".select_ya_kat select").val("1")){
            $("#parent").attr("disabled", "disabled");
        }else{
            $("#parent").attr("disabled", "");
        }
    });

    $(".lihat").click(function(){
            if($(this).is(":checked")){
                $(".passwordx").attr("type","text");     
            }else{
                $(".passwordx").attr("type","password");
            }
    });

    $(".focus").focus(function(){
        $(".for-search").fadeIn("fast");   
        $(".body").css("overflow", "hidden"); 
    });

    $(".for-search").click(function(){
        $(".reg-form-order").fadeOut("fast");
        $(".bg-form").fadeOut("fast");
        $(".reg-form").fadeOut("fast");
        $(".reg-form-order").fadeOut("fast");
        $(".search-bar-mobile").slideUp("fast");
        $('#suggestions').hide();
        $(".body").css("overflow", "");
    });

    $(".for-search-mobile").click(function(){
        $(".bg-form-white").fadeOut("fast");
        $(".bg-form").fadeOut("fast");
        $(".search-bar-mobile").slideUp("fast");
        $(".body").css("overflow", "");
    });
   
    $(".kembali").click(function(e){
    parent.history.back();
        return false;
    });

    $(".cari").click(function(){
        $(".search-respon").slideDown("fast");
    });

    $(".close-search").click(function(){
        $(".search-respon").slideUp("fast");
    });

    $(".chkid").blur(function(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');
        var psn = $(this).val();

        $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
                type : "POST",
                url  : Bs + "checkpsn",
                data : {pesanan:psn},
            success: function(log){ // Get the result and asign to each cases
                if(log == "200"){
                    $(".info-error").html("Nomor pesanan tidak ditemukan");
                }else if(log == "405"){
                    $(".info-error").html("Nomor pesanan sudah dikonfirmasi");
                }else{
                    $(".info-error").html("");
                }
            }
        });
    });

    $("#formOrder").submit(function(e){
        e.preventDefault();
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');
        var form111 = $(this).serialize();
            $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
                type : "POST",
                url  : Bs + "logFororder",
                data : form111 + "&fscurepro21=" + csrf,
            beforeSend: function(){
                $('.btn-log-order').html('Authentikasi...'); //Loading button text 
                $('.btn-log-order').prop('disabled', true);
            },
            success: function(log){ // Get the result and asign to each cases
                $('.btn-log-order').html('LOGIN'); //Loading button text 
                $('.btn-log-order').prop('disabled', false);
                if(log == "+8(98*&$2.,asdJT14(*621=_0"){
                    window.location.reload();
                }else if(log == ".Jgy&%761(825@1_+934<h;'" || log == ")72*h39Bvsk%52)&1->371"){
                    $(".emf").addClass('border-error');
                    $(".paf").addClass('border-error');
                    $(".info-order").html("Username atau password salah!").show();
                }
                }
                });
            return false;
    });

    $("#list_alamat").change(function(){
        var add = $(".alamat_list").val();
        if(add == "add_ad"){
            document.getElementById("list_alamat").setAttribute('name','list_alamat');
            $(".wrp_add").html('<label>Tambah Alamat Baru</label><br><input type="text" class="input-text " name="alamat" id="address" value="" autocomplete="address-line1">');
        }else{
            document.getElementById("list_alamat").setAttribute('name','alamat');
            $(".wrp_add").html('');
        }
    });

    $("#formlog_key_auth").submit(function(e){
        e.preventDefault();
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');
        var form111 = $(this).serialize();
            $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
                type : "POST",
                url  : Bs + "checkingvalidationuser",
                data : form111 + "&fscurepro21=" + csrf,
            beforeSend: function(){
                $('.btn-log-order').html('Authentikasi...'); //Loading button text 
                $('.btn-log-order').prop('disabled', true);
            },
            success: function(log){ // Get the result and asign to each cases
                $('.btn-log-order').html('LOGIN'); //Loading button text 
                $('.btn-log-order').prop('disabled', false);
                if(log == "KnstwywH736*628$3129%34@724"){
                    window.location.href = Bs +'customer';
                }else if(log == "Mshhu^627*7396#2727$#HkedbFk"){
                    $(".emf").addClass('border-error');
                    $(".paf").addClass('border-error');
                    $(".info-order").html("Username atau password salah!").show();
                }
                }
                });
            return false;
    });

    $(".reg-order").click(function(e){
        e.preventDefault();
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf    = Cookies.get('mfh83ujd7oo');
        var email   = $(".em").val();
        var nama    = $(".na").val();
        var telpon  = $(".no").val();
        var pass    = $(".pa").val();
        var gender  = $(".gen").val();
        var check   = $(".aggre").val();
        var data_reg = $("#uiGFgsd").serialize();

        if(nama == "" || nama == 0){
            $(".inf-n").html("*Nama tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(email == "" || email == 0){
            $(".inf-e").html("Email tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".em").addClass("border-error").focus();
            $(".na").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(telpon == "" || telpon == 0){
            $(".inf-t").html("*Nomor telepon tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(pass == "" || pass == 0){
            $(".inf-p").html("*Isi Password!").fadeIn().delay(3000).fadeOut();
            $(".pa").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".na").removeClass('border-error');
        }else if(!$("input[type='checkbox']:checked").length){
            $(".inf-aggre").html("*Anda harus setuju dengan syarat dan ketentuan pengguna.").fadeIn().delay(3000).fadeOut();
        }else{
            $.ajax({
                type    : "POST",
                url     : Bs + "checkuserorder",
                data    : data_reg + "&fscurepro21=" + csrf,
                beforeSend: function(){
                    $('.reg-order').prop('disabled', true);
                    $('.reg-order').html('Loading...');
                },
                success : function(verify){
                    if(verify == "Pu*(&(*5646234*^(%&^jasdLG"){
                        $(".inf-e").html("*Email sebelumnya telah terdaftar disistem kami.").fadeIn().delay(3000).fadeOut();
                        $(".em").addClass("border-error").focus();
                        $(".pa").removeClass('border-error');
                        $(".no").removeClass('border-error');
                        $(".na").removeClass('border-error');
                    }else if(verify == "Cus876^467Jkjh@$^%(_+"){
                       window.location.href = Bs +'checkout/verifyorder';
                    }else if(verify == "eX09&HJG7K%^Gksdjhk3)62" || verify == "In78*7nsdf*&523)(%$@"){
                        $(".info-warning").html("Silahkan periksa koneksi internet anda lalu coba lagi.")
                    }
                }
            });
        }
    });    
    
    $(".hapus_item").click(function(e){
        var m = $(this).attr("id");

        $.ajax({
            url  : 'action.php?take=hapusitem',
            type : 'GET',
            data : {id_orders_temp: m,},
            success : function(respon){
        $("#myModal").modal('show', {backdrop:'true'});
        $(".isi").html('<div align="center"><img src="img/load.gif" width="350"></div>'); //gambar loading
        $(".isi").load("load_cart.php"); //request halaman untuk melihat hasil     
        }
    });
    });

    $(".hapus_produk").click(function(e){
        var m = $(this).attr("id");

        $.ajax({
            url  : 'action.php?take=hapusitem',
            type : 'GET',
            data : {id_orders_temp: m,},
            success : function(respon){
            window.location.href = "checkout";
        }
    });
    });

    $(".ubah").click(function(){
   
    var id   = $(".id").val();
    var jml  = $(".qty").val();
    var form = $(".formupdate").serialize();

    $.ajax({
        type   : "POST",
        url    : "action.php?take=updatepro",
        data   : form,
        success : function(jadi){
            if(jadi==0){
                window.alert("stok tidak cukup");window.location=("checkout");
            }else if(jadi==1){
                window.location.href = "checkout";
            }
        }
        });
    });

    $(".refresh").click(function(){
        location.reload();
    });

    $(".transferBank").click(function(){
        $(".creditCard").css("background", "white");
    });

    $("#destination").change(function(){
        var x = $(".shipping_test");
        x.html("-");
        //x.remove(x.selectedIndex);
        //$(".ship").text("0");
        //var price = "0"; // pengiriman
        //var grand = $(".tyh").text(); // total
        //$(".fgrand").html(parseInt(grand) - parseInt(price));
    });

    $("#propinsi_tujuan").change(function(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');
        var x = $(".shipping_test");
        //x.remove(x.selectedIndex);
        x.html("-");

        var prop = $('#propinsi_tujuan').val();
        var expl = prop.split("|");
        var objek = expl[0];
        var na_prop = expl[1];

        $.ajax({
            url  : Bs + "pembayaran/pilihKota/"+objek,
            type : "POST",
            data : {fscurepro21: csrf},
            beforeSend : function(){
                $("#destination").html("<option value=''>Sedang memuat ...</option>");
            },
            success : function(obj){
                $('#destination').html(obj);
            }
        });
    });

    $("#arrow").click(function(){
        if($("#dt-pesanan-mb").is(":visible")){
            $("#dt-pesanan-mb").slideUp();
            $("#arr").removeClass("fa-angle-up");
            $("#arr").addClass("fa-angle-down");
        }else{
            $("#arr").removeClass("fa-angle-down");
            $("#arr").addClass("fa-angle-up");
            $("#dt-pesanan-mb").removeClass("hidden");
            $("#dt-pesanan-mb").slideDown();
        }
    });

    $("#transfer").click(function(){
        $(".pilBank").addClass('redmode');
    });

    $(".pg_ins_bt").click(function(){
        $(".ins_bt").removeClass("hidden");
        $(".ins_cc").addClass("hidden");
        $(".ins_other").addClass("hidden");
        $(".bankOpt").removeClass("hidden");
    });

    $(".pg_ins_cc").click(function(){
        $(".ins_cc").removeClass("hidden");
        $(".ins_bt").addClass("hidden");
        $(".ins_other").addClass("hidden");
        $(".bankOpt").addClass("hidden");
    });

    $(".pg_ins_oth").click(function(){
        $(".ins_other").removeClass("hidden");
        $(".ins_cc").addClass("hidden");
        $(".ins_bt").addClass("hidden");
        $(".bankOpt").addClass("hidden");
    });

    $(".fast-checkout").click(function(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');
        var j   =  $(".rowcount").val();
        var e = document.getElementById("get_sie");
        var stre = e.options[e.selectedIndex].value;
        var k   =  $("#get_m").val();
        var o   =  $("#get_sie").val();
        var p   =  $("#get_cl").val();
        if(j == 0 || j == ""){
            alert('Isi Jumlah pesanan dahulu dan pastikan ukuran yang anda pilih!');
        }else{
        
            $.ajax({
                url  : Bs + "check_fc",
                type : "POST",
                data : {fscurepro21: csrf, get_m:k, sie:o, col:p, qty:j},

                beforeSend : function(){
                    $(".bg-form-che").removeClass("hidden");
                    $(".add-to-cart").prop('disabled', true);
                },
                success : function(t){
                    $(".bg-form-che").addClass("hidden");
                    $(".add-to-cart").prop('disabled', false);
                    
                    if(t == "available_stok"){
                        $("#p_form_fc").modal('show');
                        $(".giesqy").val(j);
                        $(".giessz").val(stre);
                    }else{
                        alert("Pilih Qty yang lebih rendah");
                    }
                }
            });
        }
    });

    $(".showlogin").click(function(){
        $(".woocommerce-form-login").slideToggle();
    });
    
    $(".showcoupon").click(function(){
        $(".woocommerce-form-coupon").slideToggle();
    });

    $("#place_order").click(function(){
        var n = $("#name").val();
        var m = $("#mail").val();
        var t = $("#nomor").val();
        var p = $("#propinsi_tujuan").val();
        var c = $("#destination").val();
        var l = $("#address").val();
        var lx = $("#list_alamat").val();
        //var lxx = $("#billing_address_1").val();
        var k = $("input[name='courier']:checked").val();
        var j = $("input[name='checkshipping']:checked").val();
        var r = $("input[name='payment']:checked").val();
        if(n == ""){
            alert("Isi Nama anda");
        }else if(m == ""){
            alert("Isi email anda");
        }else if(t == ""){
            alert("Isi nomor telepon anda");
        }else if(p == ""){
            alert("Pilih provinsi anda");
        }else if(c == ""){
            alert("Pilih Kota anda");
        }else if(l == ""){
            alert("Isi Alamat anda");
        }else if(lx == ""){
            alert("Pilih Alamat / Isi Alamat baru");
        }else if(k == null){
            alert("Harap pilih expedisi");
        }else if(j == null){
            alert("Harap pilih jenis pengiriman");
        }else if(r == null){
            alert("Harap pilih jenis pembayaran");
        }else{
            $.ajax({
                beforeSend : function(){
                    $(".bg-form-che").removeClass("hidden");
                },
                success : function(t){
                    $(".info-error").text("");
                    $(".info-success").text("");
                    $(".ip").removeClass("bld-nav-checkout");
                    $(".pg").removeClass("bld-nav-checkout");
                    $(".pm").addClass("bld-nav-checkout");
                    $(".frm-2").addClass("hidden");
                    $(".frm-3").removeClass("hidden");
                    $(".bg-form-che").addClass("hidden");
                }
            });
        }        
    });

$('.pay-button').click(function (event) {
    event.preventDefault();
    //var bs = window.location.href.match(/^.*\//);
    //var payment_form = $("#payment-form").serialize();
    var idn = $(".ex_rand").val();
    var nm = $("#name").val();
    var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;
    var ml = $("#mail").val();
    var tl = $("#nomor").val();
    var pt = $("#propinsi_tujuan").val();
    var dn = $("#destination").val();
    var alm = $("#alm").val();
    var kdp = $("#kodepos").val();
    var lw = $("#lock_w").val();
    var lt = $(".lock_t").val();
    //var cr = $(".courier:checked").val();
    var shp = $("input[name='checkshipping']:checked").val();
    //var shp = $('#shipping').val();
    var pym = $(".payment").val();

    if(nm == ""){
        alert("Isi Nama lengkap anda");
    }else if(ml == ""){
        alert("Isi Email anda");
    }else if(!ml.match(reEmail)) {
        alert('Isi Email Dengan Benar');
        return false;
    }else if(tl == ""){
        alert("Isi Nomor Telpon anda");
    //}else if(pt == ""){
    //    alert("Pilih Provinsi anda");
    }else if(lw == "" || lt ==""){
        window.location.reload();
    //}else if(dn == ""){
    //    alert("Pilih Kota anda");
    }else if(document.getElementById("alm").value == ""){
        alert("Isi Alamat anda");
    //}else if(shp == undefined || shp == null){
    //    alert("Pilih Pengiriman");
    //}else if(shp == ""){
        //alert("Pilih Jenis Paket Pengiriman");
    }else if(!$("input[type='checkbox']:checked").length){
        alert("Anda harus setuju dengan syarat dan ketentuan pelanggan.");
    }else{

        $.ajax({ 
            url: Bs + 'connect_payment',
            type : "POST",
            cache: false,
            data : {fscurepro21: csrf, ex__randVer: idn, nm_customer: nm, ml_customer: ml, tl_customer: tl, alamat: alm, kdp_customer: kdp},
            //data : {fscurepro21: csrf, ex__randVer: idn, nm_customer: nm, ml_customer: ml, tl_customer: tl, propinsi_tujuan: pt, kota: dn, alamat: alm, kdp_customer: kdp, checkshipping: shp},
            success: function(data){

                if(data == "order_not_complete"){
                    alert("Isi Form Yang Masih Kosong");
                }else if(data == "order_error"){
                    alert("URL tidak sah, ulangi kembali");
                    window.location.reload();
                }else if(data == "kupon_already_use"){
                    alert("Kupon sudah digunakan");
                    window.location.href = Bs + "cart";
                }else{
                    //$(this).attr("disabled", "disabled");

                    snap.pay(data,{
                        
                        onSuccess: function(result){
                            //$("#trsc-id").val(result.transaction_id+"|"+result.status_code+"|"+result.payment_type);
                            $("#data-type").val(JSON.stringify(result));
                            //console.log(result).die();
                            $("#payment-form").submit();
                        },
                        onPending: function(result){
                            //$("#trsc-id").val(result.transaction_id+"|"+result.status_code+"|"+result.payment_type);
                            $("#data-type").val(JSON.stringify(result));
                            //console.log(result.status_code).die();
                            $("#payment-form").submit();
                            //alert(result.status_message);
                        },
                        onError: function(result){
                            //alert(result.status_message);
                            //console.log(result).die();
                            //alert(result.status_message);
                            alert("Ada kendala teknis, halaman direfresh ulang.");
                            window.location.reload();
                        },
                        onClose: function(){
                            alert("Anda menutup portal pembayaran");
                        }
                        
                    });
                }
            }
        });
    }
  });

$('.pay_other').click(function (event) {
    event.preventDefault();
    //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    var nm = $(".nm").val();
    var ml = $(".ml").val();
    var tl = $(".tl").val();
    var pt = $("#propinsi_tujuan").val();
    var lw = $("#lock_w").val();
    var lt = $(".lock_t").val();
    var dn = $("#destination").val();
    var alm = $(".alm").val();
    //var cr = $(".courier:checked").val();
    var shp = $("input[name='checkshipping']:checked").val();
    //var shp = $('#shipping').val();
    var pym = $(".payment").val();
    var payment_form = $("#payment-form").serialize();

    if(nm == ""){
        alert("Isi Nama lengkap anda");
    }else if(ml == ""){
        alert("Isi Email anda");
    }else if(tl == ""){
        alert("Isi Nomor Telpon anda");
    }else if(pt == ""){
        alert("Pilih Provinsi anda");
    }else if(lw == "" || lt ==""){
        window.location.reload();
    }else if(dn == ""){
        alert("Pilih Kota anda");
    }else if(alm == ""){
        alert("Isi Alamat anda");
    }else if(shp == undefined || shp == null){
        alert("Pilih Expedisi");
    //}else if(shp == ""){
        //alert("Pilih Jenis Paket Pengiriman");
    }else if(!$("input[type='checkbox']:checked").length){
        alert("Anda harus setuju dengan syarat dan ketentuan pelanggan.");
    }else{

        $.ajax({
          url  : Bs + 'snap/token',
          type : "POST",
          cache: false,
          data : payment_form + "&fscurepro21=" + csrf,

          beforeSend: function(){
            $(".pay_other").text('Sedang diproses...');
            $(".process-btn").prop('disabled', true);
          },
          success: function(data) {
            //location = data;

            console.log('token = '+data);
            
            var resultType = document.getElementById('result-type');
            var resultData = document.getElementById('result-data');

            function changeResult(type,data){
              $("#result-type").val(type);
              $("#result-data").val(JSON.stringify(data));
              //resultType.innerHTML = type;
              //resultData.innerHTML = JSON.stringify(data);
            }

            snap.pay(data, {
              
              onSuccess: function(result){
                changeResult('success', result);
                //console.log(result.status_message);
                //console.log(result);
                $("#payment-form").submit();
                //window.location.reload();
              },
              onPending: function(result){
                changeResult('pending', result);
                //console.log(result.status_message);
                $("#payment-form").submit();
                //window.location.reload();
              },
              onError: function(result){
                changeResult('error', result);
                //console.log(result.status_message);
                $("#payment-form").submit();
                //window.location.reload();
              }
            });
          }
        });
    }
  });



$('.pay_other').click(function (event) {
    event.preventDefault();
    //Veritrans.url = "https://api.sandbox.verifytrans.co.id/v2/token";
    // TODO: Change with your client key.
    //Veritrans.client_key = "SB-Mid-client-6FBVOVGVMZ_joHCA";
    //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    var nm = $(".nm").val();
    var ml = $(".ml").val();
    var tl = $(".tl").val();
    var pt = $("#propinsi_tujuan").val();
    var lw = $("#lock_w").val();
    var lt = $(".lock_t").val();
    var dn = $("#destination").val();
    var alm = $(".alm").val();
    //var cr = $(".courier:checked").val();
    var shp = $("input[name='checkshipping']:checked").val();
    //var shp = $('#shipping').val();
    var pym = $(".payment").val();
    var payment_form = $("#payment-form").serialize();

    if(nm == ""){
        alert("Isi Nama lengkap anda");
    }else if(ml == ""){
        alert("Isi Email anda");
    }else if(tl == ""){
        alert("Isi Nomor Telpon anda");
    }else if(pt == ""){
        alert("Pilih Provinsi anda");
    }else if(lw == "" || lt ==""){
        window.location.reload();
    }else if(dn == ""){
        alert("Pilih Kota anda");
    }else if(alm == ""){
        alert("Isi Alamat anda");
    }else if(shp == undefined || shp == null){
        alert("Pilih Expedisi");
    //}else if(shp == ""){
        //alert("Pilih Jenis Paket Pengiriman");
    }else if(!$("input[type='checkbox']:checked").length){
        alert("Anda harus setuju dengan syarat dan ketentuan pelanggan.");
    }else{

        $.ajax({
          url  : Bs + 'snap/token',
          type : "POST",
          cache: false,
          data : payment_form + "&fscurepro21=" + csrf,
          beforeSend: function(){
            $(".pay_other").text('Sedang diproses...');
            $(".process-btn").prop('disabled', true);
          },
          success: function(data) {        

            //$("#iv-type").val(inv);

            console.log('token = '+data);
            
            var resultType = document.getElementById('result-type');
            var resultData = document.getElementById('result-data');

            function changeResult(type,data){
              $("#result-type").val(type);
              $("#result-data").val(JSON.stringify(data));
              //resultType.innerHTML = type;
              //resultData.innerHTML = JSON.stringify(data);
            }

            snap.pay(data, {
              
              onSuccess: function(result){
                changeResult('success', result);
                console.log(result.status_message);
                console.log(result);
                $.ajax({ 
                    type : "POST",
                    url  : Bs + "checkout/confirm_order",
                    data : payment_form + "&fscurepro21=" + csrf,
                    beforeSend: function(){
                        $(".pay_other").hide();
                        $("#place_order").attr('disabled','disabled').val('Sedang diproses...');
                    },
                    success: function(log){ // Get the result and asign to each cases
                        $(".pay_other").hide();
                        $("#place_order").val("Konfirmasi Pesanan");
                        window.location.href = Bs +'checkout/success';
                    }
                });
              },
              onPending: function(result){
                changeResult('pending', result);
                console.log(result.status_message);
                //$("#payment-form").submit();
                $.ajax({ 
                    type : "POST",
                    url  : Bs + "checkout/confirm_order",
                    data : payment_form + "&fscurepro21=" + csrf,
                    beforeSend: function(){
                        $(".pay_other").hide();
                        $("#place_order").attr('disabled','disabled').val('Sedang diproses...');
                    },
                    success: function(log){ // Get the result and asign to each cases
                        $(".pay_other").hide();
                        $("#place_order").val("Konfirmasi Pesanan");
                        window.location.href = Bs +'checkout/success';
                    }
                });
              },
              onError: function(result){
                changeResult('error', result);
                console.log(result.status_message);
                //$("#payment-form").submit();
                $.ajax({ 
                    type : "POST",
                    url  : Bs + "checkout/confirm_order",
                    data : payment_form + "&fscurepro21=" + csrf,
                    beforeSend: function(){
                        $(this).show();
                        $("#place_order").attr('disabled','disabled').val('Sedang diproses...');
                    },
                    success: function(log){ // Get the result and asign to each cases
                        $(this).hide();
                        $("#place_order").val("Konfirmasi Pesanan");
                        window.location.href = Bs +'checkout/success';
                    }
                });
              }
            });
          }
        });
    }
  });

});

function dragStarted(e) {
source = e.target;
  e.dataTransfer.setData("text/plain", e.target.innerHTML);
  e.dataTransfer.effectAllowed = "move";
}

function draggingOver(e) {
  e.preventDefault();
  e.dataTransfer.dropEffect = "move";
}

function dropped(e) {
  e.preventDefault();
  e.stopPropagation();
  source.innerHTML = e.target.innerHTML;
  e.target.innerHTML = e.dataTransfer.getData("text/plain");
}

function validateEmail(a) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(a);
}

function toShip(){
    var a = $("#mail").val();
    var b = $("#name").val();
    var c = $("#address").val();
    var d = $("#propinsi_tujuan").val();
    var e = $("#destination").val();
    var f = $("#kodepos").val();
    var g = $("#nomor").val();

    if(a == ""){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#mail").addClass("fcserror");
        $(".info-error").text("Harap isi email anda");
    }else if(b == ""){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#name").addClass("fcserror");
        $(".info-error").text("Harap isi nama lengkap anda");
    }else if(c == ""){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#address").addClass("fcserror");
        $(".info-error").text("Harap isi alamat lengkap anda");
    }else if(d == "" || d == null){
        $("input").removeClass("fcserror")        
        $("#destination").removeClass("fcserror");
        $("#propinsi_tujuan").addClass("fcserror");
        $(".info-error").text("Harap isi provinsi tempat anda");
    }else if(e == "" || d == null){
        $("input").removeClass("fcserror")        
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").addClass("fcserror");
        $(".info-error").text("Harap isi kota anda");
    }else if(f == ""){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#kodepos").addClass("fcserror");
        $(".info-error").text("Harap isi kode pos alamat anda");
    }else if(g == ""){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#nomor").addClass("fcserror");
        $(".info-error").text("Harap isi nomor telepon");
    }else if(!validateEmail(a)){
        $("input").removeClass("fcserror");
        $("#propinsi_tujuan").removeClass("fcserror");
        $("#destination").removeClass("fcserror");
        $("#mail").addClass("fcserror");
        $(".info-error").text("Harap isi email yang valid");
    }else{
        $.ajax({
            beforeSend : function(){
                $(".bg-form-che").removeClass("hidden");
            },
            success : function(t){
                $(".info-error").text("");
                $(".info-success").text("");
                $(".ip").removeClass("bld-nav-checkout");
                $(".pg").addClass("bld-nav-checkout");
                $(".pm").removeClass("bld-nav-checkout");
                $(".frm-1").addClass("hidden");
                $(".frm-2").removeClass("hidden");
                $(".bg-form-che").addClass("hidden");
            }
        });
    }
}

function backInfo(){
    $.ajax({
        beforeSend : function(){
            $(".bg-form-che").removeClass("hidden");
        },
        success : function(t){
            $(".info-error").text("");
            $(".info-success").text("");
            $(".ip").addClass("bld-nav-checkout");
            $(".pg").removeClass("bld-nav-checkout");
            $(".pm").removeClass("bld-nav-checkout");
            $(".frm-2").addClass("hidden");
            $(".frm-1").removeClass("hidden");
            $(".bg-form-che").addClass("hidden");
        }
    });
}

function toPayment(){
    var k = $("input[name='courier']:checked").val();
    var j = $("input[name='checkshipping']:checked").val();
    if(k == "" || k == null){
        $(".info-error").text("Harap pilih expedisi");
    }else if(j == "" || j == null){
        $(".info-error").text("Harap pilih jenis pengiriman");
    }else{
        $.ajax({
            beforeSend : function(){
                $(".bg-form-che").removeClass("hidden");
            },
            success : function(t){
                $(".info-error").text("");
                $(".info-success").text("");
                $(".ip").removeClass("bld-nav-checkout");
                $(".pg").removeClass("bld-nav-checkout");
                $(".pm").addClass("bld-nav-checkout");
                $(".frm-2").addClass("hidden");
                $(".frm-3").removeClass("hidden");
                $(".bg-form-che").addClass("hidden");
            }
        });
    }
}

function backShip(){
    $.ajax({
        beforeSend : function(){
            $(".bg-form-che").removeClass("hidden");
        },
        success : function(t){
            $(".info-error").text("");
            $(".info-success").text("");
            $(".ip").removeClass("bld-nav-checkout");
            $(".pg").addClass("bld-nav-checkout");
            $(".pm").removeClass("bld-nav-checkout");
            $(".frm-3").addClass("hidden");
            $(".frm-2").removeClass("hidden");
            $(".bg-form-che").addClass("hidden");
        }
    });
}

function one_logic_key(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf = Cookies.get('mfh83ujd7oo');

        var j   =  $(".rowcount").val();
        var k   =  $("#get_m").val();
        var i   =  $("#get_gm").val();
        var a   =  $("#get_pd_n").val(); 
        var c   =  $("#gsg").val();
        var d   =  $("#atl").val();
        var e   =  $("#get_mr").val();
        var h   =  $("#get_pt").val();
        var r   =  $("#get_dk").val();
        var s   =  $("#get_bt").val(); 
        var n   =  $("#get_at").val();
        var m   =  $("#get_be").val();
        var o   =  $("#get_sz").val(); //document.querySelector('.get_sie:checked').value;
        var p   =  $('#get_cl').val();  

        if(j == "" || j == 0 || j <= 0){
            alert("Masukkan Jumlah");
        }else if(o == ""){
            alert("Pilih Ukuran");
        }else{
            $.ajax({
                url  : Bs + "checking_resource",
                type : "POST",
                data : {fscurepro21: csrf, get_m:k, get_gm:i, get_pd_n:a, gsg:c, atl:d, get_mr:e, get_pt:h, get_dk:r, get_bt:s, get_at:n, get_be:m,get_at:n, sie:o, col:p, qty:j},

                beforeSend : function(){
                    $(".bg-form-che").removeClass("hidden");
                    $(".add-to-cart").prop('disabled', true);
                },
                success : function(t){
                    $(".bg-form-che").addClass("hidden");
                    $(".add-to-cart").prop('disabled', false);
                    if(t == "ghysqw"){
                        alert("Pilih ukuran!");
                    }else if(t == "stok1"){
                        window.location.href = Bs + 'cart';
                    }else if(t == "stok0"){
                        alert("Stok tidak cukup");
                    }
                }
            });
        }
}

function reset_options() {
    document.getElementById('get_sie').options.length = 0;
    return true;
}
function searchForm(){
    $(".search-form").toggleClass("showhidesearch");
}
function openNavhome(){
        $("#mySidenav").css("left", "0");
        $(".mt-side-custom").addClass("active");
        $(".body").css("overflow", "hidden");
   
    }
function closeNavhome(){
        $("#mySidenav").css("left", "-1000px");
        $(".mt-side-custom").removeClass("active");
    }
function openNav(){
        $("#mySidenav").css("left", "0");
        $(".bg-nav-side").fadeIn("fast");
        $(".body").css("overflow", "hidden");
   
    }
function closeNav(){
        $("#mySidenav").css("left", "-1000px");
        $(".bg-nav-side").fadeOut("fast");
    }
function filNav(){
        $("#filNavfil").slideToggle('fast');
        //$("#filNavfil").css("left", "0");
        //$(".bg-nav-side").fadeIn("fast");
    }
function closefilNav(){
        $("#filNavfil").slideUp('fast');
        //$("#filNavfil").css("left", "-1000px");
        //$(".bg-nav-side").fadeOut("fast");
    }


function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function finishOrder(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var addr = $("#addrKey").val();
    var note = $("#not_ad").val();
    var prov = $(".propKey").val();
        var expl = prov.split("|");
        var objek = expl[0];
        var na_prop = expl[1];
    var cit = $(".citKey").val();
        var explo = cit.split("|");
        var objeki = explo[0];
        var na_cit = explo[1];

    var wei = $("#lock_w").val();
    //var in_f_s = $("#val_f_s").val();
    var ex = $("input[name='courier']:checked").val();
    var exresul = $("input[name='checkshipping']:checked").val();
    var mePay = $("input[name='payment']:checked").val();
    var bnkifyes = $("input[name='bnk']:checked").val();
    var gTotat = $(".otqxx").val();
    var g = $(".gex").val();
    var csrf = Cookies.get('mfh83ujd7oo');
        $.ajax({
        url  : Bs +"first_log_o_der",
        type : "GET",
        datatype:"JSON",
        data : {fscurepro21: csrf, gex: g, almt: addr, notee: note, prov: na_prop, city: na_cit, w: wei, exp: ex, resex: exresul, pay: mePay, bnk: bnkifyes, grt: gTotat},
        beforeSend: function(){
            $(".bg-form-che").removeClass("hidden");
        },
        success: function (sndOrder){
            $(".bg-form-che").addClass("hidden");
            if(sndOrder == "862_Bgtso"){
                $(".alam_in").html("Alamat tidak boleh kosong!");
                $(".ex_in").html("");
                $(".prop_in").html("");
                $(".city_in").html("");
                $(".resex_in").html("");
                $(".pay_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $("#addrKey").addClass("border-error");
                $(".propKey").removeClass("border-error");
                $(".citKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "*63hd82bJs"){
                $(".prop_in").html("Pilih Provinsi anda!");
                $(".alam_in").html("");
                $(".ex_in").html("");
                $(".city_in").html("");
                $(".resex_in").html("");
                $(".pay_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $("#propKey").addClass("border-error");
                $("#addrKey").removeClass("border-error");
                $(".citKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "Khd63Njqno"){
                $(".city_in").html("Pilih kota anda!");
                $(".alam_in").html("");
                $(".ex_in").html("");
                $(".prop_in").html("");
                $(".resex_in").html("");
                $(".pay_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $(".citKey").addClass("border-error");
                $("#addrKey").removeClass("border-error");
                $("#propKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "P826*551_nsgs"){
                $(".ex_in").html("Pilih Expedisi!");
                $(".alam_in").html("");
                $(".resex_in").html("");
                $(".prop_in").html("");
                $(".city_in").html("");
                $(".pay_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $(".citKey").removeClass("border-error");
                $("#addrKey").removeClass("border-error");
                $("#propKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "(725bskBfePjY"){
                $(".resex_in").html("Pilih Expedisi!");
                $(".alam_in").html("");
                $(".ex_in").html("");
                $(".prop_in").html("");
                $(".city_in").html("");
                $(".pay_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $(".citKey").removeClass("border-error");
                $("#addrKey").removeClass("border-error");
                $("#propKey").removeClass("border-error");
                $(".tb_result").addClass("border-error");
            }else if(sndOrder == "92*2Jdr5*35"){
                $(".pay_in").html("Pilih Metode Pembayaran!");
                $(".alam_in").html("");
                $(".ex_in").html("");
                $(".prop_in").html("");
                $(".city_in").html("");
                $(".resex_in").html("");
                $(".bnk_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $(".citKey").removeClass("border-error");
                $("#addrKey").removeClass("border-error");
                $("#propKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "Lnswg&g2390"){
                $(".bnk_in").html("Pilih Bank!");
                $(".alam_in").html("");
                $(".ex_in").html("");
                $(".prop_in").html("");
                $(".city_in").html("");
                $(".resex_in").html("");
                $(".pay_in").html("");
                $(".pushp").html("Lengkapi Form diatas!");
                $(".citKey").removeClass("border-error");
                $("#addrKey").removeClass("border-error");
                $("#propKey").removeClass("border-error");
                $(".tb_result").removeClass("border-error");
            }else if(sndOrder == "S5ihs7Hdf52lpP"){
                window.location.href = Bs + 'pesananselesai';
            }else if(sndOrder == "commingsoon"){
                alert("Mohon maaf, fitur kartu kredit belum bisa digunakan");
            }
        }
        });   
}

function slKoment(){
    $(".df_komen").fadeOut();
    $(".rev-btn").fadeOut();
    $(".komentar").delay(500).slideToggle();
}

function can_rev(){
    $(".komentar").slideToggle();   
    $(".rev-btn").fadeIn();
    $(".df_komen").fadeIn();
}

function berlangganan(){
    var csrf = Cookies.get('mfh83ujd7oo');
    var my   = $("#email").val();
    var ts   = $("#session_token").val();
    //var bs = window.location.href.match(/^.*\//);
    if(my == "" || my == 0){
        alert("Isi email terlebih dahulu");
    }else{
        $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
            type : "POST",
            url  : Bs + "berlangganan",
            data : {fscurepro21: csrf, in: my, td:ts},
            beforeSend: function(){
                $(this).html('Loading...'); //Loading button text 
                $(this).prop('disabled', true);
            },
            success: function(log){ // Get the result and asign to each cases
                $(this).html('<i class="glyphicon glyphicon-envelope"></i>'); //Loading button text 
                $(this).prop('disabled', false);
                if(log == "23749"){
                    alert("Isi Email / Nomor Whatsapp");
                }else if(log == true){
                    alert("Terima Kasih Telah Berlangganan Promo Dari Kami.");
                }else if(log == "alreadydatamail"){
                    alert("Email telah terdaftar, gunakan email lain.");
                }else if(log == "alreadydatatelp"){
                    alert("Nomor telah terdaftar, gunakan nomor lain.");
                }else if(log == "noformattelp"){
                    alert("Masukkan nomor telepon contoh : 081xxxx");
                }
            }
        });
    }
}

function closepopup(){
    $(".promopopup").fadeOut();
    $(".promopopupbanner").fadeOut();
    $(".notifutama").removeClass("active");
}

function logic_war_mask_key(){
        var csrf = Cookies.get('mfh83ujd7oo');
        var ekey   = $(".emlog").val();
        var psky    = $(".palog").val();
        var lregins  = $(".lreg").val();
        var e       = document.getElementById("chooseWant");
        var want    = e.options[e.selectedIndex].value;
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        if(ekey == "" || ekey == 0){
            $(".uinlogKey").html("Email tidak boleh kosong");
            $(".emlog").addClass("border-error").focus();
            $(".palog").removeClass("border-error").focus();
        }else if(psky == "" || psky == 0){
            $(".uinlogKey").html("Password tidak boleh kosong");
            $(".emlog").removeClass("border-error").focus();
            $(".palog").addClass("border-error").focus();
        }else if(want == "" || want == null){
            alert('Anda Belum Memilih Paket Apa Yang Anda Inginkan');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
            $(".no").removeClass("border-error");
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").addClass('border-error').focus();
            $(".firstForm").show();
            $(".registerForm").hide();
            $(".loginForm").hide();
            return false;
        }else{
            $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
                type : "POST",
                url  : Bs + "log_acc_us",
                data : {fscurepro21: csrf, in: lregins, em: ekey, ps: psky,want: want},
                beforeSend: function(){
                    $('.btn-log-header').html('Authentikasi...'); //Loading button text 
                    $('.btn-log-header').prop('disabled', true);
                },
                success: function(log){ // Get the result and asign to each cases
                    $('.btn-log-header').html('LOGIN'); //Loading button text 
                    $('.btn-log-header').prop('disabled', false);
                    if(log.respon == "ActcivjsOauthLogseCre"){
                        window.location.href = Bs +'activation_class_user';
                    }else if(log.respon == "200"){
                        alert('Isi Form Dengan Benar');
                        //$(".em").addClass('border-error');
                        //$(".uinlogKey").html("Isi Email dengan benar.").fadeToggle().delay(3000).fadeToggle();
                    }else if(log.respon == "+8(98*&2.,asdJT14(*621=_0"){
                        if(log.url == 0){
                            window.location.href = "https://wa.me/6285967174008?text=Saya%20ingin%20menanyakan%20...";
                        }else{
                            window.location.href = Bs+'sub-category/'+log.url;
                        }
                    }else if(log.respon == ")72*h39Bvsk%52)&1->371)(63467"){
                        $(".em").addClass('border-error');
                        $(".pa").addClass('border-error');
                        $(".uinlogKey").html("Username atau password salah!").fadeToggle().delay(3000).fadeToggle();
                    }else if(log.respon == "Nu627542(*52h@$?'S[;K"){
                        $(".uinlogKey").html("Akun anda kami non aktifkan, Hubungi kami sekarang.").fadeToggle().delay(3000).fadeToggle();
                    }else if(log.respon == "otpsendfailed"){
                        alert("Kode OTP gagal dikirim, periksa jaringan anda.");
                    }
                }
            });
        }
}

function seeP(){
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        $(".steye").removeClass('glyphicon-eye-open');
        $(".steye").addClass('glyphicon-eye-close');
    } else {
        x.type = "password";
        $(".steye").removeClass('glyphicon-eye-close');
        $(".steye").addClass('glyphicon-eye-open');
    }
}

function verifyOTP(){
    var csrf = Cookies.get('mfh83ujd7oo');
    var otp = $("#otp").val();
    $.ajax({ 
        type : "POST",
        url  : Bs + "verifyOTP",
        data : {fscurepro21: csrf,otp:otp},
        beforeSend: function(){
            $('#btn-otp-verify').html('Memverifikasi...'); 
        },
        success: function(log){ // Get the result and asign to each cases
            $('#btn-otp-verify').html('Verifikasi'); 
            if(log.respon == "200"){
                alert("Harap Isi OTP Terlebih Dahulu");
            }else if(log.respon == "800"){
                alert("OTP tidak cocok, harap klik kirim ulang");
            }else{
                alert("OTP Sukses");
                if(log.url == 0){
                    window.location.href = "https://wa.me/6285967174008?text=Saya%20ingin%20menanyakan%20...";
                }else{
                    window.location.href = Bs+'sub-category/'+log.url;
                }
            }
        }
    });
}

function resetotp(){
    var csrf = Cookies.get('mfh83ujd7oo');
    $.ajax({ 
        type : "POST",
        url  : Bs + "resetOTP",
        data : {fscurepro21: csrf},
        beforeSend: function(){
            $('.resetotp').html('Mengirim OTP...'); 
        },
        success: function(log){ // Get the result and asign to each cases
            alert("OTP Sukses dikirim");
            window.location.href = Bs +'activation_class_user';
        }
    });
}
 
function newRegister(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var number  =/^[0-9]+$/;
        var csrf    = Cookies.get('mfh83ujd7oo');
        var e       = document.getElementById("chooseWant");
        var want    = e.options[e.selectedIndex].value;
        var a       = $(".em").val();
        var nama    = $(".na").val();
        var alamat  = $(".add").val();
        var sosmed  = $(".instagram").val();
        var telpon  = $("#notelp").val();
        var telponangkaawal = telpon.substr(0,1);
        var pass    = $(".pa").val();
        var gender  = $(".gen").val(); 
        var cos     = $(".cosreg").val();
        var check   = $(".aggre").val();        

        if(nama == "" || nama == 0){
            alert('Nama tidak boleh kosong');
            //$(".inf-n").html("*Nama tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
        }else if(a == "" || a == 0){
            alert('Email tidak boleh kosong');
            //$(".inf-e").html("Email tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".em").addClass("border-error").focus();
            $(".na").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
         }else if(!validateEmail(a)){
            alert('Isi Email dengan benar');
            //$(".inf-e").html("Isi Email dengan benar.").fadeIn().delay(3000).fadeOut();
            $(".em").addClass("border-error").focus();
            $(".na").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
         }else if(pass == "" || pass == 0){
            alert('Password tidak boleh kosong');
            //$(".inf-p").html("*Password tidak boleh kosong").fadeIn().delay(3000).fadeOut();
            $(".pa").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
        }else if(telpon == "" || telpon == 0){
            alert('Nomor telepon tidak boleh kosong');
            //$(".inf-t").html("*Nomor telepon tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
        }else if(!telpon.match(number)){
            alert('Nomor telepon harus angka');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
        }else if(telponangkaawal != 8){
            alert('Nomor Salah, isi tanpa angka 0 di awal nomor.');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").removeClass('border-error');
            return false;
        }else if(!$("input[type='checkbox']:checked").length){
            $(".inf-aggre").html("*Anda harus setuju dengan syarat dan ketentuan pengguna.").fadeIn().delay(3000).fadeOut();
            return false;
        }else if(want == "" || want == null){
            alert('Anda Belum Memilih Paket Apa Yang Anda Inginkan');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
            $(".no").removeClass("border-error");
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
            $(".add").removeClass('border-error');
            $(".instagram").removeClass('border-error');
            $("#chooseWant").addClass('border-error').focus();
            $(".firstForm").show();
            $(".registerForm").hide();
            $(".loginForm").hide();
            return false;
        //}else if(sosmed == "" || sosmed == null){
        //    alert('Anda Belum Mengisi Kolom Instagram');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
        //    $(".no").removeClass("border-error");
        //    $(".em").removeClass('border-error');
        //    $(".na").removeClass('border-error');
        //    $(".pa").removeClass('border-error');
        //    $(".add").removeClass('border-error');
        //    $(".instagram").addClass('border-error').focus();
        //    $("#chooseWant").removesClass('border-error');
        //    return false;
        //}else if(alamat == "" || alamat == null){
        //    alert('Anda Belum Mengisi Kolom Alamat');
            //$(".inf-t").html("*Nomor telepon harus angka.").fadeIn().delay(3000).fadeOut();
        //    $(".no").removeClass("border-error");
        //    $(".em").removeClass('border-error');
        //    $(".na").removeClass('border-error');
        //    $(".pa").removeClass('border-error');
        //    $(".add").addClass('border-error').focus();
        //    $(".instagram").removeClass('border-error');
        //    $("#chooseWant").removeClass('border-error');
        //    return false;
        }else{
            $.ajax({
                url     : Bs + "regnewPagecs",
                type    : "POST",
                data : {fscurepro21: csrf, cosreg: cos, em: a, na: nama, tel: telpon, pas: pass, want:want},
                //data : {fscurepro21: csrf, cosreg: cos, em: a, na: nama, tel: telpon, pas: pass, gen: gender, alamat:alamat, sosmed:sosmed, want:want},
                beforeSend: function(){
                    $('.reg-new').prop('disabled', true);
                    $('.reg-new').html('Loading...');
                },
                success : function(verify){ 
                    $('.reg-new').prop('disabled', false);
                    $('.reg-new').html('Daftar');
                    if(verify == "Pu*(&(*5646234*^(%&^jasdLG"){
                        $(".inf-e").html("*Email sebelumnya telah terdaftar disistem kami.").fadeIn().delay(3000).fadeOut();
                        $(".em").addClass("border-error").focus();
                        $(".pa").removeClass('border-error');
                        $(".no").removeClass('border-error');
                        $(".na").removeClass('border-error');
                    }else if(verify == "Khs8gueo28^bsjLGs^2#417(&$"){
                        alert('Email Telah Terdaftar, Klik silahkan login');
                        //$('.info-warning').html("Email Telah Terdaftar");
                        //$(".em").addClass("border-error").focus();
                        $(".firstForm").hide();
                        $(".registerForm").hide();
                        $(".loginForm").show();
                    }else if(verify == "numbernotvalid"){
                        alert('Nomor telpon salah');
                        $(".no").addClass("border-error").focus();
                    }else if(verify == "numberAlready"){
                        alert('Nomor telpon sudah terdaftar, Klik silahkan Login'); 
                        //$(".no").addClass("border-error").focus();
                        $(".firstForm").hide();
                        $(".registerForm").hide();
                        $(".loginForm").show();
                    }else if(verify == "Akch63%$#122%*)__16"){
                       window.location.href = Bs +'activation_class_user';
                    }else if(verify == "eX09&HJG7K%^Gksdjhk3)62"){
                        $(".info-warning").html("Silahkan periksa koneksi internet anda lalu coba lagi.")
                    }else if(verify == "Jhsh82825(74(7242&8$#$%@_(&"){
                        window.location.href = Bs;
                    }
                }
            });
        }
    }

function edit_data(cs){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var ind = $(cs).attr('data-cs');
      $.ajax({
        url : Bs + "user/edit_customer/?cst="+ind,
        type: "GET",
        dataType: "JSON",
        success: function(js)
        {
//            var responsedata = $.parseJSON(js);
            alert(js);
            //$('#nacs').val(cus.row);
            //$('#ecs').val(dcs.email);
            //$('#tcs').val(dcs.telp);
            //$('#gcs').val(dcs.gb_user);
            //$('#m_cs').show(); // show bootstrap modal when complete loaded
        },
        //error: function (jqXHR, textStatus, errorThrown)
        //{
        //    alert('Error get data from ajax');
        //}
    });
}
function get_courier(act){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var c = $('#propinsi_tujuan').val();
    var x = $('#destination').val();
    var y = $('#lock_w').val();
    var qt = $('.lock_t').val();
    var z = $('input[name=courier].courier:checked').val();
    var csrf = Cookies.get('mfh83ujd7oo');
    //$(".body").css("overflow", "hidden");
    $(".load-ship").show();
    if(c == null){
        alert("Pilih Provinsi anda!");
    }else if(x == null){
        alert("Pilih Kota anda");
    }else{

        $.ajax({
        url  : Bs + "checkout/hasilFilter",
        type : "GET",
        data : {fscurepro21: csrf, destination: x, lock_w: y, courier: z, qt: qt},
            beforeSend: function(){
                $(".page-preloader").removeClass("hidden");
            },
            success: function (ajaxData){
                $(".page-preloader").addClass("hidden");
                $(".load-ship").hide();
                $("#hasil").html(ajaxData);
            }
        });
    }
}
 
function get_courier2(act){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var x = $('#destination').val();
    var y = $('#lock_w').val();
    var qt = $('.giesqy').val();
    var z = $('input[name=courier].courier:checked').val();
    var csrf = Cookies.get('mfh83ujd7oo');
    //$(".body").css("overflow", "hidden");
    $(".load-ship").show();

    if(x == "" || y == "" || z == "" ){
        alert("Pilih Kota anda!");
    }else{
        $.ajax({
        url  : Bs +"checkout/hasilFilter2",
        type : "GET",
        data : {fscurepro21: csrf, destination: x, lock_w: y, courier: z, qt: qt},
    beforeSend: function(){
        $(".bg-form-che").removeClass("hidden");
    },
    success: function (ajaxData){
        $(".bg-form-che").addClass("hidden");
        $(".body").css("overflow", "");
        $(".load-ship").hide();
        $("#hasil").html(ajaxData);
    }
    });
    }
}

function getPriceongkir(price){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get("mfh83ujd7oo");
    var p = $(price).attr('data-price');
    var g = $(".tyh").text();
    //var c = $(".cb").text();    

    $.ajax({
        url  : Bs + "pembayaran/getTotal",
        type : "GET",
        data : {fscurepro21: csrf, p: p, g: g},
        beforeSend: function(){
            $(".fgrand").html("loading...");
        },
        success: function (nd){
            $(".fgrand").html(nd);
        }
    });

    //var forship = $("#cvrt_d").priceFormat({prefix:'',thousandsSeparator:'.',centsLimit:0,});
    //$(".ship").html(price);
    //$(".fgrand").html(parseInt(grand) + parseInt(price));
    //$('.otqxx').val(hash);
}
 
function vou_and_cou(gift){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var f = $("#voucher_and_coupon").val();
    var csrf = Cookies.get("mfh83ujd7oo");
    if(f == "" || f == 0){
         $(".info-voucher-error").html("Masukkan Voucher atau kupon!").fadeToggle().delay(5000).fadeToggle();
    }else{
        $.ajax({
            url  : Bs + "check_vou",
            type : "GET",
            data : {fscurepro21: csrf, voucher: f},
            beforeSend: function (){
                $("#sbmtvou").html("Proses...");
            },
            success: function(vty){ // Get the result and asign to each cases
                $("#sbmtvou").html("APPLY");
                $('.tyik').html('<i class="glyphicon glyphicon-tags"></i> Apply'); //Loading button text 
                $('.tyik').prop('disabled', false);
                if(vty == "v_n_valid"){
                    $(".info-voucher-error").html("Kupon Tidak Valid!").fadeToggle().delay(3000).fadeToggle();
                }else if(vty == "v_ex"){
                    $(".info-voucher-error").html("Kupon Kadaluarsa!").fadeToggle().delay(3000).fadeToggle();
                }else if(vty == "v_repl"){
                    $(".info-voucher-error").html("Anda telah menggunakan kupon ini sebelumnya").fadeToggle().delay(3000).fadeToggle();
                }else if(vty == "v_las"){
                    $(".info-voucher-error").html("Kuota Voucher Telah Habis").fadeToggle().delay(3000).fadeToggle();
                }else if(vty == "n_valid_total"){
                    $(".info-voucher-error").html("Total belanja belum mencapai syarat dan ketentuan.").fadeToggle().delay(3000).fadeToggle();
                }else if(vty == "cart_null"){
                    $(".info-voucher-error").html("Silahkan berbelanja terlebih dahulu.").fadeToggle().delay(3000).fadeToggle();
                }else{
                    window.location.reload();
                }
            }
        });
    }
}

function RegSellernowAct(){
    $(".registerSeller").fadeOut();
    $(".sKseller").fadeIn();
}

function valMomselDefault(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf        = Cookies.get('mfh83ujd7oo');
        var Trj          = $(".Vfda").val();
        var akun        = $("#accountstore").val();
        var jenisToko   = $(".typestore:checked").val();
        var locateStore = $("#locate_store").val();
        var noStore     = $(".no_store").val();
        var nameStore   = $("#nameStore").val();
        var nameOffice  = $("#nameoffice").val();
        var noreg       = $("#numberreg").val();
        var addstore    = $("#addressstore").val();
        var addWare     = $("#gudangstore").val();
        var provinsi    = $("#propinsi_tujuan").val();
            var exploit    = provinsi.split("|");
            var objekN   = exploit[0];
            var na_propinsi = exploit[1];
        var city        = $("#kota").val();
        var kecamatan   = $("#kecamatan").val();
        var know        = $("#knowInfo").val();
        if(locateStore == "" | locateStore == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("Lokasi Toko tidak boleh kosong");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(noStore == "" | noStore == 0){
            $(".no_store").addClass("border-error").focus();
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("Nomor Telpon tidak boleh kosong");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(nameStore == "" | nameStore == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").addClass("border-error").focus();
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("Nama Toko tidak boleh kosong");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(nameOffice == "" | nameOffice == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").addClass("border-error").focus();
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("Nama Kantor tidak boleh kosong");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(noreg == "" | noreg == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").addClass("border-error").focus();
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("Nomor Registrasi / KTP tidak Boleh Kosong");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(addstore == "" | addstore == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").addClass("border-error").focus();
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("Alamat Toko tidak boleh kosong");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(addWare == "" | addWare == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").addClass("border-error").focus();
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("Alamat Gudang tidak boleh kosong");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(na_propinsi == "" | na_propinsi == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").addClass("border-error").focus();
            $("#kota").removeClass("border-error");
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("Provinsi tidak boleh kosong");
            $(".city_in").html("");
            $(".inf-kecamatan").html("");
        }else if(city == "" | city == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").addClass("border-error").focus();
            $("#kecamatan").removeClass("border-error");
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("Kota tidak boleh kosong");
            $(".inf-kecamatan").html("");
        }else if(kecamatan == "" | kecamatan == 0){
            $(".no_store").removeClass("border-error");
            $("#nameStore").removeClass("border-error");
            $("#nameoffice").removeClass("border-error");
            $("#numberreg").removeClass("border-error");
            $("#addressstore").removeClass("border-error");
            $("#gudangstore").removeClass("border-error");
            $(".propKey").removeClass("border-error");
            $("#kota").removeClass("border-error");
            $("#kecamatan").addClass("border-error").focus();
            $(".inf-jenis ").html("");
            $(".inf-locate").html("");
            $(".inf-tel").html("");
            $(".inf-namestore").html("");
            $(".inf-nameoffice").html("");
            $(".inf-numberregistration").html("");
            $(".inf-addressstore").html("");
            $(".inf-gudangstore").html("");
            $(".inf-e").html("");
            $(".city_in").html("");
            $(".inf-kecamatan").html("Kecamatan tidak boleh kosong");
        }else{
            $.ajax({
                url     : Bs + "ValidateSellerInfor",
                type    : "POST",
                data : {fscurepro21: csrf, vol: Trj, jt: jenisToko, ls: locateStore, ns: noStore, nst:nameStore, nf:nameOffice, nr: noreg, ads: addstore, 
                    adw: addWare, pr: na_propinsi, ct: city, kc: kecamatan, kn: know},
                beforeSend: function(){
                    $('.rgSell').prop('disabled', true);
                    $('.rgSell').html('Loading...');
                },
                success : function(verify){
                    $('.rgSell').prop('disabled', false);
                    $('.rgSell').html('Daftar');
                    if(verify == "ScSell*35*527390&31Ik{]dgd"){
                        window.location=('../pengajuan-berhasil/');
                    }else if(verify == "BlankForm"){
                        $(".info-warning").html("Silahkan periksa form.");
                    }
                }
            });
        }
}

function SavingUserPreference(){ // upd password customer
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf    = Cookies.get('mfh83ujd7oo');
        var email   = $(".em").val();
        var nama    = $(".na").val();
        var telpon  = $(".no").val();
        var gender  = $(".gen:checked").val();
        var pass1   = $("#ps1").val();
        var pass2   = $("#ps2").val();
        var RaInit  = $(".InisChgUse").val();
        var check   = $(".aggre").val();

        if(nama == "" || nama == 0){
            $(".inf-n").html("*Nama tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(email == "" || email == 0){
            $(".inf-e").html("Email tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".em").addClass("border-error").focus();
            $(".na").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(telpon == "" || telpon == 0){
            $(".inf-t").html("*Nomor telepon tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else{
            $.ajax({
                url     : Bs + "PageChngInfo",
                type    : "POST",
                data : {fscurepro21: csrf, rai: RaInit, em: email, na: nama, tel: telpon, pas1: pass1, pas2: pass2, gen: gender},
                beforeSend: function(){
                    $('.btn-saving').prop('disabled', true);
                    $('.btn-saving').html('Loading...');
                },
                success : function(verify){
                    $('.btn-saving').prop('disabled', false);
                    $('.btn-saving').html('Daftar');
                    if(verify == "Jsg&5#833ndsfa3*5"){
                        window.alert("Data telah diubah");
                        window.location=('../customer');
                    }else if(verify == "sy38&42h19&62jJsLm"){
                        $(".info-warning").html("Silahkan periksa koneksi internet anda lalu coba lagi.");
                    }else if(verify == "JsgPasNoMa4chasj^2"){
                        $(".info-warning").html("Password Tidak Sama");
                    }else if(verify == "JPhddgPswChgaeU"){
                        window.alert("Data dan password telah diubah");
                        window.location=('../customer');
                    }
                }
            });
        }
}

function BtSubCont(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf    = Cookies.get('mfh83ujd7oo');
        var nm    = $(".na").val();
        var em   = $(".em").val();
        var kt  = $(".ktP").val();
        var kl  = $(".klh").val();
        var kI   = $(".kIns").val();

        if(nm == "" || nm == 0){
            $(".inf-n").html("*Nama tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".ktP").removeClass('border-error');
            $(".klh").removeClass('border-error');
        }else if(em == "" || em == 0){
            $(".inf-e").html("Email tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").removeClass("border-error").focus();
            $(".em").addClass('border-error');
            $(".ktP").removeClass('border-error');
            $(".klh").removeClass('border-error');
        }else if(kt == "" || kt == 0){
            $(".inf-k").html("Pilih Kategori.").fadeIn().delay(3000).fadeOut();
            $(".na").removeClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".ktP").addClass('border-error');
            $(".klh").removeClass('border-error');
        }else if(kl == "" | kl == 0){
            $(".inf-l").html("Isi Pertanyaan.").fadeIn().delay(3000).fadeOut();
            $(".na").removeClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".ktP").removeClass('border-error');
            $(".klh").addClass('border-error');
        }else{
            $.ajax({
                url     : Bs + "Sbcontact",
                type    : "POST",
                data : {fscurepro21: csrf, kni: kI, n: nm, e: em, k: kt, kll: kl},
                beforeSend: function(){
                    $('.btn-kontak').prop('disabled', true);
                    $('.btn-kontak').html('Loading...');
                },
                success : function(verify){
                    $('.btn-kontak').prop('disabled', false);
                    $('.btn-kontak').html('Kirim');
                    if(verify == "KsgPsh5h28#2834*241"){
                        window.location.href = Bs +'kontak-kami-berhasil';
                    }else if(verify == "Jsb385&2b$293-063"){
                        $(".info-warning").html("Silahkan periksa form.");
                    }
                }
            });
        }
}

function newRegister_acc_validation_form(){
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var csrf    = Cookies.get('mfh83ujd7oo');
        var email   = $(".em").val();
        var nama    = $(".na").val();
        var telpon  = $(".no").val();
        var pass    = $(".pa").val();
        var gender  = $(".gen").val();
        var cos     = $(".cosreg").val();
        var check   = $(".aggre").val();

        if(nama == "" || nama == 0){
            $(".inf-n").html("*Nama tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".na").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(email == "" || email == 0){
            $(".inf-e").html("Email tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".em").addClass("border-error").focus();
            $(".na").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".pa").removeClass('border-error');
         }else if(pass == "" || pass == 0){
            $(".inf-p").html("*Password tidak boleh kosong!").fadeIn().delay(3000).fadeOut();
            $(".pa").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".no").removeClass('border-error');
            $(".na").removeClass('border-error');
        }else if(telpon == "" || telpon == 0){
            $(".inf-t").html("*Nomor telepon tidak boleh kosong.").fadeIn().delay(3000).fadeOut();
            $(".no").addClass("border-error").focus();
            $(".em").removeClass('border-error');
            $(".na").removeClass('border-error');
            $(".pa").removeClass('border-error');
        }else if(!$("input[type='checkbox']:checked").length){
            $(".inf-aggre").html("*Anda harus setuju dengan syarat dan ketentuan pengguna.").fadeIn().delay(3000).fadeOut();
        }else{
            $.ajax({
                url     : Bs + "regnewPagecs",
                type    : "POST",
                data : {fscurepro21: csrf, cosreg: cos, em: email, na: nama, tel: telpon, pas: pass, gen: gender},
                beforeSend: function(){
                    $('.reg-new').prop('disabled', true);
                    $('.reg-new').html('Loading...');
                },
                success : function(verify){
                    $('.reg-new').prop('disabled', false);
                    $('.reg-new').html('Daftar');
                    if(verify == "Pu*(&(*5646234*^(%&^jasdLG"){
                        $(".inf-e").html("*Email sebelumnya telah terdaftar disistem kami.").fadeIn().delay(3000).fadeOut();
                        $(".em").addClass("border-error").focus();
                        $(".pa").removeClass('border-error');
                        $(".no").removeClass('border-error');
                        $(".na").removeClass('border-error');
                    }else if(verify == "Khs8gueo28^bsjLGs^2#417(&$"){
                        $('.info-warning').html("Email Telah Terdaftar");
                         $(".em").addClass("border-error").focus();
                    }else if(verify == "Akch63%$#122%*)__16"){
                       window.location.href = Bs +'activation_class_user_default';
                    }else if(verify == "eX09&HJG7K%^Gksdjhk3)62"){
                        $(".info-warning").html("Silahkan periksa koneksi internet anda lalu coba lagi.")
                    }else if(verify == "Jhsh82825(74(7242&8$#$%@_(&"){
                        window.location.href = Bs;
                    }
                }
            });
        }
    }

function pwsv() {
    var password = $("#ps1").val();
    var confirmPassword = $("#ps2").val();

    if (password != confirmPassword){
        $(".inf-p2").html("Password tidak cocok!");
        $("#ps2").addClass("border-error").focus();
    }else{
        $(".inf-p2").html("");
        $("#ps2").removeClass("border-error");
    }
}

function banner_affiliate(idb){
    //var Bs = window.location.origin;
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var id = $(idb).attr('data-affiliate');
    var csrf = Cookies.get('mfh83ujd7oo');
    $.ajax({ // cek stok
        type    : "POST",
        url     : Bs + "stars/affiliate/"+id,
        data    : "&fscurepro21=" + csrf,
    });
}

function delete_item(itm)
    {
        // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
        var id = $(itm).attr('data-id');
        var name = $(itm).attr('data-name');

      if(confirm('Apa anda yakin ingin menghapus produk '+name+'?'))
      {
        // ajax delete data from database
          $.ajax({
            url : Bs + "cart/hapus_item/?id="+id,
            type: "GET",
            success: function(data)
            {
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
}

function filDomsearch(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var input_data = $('#search_data').val();    
    var csrf = Cookies.get('mfh83ujd7oo');
    if(input_data.length === 0){
        $('#suggestions').hide();
    }else if(input_data.length === 1){
        $('#suggestions').hide();
    }else{
        $.ajax({ // cek stok
            type    : "POST",
            url     : Bs + "pencarian",
            data    : {fscurepro21: csrf, search_data: input_data},
            success: function(data){
                if(data.length > 0){
                    $('#suggestions').show();
                    $('#autosuggest').addClass("auto_list");
                    $('#autosuggest').html(data);
                }
            }
        });
    }
}

function filDomsearchf(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var input_data = $('#search_dataa').val();    
    var csrf = Cookies.get('mfh83ujd7oo');
    if(input_data.length === 0){
        $('#suggestions2').hide();
    }else if(input_data.length === 1){
        $('#suggestions2').hide();
    }else{
        $.ajax({ // cek stok
            type    : "POST",
            url     : Bs + "pencarian",
            data    : {fscurepro21: csrf, search_data: input_data},
            success: function(data){
                if(data.length > 0){
                    $('#suggestions2').show();
                    $('#autosuggest2').addClass("auto_list");
                    $('#autosuggest2').html(data);
                }
            }
        });
    }
}

function selClx(){
    $(".inf-clx").css("color","black");
    $(".inf-szx").css("color","red");
    $(".get_sie").prop('checked',false);
    $(".b-goods-det__btn").prop("disabled", true);
}

function getPr(){
    $(".inf-szx").css("color","black");
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    var yut = $("#get_m").val();
    var clx = $(".get_clx:checked").val();
    var szx = $(".get_sie:checked").val();
   // if(clx == null){
    //    $(".inf-clx").css("color","red");
    //}else{
        $.ajax({
            url  : Bs + "gtpr",
            type : "POST",
            data : {fscurepro21: csrf,yt:yut,clo:clx,szo:szx},
            beforeSend: function(){
                $('.b-goods-det__price').html('Loading...');
            },
            success : function(pco){
                $("#get_cl").val(clx);
                $("#get_sz").val(szx);
                if(pco.pricehtml != "<i style='color:red;'>Harga tidak tersedia.</i>"){
                    $(".b-goods-det__btn").prop("disabled", false);
                    $(".b-goods-det__btn").html("Add to cart");
                }else{
                    $(".b-goods-det__btn").prop("disabled", true);
                    $(".b-goods-det__btn").html("Pilih ukuran atau warna lain");
                }
                $('.b-goods-det__price').html(pco.pricehtml);
                $("#get_be").val(pco.be);
                $("#get_at").val(pco.at);
            }
        });
    //}
}

function finishFastcheckout(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var fln  = $(".cek_fullname").val();
    var mail  = $(".cek_mail").val();
    var telp  = $(".cek_telp").val();
    var addr = $("#addrKey").val();
    var note = $("#not_ad").val();
    var prov = $(".propKey").val();
        var expl = prov.split("|");
        var objek = expl[0];
        var na_prop = expl[1];
    var cit = $(".citKey").val();
        var explo = cit.split("|");
        var objeki = explo[0];
        var na_cit = explo[1];

    var isg = $("#lock_dp").val();
    var wei = $("#lock_w").val();
    var q = $(".giesqy").val();
    var sz = $(".giessz").val();
    var cl = $(".getclz").val();
    var cl1 = $(".getclur").val();
    var ag = $(".aggre").val();
    //var in_f_s = $("#val_f_s").val();
    var ex = $("input[name='courier']:checked").val();
    var exresul = $("input[name='checkshipping']:checked").val();
    //var mePay = $("input[name='payment']:checked").val();
    //var bnkifyes = $("input[name='bnk']:checked").val();
    //var gTotat = $(".otqxx").val();
    var g = $("#gexr").val();
    var csrf = Cookies.get('mfh83ujd7oo');
    if(!$("input[name='aggre']:checked").length){
        alert('Anda harus Menyetujui Syarat dan ketentuan belanja cepat.');
    }else{
        $.ajax({
        url  : Bs +"verify_fastCheckout",
        type : "GET",
        datatype:"JSON",
        data : {fscurepro21: csrf, gex: g, fullname: fln, email: mail, telepon: telp, almt: addr, notee: note, prov: na_prop, city: na_cit, i: isg, qt: q, siz: sz, clr: cl, clr1: cl1, w: wei, exp: ex, resex: exresul, },
        beforeSend: function(){
            $(".pushp").html('Sedang Memproses...');
            $(".pushp").prop('disabled', true);
        },
        success: function (fc){
            $(".pushp").html('<i class="glyphicon glyphicon-ok"></i> Konfirmasi Pesanan');
            $(".pushp").prop('disabled', false);
            if(fc == "S5ihs7Hdf52lpP"){
                $("#p_form_fc").modal('hide');
                alert('Pesanan sudah kami terima, Silahkan cek email anda untuk melihat detail pesanan.');
                location.reload();
            }else if(fc == "accessDenied"){
                alert('Isi Form yang masih kosong!');
            }
        }
        });   
    }
}

function searchFilter(page_num) {
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var page_num = page_num?page_num:0;
    var minH = $('#minH').val();
    var maxH = $('#maxH').val();
    var sortBy = $('#sortBy').val();
    var brand = $('#brand').val();
    var bdsk = $('#bds').val();
    var tipe_kategori = $('#ftj').val();
    // tidak dipakai //
    var min = $('#min').val();
    var max = $('#max').val();

    var subkats = document.getElementsByName('subkat[]');
    var subkat = "";
    for (i=0, n=subkats.length;i<n; i++) 
    {
            if (subkats[i].checked) 
        {
            subkat += ","+subkats[i].value;
        }
    }
    var csrf = Cookies.get('mfh83ujd7oo');

    //var sizing = document.getElementsByName('sizee[]');
    //var size = "";
    //for (i=0, n=sizing.length;i<n; i++) 
    //{
    //        if (sizing[i].checked) 
    //    {
    //        size += ","+sizing[i].value;
    //    }
    //}

    var size = $(".get_sie").val();

    var colours = document.getElementsByName('colourr[]');
    var colour = "";
    for (i=0, n=colours.length;i<n; i++) 
    {
            if (colours[i].checked) 
        {
            colour += ","+colours[i].value;
        }
    }

    //var ratings = document.getElementsByName('rt[]');
    //var rating = "";
    //for (i=0, n=ratings.length;i<n; i++) 
    //{
    //        if (ratings[i].checked) 
    //    {
    //        rating += ","+ratings[i].value;
    //    }
    //}

    $.ajax({
        type: 'POST',
        url: Bs + 'cataloguegaes/ajaxPaginationData/'+page_num, 
        data:'page='+page_num+'&subkat='+subkat+'&min='+min+'&max='+max+'&minH='+minH+'&maxH='+maxH+'&bds='+bdsk+'&ftj='+tipe_kategori+'&sortBy='+sortBy+'&size='+size+'&colour='+colour+'&brand='+brand+'&fscurepro21=' + csrf, //'&rating='+rating+
        beforeSend: function () {
            $(".page-preloader").removeClass("hidden");
            $('.btn-filter-sort').html('SEDANG MEMPROSES');
        },
        success: function (html) {
            $(".page-preloader").addClass("hidden");
            $('.btn-filter-sort').html('TUTUP & TAMPILKAN HASIL');
            $('#postList').html(html);
        }
    });
}

function searchStore(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var k = $("#keysearch").val();
    var csrf = Cookies.get('mfh83ujd7oo');
    if(k == ""){
        alert("Isi nama kota anda");
    }else{
        $.ajax({
            type: 'POST',
            url: Bs + 'caritoko',
            data:'&key='+k+'&fscurepro21=' + csrf,
            beforeSend: function () {
                $(".pre-loader").attr("display","block");
            },
            success: function (html) {
                $(".pre-loader").attr("display","none");
                $('#postList').html(html);
            }
        });
    }
}

function cariInv(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var k = $("#inv").val();
    var csrf = Cookies.get('mfh83ujd7oo');
    if(k == ""){
        alert("Isi invoice terlebih dahulu");
    }else{
        $.ajax({
            type: 'POST',
            url: Bs + 'cariinv',
            data:'&getinvdata='+k+'&fscurepro21=' + csrf,
            beforeSend: function () {
                $(".page-preloader").removeClass("hidden");
            },
            success: function (html) {
                $(".page-preloader").addClass("hidden");
                $('.result').html(html);
            }
        });
    }
}

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;
     $(".print").hide();
     window.print();   

     document.body.innerHTML = originalContents;
}

function searchBox(){
    $('.cariss').slideToggle();
}

function cekValidcity(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    var xts = $("#lock_w").val();
    var ste = $("#propinsi_tujuan").val();    
    var stx = $("#destination").val();    
    //var stx = obj.value;
    var stxx = stx.split("|"); 
    var st = stxx[0];
    if(ste == "" || ste == null){
        alert("Pilih provinsi anda");
    }else if(stx == "" || stx == null){
        alert("Pilih kota anda");
    }else{
        $.ajax({
            url : Bs + "cart/cekValid/"+st,
            type: "GET",
            data : {fscurepro21: csrf, g: xts, h: st},
            beforeSend: function(){
                $(".update-btn").html("Memproses...");
            },
            success: function(get)
            {  
                $(".update-btn").html("CEK ONGKIR <i class='fa fa-refresh'></i>");
                if(get == "200"){
                    $('.expedisi').html("<div style='padding:0 10px 15px;'>Kota yang anda pilih mendapat gratis ongkir!</div>");
                    $('.shipping_test').html("<input checked required data-price='0' type='radio' name='checkshipping' value='JNE|3-4 hari|0'><b>(Gratis Ongkir) Rp. 0</b>");
                }else{
                    $('.expedisi').html("");
                    $('.shipping_test').html(get);
                }
                //location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Periksa koneksi internet anda');
            }
        });
    }
}

function cekcityogk(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    var xts = $("#lock_w").val();
    var ste = $("#propinsi_tujuan").val();    
    var stx = $("#destination").val();    
    //var stx = obj.value;
    var stxx = stx.split("|");
    var st = stxx[0];
    if(ste == "" || ste == null){
        alert("Pilih provinsi anda");
    }else if(stx == "" || stx == null){
        alert("Pilih kota anda");
    }else{
        $.ajax({
            url : Bs + "cart/cekCity/"+st,
            type: "GET",
            data : {fscurepro21: csrf, g: xts, h: st},
            beforeSend: function(){
                $('.shipping_test').html("Loading...");
            },
            success: function(get)
            {  
                if(get == "200"){
                    $('.expedisi').html("<div style='padding:0 10px 15px;'>Kota yang anda pilih mendapat gratis ongkir!</div>");
                    $('.shipping_test').html("<input style='display:none;' checked required data-price='0' type='radio' name='checkshipping' value='JNE|3-4 hari|0'><b>(Gratis Ongkir) Rp. 0</b>");
                }else{
                    $('.expedisi').html("");
                    $('.shipping_test').html(get);
                }
                //location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Periksa koneksi internet anda');
            }
        });
    }
}

function a(){
    // POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
        //var bs = window.location.href.match(/^.*\//);
    var x = $("#shipping");
    x.remove(x.selectedIndex);

    var prop = $('#propinsi_tujuan').val();
    var expl = prop.split("|");
    var objek = expl[0];
    var na_prop = expl[1];

    $.post( Bs + "payment/pilihKota/"+objek,function(obj){
        $('#destination').html(obj);
    }); 
}

function copyVoucher(vc) { 
  var copyText = document.getElementById(vc);
  //var voucher = $(vc).attr('data-voucher');
  //voucher.value = text();
  //voucher.select();   
  copyText.select();
  document.execCommand("copy");   
  alert("Voucher : " + copyText.value + " disalin"); 
} 