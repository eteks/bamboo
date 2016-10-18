<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ajax_model');

		
	}

	
} // end of the class
