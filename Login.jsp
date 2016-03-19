<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Insert title here</title>
</head>
<body>
	<div class="container" align="center" >
		<form name="validation"  method="post"
			onSubmit=" return checkbae()">
			Email:<input type="text" size=18 name="emailcheck" data-container="body" data-trigger="focus"data-toggle="popover" 
			           data-placement="left"data-content="Please login with @umich.edu" id="emailCheckId" /> 
			<button class="btn btn-warning btn-md" type="submit" >Submit</button>
		</form>
	</div>
	<!--<script language="JavaScript1.2">  -->
	<script>
		$('#signup').submit(function() {
			validateEmail($('input').val());
			return false;
		});

		function checkemail() {
			var email = document.validation.emailcheck.value;
			var filteremail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
			//var Exemail = /^[\w-\.]+@([hotmail+\.]|[yahoo+\.]|[gmail+\.])+[\w-]{2,4}$/;
			var validemail = /^[\w-\.]+@([umich+\.])+[\edu]{2,4}$/;
			if (!email.match(filteremail)) {
				
  				$('.btn-warning').popover({title: "ERROR", content: "Please provide valid email", placement: "bottom"}); 
				
				//alert("Please enter a valid email address");

				
				return false;
			}
			if (!email.match(validemail)) {
				//alert("You can use only umich.edu address!")
				$('.btn-warning').popover({title: "ERROR", content: "You can use only umich.edu address!", placement: "bottom"}); 
				return false;
			}
			return true;
		}
	</script>
	<script>
		function checkbae() {
			if (document.layers || document.getElementById || document.all)
				return checkemail()
			else
				return true
		}
	</script>
	<script>
		$(function() {
			$("[data-toggle = 'popover']").popover();
		});
	</script>
</body>
</html>
