<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soon_model extends CI_model {

    public function get_data(){
         $data="10 days";
            return $data;
    }
    public function complex_data(){
        $data=[
            '23'=>[
                'Name'=>'Zaid',
                'Age'=>25,
                'Course'=>'M.C.A'
                ],

            '38'=>[
                  'Name'=>'Aamir',
                  'Age'=>25,
                  'Course'=>'M.C.A'
                 ],
                
            '57'=>[
                  'Name'=>'Aamir Kachkar',
                  'Age'=>25,
                  'Course'=>'M.C.A'
                 ],
              
            '35'=>[
                  'Name'=>'Irfan',
                  'Age'=>25,
                  'Course'=>'M.C.A'
                ]
        ];
        return $data;
    }
}