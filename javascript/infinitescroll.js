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
    
	var arr = $("sidebar li").toArray().reverse();
	for(var i = 0; i < arr.length; i++)
	{
		$(arr[i]).click(function(){
			$.get(posts[i], function(data) {
				$("#posts").fadeOut();
				$("#posts").replaceWith(data);
				$("#posts").fadeIn();
			});
		});
	}
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
};


