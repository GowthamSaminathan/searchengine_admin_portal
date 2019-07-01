<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Search - Domain</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="../js/jquery-3.3.1.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/jquery.cookie.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!---------------------- API LIB -------------------------------- -->
<script type="text/javascript" src="../js/portal_api.js"></script>
<script type="text/javascript" src="../js/portal.js"></script>
<script type="text/javascript">
var engine = $.cookie('currentengine');
const searchParams = new URLSearchParams(window.location.search);
const domain = searchParams.get('domain');
get_domain(engine,domain_name=domain,onsuccess=function (result){

  console.log(result)
  console.log(domain_name)
});

</script>
</head>
<body>
<header class="header-cont">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2"> <img src="../images/logo.png"  alt=""></div>
      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="dropdown">
          <button class="btn change-domain-btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="../images/ic_changedomain.png"  alt=""> <script type="text/javascript"> document.write(engine); </script> </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="engineList"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
        <div class="user-right">
          <div class="top-btn">
            <button class="btn btn1 btn-primary" onClick="openNavengine()"> <img src="../images/icon1.png"  alt=""> Create a New Engine</button>
          </div>
          <div class="notification"> <div class="btn-group">
  <a  class="btn notifi-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="../images/notification.png"  alt=""></a>
  <div class="dropdown-menu dropdown-menu-right notification-txt">
    
    <ul>
    
    <li><a href="#"> Vestibulum ante ipsum primis in faucibus orci luctus ..... </a></li>
     <li><a href="#"> Vestibulum ante ipsum primis in faucibus orci luctus ..... </a></li>
      <li><a href="#"> Vestibulum ante ipsum primis in faucibus orci luctus ..... </a></li>
       <li><a href="#"> Vestibulum ante ipsum primis in faucibus orci luctus ..... </a></li>
        <li><a href="#"> Vestibulum ante ipsum primis in faucibus orci luctus ..... </a></li>
    
    </ul>
   
     
    
    
  </div>
</div></div>
          <div class="user-profile">
            <div class="dropdown"> <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span> </span> <img src="../images/user.jpg" alt=""> </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; transform: translate3d(-13px, 42px, 0px); top: 0px; left: 0px; will-change: transform;"> <a class="dropdown-item" href="#"> Setting </a> <a class="dropdown-item" href="#"> Logout</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="header-row2">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h1> <script type="text/javascript"> document.write(engine); </script></h1>
      </div>
      
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">  
       
       <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class=""> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"> <a class="nav-link" href="#"> Dashboard</a> </li>
              <li class="nav-item"> <a class="nav-link active" href="/pages/domain.php">Domain </a> </li>
              <li class="nav-item"> <a class="nav-link " href="#"> Analytics</a> </li>
              <li class="nav-item"> <a class="nav-link " href="/pages/search-preview.php"> Search Preview</a> </li>
              <li class="nav-item"> <a class="nav-link " href="/pages/search-customize.php"> Search Customize </a> </li>
              <li class="nav-item"> <a class="nav-link " href="/pages/page-content.php"> Page Content </a> </li>
              <li class="nav-item"> <a class="nav-link " href="/pages/api.php">API </a> </li>
            </ul>
          </div>
        </div>
      </nav>
       
       </div>
       
       
      
    </div>
  </div>
</section>
<div id="myNavengine" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onClick="closeNavengine()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  
  <div class="container">
  
  <div class="row">
  
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 add-domin-heading"> <h2>Add a Engine to <script type="text/javascript"> document.write(engine); </script></h2>Enter your website URL below to ingest your content for later searching. </div>
   
   
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 offset-xl-2 "> <div class="loader loader--style3" title="2">
  <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
  <path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
    <animateTransform attributeType="xml"
      attributeName="transform"
      type="rotate"
      from="0 25 25"
      to="360 25 25"
      dur="0.6s"
      repeatCount="indefinite"/>
    </path>
  </svg>
</div><label>Website URL</label> <input name="engineName" type="text" id="engine-name" class="form-control add-domin-filed" placeholder="http://example.com"> </div>
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-4">  <button id="add-engine-btn" class="btn btn1 btn2"> Add Engine</button> </div>
   
    
  
  
   </div>
  
  
  
  </div>
  
  

  </div>

</div>
<script type="text/javascript">

  $(document).ready(function() {
    /* var header = document.getElementById("navbarResponsive");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      if (current.length > 0) { 
        current[0].className = current[0].className.replace(" active", "");
      }
      this.className += " active";
      });
    } */
  });
</script>
<?php
//if ($_GET['engine']) {
  //echo "<input type='hidden' value='".$_GET['engine']."' name='engine' id='engine'>";
//}
/*if ($_GET['domain']) {
  echo "<input type='hidden' value='".$_GET['domain']."' name='domain' id='domain'>";
}*/
?>

