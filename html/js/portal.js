
//search customize - weight slider script
$(document).ready(function() {
	$('.slideControl').slideControl();
});

$(function(){

  $('.circlechart').circlechart();

});

$(document).ready( function () {
    $('#table_1').DataTable(
  {
     paging: true,
      searching: false,
  }
  
  
  );
} );

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
} 
/* Open when someone clicks on the span element */
function openNavengine() {
    document.getElementById("myNavengine").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNavengine() {
    document.getElementById("myNavengine").style.width = "0%";
} 

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();

// engine = wisky;

// set_current_engine( 'wisky');

//set engine globally - when click in header main menu
set_engine(onsuccess=function (result){
  var engineheadList = '';
  var defaultEngine = 0;

    // if (engine.length) {
    //   defaultEngine = 1;
    // }

  $(result).each(function(index,data){    

    if (data.type == 'engine') {
      // if (defaultEngine == 0) {

      // }
     
      engineheadList +='<a class="dropdown-item" href="javascript:set_current_engine( ';
      engineheadList +="'"+data.EngineName+"'";
      engineheadList +=');">'+data.EngineName+'</a> ';
      // defaultEngine = 1;
    }
    
  });
  $('#engineList').html(engineheadList);

  /******************Domain list for Domain page *******************/
get_engine(engine,onsuccess=function (result){

  var domainList = '';
  var scheduled = '';
  var no_of_pages = '';
  $(result).each(function(index,data){
    
    theDate = new Date( Date.parse(data.CreatedAt));
    var date = theDate.getDate();
    var month = theDate.getMonth(); //Be careful! January is 0 not 1
    var year = theDate.getFullYear();
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var CreatedDate = date+' '+monthNames[month] + ", " + year;

    theUpdatedDate = new Date( Date.parse(data.UpdatedAt));
    var date = theUpdatedDate.getDate();
    var month = theUpdatedDate.getMonth(); //Be careful! January is 0 not 1
    var year = theUpdatedDate.getFullYear();
    var UpdatedDate = date+' '+monthNames[month] + ", " + year;

    get_domain(engine,domain_name=domain,onsuccess=function (result){
      $(result).each(function(index,data){
        if (data.CrawlSchedule) {
          scheduled = data.CrawlSchedule.time;
          no_of_pages = data.Pages;
          //console.log(scheduled)  
        }
      });
    });

    if (data.type == 'domain') {
      domainList += '<tr>';
      domainList += '<td><a href="'+data.DomainName+'">'+data.DomainName+'</a></td>';
      domainList += '<td>'+no_of_pages+'</td>';
      domainList += '<td>'+CreatedDate+'</td>';
      domainList += '<td>'+UpdatedDate+'</td>';
      domainList += '<td><img src="../images/user.jpg" class="user-img" alt=""> '+data.CreatedBy+'</td>';
      domainList += '<td>'+scheduled+'</td>';
      domainList += '<td align="center"><div class="btn-group">';
      domainList += '<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
      domainList += '<img src="../images/action-icon.jpg"  alt=""></button>';
      domainList += '<div class="dropdown-menu dropdown-menu-right">';
      domainList += '<button class="dropdown-item" type="button"> <a href="domainlist-manage-crawlrules.php?domain='+data.DomainName+'">Manage Crawl Rules</a></button>';
      domainList += '<button class="dropdown-item" type="button">Recrawl</button>';
      //domainList += '<button class="dropdown-item" type="button">Something else here</button>';
      domainList += '</div>';
      domainList += '</div></td>';
      domainList += '</tr>';

    }
  });
  
  $('#domainlistTable tr:last').after(domainList);

  function set_current_engine(current_engine){
    $.cookie("currentengine", current_engine);
    location.reload();
  }
});

});




/****************** add engine *******************/
$('#add-engine-btn').click(function(){
  var ename = $('#engine-name').val();
  var form1 = new FormData();
  form1.append("engine_name", ename);

  $.ajax({
      url: 'http://13.232.131.155/portal/create_engine',
      data: form1,
      contentType: false,
      processData: false,
      type: 'POST',
      success: function(data){
          console.log(data);
      }
    });
  closeNavengine();
  location.reload();
});

/****************** add domain *******************/
$('#add-domain-btn').click(function(){
  var dname = $('#domain-name').val();
  create_domain(engine,domain_name=domain,onsuccess=function (result){
    console.log('result');
  });
});


/****************** add whitelist crwel rule for domain *******************/
$('#add-whitelist').click(function(){

  var action = 'add';
  var element = 'WhiteListApp';
  var white_rule = $("#white-rule-pattern").val();
  var value = '["'+white_rule+'"]';
  update_domain_conf(engine,domain_name=domain,action,element, value, onsuccess=function (result){
    //update list in table
    update_crwel_rules();
  });
});

/****************** delete whitelist crwel rule for domain *******************/
function delete_whitelist(rule){
  var action = 'delete';
  var element = 'WhiteListApp';
  var value = '["'+rule+'"]'; 
  update_domain_conf(engine,domain_name=domain,action,element, value, onsuccess=function (result){
    update_crwel_rules();
  });
}

/****************** add Blacklist crwel rule for domain *******************/
$('#add-blacklist').click(function(){

  var action = 'add';
  var element = 'BlackListApp';
  var black_rule = $("#black-rule-pattern").val();
  var value = '["'+black_rule+'"]';
  update_domain_conf(engine,domain_name=domain,action,element, value, onsuccess=function (result){
    //update list in table
    update_crwel_rules();
  });
});

/****************** delete Blacklist crwel rule for domain *******************/
function delete_blacklist(rule){
  var action = 'delete';
  var element = 'BlackListApp';
  var value = '["'+rule+'"]'; 
  update_domain_conf(engine,domain_name=domain,action,element, value, onsuccess=function (result){
    update_crwel_rules();
  });
}

/****************** update weight for domain *******************/
/*
$('.slideControl').change(function() { console.log('inppppppppppp'); })



var inp = document.getElementsByClassName('slideControl');
console.log(inp);*/

  /*function updateweight(this){
    console.log('weight');
    console.log(this.value);
  }*/