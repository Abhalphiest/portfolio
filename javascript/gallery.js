"use strict";
var index = 0;
var imgArray;
$(document).ready(function(){
	$("img").on("click", function(e){
		imgArray = $("#"+e.target.parentElement.parentElement.id+" img");
		console.log(e.target.parentElement.parentElement.id);
		index = imgArray.index(e.target);
		var lightbox = document.createElement("div");
		lightbox.style.position="fixed";
		lightbox.style.height="100%";
		lightbox.style.width = "100%";
		lightbox.style.left = 0;
		lightbox.style.top = 0;
		lightbox.style.backgroundImage="url('../media/papertexture.png')";
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
		myImg.style.border = "thick solid #FFFFFF";
		lightbox.appendChild(myImg);
		document.body.appendChild(lightbox);
		$(lightbox).fadeIn(200);
		}
				
		lightbox.addEventListener("contextmenu",function(e){
		e.preventDefault();
		$(lightbox).fadeOut(200,function(){
			lightbox.remove();
			});
		});
		lightbox.addEventListener("click", function(e){
		index++;
		if(index < imgArray.size())
			myImg.src = imgArray[index].src;
		else 
		{
			index = 0;
			myImg.src = imgArray[index].src;
		}
			
		console.log(index);
		});
			
	})
});
