<?php
class FormController extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        
        //load form helper
        $this->load->helper('form');
        
        //load url helper
        $this->load->helper('url');
        
        //load file helper
        $this->load->helper('file');
    }
    
    public function index()
    {
        //load form view 
        $this->load->view('formView');
    }   
}
?>