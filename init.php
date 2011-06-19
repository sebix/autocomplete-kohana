<?php defined('SYSPATH') or die('No direct script access.');

// Static file serving (JS)
Route::set('autocomplete/js', 'autocomplete/autocomplete.js')
	->defaults(array(
		'controller' => 'file',
	));
