        $(document).ready(function ()
            {
				
            
                $('#botp').click(function ()
                {
					
                   var email = document.getElementById('email').value;
                    alert(email);
                    if (email === "")
                    {
                        alert("Please enter email");
                    } else {
			localStorage.setItem("email",email);
                        $.ajax({
                            url: 'https://mobilemechanic.000webhostapp.com/otp.php',
                            type: 'post',
                            async: false,
                            data: "&data="+email,
                            crossDomain: true,
                            success: function (res)
                            {
                                alert(res);
								
                            }
                        });
                    }
                });
				   
            });
			 