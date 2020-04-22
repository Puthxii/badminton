<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competition extends BD_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
		$this->load->view('user/competition-sh/layout/head');
		$this->load->view('user/competition-sh/layout/header');
		$this->load->view('user/competition-sh/layout/left-menu');
		$this->load->view('user/competition-sh/content');
		$this->load->view('user/competition-sh/layout/footer');
        $this->load->view('user/competition-sh/layout/foot');
		
	}
	
}