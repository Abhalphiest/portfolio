"use strict;"
var posts =["renaissance.html", "brave.html","waterhose.html","markov.html"];
var page=0;
var append = true;
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
    if ((window.innerHeight + window.scrollY+100) >= document.body.offsetHeight && page < posts.length && append) {
        $(function () {
				console.log("onscroll called");
                $.get(posts[page], function (data) {
					var newPost = document.createElement("article");
					$(newPost).append(data);
					$(newPost).hide();
					$("#posts").append(newPost);
					$(newPost).fadeIn();
                });
            }); 
        page++;
    }
	});
	
	function addclicklistener(i, thing)
	{
		$(thing).click(function(){
			append = false;
			$.get(""+posts[i], function(data) {

				$("#posts article").fadeOut();
				var selectPost = document.createElement("article");
				$(selectPost).hide();
				$("#posts").empty();
				$("#posts").append(selectPost);
				$(selectPost).fadeIn();
			});
		});
	}
};


