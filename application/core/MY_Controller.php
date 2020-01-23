<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	protected function layout($viewName, $data = null) {
		$content = $this->load->view($viewName, $data, true);

		$this->load->view('layout', compact("content"));
	}

	protected function error($message) {
		$page = $_SERVER['HTTP_REFERER'];
		header('Refresh: 3; url="' . $page . '"');
		$this->layout("error", compact("message"));
	}

	protected function success($message, $redirectUrl = null){
		if($redirectUrl)
			header('Refresh: 3; url="' . $redirectUrl . '"');
		$this->layout("success", compact("message"));
	}
}
