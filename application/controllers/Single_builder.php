<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Single Website Builder
 *
 */


class Single_builder extends MY_Controller {
    /**
     * Je_current constructor.
     */
    public function __construct ()
    {
        parent::__construct ();
       
        $this->load->library ( 'form_validation' );
        // Load Ion Auth Library
        $this->load->library ( 'ion_auth' );

        $this->load->model("single_builder_model", "sb_m");
        // Check user is logged in ?
        if ( !$this->ion_auth->logged_in () ) {
            if ($this->input->is_ajax_request()) {
                $next_link = urlencode("/single_builder");
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
        $meta['page_title']       = lang('single_builder');
        $data['page_title']       = lang('single_builder');

        $this->load->view ( 'templates/head' , $meta );
        $this->load->view ( 'templates/header' );
        $this->load->view ( 'single_builder/index' , $data );
        $this->load->view ( 'templates/footer' , $meta );
    }

    public function upload(){

        if (!$this->input->is_ajax_request()) {
            $result = array("status"=>"error", "message"=>lang("access_denied"));
            $this->output->set_content_type('application/json')->set_output(json_encode($result));
            return false;
        }
        
        $email = $this->input->post('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $data = array(
                    "status"  => "error",
                    "message" => "Invalid email format",
                    "fields"  => $this->form_validation->error_array()
                );
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
        
            $userdata = $this->session;
            $website_id = $this->randomString();
            $business_name = $this->input->post("business_name");
            $phone = $this->input->post("phone");
            $email = $this->input->post("email");
            $city = $this->input->post("city");
            $state = $this->input->post("state");
            $template_id = $this->input->post("template_id");
            $data =  array(
                'business_name'  => $this->input->post("business_name"),
                'phone'          => $this->input->post("phone"),
                'email'          => $this->input->post("email"),
                'street'         => $this->input->post("street"),
                'suite'          => $this->input->post("suite"),
                'city'           => $this->input->post("city"),
                'state'          => $this->input->post("state"),
                'postal'         => $this->input->post("postal"),
                'country'        => $this->input->post("country"),
                'firstname'      => $this->input->post("firstname"),
                'lastname'       => $this->input->post("lastname"),
                'website_id'     => $website_id,
                'status'         => 1,
                'template_id'    => $template_id,
                'created'        => date("Y-m-d H:i:s"),
                'user_id'        => $userdata->userdata['user_id']                 
            );

            $this->sb_m->add($data);

            $file = file_get_contents(base_url()."/builder/build_site?name=".$business_name."&phone=".$phone."&email=".$email."&city=".$city."&state=".$state."&template_id=".$template_id);
            $html_file_path = realpath(APPPATH.'../builder/site_'.$template_id.'/') . DIRECTORY_SEPARATOR . $website_id. ".html";
            file_put_contents($html_file_path, $file);

            $data = array(
                    "status"  => "success",
                    "message" => "Build Single Website Success!",
                    'value'   => $website_id
                );
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }
    }

    private function randomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $randstring = '';
        for ($i = 0; $i < 8; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randstring;
    }
}
