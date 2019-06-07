
//get engine details
function set_engine(onsuccess){

  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "/portal/get_engine_data",
    "method": "GET",
    "dataType": "json",
    "headers": {
      "Cache-Control": "no-cache",
    }
  }

  $.ajax(settings).done(function (response) {

      //console.log(response);
      
    if(response.result == "success"){
      // Extracting Domains from response
      domains = response.data
      if (domains.constructor === Array){
        // Valid domain data found
        onsuccess(domains)

      }
    }else if(response.result == "failed" && response.message == "Please login again"){
        // Session expired or not valid session
        //$(location).attr('href', 'index.html')
    }else{
      console.log("Domain Portal failed> >")
      //console.log(response)
    }

  });
}



function get_domain(engine_name,domain_name,onsuccess){

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "/portal/get_domain_data?domain_name="+domain_name+"&engine_name="+engine_name,
  "method": "GET",
  "dataType": "json",
  "headers": {
    "Cache-Control": "no-cache",
  }
}

$.ajax(settings).done(function (response) {

    //console.log(response);
    
  if(response.result == "success"){
  	// Extracting Domains from response
  	
  	domains = response.data
  	if (domains.constructor === Array){
  		// Valid domain data found
  		onsuccess(domains)

  	}
  }
  	else if(response.result == "failed" && response.message == "Please login again")
  	{
  		// Session expired or not valid session
  		//$(location).attr('href', 'index.html')
  	}
	
	else
	{
  	console.log("Domain Portal failed >")
  	//console.log(response)
  	}

});
}

//get engine details
function get_engine(engine_name,onsuccess){

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "/portal/get_engine_data?engine_name="+engine_name,
  "method": "GET",
  "dataType": "json",
  "headers": {
    "Cache-Control": "no-cache",
  }
}

$.ajax(settings).done(function (response) {

    //console.log(response);
    
  if(response.result == "success"){
    // Extracting Domains from response
    
    domains = response.data
    if (domains.constructor === Array){
      // Valid domain data found
      onsuccess(domains)

    }
  }
    else if(response.result == "failed" && response.message == "Please login again")
    {
      // Session expired or not valid session
      //$(location).attr('href', 'index.html')
    }
  
  else
  {
    console.log("Domain Portal failed >")
    //console.log(response)
    }

});
}


//create domain
function create_domain(engine_name,domain_name,onsuccess){

var settings = {
  "async": true,
  "crossDomain": true,
  "data": { 'engine_name': engine_name, 'domain_name' : domain_name} ,
  "url": "/portal/create_domain",
  "method": "POST",
  "dataType": "json",
  "headers": {
    "Cache-Control": "no-cache",
  }
}

$.ajax(settings).done(function (response) {


  if(response.result == "success"){
    // Extracting Domains from response 
    $(location).attr('href', 'domainlist-manage-crawlrules.php')  
    console.log(response);    
  }else if(response.result == "failed" && response.message == "Please login again"){
      // Session expired or not valid session
      //$(location).attr('href', 'index.html')
  }else{
    console.log("Domain Portal failed >")
   // console.log(response)
    }

});
}



//update_domain_conf
function update_domain_conf(engine_name, domain_name, action, element, value, onsuccess){
var settings = {
  "async": true,
  "crossDomain": true,
  "data": { 'engine_name': engine_name, 'domain_name' : domain_name, 'action' : action, 'element' : element, 'value' : value} ,
  "url": "/portal/domain_update",
  "method": "PUT",
  "dataType": "json",
  "headers": {
    "Cache-Control": "no-cache",
  }
}

$.ajax(settings).done(function (response) {


  if(response.result == "success"){
    // Extracting Domains from response 
    //$(location).attr('href', 'domainlist-manage-crawlrules.php')  
    onsuccess(response)  
  }else if(response.result == "failed" && response.message == "Please login again"){
      // Session expired or not valid session
      //$(location).attr('href', 'index.html')
  }else{
    console.log("Domain Portal failed >")
   // console.log(response)
    }

});
}

//get domain config
function get_domain_conf(engine_name, domain_name, onsuccess){
var settings = {
  "async": true,
  "crossDomain": true,
  "data": { 'engine_name': engine_name, 'domain_name' : domain_name, 'action' : action, 'element' : element, 'value' : value} ,
  "url": "/portal/domain_update",
  "method": "PUT",
  "dataType": "json",
  "headers": {
    "Cache-Control": "no-cache",
  }
}

$.ajax(settings).done(function (response) {


  if(response.result == "success"){
    // Extracting Domains from response 
    //$(location).attr('href', 'domainlist-manage-crawlrules.php')  
    console.log(response);    
  }else if(response.result == "failed" && response.message == "Please login again"){
      // Session expired or not valid session
      //$(location).attr('href', 'index.html')
  }else{
    console.log("Domain Portal failed >")
   // console.log(response)
    }

});
}