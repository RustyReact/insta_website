<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Smart Invoice System
 *
 * A simple and powerful web app based on PHP CodeIgniter framework manage invoices.
 *
 * @package Smart Invoice System
 * @author  Bessem Zitouni (bessemzitouni@gmail.com)
 * @copyright   Copyright (c) 2017
 * @since   Version 1.6.0
 * @filesource
 */

class Home extends MY_Controller
{
    /**
    * Home constructor.
    */
    public function __construct ()
    {
        parent::__construct ();
       
        // Check user is logged in ?
        if ( !$this->ion_auth->logged_in() ) {
            if ($this->input->is_ajax_request()) {
                $result = array("status"=>"redirect", "message"=>site_url("auth/login"));
                die(json_encode($result));
            }else{
                redirect("auth/login");
            }
        }
    }

    public function index()
    {
        $data['message']          = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['success_message']  = $this->session->flashdata('success_message');
        $meta['page_title']       = "Overview";
        $data['page_title']       = "Overview";

        $this->load->view ( 'templates/head' , $meta );
        $this->load->view ( 'templates/header' );
        $this->load->view('home' , $data);
        $this->load->view ( 'templates/footer' , $meta );
    }   
}
