<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function about() {
		$data['title'] = "Insta - About Page";

		$this->load->view('templates/head', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('pages/about', $data);
		$this->load->view('templates/scripts', $data);
	}


}
