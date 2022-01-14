<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comming_soon extends CI_Controller {

public function soon(){
    //Load Model 
        $this->load->model('Soon_model');
	//Fetch data from Model
        $data['days']=$this->Soon_model->get_data();
        $data['complex']=$this->Soon_model->complex_data();
    //Display data(display View)    	
        $this->load->view('commingsoon',$data);
	}
}
