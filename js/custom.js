$(document).ready(function() {
	
	//Move between checkout tabs
    $(".nav-tabs a").click(function(event) {
    	 alert("js is working");
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
     
    });
    
    //Move between checkout tabs using next buttons
    
    // $("#checkout-tabs").tabs();
     // alert("js is working");
    // $(".next-tab").click(function() {
       // alert("js is working");
       // $("#checkout-tabs").tabs("select", this.hash);
//        
    // });
    
    $("#checkout-tabs").tabs();
	$(".next-tab").click(function() {
		 alert("js is working");
	    var selected = $("#checkout-tabs").tabs("option", "selected");
	    $("#checkout-tabs").tabs("option", "selected", selected + 1);
	});
    
    
    
}); //end of document