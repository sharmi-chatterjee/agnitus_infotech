<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Country_model', '', TRUE);	
		// $this->load->model('MY_Model');
	}


	public function insertData()
    {		
  
		$duration = file_get_contents('https://api.worldbank.org/v2/country?format=json');
		$temp_duration = json_decode($duration);
		foreach ($temp_duration as $key => $value) {
		$first_array = $temp_duration['1'];
		foreach ($first_array as $first_val) {
	
			$insert_data['id']          = $first_val->id;
			$insert_data['iso2Code']    = $first_val->iso2Code;
			$insert_data['name']        = $first_val->name;
			$insert_data['capitalCity'] = $first_val->capitalCity;
			$insert_data['longitude']   = $first_val->longitude;
			$insert_data['latitude']    = $first_val->latitude;

			$this->db->insert('country',$insert_data);
			$last_id      = $this->db->insert_id();
			$region       = $first_val->region;
		
			if (!empty($region)) {
					$insert_region['country_id'] = $last_id;
					$insert_region['id']         = $region->id;
					$insert_region['iso2code']   = $region->iso2code;
					$insert_region['value']      = $region->value;
					$insert_region['type']       = 'region';
					$this->db->insert('country_details',$insert_region);
			}
			$adminregion  = $first_val->adminregion ;
			if (!empty($adminregion)) {
					$insert_adminregion['country_id'] = $last_id;
					$insert_adminregion['id']         = $adminregion->id;
					$insert_adminregion['iso2code']   = $adminregion->iso2code;
					$insert_adminregion['value']      = $adminregion->value;
					$insert_adminregion['type']       = 'adminregion';
					$this->db->insert('country_details',$insert_adminregion);
			}

			$incomeLevel  = $first_val->incomeLevel;
			if (!empty($incomeLevel)) {
					$insert_incomeLevel['country_id'] = $last_id;
					$insert_incomeLevel['id']         = $incomeLevel->id;
					$insert_incomeLevel['iso2code']   = $incomeLevel->iso2code;
					$insert_incomeLevel['value']      = $incomeLevel->value;
					$insert_incomeLevel['type']       = 'incomeLevel';
					$this->db->insert('country_details',$insert_incomeLevel);
			}

			$lendingType  = $first_val->lendingType;
			if (!empty($lendingType)) {
					$insert_lendingType['country_id'] = $last_id;
					$insert_lendingType['id']         = $lendingType->id;
					$insert_lendingType['iso2code']   = $lendingType->iso2code;
					$insert_lendingType['value']      = $lendingType->value;
					$insert_lendingType['type']       = 'lendingType';
					$this->db->insert('country_details',$insert_lendingType);
			}

		}
		die();
		}
	}


	public function index(){
		$data['country_details'] = $this->Country_model->getCountryDetails();
		$this->load->view('backend/list_country',$data);
	}





	public function countryDetails(){
		$country_id 	= $this->input->post('country_id');
		$data['items'] = $this->Country_model->getCountryByCountryId($country_id);
		$type = 'incomeLevel';
	  $details = getSubDetails($country_id,$type);
	  $data['incomeLevel_id']       = $details->id;
	  $data['incomeLevel_iso2code'] = $details->iso2code;
	  $data['incomeLevel_value']    = $details->value;

		$data['msg']    = 'Get all';
		$data['status'] = 'Success';
		echo json_encode($data);
		exit();
	}

	
	public function updateCountryDetails(){
		$details    = $this->input->post();
    $error_msg 		  = '';
		
		if( $details['latitude'] =='' ){
			$error_msg .='- Please select latitude';			
		}	
		if( $details['longitude'] =='' ){
			$error_msg .='- Please select longitude';			
		}
		
		if( $details['capitalCity'] =='' ){
			$error_msg .='- Please select capital City';			
		}
		
    if($error_msg){
			$error_html = 'Whoops! There were some problems with your input.'.$error_msg;	
			$data['msg']     = $error_html;
			$data['status']  = 'blank_fail';
			echo json_encode($data);
			exit();
    } 

		$update_data['latitude'] 	   = $details['latitude'];
		$update_data['longitude'] 	 = $details['longitude'];
		$update_data['capitalCity']  = $details['capitalCity'];
		$update_data['country_id']   = $details['country_id'];
		$update_data['status']       = '1';
    $res = $this->Country_model->edit($update_data,$details['country_id']);
	
    $update_income_data['iso2code'] 	= $details['incomeLevel_iso2code'];
		$update_income_data['value'] 	    = $details['incomeLevel_value'];
		$type                             = 'incomeLevel';
    $res_income = $this->Country_model->edit_details($update_income_data,$details['country_id'],$type);
  
		if ($res) {
			$data['msg']       = 'Country updated successfully';
			$data['status']    = 'Success';
		}else{
			$data['msg']       = 'Update Failed';
			$data['status']    = 'Fail';
		}
		echo json_encode($data);
		exit();
	}

	
}	
