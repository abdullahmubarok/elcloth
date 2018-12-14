/<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_barok extends CI_Controller {

	public function index()
	{
        $this->load->view('web/head');
        $this->load->view('web/slider');
        $this->load->view('web/body');
        $this->load->view('web/footer');		
	}
}
