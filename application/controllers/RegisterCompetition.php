<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterCompetition extends BD_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->isLoggedIn();
		$this->load->model('user_model');
	}

	public function index()
	{
		$id = 2;
		$user_data = $this->user_model->get($id);
		$data['user_data'] = $user_data;

		$this->load->view('user/layout/head');
		$this->load->view('user/layout/header');
		$this->load->view('user/layout/left-menu');
		$this->load->view('user/competition/content', $data);
		$this->load->view('user/layout/footer');
		$this->load->view('user/layout/foot');
		$this->load->view('user/competition/script');
	}

	public function editCompetition()
	{
		$id = 2;
		$user_data = $this->user_model->get($id);
		$data['user_data'] = $user_data;

		$this->load->view('user/competition/edit/layout/head');
		$this->load->view('user/competition/edit/layout/header');
		$this->load->view('user/competition/edit/layout/left-menu');
		$this->load->view('user/competition/edit/content', $data);
		$this->load->view('user/competition/edit/layout/footer');
		$this->load->view('user/competition/edit/layout/foot');
		$this->load->view('user/competition/edit/script');
	}
}
