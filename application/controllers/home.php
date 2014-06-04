<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Página principal do site
	 */
	public function index()
	{
		$this->load->view('vhome');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */