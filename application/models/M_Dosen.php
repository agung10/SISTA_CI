<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dosen extends CI_Model
{
    public function GET()
    {
        $this->db->select('*')
            ->from('dosen')
            ->order_by('nama', 'ASC');
        $q = $this->db->get();

        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('dosen', $data);
    }

    public function EDIT($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dosen', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }

    function total_dosen()
    {
        return $this->db->count_all_results('dosen');
    }
}
