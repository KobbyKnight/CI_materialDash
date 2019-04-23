<?php

/**
 * Map class
 */
class Map extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['view'] = 'layouts/map';
		$this->load->view('layouts/main',$data);
	}
}
?>