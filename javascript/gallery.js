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
		lightbox.style.backgroundColor = "black";
		lightbox.style.opacity ="0.5";
		lightbox.style.display = "none";
		lightbox.style.zIndex = "999";
		var frame = document.createElement("div");
		frame.style.position = "relative";
		frame.style.display="inline-block";
		frame.style.backgroundColor = "#B20100";
		frame.style.padding = "60px";
		frame.style.textAlign = "center";
		lightbox.appendChild(frame);
		
		var nextButton = document.createElement("img");
		nextButton.style.borderRadius = "20px";
		nextButton.style.position = "absolute";
		nextButton.style.right = "10px";
		nextButton.style.top = "50%";
		nextButton.src = "../media/next.svg";
		nextButton.style.backgroundColor = "white";
		nextButton.alt="next";
		
		nextButton.addEventListener("click", function(e){
			index++;
			if(index < imgArray.size())
			{
				
				myImg.src = imgArray[index].src;
				
			}
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
		backButton.style.left = "10px";
		backButton.style.top = "50%";
		backButton.src = "../media/back.svg";
		backButton.style.backgroundColor = "white";
		backButton.alt ="back";
		
		backButton.addEventListener("click", function(e){
			index--;
			if(index >= 0)
			{	
				
				myImg.src = imgArray[index].src;
				
			}
			else 
			{
				
				index = imgArray.length -1;
				myImg.src = imgArray[index].src;
				
			}	
			console.log(index);
			});
		frame.appendChild(backButton);
		
		
		var myImg = document.createElement("img");
		myImg.src = e.target.src;
		myImg.style.border = "thick double #FFFFFF";
		frame.appendChild(myImg);
		myImg.style.position = "relative";
		lightbox.style.opacity ="1.0";
		myImg.onload = function()
		{
			console.log("onload called");
			var w = myImg.naturalWidth;
			var h = myImg.naturalHeight;
			
			console.log(w);
			console.log(h);
			console.log(window.innerWidth );
			console.log(window.innerHeight);
			while(w+120 >window.innerWidth || h+120>window.innerHeight)
			{
				console.log("loop fires");
				w = w*.9;
				h = h*.9;
				
			}
			console.log(w);
			console.log(h);
			myImg.width = w;
			myImg.height = h;
			var framediffWidth = $(window).width()/2 - (myImg.width/2+60);
			var framediffHeight = $(window).height()/2 - (myImg.height/2+60);
			frame.style.left = framediffWidth + "px";
			frame.style.top = framediffHeight + "px";
		}
		
		document.body.appendChild(lightbox);		
		$(lightbox).hide().fadeIn(700);
		lightbox.addEventListener("contextmenu",function(e){
			e.preventDefault();
			$(lightbox).fadeOut(200,function(){
				lightbox.remove();
				});
		});
		
		
		
			
	})
});


