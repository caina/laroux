<?php
/**
 * usamos isso porque em desenvolvimento local faz sentido usar as imagens cortadas
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type
 */

if (! function_exists('image_path'))
{
	function image_path($url = '')
	{

		return "http://www.laroux.com.br/upload/{$url}";
		// if(IS_LOCAL){
		// 	return site_url("images/{$url}");
		// }else{
		// 	return base_url("upload/{$url}");
		// }
	}
}

function dump($arr) {
	echo "<pre>";
	print_r($arr);
	die;
}

?>
