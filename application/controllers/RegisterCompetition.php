<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterCompetition extends BD_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
		$this->load->view('user/layout/head');
		$this->load->view('user/layout/header');
		$this->load->view('user/layout/left-menu');
		$this->load->view('user/competition/content');
		$this->load->view('user/layout/footer');
        $this->load->view('user/layout/foot');
		
	}
	
	public function editCompetition()
	{
        $this->load->view('user/competition/edit/layout/head');
		$this->load->view('user/competition/edit/layout/header');
		$this->load->view('user/competition/edit/layout/left-menu');
		$this->load->view('user/competition/edit/content');
		$this->load->view('user/competition/edit/layout/footer');
        $this->load->view('user/competition/edit/layout/foot');
    }
}
