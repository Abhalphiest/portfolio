"use strict;"
var posts =["renaissance.html", "brave.html","waterhose.html","markov.html"];
var page=0;

$(window).ready(function(ev) {
   while ((window.innerHeight + window.scrollY) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
				console.log("onload called");
                $.get(posts[page], function (data) {
                    $("#posts").append(data);
                });
            }); 
        page++
    }
	$(window).scroll(function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
				console.log("onscroll called");
                $.get(posts[page], function (data) {
					$(data).hide();
                    $("#posts").append(data);
					$(data).fadeIn();
                });
            }); 
        page++
    }
	});
});


