<?php 
require_once('header.php');
?>

<section class="body-cont">

 <!-- The overlay -->

  <div class="container">
    <div class="row">
    
    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 manage-domain-txt"> 
    
    <h2> Manage domains </h2>
    
    The domains below are crawled to ingest documents into your Engine. Click a domain 
to make changes to its associated rules.
    
    
     </div>
     
     
     <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 text-right">  <button class="btn btn1 btn-primary" onClick="openNav()"> <img src="../images/icon1.png"  alt=""> Create New Domain</button>  </div>
     
     
    
    
    
      
      
      
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <div class="panel-heading panel-heading2">
                <h2> Domains </h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 more-options text-right">
             <div class="input-group float-right">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> <img src="../images/search-icon.jpg"  alt=""></span>
  </div>
  <input class="form-control search-filed1" placeholder="Search..." aria-label="" aria-describedby="basic-addon1" type="text">
</div>
            </div>
            <div class="panel-details p-0 domain-table">
               <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
              <div class="table-responsive">
              <table class="table table-hover display" id="domainlistTable">
                  <thead class="table-heading1">
                    <tr>
                      <th scope="col">DOMAIN</th>
                      <th scope="col">PAGES</th>
                      <th scope="col">DATE CREATED</th>
                      <th scope="col">LAST CRAWL</th>
                      <th scope="col">CREATED BY</th>
                      <th scope="col">SCHEDULE</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                              <td><a href="#">https://www.pexels.com/</a></td>
                              <td>24</td>
                              <td>14 Mar, 2018</td>
                              <td>18 Mar, 2018</td>
                              <td><img src="../images/user.jpg" class="user-img" alt=""> Christina Firth</td>
                              <td>Every 24 Hours</td>
                              <td align="center"><div class="btn-group">
                          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../images/action-icon.jpg"  alt=""></button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                          </div>
                        </div></td>
                    </tr>
                   
                    </tbody>
                </table>
              
              
              
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
      
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
       
       <div class="recent-msg"> <img src="../images/icon2.jpg"  alt=""> The most recently completed full crawl finished July 29, 2018 at 7:26PM UTC. </div>
       
      </div>
      
    </div>
  </div>
</section>

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  
  <div class="container">
  
  <div class="row">
  
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 add-domin-heading"> <h2>Add a domain to <script type="text/javascript"> document.write(engine); </script></h2>Enter your website URL below to ingest your content for later searching. </div>
   
   
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
</div><label>Website URL</label> <input name="domainName" type="text" id="domain-name" class="form-control add-domin-filed" placeholder="http://example.com"> </div>
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-4">  <button id="add-domain-btn" class="btn btn1 btn2"> Add Domain</button> </div>
   
    
  
  
   </div>
  
  
  
  </div>
  
  

  </div>

</div>



<?php 
require_once('footer.php');
?>