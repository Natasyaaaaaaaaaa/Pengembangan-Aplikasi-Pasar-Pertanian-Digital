<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Petani_model'); // Load the Petani_model
    }

    public function index() {
        $data['petanis'] = $this->Petani_model->get_all_petanis(); // Replace with the appropriate method from the model
        $this->load->view('petani/index', $data); // Create a view to display the data
    }

    public function create() {
        // Create a new petani record
        // You can use the Petani_model to insert data into the 'petani' table
    }

    public function edit($id) {
        // Edit an existing petani record
    }

    public function delete($id) {
        // Delete a petani record
    }
}
