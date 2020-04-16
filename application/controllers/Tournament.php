<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament extends BD_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
        $this->load->view('admin/tournament/layout/head');
		$this->load->view('admin/tournament/layout/header');
		$this->load->view('admin/tournament/layout/left-menu');
		$this->load->view('admin/tournament/content');
		$this->load->view('admin/tournament/layout/footer');
		$this->load->view('admin/tournament/layout/foot');	
	}

}
