// takes an element and assigns the 'show' class to it
function createXnew(x)
{
		createnewimage();
}

function createnewimage()
{
	var id = 'pop' +  randomNum(0, 10000);
	var data='<div  style="position: absolute; zindex: 100; top: '+randomNum(0, 600)+'px; left: '+randomNum(0, 800)+'px;><img src="img/echo_cms.png"></div>';
	document.getElementById("popups").innerHTML += data;
}

function createnew()
{
	var id = 'pop' +  randomNum(0, 10000);
	var hider = "'"+id+"'";
	var data = '<div id="' + id + '" class="video" style="height: '+randomNum(100, 500)+'px; width: '+randomNum(100, 300)+'px; position: absolute; zindex: 100; top: '+randomNum(0, 300)+'px; left: '+randomNum(200, 600)+'px;"><div id="hoedown-handle" class="pop-titlebar" style="cursor: move"><h2>echo hoedowns</h2><a href="javascript: hide('+hider+');"><img src="module/img/close.jpg" /></a></div><div id="'+id+'-body" class="pop-body" style="cursor: default;"></div></div>';
	//randomposition(id);
	
//alert(data);
	document.getElementById("popups").innerHTML += data;
	
}

function ajaxshow(div)
{
	randomposition(div);
	show(div);
	ajax();
}

function randomposition(div) 
{
	
	document.getElementById(div).style.top = randomNum(50, 300)+'px';
	document.getElementById(div).style.left = randomNum(200, 800)+'px';
}


function randomNum(min, max)
{
	
	return Math.round((max-min)*Math.random())+min;
}

function show(div)
{
	document.getElementById(div).style.display = 'block';
}

// takes an element and assigns the 'hide' class to it
function hide(div)
{
	document.getElementById(div).style.display = 'none';
}