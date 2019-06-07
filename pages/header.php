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
<script src="../js/jquery.cookie.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!---------------------- API LIB -------------------------------- -->
<script type="text/javascript" src="../js/portal_api.js"></script>
<script type="text/javascript">
var engine = $.cookie('currentengine');
const searchParams = new URLSearchParams(window.location.search);
const domain = searchParams.get('domain');

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
            <button class="btn btn1 btn-primary"> <img src="../images/icon1.png"  alt=""> Create a New Engine</button>
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
              <li class="nav-item"> <a class="nav-link " href="#">API </a> </li>
            </ul>
          </div>
        </div>
      </nav>
       
       </div>
       
       
      
    </div>
  </div>
</section>
<?php
//if ($_GET['engine']) {
  //echo "<input type='hidden' value='".$_GET['engine']."' name='engine' id='engine'>";
//}
/*if ($_GET['domain']) {
  echo "<input type='hidden' value='".$_GET['domain']."' name='domain' id='domain'>";
}*/
?>

