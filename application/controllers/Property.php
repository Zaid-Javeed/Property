<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

	
	public function home()
	{
		$this->load->helper('url');
		$this->load->view('property/home');
	}
	
	public function about()
	{
	
		$this->load->view('property/about');
	}
	
	public function contact()
	{
		
		$this->load->view('property/contact');
	}
    public function validate()
    {
       //print_r($_POST);
        //codeigniter fnc print_r($this->input->post('email'));
        //Always prepare data first, never send post data directly to model
        $data=[

                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('phone'),
                'pswd'=>$this->input->post('pswd'),      
                'remember'=>$this->input->post('remember')
                 ];
             $this->load->model('Property_model');
             $result=$this->Property_model->approve($data);    
           
             if($result==true)
                 echo ("Welcome");

             else    
                $this->contact();
            }
	
	
}