<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Young extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->dataMenu = array();
        $this->dataMenu['what'] = 'young';
    }
    
    public function index() {
        $this->choosetype();
    }
    
    public function choosetype(){
        $data = array();
        $this->load->view('page/header', $data);
        $this->load->view('page/menu', $this->dataMenu);
        $this->load->view('page/contentbegin', $data);
        $this->load->view('page/young/choosetype', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function choosecolor(){
        $data = array();
        $this->load->view('page/young/choosecolor', $data);
    }
    
    protected $dataMenu;
}
