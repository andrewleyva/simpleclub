<?php

//DON'T FORGET TO EDIT THIS WITH YOUR OWN SETTINGS. USE THE SQL FILE TO LOAD UP A BLANK DB
	if ($dbc = @mysql_connect ('mysql.aceleyvadesigns.com', 'simpleclub', 'easy123'))
	{
		if (!@mysql_select_db ('simpleclub_data'))
		{
			die ('Connected to server, but could not select the database because: <b>' . mysql_error() . '</b>');
		}
	}
	else
	{
		die ('Could not connect to the database server because: <b>' . mysql_error() . '</b>');
	}
?>