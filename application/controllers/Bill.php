<?php
/**
 * 
 */
class Bill extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model','data');
	}
	public function index()
	{
		$this->load->view('bill');
	}

	public function new_func()
	{
		$this->load->view('test');
	}
	
}?>

