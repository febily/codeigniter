<?php
	/**
	 * 
	 */
	class User_details extends CI_Controller
	{
		
		function index(){
			$this->load->model('user_model');
			$data['UserArray']= $this->user_model->return_users();
			$this->load->view('user_view',$data);
		}
	}
?>