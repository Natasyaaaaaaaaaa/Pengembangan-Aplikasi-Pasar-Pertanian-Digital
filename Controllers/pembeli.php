<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pembeli_model'); // Load the Pembeli_model
    }

    public function index() {
        $data['pembelis'] = $this->Pembeli_model->get_all_pembelis(); // Replace with the appropriate method from the model
        $this->load->view('pembeli/index', $data); // Create a view to display the data
    }

    public function create() {
        // Create a new pembeli record
        // You can use the Pembeli_model to insert data into the 'pembeli' table
    }

    public function edit($id) {
        // Edit an existing pembeli record
    }

    public function delete($id) {
        // Delete a pembeli record
    }
}
