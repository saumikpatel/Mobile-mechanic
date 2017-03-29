$(document).ready(function(){
  shopid=  localStorage.getItem("shopid");
	$.ajax({
            type: 'POST',
            data: "&data=" + shopid,
		url:'http://localhost/wheelcare/rev.php',
		success: function(result){
			alert(result);
			document.getElementById('a').innerHTML=result;
		}
	});
});