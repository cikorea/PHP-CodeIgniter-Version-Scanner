<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|==========================================================
| Initialize Image Manipulation Class
|==========================================================
*/
$config = array();
if (file_exists(APPPATH.'config/image_lib'.EXT))
{
	include_once(APPPATH.'config/image_lib'.EXT);
}

if ( ! class_exists('_Image_lib'))
{	
	require_once(BASEPATH.'libraries/Image_lib'.EXT);
}

if ( ! is_object($CI))
{
	$this->image_lib = new _Image_lib($config);	
	$this->ci_is_loaded[] = 'image_lib';
}
else
{
	$CI->image_lib = new _Image_lib($config);	
	$CI->ci_is_loaded[] = 'image_lib';
}

?>