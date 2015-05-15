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
        $data['includeJSs'] = array('index2.php');
        $dataYoungHeader['what'] = 'choosetype';
        $this->load->view('page/header', $data);
        $this->load->view('page/menu', $this->dataMenu);
        $this->load->view('page/contentbegin', $data);
        $this->load->view('page/young/header', $dataYoungHeader);
        $this->load->view('page/young/choosetype', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function choosecolor(){
    	$data = array();
    	$data['includeJSs'] = array('index2.php');
    	$dataYoungHeader['what'] = 'choosecolor';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/young/header', $dataYoungHeader);
    	$this->load->view('page/young/choosecolor', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function setsizes(){
    	$data = array();
    	$data['includeJSs'] = array('index2.php');
    	$dataYoungHeader['what'] = 'setsizes';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/young/header', $dataYoungHeader);
    	$this->load->view('page/young/setsizes', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function order(){
    	$data = array();
    	$data['includeJSs'] = array('index2.php');
    	$dataYoungHeader['what'] = 'order';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/young/header', $dataYoungHeader);
    	$this->load->view('page/young/order', $data);
    	$this->load->view('page/footer', $data);
    }
    
    protected $dataMenu;
}
