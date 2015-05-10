<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exclusive extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->dataMenu = array();
		$this->dataMenu['what'] = 'exclusive';
	}
	
    public function index() {
        $this->choosecolor();
    }
    
    public function choosecolor(){
    	$data = array();
    	$dataMenu = array();
    	$dataMenu['what'] = 'exclusive';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/exclusive/index', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function choosedesign(){
        $data = array();
        $this->load->view('page/art/choosedesign', $data);
    }
    
    protected $dataMenu;
}
