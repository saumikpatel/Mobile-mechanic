
$(document).ready(function ()
{

    $('#next').click(function ()
    {

        var otp = document.getElementById('otp').value;
        alert(otp);
        if (otp == "")
        {
            alert("Please enter otp");
        } else {
            var a=localStorage.getItem("email");
           

            $.ajax({
                url: 'https://mobilemechanic.000webhostapp.com/validateotp.php',
                type: 'post',
                data: {data: a, otp: otp},
                crossDomain: true,
                success: function (res)
                {
                    alert(res);
                    if (res === "true")
                    {
                        window.location.href = "mpass.html";
                    }
                }
            });
        }
    });
});

             