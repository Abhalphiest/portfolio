"use strict;"
var posts =["renaissance.html", "brave.html","waterhose.html","markov.html"];
var page=0;

window.onload = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
                $.get(posts[page], function (data) {
                    $("#posts").append(data);
                });
            }); 
        page++
    }
};
window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight && page < posts.length) {
        $(function () {
                $.get(posts[page], function (data) {
                    $("#posts").append(data);
                });
            }); 
        page++
    }
};
