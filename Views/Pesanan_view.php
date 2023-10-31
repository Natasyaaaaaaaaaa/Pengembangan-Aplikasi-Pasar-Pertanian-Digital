<?php
class Pesanan_model extends CI_Model {
    public function get_all_pesanan() {
        $query = $this->db->get('pesanan');
        return $query->result();
    }

    public function get_pesanan_by_id($id) {
        $query = $this->db->get_where('pesanan', array('id' => $id));
        return $query->row();
    }

    public function tambah_pesanan($data) {
        return $this->db->insert('pesanan', $data);
    }

    public function edit_pesanan($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pesanan', $data);
    }

    public function hapus_pesanan($id) {
        return $this->db->delete('pesanan', array('id' => $id));
    }
}
