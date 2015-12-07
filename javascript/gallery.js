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
		lightbox.style.left = "0";
		lightbox.style.top = "0";
		lightbox.style.backgroundImage="url('../media/papertexture.png')";
		lightbox.style.display = "none";
		
		var frame = document.createElement("div");
		frame.style.position = "fixed";
		frame.style.display="inline-block";
		
		frame.style.overflow ="hidden";
		frame.style.backgroundColor = "#B20100"; 
		frame.style.padding = "40px";
		lightbox.appendChild(frame);
		
		var nextButton = document.createElement("img");
		nextButton.style.borderRadius = "20px";
		nextButton.style.position = "absolute";
		nextButton.style.right = "0";
		nextButton.style.top = "50%";
		nextButton.src = "";
		nextButton.alt="next";
		nextButton.addEventListener("click", function(e){
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
		frame.appendChild(nextButton);

		var backButton = document.createElement("img");
		backButton.style.borderRadius = "20px";
		backButton.style.position = "absolute";
		backButton.style.left = "0";
		backButton.style.top = "50%";
		backButton.style.display="inline-block";
		backButton.src = "";
		backButton.alt ="back";
		backButton.addEventListener("click", function(e){
		index--;
		if(index >= 0)
			myImg.src = imgArray[index].src;
		else 
		{
			index = imgArray.length -1;
			myImg.src = imgArray[index].src;
		}
		frame.appendChild(backButton);
			
		console.log(index);
		});
		var myImg = document.createElement("img");
		myImg.src = e.target.src;
		
		myImg.onload = function()
		{
		myImg.style.position = "relative";
		var diffWidth = $(window).width()/2 - myImg.width/2;
		var diffHeight = $(window).height()/2 - myImg.height/2;
		myImg.style.left = diffWidth + "px";
		myImg.style.top = diffHeight + "px";
		myImg.style.border = "thick solid #FFFFFF";
		frame.appendChild(myImg);
		document.body.appendChild(lightbox);
		$(lightbox).fadeIn(200);
		}
				
		lightbox.addEventListener("contextmenu",function(e){
		e.preventDefault();
		$(lightbox).fadeOut(200,function(){
			lightbox.remove();
			});
		});
		
		var diffWidth = $(window).width()/2 - frame.width/2;
		var diffHeight = $(window).height()/2 - frame.height/2;
		frame.style.left = diffWidth+"px";
		frame.style.top = diffHeight+"px";
		
			
	})
});
