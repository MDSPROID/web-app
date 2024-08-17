var map;
var geocoder;

function loadMap() {
	var pune = {lat: -1.248543, lng: 118.618115};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4.7,
      center: pune
    });

    //var marker = new google.maps.Marker({
    //  position: pune,
    //  map: map
    //});

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
}

function showAllColleges(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		// POTONG window.location.pathname.split SAAT UPLOAD DI SERVER window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/'
    	var baseUrl = window.location.href.match(/^.*\//);
		var content = document.createElement('h5');
		var img = document.createElement('img');
		img.src = baseUrl + 'assets/images/store_bg.png';
		//img.style.width = '80px';
		img.style = 'width:80px;float:left;';
		content.appendChild(img);

		var strong = document.createElement('div');
		strong.style = 'width:300px;';
		//var br = document.createElement('br');

		strong.textContent = data.nama_toko+' | '+data.alamat;
		content.appendChild(strong);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.latitude, data.longitude),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
} 

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.nama_toko + ' ' + data.alamat;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}