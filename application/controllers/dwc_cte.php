<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dwc_cte extends CI_Controller {
    
    public function index($inf = '')
    {
        $this->load->view('_dwv_head');
        switch ($inf) {
            case 'add':
                $this->load->view('dwv_cte_form');
                break;
            case 'con':
                $this->load->view('dwv_cte_cta');
                break;
            default:
                $this->load->view('dwv_cte');
                break;
        }
        $this->load->view('_dwv_foot');
    }

}


