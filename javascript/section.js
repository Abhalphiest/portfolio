function setSubNav(n)
	{
		setid=n;
	}
	function sectionSwitch(id,e)
	{
		console.log("#"+$(".subcurr").attr("id")+"\n");
		console.log(id+"\n");
		if("#"+$(".subcurr").attr("id") != id)
		{
			$(".subcurr").slideUp(800);
			$(".subcurr").removeClass("subcurr");
			$(id).addClass("subcurr");
			$(id).slideDown(800);
			$(#main).prepend($(id)).prepend(e); //move it to the top
		}
		else
		{
			$(".subcurr").slideUp(800);
			$(".subcurr").removeClass("subcurr");
		}
	}