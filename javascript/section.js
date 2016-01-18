"use strict"
	function sectionSwitch(id,e)
	{
		if("#"+$(".subcurr").attr("id") != id)
		{
			$(".subcurr").slideUp(800);
			$(".subcurr").removeClass("subcurr");
			console.log($(id));
			$(id).addClass("subcurr");
			$("#main").prepend($(id)).prepend($(e)); //move it to the top
			$(id).slideDown(800);
		}
		else
		{
			$(".subcurr").slideUp(800);
			$(".subcurr").removeClass("subcurr");
		}
		 $("html, body").animate({ scrollTop: 0 }, "slow");
	}