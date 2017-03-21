/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check()
{
    var x = document.getElementById('password').value;
    var y = document.getElementById('cpassword').value;
    if (x != y) {
        alert("Password do not match");
        document.getElementById('register').disabled = true;
    } else
    {
        document.getElementById('register').disabled = false;
    }
}


function foo()
{
    var check = document.getElementsByName('type');
    y = '';

    for (i = 0; i < check.length; i++)
    {

        if (check[i].checked)
        {

            y += check[i].value + ",";

        }
    }


    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var cpassword = document.getElementById("cpassword").value;
    var number = document.getElementById("number").value;
    var shopname = document.getElementById("shopname").value;
    var address = document.getElementById("address").value;
    var servicetype = document.getElementById("servicetype").value;
    localStorage.setItem("fname", fname);
    localStorage.setItem("lname", fname);
    localStorage.setItem("email", cpassword);
    localStorage.setItem("number", number);
    localStorage.setItem("shopname", shopname);
    localStorage.setItem("address", address);
    localStorage.setItem("servicetype", servicetype);
    localStorage.setItem("cpassword", cpassword);
    localStorage.setItem("vehicletype", y);
    window.location.href = "mechanicallocation.html";
}

