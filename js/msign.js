
function mcheck()
    {
        alert("hieee");
      var x=document.getElementById('password').value;
      var y=document.getElementById('cpassword').value;
      if (x!=y) {
document.getElementById('error').innerHTML="Passwords do not match";
document.getElementById('register').disabled=true;
      }
      else
      {
       document.getElementById('register').disabled=false; 
       document.getElementById('error').innerHTML="go ahead";
      }
    }
