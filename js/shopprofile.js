var lat;
var lng;
    
shopid=localStorage.getItem("shopid");
function initMap() {

$.ajax({
     type: 'POST',
        data: "&data="+shopid,
        url: 'http://localhost/wheelcare/shop.php',
       
        async: false,
         success: function (result) {
            
			          var a = JSON.parse(result);
		  console.log(a);
          document.getElementById('shopName').innerHTML = a['sname'];
		  console.log(a);
          document.getElementById('address').innerHTML = a['address'];
          document.getElementById('contactno').innerHTML = a['contact_no'];
          document.getElementById('servicetype').innerHTML = a['servicetype'];
          document.getElementById('vechicletype').innerHTML = a['vechicletype'];
       lat = a['latitude'];
	   alert(lat);
          lng = a['longitude'];
document.getElementById('visible').className = "show";
        
      }
      });

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        draggable: true,
        panControl: false,
        scrollwheel: false,
        zoomControl: false,
        zoomControlOptions: false,
        streetViewControl: false,
        mapTypeControl: false,
        center: new google.maps.LatLng(lat, lng)
    });
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        map: map
    });
}
