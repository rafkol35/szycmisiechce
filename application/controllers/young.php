<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Young extends CI_Controller {

    public function index() {
        $this->choosetype();
    }
    
    public function choosetype(){
        $data = array();
        //$this->choosecolor();
        $this->load->view('page/header', $data);
        $this->load->view('page/young/choosetype', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function choosecolor(){
        $data = array();
        $this->load->view('page/young/choosecolor', $data);
    }
}
