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
class Autocomplete {

	/**
	 * Create a XML-String from an Array
	 *
	 *	// Returns a STRING
	 *	Autocomplete::parse(array());
	 *
	 *	// Returns TRUE
	 *	Autocomplete::parse(array(), TRUE);
	 *
	 * @param	array	of suggestions
	 * @param	boolean	send XML directly
	 * @return	mixed
	 */
	public function parse ($values, $send = FALSE) {
		$suggestions = '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE  Autocomplete [
    <!ELEMENT suggestions (suggestion*)>
    <!ELEMENT suggestion (name)>
]>
<suggestions>';

		foreach ($values as $value)
			$suggestions .= '<suggestion>'.$value.'</suggestion>';
		$suggestions .= '</suggestions>';
		
		if ($send) {
			$this->response->body($suggestions);
			$this->response->headers('content-type', 'text/xml');
			return true;
		} else {
			return $suggestions;
		}
	}
} // End Autocomplete
