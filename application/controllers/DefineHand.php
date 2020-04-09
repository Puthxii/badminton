<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefineHand extends BD_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
        $this->load->view('admin/define-hand/layout/head');
		$this->load->view('admin/define-hand/layout/header');
		$this->load->view('admin/define-hand/layout/left-menu');
		$this->load->view('admin/define-hand/content');
		$this->load->view('admin/define-hand/layout/footer');
		$this->load->view('admin/define-hand/layout/foot');	
	}

}
