<?php 
require_once('header.php');
?>

<section class="body-cont">

 <!-- The overlay -->

  <div class="container">
    <div class="row">
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">

<div class="setting-left">

<div class="left-heading"> 

SETTINGS

</div>


<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">URL Management</a>
      <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">App Rules</a>
      <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Crawl Schedule</a>
      <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Manual URL</a>
      <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Advanced</a>
    </div>


</div>
    
    </div>
    
    
       <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
       
       <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-2-tab"><div class="row"> 




 <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 manage-domain-txt mt-4"> 
    
    <h2> Manage Crawl Rules for <?php echo $_GET['domain']; ?></h2>
    
    You can control how your domain is crawled by adding path-based rules
    
    
     </div>
    
     
     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <div class="panel-heading panel-heading2">
                <h2> Whitelist Rules </h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 more-options text-right">
             
             <button type="button" class="btn btn-primary addRulebutton" data-toggle="modal" data-target="#addRuleModel">+ Add Rule</button>
             
            </div>
            <div class="panel-details p-0 rules-table">
              
              <div class="table-responsive">
                <table class="table table-hover" id="whitelistTable">
                  <thead class="table-heading1">
                    <tr>
                      <th scope="col">Rule</th>
                      <th scope="col">Type</th>
                      <th scope="col"> </th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                      
                      
                    </tbody>
                </table>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="panel">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
              <div class="panel-heading panel-heading2">
                <h2> Blacklist Rules </h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 more-options text-right">
             
             <button type="button" class="btn btn-primary addRulebutton" data-toggle="modal" data-target="#addBlistRuleModel">+ Add Rule</button>
             
            </div>
            <div class="panel-details p-0 rules-table">
              
              <div class="table-responsive">
                <table class="table table-hover" id="blackListTable">
                  <thead class="table-heading1">
                    <tr>
                      <th scope="col">Rule</th>
                      <th scope="col">Type</th>
                      <th scope="col"> </th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                      
                  </tbody>
                </table>
              
              </div>
              
              
              
            </div>
          </div>
        </div>
        
        
      </div>
     
     
      </div></div>
      <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-3-tab">tab2</div>
      <!-- <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-4-tab">tab3</div> -->

      <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-4-tab">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="panel">
                  <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 manage-domain-txt manage-domain-txt2">
                        <h2> Crawl Schedule </h2>
                        Schedule your Crawling by date, month and time.
                     </div>
                     <div class="panel-details p-0 rules-table">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="crawl-schedule-option">
                            <form name="cschedule-form" id="cschedule-form">
                              <div class="row">
                                
                                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 days">
                                    <label> Week</label>
                                    <ul>
                                        <li> <input type='checkbox' name='csweek[]' value='su'>S</li>
                                        <li> <input type='checkbox' name='csweek[]' value='mo'>M</li>
                                        <li> <input type='checkbox' name='csweek[]' value='tu'>T</li>
                                        <li> <input type='checkbox' name='csweek[]' value='we'>W</li>
                                        <li> <input type='checkbox' name='csweek[]' value='th'>T</li>
                                        <li> <input type='checkbox' name='csweek[]' value='fr'>F</li>
                                        <li> <input type='checkbox' name='csweek[]' value='sa'>S</li>
                                    </ul>
                                  </div>
                                  <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <label> Select Month</label>
                                    <select class="custom-select" id="csmonth" name="csmonth">
                                       <option selected>Choose...</option>
                                       <option value="1">January </option>
                                       <option value="2">February </option>
                                       <option value="3">March </option>
                                    </select>
                                  </div> -->
                                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <label> Set Time</label>
                                    <input type='time' name='cstime' id="cstime" value=''>
                                   <!--  <select class="custom-select" id="cstime" name="cstime">
                                       <option selected>Choose...</option>
                                       <option value="1">10.50 AM </option>
                                    </select> -->
                                  </div>
                                  <span> <button class="btn btn-outline-secondary save-btn"> Save </button></span>
                              </div></form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-5-tab">tab4</div>

      <div class="tab-pane fade show active" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="panel">
                  <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 manage-domain-txt manage-domain-txt2">
                        <h2> Set Preference </h2>
                        Below are the options to manage URL's.
                     </div>
                     <div class="panel-details p-0 rules-table">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           <div class="setpreference">
                             <form name="asetting-form" id="asetting-form">
                              <ul id="asettinglist-list">
                                 <li class="custom-control custom-checkbox">  <input type="checkbox" class="custom-control-input" id="customCheck1" value="" name="onlysitemaps"> <label class="custom-control-label" for="customCheck1" >Use Only Sitemaps</label></li>
                                 <li class="custom-control custom-checkbox">  <input type="checkbox" class="custom-control-input" id="customCheck2" value="" name="sitemaps">  <label class="custom-control-label" for="customCheck2">Use Sitemaps</label></li>
                                 <li class="custom-control custom-checkbox">  <input type="checkbox" class="custom-control-input" id="customCheck3" value="" name="robot"> <label class="custom-control-label" for="customCheck3">Allow Robot.txt</label></li>
                                 <li class="custom-control custom-checkbox">  <input type="number" min="1" max="10" id="customCheck4" value="" name="parallel"> <label for="customCheck4">Parallel Crawl</label></li>
                              </ul>
                              <span> <button class="btn btn-outline-secondary save-btn"> Save </button></span>
                            </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



    </div>


    
    </div>
    
       
      
    </div>
  </div>
</section>


<script type="text/javascript">

        //update Crawl Schedule
        $('#cschedule-form').submit(function(event) {
            event.preventDefault();

             var csweek = $("#cschedule-form input:checkbox:checked").map(function(){
                return $(this).val();
              }).get(); 

            var cstime = '';
            cstime = document.getElementById('cstime').value
            /*var [h,m] = t.split(":");
            cstime += (h%12+12*(h%12==0));
            cstime += ":"+m;
            cstime += h >= 12 ? 'PM' : 'AM'*/

            var crschedule = [];
            crschedule.push({
                        week: csweek, 
                        time: cstime
                    });

          var crscheduleJson = JSON.stringify(crschedule);

          var csaction = 'set';
          var cselement = 'CrawlSchedule';
          var csvalue = crscheduleJson; 

          update_domain_conf(engine,domain_name=domain,csaction,cselement, csvalue, onsuccess=function (result){
            console.log(result);
          });

        });


        


        display_asetting_list();
        function display_asetting_list(){
            get_domain(engine,domain_name=domain,onsuccess=function (result){

               //display advance setting - start
              var asettinglist = result[0].AdvancedSettings;

              if (asettinglist['Use Only Sitemaps'] == 'yes') {
                $('#customCheck1').prop('checked', true);
              }else{
                $('#customCheck1').prop('checked', false);
              }

              if (asettinglist['Use Sitemaps'] == 'yes') {
                $('#customCheck2').prop('checked', true);
              }else{
                $('#customCheck2').prop('checked', false);
              }

              if (asettinglist['Allow Robot.txt'] == 'yes') {
                $('#customCheck3').prop('checked', true);
              }else{
                $('#customCheck3').prop('checked', false);
              }

              if (asettinglist['ParallelCrawler'] != '') {
                $('#customCheck4').val(asettinglist['ParallelCrawler']);
              }
              //display advance setting - end


              //display Crawl Schedule -start
              var cschedulelist = result[0].CrawlSchedule[0];
              $("#cstime").val(cschedulelist.time);
              $("#csweek").val(cschedulelist.week);

              var csweekArr = cschedulelist.week;
              for(var i=0; i<csweekArr.length; i++){
                $('input[type="checkbox"][value="' + csweekArr[i] +'"]').prop('checked', 'checked');
              }

            });
        }




        //update advance setting
        $('#asetting-form').submit(function(event) {
            event.preventDefault();
            var jsonObj = '{';
            if ($('#customCheck1').is(":checked"))
            {              
                      jsonObj +='"Use Only Sitemaps": "yes",';
            }else{              
                      jsonObj +='"Use Only Sitemaps":"no",';
            }

            if ($('#customCheck2').is(":checked"))
            {              
                      jsonObj +='"Use Sitemaps":"yes",';
            }else{
                      jsonObj +='"Use Sitemaps": "no",';
            }

            if ($('#customCheck3').is(":checked"))
            {
                      jsonObj +='"Allow Robot.txt": "yes",';
            }else{
                      jsonObj +='"Allow Robot.txt":"no",';
            }

            var pcrawler = $('#customCheck4').val();
            if (pcrawler != '') {
                      jsonObj +='"ParallelCrawler":'+pcrawler+'';
            }
            jsonObj +="}";
            
            var action = 'set';
            var element = 'AdvancedSettings';
            var value = jsonObj; 

            update_domain_conf(engine,domain_name=domain,action,element, value, onsuccess=function (result){
              //console.log(result);
            });

        });
</script>

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
  
  <div class="container">
  
  <div class="row">
  
   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 add-domin-heading"> <h2>Add a domain to Delaware Bussiness</h2>Enter your website URL below to ingest your content for later searching. </div>
   
   
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
</div><label>Website URL</label> <input name="" type="text" class="form-control add-domin-filed" placeholder="http://example.com"> </div>
    
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mt-4">  <button class="btn btn1 btn2"> Add Domain</button> </div>
   
    
  
  
   </div>
  
  
  
  </div>
  
  

  </div>

</div>


<!-- Modal - Whitelist Rules -->
<div class="modal fade" id="addRuleModel" tabindex="-1" role="dialog" aria-labelledby="addRuleModelTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a Whitelist Rule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Only allow URLs which</p>
        <select name="type" id="white-list-type">
          <option value="prefix">begin with</option>
          <option value="substring">contain</option>
          <option value="suffix">end with</option>
          <option value="regex">match regex</option>
        </select>
        <input type="text" name="pattern" id="white-rule-pattern" value="" placeholder="/example/path" autocomplete="off" class="placeholder">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-whitelist">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal- Blacklist Rules -->
<div class="modal fade" id="addBlistRuleModel" tabindex="-1" role="dialog" aria-labelledby="addBlistRuleModel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a Blacklist Rule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Only allow URLs which</p>
        <select name="type" id="bloack-list-type">
          <option value="prefix">begin with</option>
          <option value="substring">contain</option>
          <option value="suffix">end with</option>
          <option value="regex">match regex</option>
        </select>
        <input type="text" name="pattern" id="black-rule-pattern" value="" placeholder="/example/path" autocomplete="off" class="placeholder">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add-blacklist">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
update_crwel_rules();
function update_crwel_rules(){
    get_domain(engine,domain_name=domain,onsuccess=function (result){

    $(result).each(function(index,data)
    {

      if (data.WhiteListApp) {
        var whitelist = '';
        $(data.WhiteListApp).each(function(index,wlist){
          whitelist += '<tr>';
            whitelist += '<td class="wlist">'+wlist+'</td>';
            whitelist += '<td>Begin with</td>';
            //whitelist += '<td align="right"> <a href="javascript:delete_whitelist( "'+wlist+'");" ><img src="../images/delete.png" alt=""></a></td>';
            whitelist += '<td align="right"> <a href="javascript:delete_whitelist(';
            whitelist += "'"+wlist+"'";
            whitelist +=');" ><img src="../images/delete.png" alt=""></a></td>';
            whitelist += '</tr>';     
        });
        $('#whitelistTable tbody').html(whitelist);
      }

      if (data.BlackListApp) {
        var blackList = '';

        $(data.BlackListApp).each(function(index,blist){
          blackList += '<tr>';
            blackList += '<td>'+blist+'</td>';
            blackList += '<td>Begin with</td>';
            //blackList += '<td align="right"> <a href="#"><img src="../images/delete.png" alt=""></a></td>';
            blackList += '<td align="right"> <a href="javascript:delete_blacklist(';
            blackList += "'"+blist+"'";
            blackList +=');" ><img src="../images/delete.png" alt=""></a></td>';
            blackList += '</tr>';     
        });
        $('#blackListTable tbody').html(blackList);
      }
      

    });

    });
}

</script>
<?php 
require_once('footer.php');
?>