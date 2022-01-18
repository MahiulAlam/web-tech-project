$(document).ready(function(){


$("#submit").click(function(){
	
	//JavaScript Validation

	if($("#first").val()=="")
	{
		alert("Fill Up The Name First!");
	}
	else if($("#last").val()=="")
	{
		alert("Fill Up The  User Name First!");
	}

	else if($("#password").val()=="")
	{
		alert("Fill Up The  Password First!");
	}
	else if($("#email").val()=="")
	{
		alert("Fill Up The  Email First!");
	}

	Sign();

	

});

//AJAX 

function Sign()
{	
	var first = $("#first").val();
	var last = $("#last").val();
	var password = $("#password").val();
	var email = $("#email").val();
	$.ajax({

			method:"post",
			url:"register.php",
			data:{
				first:first,
				last:last,
				password:password,
				email:email
			}
			

	});
	$("#msg").html("Clicked");
	$("#first").val("");
	$("#last").val("");
	$("#password").val("");
	$("#email").val("");
}

});