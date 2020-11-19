<?php 

	if (! function_exists('active')) {
		// On créé la fonction si elle n'existe pas

		function active($url)
		{
			return Route::is($url) ? 'active' : '' ;
		}
	}

