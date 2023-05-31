<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    public function get_clientes()
    {
        return $this->db->get('clientes')->result_array();
    }

    public function get_cliente($id)
    {
        return $this->db->get_where('clientes', ['id' => $id])->row_array();
    }

    public function create_cliente()
    {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'email' => $this->input->post('email')
        ];

        $this->db->insert('clientes', $data);
    }

    public function update_cliente($id)
    {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'email' => $this->input->post('email')
        ];

        $this->db->where('id', $id);
        $this->db->update('clientes', $data);
    }

    public function delete_cliente($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('clientes');
    }
}