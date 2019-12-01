<?php 
require_once('header.php');
?>

<style>
  .current {
    color: green;
  }

  #pagination-demo li {
    display: inline-block;
  }
  #pagination-demo {
    position: absolute;
    bottom: 0px;
    left: calc(50% - 50px/2);
  }
</style>

<section class="body-cont">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-7 col-lg-12 col-xl-12 searchpreview-cont">
         <div class="form-row">
         
          <div class="col-2">
  <select class="custom-select custom-select-lg" id="">
    <option selected>All Domain</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
    </div>
    
    
    <div class="col-6">
     <div class="input-group mb-3">
  <input type="text" class="form-control form-control-lg searchValue" placeholder="Enter a keyword to search" aria-label="" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary resultSearch" type="button" id="resultSearch"><img src="../images/search-icon.png"  alt=""> </button>
  </div>
</div>
    </div>
    
    <div class="col-2 offset-2 text-right"> <div class="dropdown">
  <button class="btn dropdown-toggle filters filters1" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter <img src="images/filters.jpg"  alt=""></button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item jsonresult_check" type="button">Action</button>
    <button class="dropdown-item jsonresult_refresh" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div> </div>
    
  </div>
  
       <div class="col-12 col-sm-12 col-md-7 col-lg-12 col-xl-12">
       
       <div class="row">
     
       <div class="result-count mb-3 mt-4">Pages</div>
     <div class="search-result1 page-cont">
     
     <div class="search-result-cont "> 
        <div id="sortable1" class="draglistitem">
        <ul id="pagination-demo" class="pagination justify-content-center"></ul>
          </div>

</div>
    </div>
       </div>
        
      </div> 
      </div>
     </div>
  </div>
</section><?php 
require_once('header.php');
?>


<script type="text/javascript">

  $(document).ready(function() {

  var searchval;
        var values = [];
        // var deleteValuesRanking = [];
         $('.resultSearch, .jsonresult_refresh').click(function() {
            var searchval = $('.searchValue').val();
            $('.resultrankingsearch').addClass("show active");
            $('.resultranking').removeClass("show active");
            $('#sortable1').show();
            console.log(searchval)
            $('.search_innerText').text(searchval);
            $('.search_return').text('Back to Result-Ranking >' + searchval);
      /* Result Ranking Get API Callback value */
            $.ajax('http://13.232.131.155/portal/search?q='+ searchval +'&key=7072697961e1b353ec85523ac6c93d4d412540bebb1459494a&hl=true&hl.snippets=1&hl.fragsize=100&hl.fl=body', // request url
            {
              success: function(data, status, xhr) { // success callback function
              console.log(data.highlighting);
              var resultrankingData = data.response.docs
              var resultrankingStoreID = data.highlighting
              var resultrankingObj = {}
              var resultrankingStoreObj = {}

              for (x in resultrankingData) {
                resultrankingObj[x] = resultrankingData[x];
              }
              for (y in resultrankingStoreID) {
                    resultrankingStoreObj[y] = resultrankingStoreID[y];
                    console.log(resultrankingStoreObj[y]) 
                  }
              for (x in resultrankingObj) {
                  $("#sortable1").append("<div class='search-result' id ='search-result_"+x+"'> <div class='manage-result-option'> <div class='search-cancle-btn'> <a> <img src='../images/cancel.jpg'  alt=''> </a> </div></div><p> <a> "+ resultrankingObj[x].title +"</a></p><p> <span>"+ resultrankingObj[x].url +"</span></p><p class='rankingDatavalue' disabled>"+ resultrankingObj[x].id +"</p><p>"+ resultrankingStoreObj[resultrankingObj[x].id].body +"</p></div>");
              }
          
                pageSize = 3;

                var pageCount =  $(".search-result").length / pageSize;
                  for(var i = 0 ; i<pageCount;i++){
                      
                    $("#pagination-demo").append('<li class="page-item"><a class="page-link" href="#">'+(i+1)+'</a></li>');
                  }
                      $("#pagination-demo li").first().find("a").addClass("current")
                  showPage = function(page) {
                    $(".search-result").hide();
                    $(".search-result").each(function(n) {
                        if (n >= pageSize * (page - 1) && n < pageSize * page)
                            $(this).show();
                    });        
                }
                  
                showPage(1);

                $("#pagination-demo li a").click(function() {
                    $("#pagination-demo li a").removeClass("current");
                    $(this).addClass("current");
                    showPage(parseInt($(this).text())) 
                });         
      /* Result Ranking Sorting Re-arrange API Callback value */
              $('.jsonresult_check').click(function() {
                  $('#sortable1 > .search-result').each(function (index) {
                    var currentRowdetail = $(this).closest("div"); // Find the row
                    var currentEdittext = currentRowdetail.find(".rankingDatavalue").text(); 
                    values.push(currentEdittext);
                   });
                  console.log(values)
                  var form1 = new FormData();
                  form1.append("domain_name", "https://gic.delaware.gov");
                  form1.append("engine_name", "engine");
                  form1.append("rank_id", JSON.stringify(values));
                  form1.append("query", searchval);
                  form1.append("exclude_rank_id", "[]");

                  $.ajax({
                      url: 'http://13.232.131.155/portal/result_rerank',
                      data: form1,
                      contentType: false,
                      processData: false,
                      type: 'POST',
                      success: function(data){
                          console.log(data);
                      }
                  });
                  values = [];
               });
      /* Result Ranking Sorting delete API Callback value */
              $('.search-cancle-btn').on('click', function(event ) {
                var deleteValuesRanking = [];
                 var deleteranking = event.currentTarget.children[0].offsetParent.offsetParent.children[3].innerHTML
                 var deleteranking_hide = event.currentTarget.children[0].offsetParent.offsetParent.id
                  deleteValuesRanking.push(deleteranking);
                  console.log(deleteranking);
                  var form1 = new FormData();
                  form1.append("domain_name", "https://gic.delaware.gov");
                  form1.append("engine_name", engine);
                  form1.append("rank_id", JSON.stringify(values));
                  form1.append("query", searchval);
                  form1.append("exclude_rank_id", JSON.stringify(deleteValuesRanking));

                  $.ajax({
                      url: 'http://13.232.131.155/portal/result_rerank',
                      data: form1,
                      contentType: false,
                      processData: false,
                      type: 'POST',
                      success: function(data){
                          console.log(data);
                      }
                  });
                  $("#"+deleteranking_hide).remove()
                });
      /* Result Ranking Refreh API Callback value */
             /*  $('.jsonresult_refresh').click(function() {
                  $('#sortable1 > .search-result').each(function (index) {
                    var currentRowdetail = $(this).closest("div"); // Find the row
                    var currentEdittext = currentRowdetail.find(".rankingDatavalue").text(); 
                    values.push(currentEdittext);
                   });
                  console.log(values)
                  var form1 = new FormData();
                  form1.append("domain_name", "https://gic.delaware.gov");
                  form1.append("engine_name", "wisky");
                  form1.append("rank_id", JSON.stringify(values));
                  form1.append("query", searchval);
                  form1.append("exclude_rank_id", "[]");

                  $.ajax({
                      url: 'http://13.232.131.155/portal/result_rerank',
                      data: form1,
                      contentType: false,
                      processData: false,
                      type: 'POST',
                      success: function(data){
                          console.log(data);
                      }
                  });
                  values = [];
               });   */
              
              // console.log(deleteValuesRanking);
              
            }
          }); 
         });
         
         $('#myBtn').click(function() {
            $('.searchValuepopup').val('');
            $('.resultrankingpopup').addClass("show active");
            $('.resultrankingsearch').removeClass("show active");
         });
         $('.close_popup, .resultpopupSearch').click(function() {
            $('.resultrankingsearch').addClass("show active");
            $('.resultrankingpopup').removeClass("show active");
         });
         $('.search_return').click(function() {
            location.reload();
            $('.searchValue').val('');
            $('.resultranking').addClass("show active");
            $('.resultrankingsearch').removeClass("show active");
            // $('.searchValuepopup').val('');
            // $('#sortable1').remove();
         
         });
        //  $( function() {
        //     $( "#sortable1" ).sortable({
        //         connectWith: ".draglistitem"
        //       }).disableSelection();

        //     });

});
</script>


<?php 
require_once('footer.php');
?>