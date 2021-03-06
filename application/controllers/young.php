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
        $data['includeJSs'] = array('page/young/choosetype.php');
        $data['title'] = 'TITLE';
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
    	$data['includeJSs'] = array('page/young/choosecolor.php');
    	$data['title'] = 'TITLE';
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
    	$data['includeJSs'] = array('page/young/setsizes.php');
    	$data['title'] = 'TITLE';
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
    	$data['includeJSs'] = array('page/young/order.php');
    	$data['title'] = 'TITLE';
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
