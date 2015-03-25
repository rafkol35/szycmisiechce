<?php

class Controls extends CI_Controller {
    
    public function setInt($model,$table,$name,$value){
        $this->load->model($model,$model,TRUE);
        $this->$model->setInt($table,$name,$value);
        
    }
}