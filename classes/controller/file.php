<?php defined('SYSPATH') or die('No direct script access.');
/**
 * JS-Autocomplete Module for Kohana
 *
 * @package		sebix/autocomplete
 * @category	Controllers
 * @author		sebix
 * @author-url	http://github.com/sebix
 * @url			http://github.com/sebix/autocomplete-kohana
 */
class Controller_File extends Controller {
	public function action_index () {
		$file = 'media/autocomplete.js';
		// Send the file content as the response
		$this->response->body(file_get_contents($file));

		// Set the proper headers to allow caching
		$this->response->headers('content-type', 'application/javascript');
		$this->response->headers('last-modified', date('r', filemtime($file)));

	}
} // End Autocomplete / file.php
