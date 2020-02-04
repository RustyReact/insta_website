<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Single Website Builder
 *
 */


class Preview extends MY_Controller {
    
    public $template_id;
    public $website_id;

    public function __construct ()
    {
        parent::__construct ();
       
        $this->load->library ( 'form_validation' );
        // Load Ion Auth Library
        $this->load->library ( 'ion_auth' );
        // Check user is logged in ?

        if ( !$this->ion_auth->logged_in () ) {
            if ($this->input->is_ajax_request()) {
                $next_link = urlencode("/preview");
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
        $meta['page_title']       = "Preview";
        $data['page_title']       = "Preview";
        
        $this->load->view ( 'preview/index' , $data );
    }

    public function site($template_id, $website_id){

        $data['message']          = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['success_message']  = $this->session->flashdata('success_message');
        $meta['page_title']       = "Preview";
        $data['page_title']       = "Preview";
        $data['website_id']         = $website_id;
        $data['template_id']        = $template_id;

        $this->load->view ( 'preview/index' , $data );        
    }
}
