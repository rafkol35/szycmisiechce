<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Art extends CI_Controller {

    public function index() {
        $this->choosecolor();
    }
    
    public function choosecolor(){
        $data = array();
        $this->choosecolor();
        $this->load->view('page/art/choosecolor', $data);
    }
    
    public function choosedesign(){
        $data = array();
        $this->load->view('page/art/choosedesign', $data);
    }
}
