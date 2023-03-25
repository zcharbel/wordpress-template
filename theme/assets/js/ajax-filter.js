$(document).ready(function(){
    console.log('date filter implemented');
    
    var mafs = $(".search-section"); 
	var mafsForm = mafs.find("input"); 
  
	mafsForm.on('click', function(e){
	    e.preventDefault(); 
		
		var xhttp = new XMLHttpRequest();
		
	    //console.log("set filter variables");
		 
		var data = {
		    action : "ajax_date_filter",
		}
		
		$.ajax({
	        url : ajax_url,
	        data : data,
	        success : function(response) {
	            console.log('Ajax success');
	            $('.gut-check-posts').empty();
	            if(response) {
	                for(var i = 0 ;  i < response.length ; i++) {
						var html  =  '<div class="gut-check">'
						    html  += '    <p class="date">' + response[i].date + '</p>'
						    html  += '	  <p class="title">' + response[i].initials + '</p>'
						    html  += '	  <a href="' + response[i].permalink + '">' + response[i].title + '</a>'
						    html  += '</div><!-- // col -->';
	                         
	                     $('.gut-check-posts').append(html);
	                }
	            } else {
	            }
	            
	        },
	        error : function(response){
		        console.log('Ajax failed');
	        }
	    });
	  
	// we will add codes above this line later
	});
});
