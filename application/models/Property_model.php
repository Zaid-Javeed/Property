<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_model extends CI_model {
    
    public function approve($data ){
        
       

        if(empty($data['name']) || empty($data['email']) || empty($data['pswd']))
        {
           return false;   
        }  
    
        else{
            if(($data['email']=='zaid@gmail.com') && ($data['pswd']=='1234'))
                return true ;
            else
                return false;    
            }
    } 
}