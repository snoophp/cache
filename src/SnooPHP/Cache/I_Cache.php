<?php

namespace SnooPHP\Cache;

/**
 * Interface to store and retrieve api requests
 * 
 * @author Sneppy
 */
interface I_Cache
{
	/**
	 * Fetch a record from cache
	 * 
	 * @param string $key unique key of the record
	 * 
	 * @return object|null
	 */
	public static function fetch($key);

	/**
	 * Store a record in cache
	 * 
	 * @param string	$key		key of the record
	 * @param string	$content	record content
	 * 
	 * @return object|null
	 */
	public static function store($key, $content);
}