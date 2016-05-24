"use strict"
	function sectionSwitch(id)
	{
		if($(".subcurr").size() == 0)
		{
			$(id).addClass("subcurr");
			$(id).toggle();
		}
		else if("#"+$(".subcurr").attr("id") != id)
		{
			$(".subcurr").fadeOut(800);
			$(".subcurr").removeClass("subcurr");
			$(id).addClass("subcurr");
			$(id).fadeIn(800);
		}
		
	}