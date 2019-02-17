<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _dwc_main extends CI_Controller {

	public function index($inf = '')
	{
		$this->load->view('_dwv_head');
		$this->load->view('dwv_menu');
		$this->load->view('_dwv_foot');
	}
}
