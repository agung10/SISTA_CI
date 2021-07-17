<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Penilaian extends CI_Model
{
    public function GET()
    {
        $this->db->select('*')
            ->from('penilaian')
            ->order_by('id', 'DESC');
        $q = $this->db->get();

        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('penilaian', $data);
    }

    public function EDIT($data, $where)
    {
        $this->db->where($where);
        $this->db->update('penilaian', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penilaian');
    }
}
