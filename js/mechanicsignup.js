/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = {
    // Application Constructor
    initialize: function () {
//form.onsubmit(this.foo.bind(this),false);
 //window.location.href = "mechanicallocation.html";
 
    },
        foo:function(register)
     {
       var username = document.getElementById("fname").value;
        alert(username);
         localStorage.setItem("name",username);
      window.location.href = "mechanicallocation.html";
},
     onDeviceReady: function () {
    
    
     },
 
}
app.initialize();