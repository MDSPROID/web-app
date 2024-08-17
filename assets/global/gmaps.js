window.onload = function() {
    store();
};

$(document).ready(function(){
    
var view = document.getElementById("tampilkan");
var csrf = Cookies.get('mfh83ujd7oo');

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
} else {
    alert("Tidak dapat mendeteksi lokasi");
}

});
 
//function showPosition(position) {
function store() {
//    var Bs = window.location.href.match(/^.*\//);
    var csrf = Cookies.get('mfh83ujd7oo');
    lat = "";//position.coords.latitude;
    lon = "";//position.coords.longitude;
    $.ajax({
        url  : Bs +"getStore",
        type : "POST",   
        datatype:"JSON",
        data : {omisecure: csrf, latitude: lat, longitude: lon},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        }, 
        success: function(res){
            if(res == ""){
                $(".page-loader-wrapper").css('display','none');     
                $(".storeM").html("<div class='noStore'></div><br>Tidak ada toko disekitar lokasi anda");    
            }else{
                $(".page-loader-wrapper").css('display','none');     
                $(".storeM").html(res);
            }
        }
    }); 
}

//function getLocation_out() {
//    if(confirm('Apa anda yakin ingin menyimpan hasil?'))
//      {
//        if (navigator.geolocation) {
//            navigator.geolocation.getCurrentPosition(showPosition_out, showError);
//        } else {
//            alert("Browser tidak support geolocation, gunakan browser lain!");
//        }
//    }
//}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    //$(".latitude").val(lat);
    //$(".longitude").val(lon);
    //$(".pin_location").css("display", "none");
    //$(".btn-go").css("display", "block");
    alert(lat);


    //    window.location.href = Bs + 'dashboard/visit_in_progress';
    //latlon = new google.maps.LatLng(lat, lon)

    //mapcanvas = document.getElementById('mapcanvas')
    //mapcanvas.style.height = '500px';
    //mapcanvas.style.width = '500px';
 
    //var myOptions = {
    //center:latlon,
    //zoom:14,
    //mapTypeId:google.maps.MapTypeId.ROADMAP
    //}
     
    //var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    //var marker = new google.maps.Marker({
    //    position:latlon,
    //    map:map,
    //    title:"You are here!"
    //});
}

///////////// P.I //////////////////////////////////
//function getLocationPi() {
//    if(confirm('Apa anda yakin ingin melakukan P.I?'))
//      {
//        $(".page-loader-wrapper").css('display','block');
//        if (navigator.geolocation) {
//            navigator.geolocation.getCurrentPosition(showPositionPi, showError);
//        } else {
//            alert("Browser tidak support geolocation, gunakan browser lain!");
//        }
//    }
//}
 
//function showPositionPi(position) {
//    lat = position.coords.latitude;
//    lon = position.coords.longitude;
//    var kodex = $("#kode").val();
//    $.ajax({
//        url  : Bs +"dashboard/pi_in",
//        type : "GET",
//        datatype:"JSON",
//        data : {omisecure: csrf, latitude: lat, longitude: lon, kode: kodex},
//        beforeSend: function(){
//            $(".page-loader-wrapper").css('display','block');
//        },
//        success: function(res){
//            $(".page-loader-wrapper").css('display','none');     
//            if(res != "0"){
//                window.location.href = Bs + 'dashboard/pi_default';
//            }else{
//                alert('Kode SMS Toko tidak ditemukan, Silahkan pin google map dahulu');
//            }
//        }
//    });   
//}

//function getLocation_out_pi() {
//    if(confirm('Apa anda yakin ingin menyimpan hasil?'))
//      {
//        if (navigator.geolocation) {
//            navigator.geolocation.getCurrentPosition(showPosition_out_pi, showError);
//        } else {
//            alert("Browser tidak support geolocation, gunakan browser lain!");
//        }
//    }
//}

//function showPosition_out_pi(position) {
//    lat = position.coords.latitude;
//    lon = position.coords.longitude;
//    $(".latitude").val(lat);
//    $(".longitude").val(lon);
//    $(".pin_location").css("display", "none");
//    $(".btn-go").css("display", "block");


    //    window.location.href = Bs + 'dashboard/visit_in_progress';
    //latlon = new google.maps.LatLng(lat, lon)

    //mapcanvas = document.getElementById('mapcanvas')
    //mapcanvas.style.height = '500px';
    //mapcanvas.style.width = '500px';
 
    //var myOptions = {
    //center:latlon,
    //zoom:14,
    //mapTypeId:google.maps.MapTypeId.ROADMAP
    //}
     
    //var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    //var marker = new google.maps.Marker({
    //    position:latlon,
    //    map:map,
    //    title:"You are here!"
    //});
//}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("Harap ijinkan akses lokasi");
            //$(".page-loader-wrapper").css('display','none');
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Lokasi anda tidak ditemukan");
            //$(".page-loader-wrapper").css('display','none');
            break;
        case error.TIMEOUT:
            alert("Silahkan refresh halaman");
            //$(".page-loader-wrapper").css('display','none');
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            //$(".page-loader-wrapper").css('display','none');
            break;
    }
}