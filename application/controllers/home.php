<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
        
		public function index(){	
                       
		/*--------------------------CONTENT----------------------------------*/
		$content = array("atual_page"  => "home");
		
		/*VIEW*/$this->load->template("home.php",$content);
            
	   }
    }