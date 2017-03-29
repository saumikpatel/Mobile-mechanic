/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function () {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
        signup.addEventListener('click', function ()
        {

            alert("Button Clicked");
            var radio = document.getElementsByClassName('radio');
            alert(radio);

            var x = '';

            for (i = 0; i < radio.length; i++)
            {

                if (radio[i].checked)
                {

                    var x = radio[i].value;
                    alert(x);
                }
            }
            if (x == "user")
            {
                alert('yes');
                window.location.href = "userenteremail.html";
            } else if(x=="mechanic")
            {
                window.location.href = "mechanicalenteremail.html";
            }
            else{
                  window.location.href = "index.html";
                  alert('please select user type');
            } 
        }, false);
         login.addEventListener('click', function ()
        {

            alert("Button Clicked");
            var radio = document.getElementsByClassName('radio');
            alert(radio);

            var y = '';

            for (i = 0; i < radio.length; i++)
            {

                if (radio[i].checked)
                {

                    var x = radio[i].value;
                    alert(x);
                }
            }
            if (x === "user")
            {
                alert('yes');
                window.location.href = "userlogin.html";
            } else if(x=="mechanic")
            {
                window.location.href = "mlogin.html";
            }
            else{
                 window.location.href = "index.html";
                 alert('please select user type');
            }
        }, false)
    },
    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function () {
        this.receivedEvent('deviceready');
    
    },
    // Update DOM on a Received Event
    receivedEvent: function (id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

app.initialize();