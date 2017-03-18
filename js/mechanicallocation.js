/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var app = {
    // Application Constructor
    initialize: function () {
 navigator.geolocation.getCurrentPosition(onSuccess, onerror);  
  
    function onSuccess(position)  
    {  
        var element = document.getElementById('geolocation');  
       // bounds=new google.maps.LatLng();
        element.innerHTML = 'Latitude: ' + position.coords.latitude + '<br />' + 'Longitude: ' + position.coords.longitude + '<br />' + '<hr />' + element.innerHTML;  
        var lat = position.coords.latitude;  
        var lang = position.coords.longitude;  
        var myLatlng = new google.maps.LatLng(lat, lang);  
        var mapOptions = {  
               zoom: 18,  
                center: myLatlng, 
                
          
                
            }  
            //Creates a new map inside the <div> element    
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);  
        //A marker identifies a location on a map.   
        
        var marker = new google.maps.Marker(  
        {  
            position: myLatlng,  
            map: map
          
            
        });  
    }  
  
    function onError(error)  
    {  
        alert('code: ' + error.code + '\n' + 'message: ' + error.message + '\n');  
    }  
    //Continuously watch divice's current GPS position    
    var watchID = navigator.geolocation.watchPosition(onSuccess, onError,  
    {  
        timeout: 3000  
    });  
    //Simply passes the indicated event to the browser, which handles it according to the browser's DOM event model.    
    google.maps.event.addDomListener(window, 'load', onSuccess);

    },
     onDeviceReady: function () {
    
    
     },
     
}
app.initialize();
