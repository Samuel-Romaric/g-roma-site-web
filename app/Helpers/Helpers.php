<?php 

	if (! function_exists('activeUrl')) {
		// On créé la fonction si elle n'existe pas

		function activeUrl($url)
		{
			return Route::is($url) ? 'active' : '' ;
		}
	}