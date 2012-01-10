/*ajax*/ 

var xmlHttp

function ajax()
{
	
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp == null)
	{
		alert("Browser does not support HTTP Request");
		return;
	} 
	var url = "video.html" + "?sid=" + Math.random();
	xmlHttp.onreadystatechange = stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
} 

function stateChanged() 
{ 
	if (xmlHttp.readyState == 1 || xmlHttp.readyState=="loading")
	{
		document.getElementById("hoedown-body").innerHTML = "<span style='color: red;'>loading</span>";
	}
	if (xmlHttp.readyState == 4 || xmlHttp.readyState=="complete")
	{ 
		document.getElementById("hoedown-body").innerHTML = xmlHttp.responseText;
	} 
} 

function GetXmlHttpObject()
{ 
	var objXMLHttp = null;
	if (window.XMLHttpRequest)
	{
		objXMLHttp = new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
		objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	return objXMLHttp;
} 