<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  		<meta name="description" content=""/>
  		<meta name="author" content=""/>
	<title>NCA</title>
	 <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  	<!-- Vector CSS -->
  	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  	<!-- simplebar CSS-->
  	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  	<!-- Bootstrap core CSS-->
  	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  	<!-- animate CSS-->
  	<link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  	<!-- Icons CSS-->
  	<link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  	<!-- Sidebar CSS-->
  	<link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  	<!-- Custom Style-->
  	<link href="assets/css/app-style.css" rel="stylesheet"/>
	<style type="text/css">

	</style>
	<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
</head>
<body class="bg-white">
	<!-- Start wrapper-->
	<div id="wrapper">


	 

      
<!--End topbar header-->
	 <div class="container">
	 	<div class="row justify-content-center">
	 		<div class="coverup">
	 			<h5 class="header" id="result" style="color: white">NCA LOGIN</h5>
	 		
	 			<div class="form-outer">
	 			<form  method="post" id="form-data" enctype="application/x-www-form-urlencoded">
	 				<div id="first" class="page">
	 					
	 					<div class="form-group">
	 						<div class="label" style="color: white">Email</div>
	 						<input type="text" name="=email" class="form-control" placeholder="Email" id="email"  required>
	 						<b class="danger" id="emailError" style="color: white"></b>
	 					</div>
	 					<div class="form-group">
	 						<div class="label" style="color: white">Password</div>
	 						<input type="password" id=password name="password" class="form-control" placeholder="Password" id="pass">
	 						<b class="danger" id="passwordError" style="color: white"></b>
	 					</div>
						 <div class="form-group">
	 						<div class="label" style="color: white">Confirm Password</div>
	 						<input type="password" id=cpassword name="cpassword" class="form-control" placeholder="Password">
	 						<b class="danger" id="cpasswordError" style="color: white"></b>
	 					</div>
						 <div class="form-group btns">
	 				
	 						<button type="submit" name="submit" value="Submit" id="submit" class="success" style="color: white">Submit</button>
	 					 
	 					</div>
						<div class="spinner-border" role="status" id="spinner" style="visibility:hidden">
						 <span class="visually-hidden"></span>
							</div>
	 					</div>
	 				    </div>
	 				</div>

	 			</form>
	 		</div>
	 	</div>
	 </div>
	 </div><!--End wrapper-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript">
//  if(localStorage.getItem('token')==null){
//     //   location.href = "index.php"
//     }
// 	else{}
var para1 = new URLSearchParams();

$(document).ready(function(){

	//  if(localStorage.getItem('token')==null){
    // //   location.href = "index.php"
	// console.log("asdasd")
    // }
	// else{

		
	
$("#submit").click(function(e){
e.preventDefault();
if ($("#email").val()==''){
		$("#emailError").html('*');

	}	
else if($("#password").val()=='')	{
	$("#passwordError").html('*');
}
else if($("#cpassword").val()=='')	{
	$("#cpasswordError").html('*');
}
else if ($("#password").val()!=$("#cpassword").val()){
	$("#cpassError").html("*");
	alert("sDFSDF");
}

else
{
let spinner = document.getElementById("spinner");
	spinner.style.visibility = 'visible';
	
	var form = $('#form-data')[0];
	        // FormData object 
			var data = new FormData(form);
			data.append("password_confirmation",$("#cpassword").val());
			data.append("password",$("#password").val() );
			data.append("email",$("#email").val());
			console.log($("#cpassword").val());
			console.log($("#password").val());
	
		
	$.ajax({
		url:('https://nca-online-db.herokuapp.com/api/login'),
		contentType: false,
		processData: false,
		enctype: 'application/x-www-form-urlencoded',
		method:'post',
		dataType:'json',
		data: data,
		    success:function(response){	
				console.log(response.token)
				localStorage.setItem('token', response.token)
				para1.append("data1", $("#email").val());
			    	spinner.style.visibility = 'hidden';
        location.href = "index3.html" +"?" +  para1.toString(); 
		// para1.append("data1", $("#email").val()); 
        alert("Success")
	
            //  $("#form-data")[0].reset();
		       },error:function(jqXhr, textStatus, errorThrown){
             alert("Invalid Credentials")
						 console.log(jqXhr.responseText);
						 console.log("ERROR");
						 console.log(form);
			       	spinner.style.visibility = 'hidden';
					 }
	});
	
}
});
	

	});
</script>



</body>
</html>
