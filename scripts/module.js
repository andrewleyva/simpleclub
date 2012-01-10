function Set_Profiles()
{

}

function toggle(id)
{
	
	if (document.getElementById(id+'-body').style.display != 'block')
	{
		document.getElementById(id+'-body').style.display = 'block';
		document.getElementById(id+'-image').style.backgroundImage="url(../img/arrow_up.jpg)";
	}
	else
	{
		document.getElementById(id+'-body').style.display = 'none';
		document.getElementById(id+'-image').style.backgroundImage="url(../img/arrow_down.jpg)";
	}
}

function bodySlide()
{

}

function hideBody(id)
{
	alert('hide');
	document.getElementById(id+'-body').style.display = 'none';
/*	document.getElementById(id+'-image').className="image_max";

document.getElementById(id+'-image').style.background-image = "../img/arrow_max.jpg";
*/

document.getElementById(id+'-image').backgroundImage="url(../img/arrow_max.jpg)";
}

function showBody(id)
{
	document.getElementById(id+'-body').style.display = 'block';
	/*document.getElementById(id+'-image').className="image_min";*/
	document.getElementById(id+'-image').backgroundImage="url(../img/arrow_min.jpg)";

}

function closeAll()
{
	
	hideBody('jimwinn');
	hideBody('davidsomerville');
	hideBody('michaelhartnett');

	document.getElementById('toggle_all').innerHTML = '<a onClick="openAll()" style="cursor: pointer;">open all</a>';
}

