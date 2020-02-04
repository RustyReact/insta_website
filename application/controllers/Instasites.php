<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Single Website Builder
 *
 */


class Instasites extends MY_Controller {
    /**
     * Je_current constructor.
     */
    public function __construct ()
    {
        parent::__construct ();
       
        $this->load->library ( 'form_validation' );
        // Load Ion Auth Library
        $this->load->library ( 'ion_auth' );
        // Check user is logged in ?
        if ( !$this->ion_auth->logged_in () ) {
            if ($this->input->is_ajax_request()) {
                $next_link = urlencode("/instasites");
                $result = array("status"=>"redirect", "message"=>site_url("auth/login?next=$next_link"));
                die(json_encode($result));
            }else{
                $next_link = urlencode(substr("$_SERVER[REQUEST_URI]", stripos("$_SERVER[REQUEST_URI]", "index.php")+7));
                redirect("auth/login?next=$next_link");
            }
        }
    }



    public function index()
    {
        $data['message']          = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['success_message']  = $this->session->flashdata('success_message');
        $meta['page_title']       = "My Instasites";
        $data['page_title']       = "My Instasites";

        $this->load->view ( 'templates/head' , $meta );
        $this->load->view ( 'templates/header' );
        $this->load->view ( 'instasites/index' , $data );
        $this->load->view ( 'templates/footer' , $meta );
    }

    public function get_data_prospect(){

        if (!$this->input->is_ajax_request()) {
            $result = array("status"=>"error", "message"=>lang("access_denied"));
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
            return false;
        }
        $this->load->library('datatables');
        $this->datatables
        ->setsColumns("id,business_name,phone,email,status,website_id,created,  template_id")
        ->select("id,business_name,phone,email,status,website_id,created,  template_id", false)
        ->from("sites_list");
        $this->output->set_content_type('application/json')->set_output( $this->datatables->generate() );
    }
}
