<?php 
require_once('header.php');
?>
<section class="body-cont">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <div class="panel-heading">
                <h2> Total Searches </h2>
                <span> Last 9 Monts </span> </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 more-options">
              <div class="btn-group">
                <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="../images/ic_more.png"  alt=""></button>
                <div class="dropdown-menu dropdown-menu-right">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
              </div>
            </div>
            <div class="panel-details"> <img src="../images/chart1.jpg"  alt="" class="img-fluid"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-12 col-xl-12">
              <div class="panel-heading">
                <h2> Overview </h2>
              </div>
            </div>
            <div class="panel-details p-0">
              <div class="over-view">
                <div class="over-view1"> <div class="circlechart" 
     data-percentage="60">
     50%
</div></div>
                <div class="over-view-txt"> 20/50 <br/>
                  <span> Domain Information </span> </div>
              </div>
              <div class="over-view">
                <div class="over-view1">   <div class="circlechart" data-percentage="10">Script</div></div>
                <div class="over-view-txt"> 02 <br/>
                  <span> Crawling </span> </div>
              </div>
              <div class="over-view">
                <div class="over-view1">   <div class="circlechart" data-percentage="75">Script</div></div>
                <div class="over-view-txt"> 12/20 <br/>
                  <span> Completed Crawing</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="panel-heading">
                <h2>Top Countries</h2>
              </div>
            </div>
            <div class="panel-details"> <img src="../images/map.jpg"  alt=""></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <div class="panel-heading">
                <h2> Top Keywords </h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 more-options">
              <a href="#"> Show all</a>
            </div>
            <div class="panel-details p-0">
              
              <div class="table-responsive">
              <table class="table table-hover">
  <thead class="table-heading1">
    <tr>
      <th scope="col">PREFIX</th>
      <th scope="col">KEYWORD</th>
      <th scope="col">VISITS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sharing</td>
      <td>Social sharing</td>
      <td>58</td>
    </tr>
    
    <tr>
      <td>Shopping</td>
      <td>Shopping</td>
      <td>5125</td>
    </tr>
    
    <tr>
      <td>Payment</td>
      <td>Payment method</td>
      <td>2589</td>
    </tr>
    
    <tr>
      <td>Sign In</td>
      <td>New User</td>
      <td>487</td>
    </tr>
    
    <tr>
      <td>Preference</td>
      <td>Settings</td>
      <td>487</td>
    </tr>
    
    
    
    
  </tbody>
</table>
              
              
              
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery-3.3.1.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/progresscircle.js"> </script>

<script> $(function(){

  $('.circlechart').circlechart();

});</script>
	<?php 
require_once('footer.php');
?>