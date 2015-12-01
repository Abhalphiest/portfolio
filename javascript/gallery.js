
"use strict";
$(document).ready(function(){
	$("img").on("click", function(e){ console.log('clicked')
		var lightbox = document.createElement("div");
		lightbox.style.position="fixed";
		lightbox.style.height="100%";
		lightbox.style.width = "100%";
		lightbox.style.left = 0;
		lightbox.style.top = 0;
		lightbox.style.backgroundColor="rgba(0,0,0,0.7)";
		lightbox.style.display = "none";
				
		var myImg = document.createElement("img");
		myImg.src = e.target.src;
		
		myImg.onload = function()
		{
		myImg.style.position = "absolute";
		var diffWidth = $(window).width()/2 - myImg.width/2;
		var diffHeight = $(window).height()/2 - myImg.height/2;
		myImg.style.left = diffWidth + "px";
		myImg.style.top = diffHeight + "px";
		lightbox.appendChild(myImg);
		document.body.appendChild(lightbox);
		$(lightbox).fadeIn(200);
		}
				
		lightbox.addEventListener("click",function(e){
		$(lightbox).fadeOut(200,function(){
			lightbox.remove();
			});
		});
			
	})
});
