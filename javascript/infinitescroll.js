"use strict;"
var posts =["renaissance.html", "brave.html","waterhose.html","markov.html"];
var page=0;

window.onload = function(ev) {
    if ((window.innerHeight + window.scrollY +800) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
				console.log("onload called");
                $.get(posts[page], function (data) {
                    $("#posts").append(data);
                });
            }); 
        page++
    }
};
window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY+ 200) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
				console.log("onscroll called");
                $.get(posts[page], function (data) {
                    $("#posts").append(data);
                });
            }); 
        page++
    }
};

