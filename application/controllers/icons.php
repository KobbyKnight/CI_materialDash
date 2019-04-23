<?php

/**
 * Icons class
 */
class Icons extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['view'] = 'layouts/icons';
		$this->load->view('layouts/main',$data);
	}
}
?>