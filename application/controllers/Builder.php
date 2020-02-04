<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Single Website Builder
 *
 */


class Builder extends MY_Controller {
    /**
     * Je_current constructor.
     */
    public function __construct ()
    {
        parent::__construct ();
    }

    public function index()
    {
        $data['message']          = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['success_message']  = $this->session->flashdata('success_message');
        $meta['page_title']       = "Preview";
        $data['page_title']       = "Preview";

        $this->load->view ( 'preview/index' , $data );
    }

    public function build_site(){

        $template_id                = $this->input->get("template_id");
        $data['business_name']      = $this->input->get("name");
        $data['phone']              = $this->input->get("phone");
        $data['email']              = $this->input->get("email");
        $data['city']               = $this->input->get("city");
        $data['state']              = $this->input->get("state");

        $this->load->view ( 'builder/site_'.$template_id.'/index' , $data );
    }
}
