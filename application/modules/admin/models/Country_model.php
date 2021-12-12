<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
    
class Country_model extends CI_Model
{   
    function getCountryDetails(){
        $this->db->select('*')
        ->from('country')
        ->where('status',1); 
        $result = $this->db->get()->result_array();
        return $result;
    }

     function getCountryByCountryId($country_id){
        $this->db->select('*')
        ->from('country')
        ->where('country_id',$country_id); 
        $result = $this->db->get()->row();
        return $result;
    } 

    function edit($data, $country_id){
        $this->db->where('country_id', $country_id);
        return $this->db->update('country', $data);
    }
    function edit_details($data, $country_id,$type){
        $this->db->where('country_id', $country_id);
        $this->db->where('type', $type);
        return $this->db->update('country_details', $data);
    }

  
}