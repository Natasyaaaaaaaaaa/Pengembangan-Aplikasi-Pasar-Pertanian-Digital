<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pesanan_model'); // Load the Pesanan_model
    }

    public function index() {
        $data['pesanans'] = $this->Pesanan_model->get_all_pesanans(); // Replace with the appropriate method from the model
        $this->load->view('pesanan/index', $data); // Create a view to display the data
    }

    public function create() {
        // Create a new pesanan record
        // You can use the Pesanan_model to insert data into the 'pesanan' table
    }

    public function edit($id) {
        // Edit an existing pesanan record
    }

    public function delete($id) {
        // Delete a pesanan record
    }
}
