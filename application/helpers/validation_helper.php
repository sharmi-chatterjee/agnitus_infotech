<?php
if(!function_exists('process_validation')){
	
	function process_validation($fan_id, $email, $mobile=""){
	$err = array();
	$CI = &get_instance();
	if(!empty($email)){
		$select_fields = 'email';
    	$is_multy_result = 1;
		$check_mail_condition =" ( `id` <> '".$fan_id."' AND `email` ='".$email."' AND `is_deleted` <> '1')";
	 	$chkemail = $CI->BlankModel->getTableData( 'fans', $check_mail_condition, $select_fields, $is_multy_result);	
		
	if( $chkemail ){
				$err[] = "Email already exist";
			}
		}
	if(!empty($mobile)){	
		 $select_fields = 'mobile';
    	 $is_multy_result = 1;
		 $check_mobile_condition = " ( `id` <> '".$fan_id."' AND `mobile` = '".$mobile."' AND `is_deleted` <> '1')";
	 	 $chkmobile = $CI->BlankModel->getTableData( 'fans', $check_mobile_condition, $select_fields, $is_multy_result);	
			
	if( $chkmobile ){
			$err[] = "Mobile Number already exist";
		 }
		}
		
	return $err;	
	}
}
if(!function_exists('email_validation')){
	function email_validation($table_name,$select_field,$email){
	$err = array();
	$CI = &get_instance();
	if(!empty($email)){
		$select_fields = $select_field;
    	$is_multy_result = 1;
		$check_mail_condition =" (`$select_field` ='".$email."' AND `is_deleted` <> '1')";
	 	$chkemail = $CI->BlankModel->getTableData( $table_name, $check_mail_condition, $select_fields, $is_multy_result);	
		
	if( $chkemail ){
				$err = "Email already exist";
			}
		}	
	return $err;	
	}
}

if(!function_exists('add_our_team_validation')){
	function add_our_team_validation($member_name){
	$err = array();
	$CI = &get_instance();
	if(!empty($member_name)){
		$select_fields = 'member_name';
    	$is_multy_result = 1;
		$member_name_condition =" (`member_name` ='".$member_name."' AND `is_deleted` <> '1')";
	 	$chkemail = $CI->BlankModel->getTableData( 'our_team', $member_name_condition, $select_fields, $is_multy_result);	
		
	if( $chkemail ){
				$err = "Member Name already exist";
			}
		}	
	return $err;	
	}
}

if(!function_exists('edit_our_team_validation')){
	function edit_our_team_validation($mem_id, $member_name){
	$err = array();
	$CI = &get_instance();
	if(!empty($member_name)){
		$select_fields = 'member_name';
    	$is_multy_result = 1;
		$member_name_condition =" (`id` <> '".$mem_id."' AND `member_name` ='".$member_name."' AND `is_deleted` <> '1')";
	 	$chkmember_name = $CI->BlankModel->getTableData( 'our_team', $member_name_condition, $select_fields, $is_multy_result);	
		
	if( $chkmember_name ){
		$err = "Member Name ".$member_name." already exist.";
		}
	}	
	return $err;	
	}
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>