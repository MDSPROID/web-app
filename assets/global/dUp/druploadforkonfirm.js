$(document).ready(function(){
	Dropzone.autoDiscover = false;
	var identity = $(".sku_m").val();
	// POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
//    var baseURL = window.location.href.match(/^.*\//);
	var foto_upload= new Dropzone(".dropzone",{
	url: baseURL +"upload_bk",
	maxFilesize: 5, 
	method:"post",
	acceptedFiles:"image/*, .jpeg",
	paramName:"userfile",
	dictInvalidFileType:"Type file ini tidak dizinkan",
	addRemoveLinks:true,
	});
	//Event ketika Memulai mengupload
	foto_upload.on("sending",function(a,b,c){
		a.token=Math.random();
		c.append("identitas",identity);
		c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto

		$(".sd").slideDown();
	});
	//Event ketika foto dihapus
	foto_upload.on("removedfile",function(a){
		var token=a.token;
		$.ajax({
			type:"post",
			data:{token:token},
			url: baseURL + "hapus_bk",
			cache:false,
			dataType: 'json',
			success: function(){
				console.log("Foto terhapus");
			},
			error: function(){
				console.log("Error");

			}
		});
	});
});