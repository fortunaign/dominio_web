<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dwc_sor extends CI_Controller {

    public function index()
    {
        $this->load->view('_dwv_head');
        $this->load->view('dwv_sor');
        $this->load->view('_dwv_foot');
    }

}