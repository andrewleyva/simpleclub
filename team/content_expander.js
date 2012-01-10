var itemID = "profiles";

if (document.getElementById && document.getElementsByTagName)
{
	document.write("<link href=\"content_expander.css\" type=\"text/css\" rel=\"stylesheet\" />")
}

function Toggle(x){
	var varDD=document.getElementById(itemID).getElementsByTagName('dd');
	var varDT=document.getElementById(itemID).getElementsByTagName('dt');	
		varDD[x].className=(varDD[x].className=='hideDD')?'showDD':'hideDD';
		varDT[x].className=(varDT[x].className=='DTplus')?'DTminus':'DTplus';	
}

//this function will open all profiles
function Open_All(){
	var varDD=document.getElementById(itemID).getElementsByTagName('dd');
	var varDT=document.getElementById(itemID).getElementsByTagName('dt');	
	for(var i=0;i<varDT.length;i++){
		varDD[i].className ='showDD';
		varDT[i].className ='DTminus';
	}
	return false;
}

//this function will close all profiles
function Close_All(){	
	var varDD=document.getElementById(itemID).getElementsByTagName('dd');
	var varDT=document.getElementById(itemID).getElementsByTagName('dt');	
	for(var i=0;i<varDT.length;i++){
		varDD[i].className='hideDD';
		varDT[i].className='DTplus';
	}
	return false;	
}
function Set_Profiles(){
if (document.getElementById && document.getElementsByTagName){			
	var varDT=document.getElementById(itemID).getElementsByTagName('dt');
	var varDD=document.getElementById(itemID).getElementsByTagName('dd');
	var VarOpen = document.getElementById('open_all');
	var VarClose = document.getElementById('close_all');	
	if (VarOpen && VarClose){// Show All - Hide All "links"
		VarOpen.onclick = Open_All;
		VarOpen.title = "Show Description";
		VarOpen.href = "#";		
		VarClose.onclick = Close_All;	
		VarClose.title = "Hide Description";
		VarClose.href = "#";		
	}
	for(var i=0;i<varDT.length;i++){
		var varContent = varDT[i].innerHTML;
		var varAnchor = "<a href='#' onclick=\"Toggle("+i+");return false\" title='Show/Hide the description'>";
		varDT[i].innerHTML = varAnchor + varContent + "</a>";
		varDD[i].className='hideDD';
		varDT[i].className='DTplus';
		}
	}
}
