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

class Settings extends MY_Controller
{
    /**
     * Settings constructor.
     */
    public function __construct ()
    {
        parent::__construct ();
        // Load Form Validation Library
        $this->load->library ( 'form_validation' );
        // Load Ion Auth Library
        $this->load->library ( 'ion_auth' );
        // Load Encryption Library
        $this->load->library('encryption');

        // Check user is logged in ?
        $ignored_methods = array("change_language", "jsConstant");
        if ( !$this->ion_auth->logged_in () && !in_array($this->router->fetch_method(), $ignored_methods) ) {
            if ($this->input->is_ajax_request()) {
                $next_link = urlencode("/settings");
                $result = array("status"=>"redirect", "message"=>site_url("auth/login?next=$next_link"));
                die(json_encode($result));
            }else{
                $next_link = urlencode(substr("$_SERVER[REQUEST_URI]", stripos("$_SERVER[REQUEST_URI]", "index.php")+9));
                redirect("auth/login?next=$next_link");
            }
        }
    }

    public function index ()
    {
    }

    public function change_language ()
    {
        if($this->input->get('lang')){
            $lang = $this->input->get('lang');
        }
        $folder = 'application/language/';
        $languagefiles = scandir($folder);
        if(in_array($lang, $languagefiles)){
            $this->settings_model->setLanguage($lang);
            $this->session->set_flashdata('success_message', lang('language_is_changed'));
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function jsConstant($show_in = "head")
    {
        $data["show_in"] = $show_in;
        $this->output->set_content_type('application/javascript');
        $this->load->view ('templates/jsConstant', $data);
    }
}
