<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model'); // Load the Admin_model
    }

    public function index() {
        $data['admins'] = $this->Admin_model->get_all_admins(); // Replace with the appropriate method from the model
        $this->load->view('admin/index', $data); // Create a view to display the data
    }

    public function create() {
        // Create a new admin record
        // You can use the Admin_model to insert data into the 'admin' table
    }

    public function edit($id) {
        // Edit an existing admin record
    }

    public function delete($id) {
        // Delete an admin record
    }
}
