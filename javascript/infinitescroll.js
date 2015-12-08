"use strict;"
var posts =["renaissance.html", "brave.html","waterhose.html","markov.html"];
var page=0;

window.onload = function(ev) {
   
	jQuery.ajaxSetup({async:false});
   //first two pages come free..
	console.log("onload called");
    $.get(posts[page], function (data) {
    $("#posts").append(data);
	}); 
    page++;
    $.get(posts[page], function (data) {
    $("#posts").append(data);
	}); 
    page++;
    
	var arr = $("#sidebar li a").toArray().reverse();
	$.each(arr, function(i,v){
		addclicklistener(i,v);
	});
	
	$(window).scroll(function(ev) {
    if ((window.innerHeight + window.scrollY+100) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
				console.log("onscroll called");
                $.get(posts[page], function (data) {
					$(data).hide();
                    $("#posts").append(data);
					$(data).fadeIn();
                });
            }); 
        page++;
    }
	});
	
	function addclicklistener(i, thing)
	{
		$(thing).click(function(){
			console.log(i+" called");
			$.get(""+posts[i], function(data) {
				console.log(data);
				$("article").fadeOut();
				$("article").replaceWith(data);
				$("article").fadeIn();
			});
		});
	}
};


