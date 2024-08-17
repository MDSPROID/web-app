$(document).ready(function(){
    $('.gb1').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb1')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb1').addClass('border-error');
            return false;
        }else{
            $('.gb1').removeClass('border-error');
        }
        }
    });

    $('.gb2').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb2')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb2').addClass('border-error');
            return false;
        }else{
            $('.gb2').removeClass('border-error');
        }
        }
    });

    $('.gb3').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb3')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb3').addClass('border-error');
            return false;
        }else{
            $('.gb3').removeClass('border-error');
        }
        }
    });

    $('.gb4').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb4')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb4').addClass('border-error');
            return false;
        }else{
            $('.gb4').removeClass('border-error');
        }
        }
    });

    $('.gb5').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb5')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb5').addClass('border-error');
            return false;
        }else{
            $('.gb5').removeClass('border-error');
        }
        }
    });

    $('.gb6').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb6')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb6').addClass('border-error');
            return false;
        }else{
            $('.gb6').removeClass('border-error');
        }
        }
    });

    $('.gb7').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb7')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb7').addClass('border-error');
            return false;
        }else{
            $('.gb7').removeClass('border-error');
        }
        }
    });

    $('.gb7').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb7')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb7').addClass('border-error');
            return false;
        }else{
            $('.gb7').removeClass('border-error');
        }
        }
    });

    $('.gb8').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb8')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb8').addClass('border-error');
            return false;
        }else{
            $('.gb8').removeClass('border-error');
        }
        }
    });

    $('.gb9').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb9')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb9').addClass('border-error');
            return false;
        }else{
            $('.gb9').removeClass('border-error');
        }
        }
    });

    $('.gb10').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb10')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb10').addClass('border-error');
            return false;
        }else{
            $('.gb10').removeClass('border-error');
        }
        }
    });

    $('.gb11').change(function(){
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {//get the file size and file type from file input field
        var fsize = $('.gb11')[0].files[0].size;
        if(fsize>3145728) //do something if file size more than 1 mb (1048576)
        {
            alert("File terlalu besar, Ukuran harus dibawah / sama dengan 3MB");
            $('.gb11').addClass('border-error');
            return false;
        }else{
            $('.gb11').removeClass('border-error');
        }
        }
    });
////////////////////////////////////////////// INPUT VISIT //////////////////////////////////////////////////////////////////////
    $("#b_upload").click(function(event){
        event.preventDefault();
        var csrf = Cookies.get('inthenameofgod');
        var formData = $('#myForm');
 
        //$('.msg').hide();
        $('.progress').show();
        
        $.ajax({
            xhr : function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(e){
                    if(e.lengthComputable){
                        console.log('Bytes Loaded : ' + e.loaded);
                        console.log('Total Size : ' + e.total);
                        console.log('Persen : ' + (e.loaded / e.total));
                        
                        var percent = Math.round((e.loaded / e.total) * 100);
                        
                        $('#progressBar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                    }
                });
                return xhr;
            },
            type : 'POST',
            url : baseURL +'welcome/visit_progress_save',
            data : formData + "&stasmReg=" + csrf,  
            processData : false,
            contentType : false,
            success : function(response){
                $('myForm')[0].reset();
                $('.progress').hide();
                //$('.msg').show();
                if(response == ""){
                    alert(response);
                }else{
                    alert('Data disimpan');
                    location.reload();
                    //var msg = 'File berhasil di upload. ID file = ' + response;
                    //$('.msg').html(msg);
                }
            }
        });
    });

});
var view = document.getElementById("tampilkan");
var csrf = Cookies.get('inthenameofgod');

function new_visit(){
      $('.new_visit').fadeToggle().show(); // reset form on modals
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function getLocation() {
    if(confirm('Apa anda yakin ingin melakukan visit?'))
      {
        $(".page-loader-wrapper").css('display','block');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Browser tidak support geolocation, gunakan browser lain!");
        }
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    var kodex = $("#kode").val();
    $.ajax({
        url  : baseURL +"dashboard/visit_in",
        type : "GET",
        datatype:"JSON",
        data : {stasmReg: csrf, latitude: lat, longitude: lon, kode: kodex},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function(res){
            $(".page-loader-wrapper").css('display','none');     
            if(res != "0"){
                window.location.href = baseURL + 'dashboard/visit_default';
            }else{
                alert('Kode SMS Toko tidak ditemukan, Silahkan pin google map dahulu');
            }
        }
    });   
}

function getLocation_out() {
    if(confirm('Apa anda yakin ingin menyimpan hasil?'))
      {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition_out, showError);
        } else {
            alert("Browser tidak support geolocation, gunakan browser lain!");
        }
    }
}
 
function showPosition_out(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    $(".latitude").val(lat);
    $(".longitude").val(lon);
    $(".pin_location").css("display", "none");
    $(".btn-go").css("display", "block");
    //    window.location.href = baseURL + 'dashboard/visit_in_progress';
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
function getLocationPi() {
    if(confirm('Apa anda yakin ingin melakukan P.I?'))
      {
        $(".page-loader-wrapper").css('display','block');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPositionPi, showError);
        } else {
            alert("Browser tidak support geolocation, gunakan browser lain!");
        }
    }
}
 
function showPositionPi(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    var kodex = $("#kode").val();
    $.ajax({
        url  : baseURL +"dashboard/pi_in",
        type : "GET",
        datatype:"JSON",
        data : {stasmReg: csrf, latitude: lat, longitude: lon, kode: kodex},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function(res){
            $(".page-loader-wrapper").css('display','none');     
            if(res != "0"){
                window.location.href = baseURL + 'dashboard/pi_default';
            }else{
                alert('Kode SMS Toko tidak ditemukan, Silahkan pin google map dahulu');
            }
        }
    });   
}

function getLocation_out_pi() {
    if(confirm('Apa anda yakin ingin menyimpan hasil?'))
      {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition_out_pi, showError);
        } else {
            alert("Browser tidak support geolocation, gunakan browser lain!");
        }
    }
}

function showPosition_out_pi(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    $(".latitude").val(lat);
    $(".longitude").val(lon);
    $(".pin_location").css("display", "none");
    $(".btn-go").css("display", "block");
    //    window.location.href = baseURL + 'dashboard/visit_in_progress';
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

//////////////// SAMPLING ///////////////////////////////////
function getLocationSampling() {
    if(confirm('Apa anda yakin ingin melakukan Sampling?'))
      {
        $(".page-loader-wrapper").css('display','block');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPositionSampling, showError);
        } else {
            alert("Browser tidak support geolocation, gunakan browser lain!");
        }
    }
}
 
function showPositionSampling(position) {

    lat = position.coords.latitude;
    lon = position.coords.longitude;
    var kodex = $("#kode").val();
    $.ajax({
        url  : baseURL +"dashboard/sampling_come",
        type : "GET",
        datatype:"JSON",
        data : {stasmReg: csrf, latitude: lat, longitude: lon, kode: kodex},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function(res){
            $(".page-loader-wrapper").css('display','none');     
            if(res != "0"){
                window.location.href = baseURL + 'dashboard/sampling_default';
            }else{
                alert('Kode SMS Toko tidak ditemukan, Silahkan pin google map dahulu');
            }
        }
    });   
}

function getLocation_out_sampling() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition_out_sampling, showError);
    } else {
        alert("Browser tidak support geolocation, gunakan browser lain!");
    }
}

function showPosition_out_sampling(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    $(".latitude").val(lat);
    $(".longitude").val(lon);
    $(".pin_location").css("display", "none");
    $(".btn-go").css("display", "block");
    //    window.location.href = baseURL + 'dashboard/visit_in_progress';
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

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("Harap ijinkan akses lokasi");
            $(".page-loader-wrapper").css('display','none');
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Lokasi anda tidak ditemukan");
            $(".page-loader-wrapper").css('display','none');
            break;
        case error.TIMEOUT:
            alert("Silahkan refresh halaman");
            $(".page-loader-wrapper").css('display','none');
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            $(".page-loader-wrapper").css('display','none');
            break;
    }
 }

function get_result(act){ 
    var dt = $(act).attr('data-title');
    $.ajax({
    url  : baseURL +"dashboard/detail_laporan",
    type : "GET",
    data : {stasmReg: csrf, data_kode: dt},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function (ajaxData){
            $(".page-loader-wrapper").css('display','none');
            $(".result").html(ajaxData);
        }
    });
}

function get_result_sampling(smp){
    var dt = $(smp).attr('data-title');
    $.ajax({
    url  : baseURL +"dashboard/detail_laporan_sampling",
    type : "GET",
    data : {stasmReg: csrf, data_kode: dt},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function (ajaxData){
            $(".page-loader-wrapper").css('display','none');
            $(".result").html(ajaxData);
        }
    });
}

function get_result_pi(smp){
    var dt = $(smp).attr('data-title');
    $.ajax({
    url  : baseURL +"dashboard/detail_laporan_pi",
    type : "GET",
    data : {stasmReg: csrf, data_kode: dt},
        beforeSend: function(){
            $(".page-loader-wrapper").css('display','block');
        },
        success: function (ajaxData){
            $(".page-loader-wrapper").css('display','none');
            $(".result").html(ajaxData);
        }
    });
}