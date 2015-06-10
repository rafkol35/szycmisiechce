<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Art extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->dataMenu = array();
		$this->dataMenu['what'] = 'art';
	}
	
    public function index() {
        $this->choosecolor();
    }
    
    public function choosecolor(){
    	$data = array();
    	$data['includeJSs'] = array('page/art/choosecolor.php');
    	$data['title'] = 'TITLE';
    	$dataArtHeader['what'] = 'choosecolor';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/art/header', $dataArtHeader);
    	$this->load->view('page/art/choosecolor', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function choosedesign(){
        $data = array();
    	$data['includeJSs'] = array('page/art/choosedesign.php');
    	$data['title'] = 'TITLE';
    	$dataArtHeader['what'] = 'choosedesign';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/art/header', $dataArtHeader);
    	$this->load->view('page/art/choosedesign', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function setsizes(){
    	$data = array();
    	$data['includeJSs'] = array('page/art/setsizes.php');
    	$data['title'] = 'TITLE';
    	$dataArtHeader['what'] = 'setsizes';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/art/header', $dataArtHeader);
    	$this->load->view('page/art/setsizes', $data);
    	$this->load->view('page/footer', $data);
    }
    
    public function order(){
    	$data = array();
    	$data['includeJSs'] = array('page/art/order.php');
    	$data['title'] = 'TITLE';
    	$dataArtHeader['what'] = 'order';
    	$this->load->view('page/header', $data);
    	$this->load->view('page/menu', $this->dataMenu);
    	$this->load->view('page/contentbegin', $data);
    	$this->load->view('page/art/header', $dataArtHeader);
    	$this->load->view('page/art/order', $data);
    	$this->load->view('page/footer', $data);
    }
    
    protected $dataMenu;
}
