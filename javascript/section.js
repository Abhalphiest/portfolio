function setSubNav(n)
	{
		setid=n;
	}
	function sectionSwitch(id)
	{
		$(".subcurr").slideUp(400);
		$(".subcurr").removeClass("subcurr");
		console.log("#"+$(".subcurr").attr("id")+"\n");
		console.log(id+"\n");
		if("#"+$(".subcurr").attr("id") != id)
		{
			$(id).addClass("subcurr");
			$(id).slideDown(400);
		}
	}