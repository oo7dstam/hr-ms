<?php
/*
	developer model for common PHP functions
*/

class Dev
{
		
	public static function pv($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
		
		return;
	}
	
	public static function pvx($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
		exit;
		return;
	}
	
	
	public static function femp($models,$property)
	{
		foreach($models as $model)
		{
			echo $model->{$property};
			echo '<br />';
		}
	}
	
	
	function int_check($string) {
		
		$pattern = "/^([0-9])+$/";
		if (preg_match($pattern,$string)) {
			return true;
		}
		else {
			return false;
		}
	}
	function numeric_check($string) {
		
		$regex = '/^\s*[+\-]?(?:\d+(?:\.\d*)?|\.\d+)\s*$/';
		return preg_match($regex, $string); 
	}
	
	function neat_trim($string, $max_length, $append = '')
	{
		if (strlen($string) > $max_length) {
			
			$string = substr($string, 0, $max_length);
			$pos = strrpos($string, ' ');
			
			if ($pos === false) {
				
				return substr($string, 0, $max_length) . $append;
				
			}
			return substr($string, 0, $pos) . $append;
		}else {
			return $string;
		}
	}
	
	function validateEmail($string)
	{
		if(!empty($string)){
			if (!filter_var($string, FILTER_VALIDATE_EMAIL)) {
				return false;
			}
			
			return true;
		}
		
		return false;
		
		
	}
	function validateURL($url)
	{
		if(!empty($url)){
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
				return false;
			}
			return true;
			
		}
		
		return false;
	}
	
	public static function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
	
	public static function generateRandomString($length = 8) 
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		return $randomString;
	}

}