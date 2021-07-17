<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_KategoriSeminar extends CI_Model
{
    public function GET()
    {
        $this->db->select('*')
            ->from('kategori_seminar')
            ->order_by('id', 'DESC');
        $q = $this->db->get();

        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('kategori_seminar', $data);
    }

    public function EDIT($data, $where)
    {
        $this->db->where($where);
        $this->db->update('kategori_seminar', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori_seminar');
    }
}
