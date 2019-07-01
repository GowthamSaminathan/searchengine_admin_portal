<?php 
require_once('header.php');
?>
<style>
#sortable {
    position: relative;
    top: 0px;
}
</style>
<section class="body-cont">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-7 col-lg-10 col-xl-10 offset-xl-1 offset-lg-1 searchpreview-cont">
				<div class="form-row">
					<div class="col">
						<select class="custom-select custom-select-lg" id="apiName">
							<option value="domain_read_key" selected>Domain Read</option>
							<option value="domain_write_key">Domain Write</option>
							<option value="engine_read_key">Engine Read</option>
							<option value="engine_write_key">Engine Write</option>
						</select>
					</div>
					<div class="col-9">
						<div class="input-group mb-3">
							<input type="text" class="form-control form-control-lg" placeholder="Enter a keyword to search" aria-label="" aria-describedby="button-addon2" id="apiSearchbox">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button" id="apiButton">Submit</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-7 col-lg-12 col-xl-12">
						<div class="row">
							<div class="result-count mb-3 mt-4">Pages</div>
							<div class="search-result1 page-cont">
								<div class="search-result-cont">
									<div id="sortable" class="draglistitem"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
        $(document).ready(function() {
          $('#apiButton').click(function() {
            var apikeyName = $("#apiName").val();
            var apikeySearch = $("#apiSearchbox").val();
            var form = new FormData();
            if(apikeyName == "domain_read_key" || apikeyName == "domain_write_key" ){
              form.append("refresh", apikeyName);
              form.append("domain_name", "https://gic.delaware.gov");
            }else if (apikeyName == "engine_read_key" || apikeyName == "engine_write_key") {
              form.append("refresh", apikeyName);
            }
               form.append("engine_name", apikeySearch);
              $.ajax({
                  url: 'http://13.232.131.155/portal/manage_api_key',
                  data: form,
                  contentType: false,
                  processData: false,
                  type: 'POST',
                  success: function(data){
                      console.log(data);
                  }
              });
              $.ajax('http://13.232.131.155/portal/manage_api_key', // request url
              {
              success: function(data, status, xhr) { // success callback function
                console.log(data);
                var apiStoredata = data.data
                var apiStorevalue = {};
                for (x in apiStoredata) {
                  apiStorevalue[x] =apiStoredata[x]
                }  
                for (x in apiStorevalue) {
                  $("#sortable").append("<div class='search-result' id ='search-result_"+x+"'><div class='manage-result-option'></div><p> Engine Name : "+ apiStorevalue[x].EngineName +"</p><p><span> Type : "+ apiStorevalue[x].type +"</span></p></div>");
                }
              }
            });
          });
        });
  
	</script>
	<?php 
require_once('footer.php');
?>