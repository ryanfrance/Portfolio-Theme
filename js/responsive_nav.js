//This is for the mobile navigation bar. This Changes the nav bar to a drop down menu on screens with a low pixel width.
$(document).ready(function() {
	//dropdown start
  	$("<select />").appendTo(".navigation nav div div");

  	//default option
  	$("<option />", {
  		"selected"	: "selected",
  		"value"		: "value",
  		"text"		: "Go to page..."
  	}).appendTo("nav select");

  	//populate dropdown menu
  	$(".navigation nav li a").each(function() {
  		var pop = $(this);
  		$("<option />", {
  			"value"	: pop.attr("href"),
  			"text"	: pop.text()
  		}).appendTo("nav select");
  	});

  	//make the options do stuff!
  	$("nav select").change(function() {
  		window.location = $(this).find("option:selected").val();
  	});

});