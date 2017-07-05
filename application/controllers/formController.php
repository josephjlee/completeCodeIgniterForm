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
    
    public function submitForm()
    {
        //create array of all submitted data
        
        $submitData=array(
        'name'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
        'gender'=>$this->input->post('gender'),
        'marital'=>$this->input->post('maritalStatus'),
        'lang'=>$this->input->post('lang'),
        'addInfo'=>$this->input->post('addInfo'),
        'resume'=>$this->input->post('resume'),
        );
        
       // print_r($data);
        $this->load->view('formSubmittedView',$submitData);
    }   
}

?>