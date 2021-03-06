<?php header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000')?>

<html lang="en">

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:41:38 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>NCA</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="index.html">
        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">NCA Admin</h5>
      </a>
    </div>

        </li>

        
        <li>
         
        </li>
        <!--li>
          
    -->
    </div>
    <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-white">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
   
  </ul>
  <ul class="navbar-nav ml-auto align-items-center">
    
    <li class="nav-item ">
      <button class="btn btn-danger" id="logout" >LOGOUT</button>
    </li>
  </ul>
     
  <!-- <ul class="navbar-nav align-items-center right-nav-link">
    
  </ul> -->
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
	  
      <!-- <div class="row mt-3">
        
		
      </div>End Row-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
		        <div class="card-header border-0">
                
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a id="delete" class="dropdown-item" href="#">Delete</a>
						<a id="edit" class="dropdown-item" href="#">Edit</a>
						
					 </div>
				  </div>
                 </div>
                </div>
              
                <fieldset>
                  <div  style="margin-left:50px; font-size:15px">
                <div><b>Role:<b class="display-field"> Basestation</b></b></div>
                <br>
                
                <div class="display-label">ID:<b id="ID"></b></div>
                <br>

                <div class="display-label"><b>SERIAL NUMBER: <b id="SID"></b></b></div>
                <br>

                <div class="display-label"><b>DISTRICT: <b id="DIS"></b></b></div>
               
                <br>
                <div class="display-label"><b>OPERATOR:  <b id="OP"></b></b></div>
                <br>

                <div class="display-label"><b>LONGITUDE: <b id="LONG"></b></b></div>
                <br>

                <div class="display-label"><b>LATITTUDE:<b id="LAT"></b></b></div>
                </div>
                </fieldset>
                <br>
                <!-- <p class="msg-info"></p> -->
                <!-- <h3 id="channelsd"></h3> -->
                <!-- <button class ="btn btn-primary" id = "btn">DELETE</button> -->
                

              
          </div>
        </div>
      </div><!--End Row-->

      <!--
      
      </div>End Row-->
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  

 
  <script>

if(localStorage.getItem('token')==null){
      location.href = "index.php"
      console.log("empty")
    }
    else{

$(document).ready(function(){



  var para1 = new URLSearchParams(window.location.search);
    var para2 = new URLSearchParams(window.location.search);
    var data1 = para1.get("data1");
    var data2 = para1.get("data2");
    var data3 = para1.get("data3");
    var data4 = para1.get("data4");
    var data5 = para1.get("data5");
    var data6 = para1.get("data6");
    var data7 = para1.get("data7");
    var data8 = para1.get("data8");
    $("#ID").html(data6)
    $("#SID").html(data2)
    $("#OP").html(data4)
    $("#DIS").html(data3)
    $("#LONG").html(data7)
    $("#LAT").html(data8)
    console.log(data6)


    
 
   $("#delete").click(function(){
    console.log("DELETE")
    var dict = {deviceId : data6};
    $.ajax({
		url:'https://nca-online-db.herokuapp.com/api/delete_nca_devices',
    headers: {"Authorization": "Bearer " + localStorage.getItem('token')},
		type:'POST',
		data : JSON.stringify(dict),
    contentType: "application/json",
		    success:function(response){
          window.location.href = "index3.html";
          console.log(response)			
		             },error:function(jqXhr, textStatus, errorThrown){
						 console.log(errorThrown)
					 }
	});
  })
    $("#edit").click(function(){
      var para1 = new URLSearchParams();
    var para2 = new URLSearchParams();
    var para3 = new URLSearchParams();
    var para4 = new URLSearchParams();
    var para5 = new URLSearchParams();
    var para6 = new URLSearchParams();
    var para7 = new URLSearchParams();
    var para8 = new URLSearchParams();
    para1.append("data1", data1); 
    para2.append("data2",  data2);
    para3.append("data3",  data3);  
    para4.append("data4",  data4);  
    para5.append("data5",  data5);  
    para6.append("data6",  data6);
    para7.append("data7",  data7);
    para8.append("data8",  data8);

    location.href = "index123.php"+"?" +  para1.toString() +"&"+ para2.toString()+"&"+ para3.toString()+"&"+ para4.toString()+"&"+ para5.toString()+"&"+ para6.toString()+"&"+ para7.toString()+"&"+ para8.toString();


    })


  


//   let btn = document.getElementById("btn");

//   btn.addEventListener("click", () => {
  
//   // Fetching Button value
//   let btnValue = btn.value;
//   var dict = {deviceId : "329a2c7a-fbad-4c34-a288-c38438cd2d11"};
//   $.ajax({
   
//     // 'https://fdfdfdv.herokuapp.com/spectrum'
// 		url:' http://127.0.0.1:5000/spectrum',
// 		type:'POST',
// 		data : JSON.stringify(dict),
//     contentType: "application/json",
// 		    success:function(response){
//           console.log(response.databaseChange.channel)
// 	$("#channelsd").html(response.databaseChange.channel)
   

			
// 		             },error:function(jqXhr, textStatus, errorThrown){
// 						 console.log(errorThrown)
// 					 }
// 	});
// });

//   
  
 
 
});

    }

  </script>
  
</body>

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:43:13 GMT -->
</html>
