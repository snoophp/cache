<?php

namespace SnooPHP\Cache;

/**
 * Pass-throught cache
 * 
 * @author Sneppy
 */
class NullCache implements I_Cache
{
	/**
	 * Fetch a record from cache
	 * 
	 * @param string $key unique key of the record
	 * 
	 * @return object|null
	 */
	public static function fetch($key)
	{
		return null;
	}

	/**
	 * Store a record in cache
	 * 
	 * @param string	$key		key of the record
	 * @param string	$content	record content
	 * 
	 * @return object|null
	 */
	public static function store($key, $content)
	{
		return $content;
	}
}
