<?php

/**
 * Tables class
 */
class Tables extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['view'] = 'layouts/tables';
		$this->load->view('layouts/main',$data);
	}
}
?>