<?php

/**
 * Notifications class
 */
class Notifications extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['view'] = 'layouts/notifications';
		$this->load->view('layouts/main',$data);
	}
}
?>