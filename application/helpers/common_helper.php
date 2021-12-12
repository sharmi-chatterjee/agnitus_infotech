<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");

if(!function_exists('backend_common_viewloader')){
	function backend_common_viewloader($viewfilepath='',$param=array()){
		$CI = &get_instance();
		$CI->load->view('backend/include/header');
		// $CI->load->view('backend/include/side-menu');
		if($viewfilepath!=''){
			$CI->load->view($viewfilepath,$param);
		}
		$CI->load->view('backend/include/footer');
	}
}


function getSubDetails($country_id, $type){
    $CI   = & get_instance(); 
    $CI->db->where('country_id',$country_id);
    $CI->db->where('type',$type);
    return $CI->db->get('country_details')->row();
}


function cleanURL($string)
{
    $url = str_replace("'", '', $string);
    $url = str_replace('%20', ' ', $url);
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url); // substitutes anything but letters, numbers and '_' with separator
    $url = trim($url, "-");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);  // you may opt for your own custom character map for encoding.
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url); // keep only letters, numbers, '_' and separator       
    return $url;
}











?>