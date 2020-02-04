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

class Single_builder_model extends CI_Model
{

    public function __construct ()
    {
        parent::__construct ();
    }

    public function add($data){

        $this->db->set($data);
        $this->db->insert('sites_list');
    }
}

/* End of file settings_model.php */
/* Location: ./application/models/settings_model.php */
