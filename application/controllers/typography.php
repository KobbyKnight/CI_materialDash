<?php

/**
 * Typography class
 */
class Typography extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['view'] = 'layouts/typography';
		$this->load->view('layouts/main',$data);
	}
}
?>