//does the browser support local storage?
//if not, switch to static site.
function supportsLocalStorage()
{
  try {
    return 'localStorage' in window && window['localStorage'] !== null;
  } catch (e) {
    return false;
  }
}

function setGlobal(page, value)
{
  if(!supportsLocalStorage())
	{
		//switch to static site
	}
   localStorage[page] = value;
}

function getGlobal(page)
{
	if(!supportsLocalStorage())
	{
		//switch to static site
	}
   return localStorage[page];
	
}