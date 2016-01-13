function setSubNav(n)
	{
		setid=n;
	}
	function sectionSwitch(id)
	{
		$(".subcurr").slideUp(400);
		$(".subcurr").removeClass("subcurr");
		if("#"+$(".subcurr").attr("id") != id)
		{
			$(id).addClass("subcurr");
			$(id).slideDown(400);
		}
	}