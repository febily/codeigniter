<?php

/**
 * 
 */
class Employee extends CI_Controller
{ public function index()
	{
	
		$this->load->view('employee');
	}
	public function add_employee(){
		$data= array(
			'name'=> $this->post('txtname'),
			'mobile'=> $this->post('txtmobile'),
			'email'=> $this->post('txtemail'),
			'address'=> $this->post('txtaddress'),
		);
		$this->load->model('data_model');
		$this->data_model->insert_data('emp',$data);
		}
	}
	


?>