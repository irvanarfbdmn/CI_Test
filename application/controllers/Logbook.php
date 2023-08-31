<?php
	
class Logbook extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Logbook';
		$this->load->view('templates/header', $data);
		$this->load->view('logbook/index');
		$this->load->view('templates/footer');
	}
}
