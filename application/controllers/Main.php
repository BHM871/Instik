<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function feed() {
		$data['title'] = "Insta - Feed Page";

		$this->load->view('templates/nav', $data);
		$this->load->view('pages/feed', $data);
	}

	public function about() {
		$data['title'] = "Insta - About Page";

		$this->load->view('templates/nav', $data);
		$this->load->view('pages/about', $data);
	}


}
