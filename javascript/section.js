function setSubNav(n)
	{
		setid=n;
	}
	function sectionSwitch(id)
	{
		console.log("#"+$(".subcurr").attr("id")+"\n");
		console.log(id+"\n");
		if("#"+$(".subcurr").attr("id") != id)
		{
			$(".subcurr").slideUp(400);
			$(".subcurr").removeClass("subcurr");
			$(id).addClass("subcurr");
			$(id).slideDown(400);
		}
		else
		{
			$(".subcurr").slideUp(400);
			$(".subcurr").removeClass("subcurr");
		}
	}