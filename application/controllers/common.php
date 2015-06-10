<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->dataMenu = array();
        $this->dataMenu['what'] = 'common';
    }
    
    public function howtobuy(){
        $data = array();
        $data['includeJSs'] = array('index2.php');
        $data['title'] = 'TITLE';
        $dataYoungHeader['what'] = 'choosetype';
        $this->load->view('page/header', $data);
        $this->load->view('page/menu', $this->dataMenu);
        $this->load->view('page/contentbegin', $data);
       	$this->load->view('page/common/header', $dataYoungHeader);
        $this->load->view('page/common/howtobuy', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function rules(){
    	$data = array();
    	$data['includeJSs'] = array('index2.php');
    	$data['title'] = 'TITLE';
    	$dataYoungHeader['what'] = 'choosecolor';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/common/header', $dataYoungHeader);
    	$this->load->view('page/common/rules', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function contact(){
    	$data = array();
    	$data['includeJSs'] = array('index2.php');
    	$data['title'] = 'TITLE';
    	$dataYoungHeader['what'] = 'setsizes';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/common/header', $dataYoungHeader);
    	$this->load->view('page/common/contact', $data);
    	$this->load->view('page/footer', $data);
    }
    
    protected $dataMenu;
}
