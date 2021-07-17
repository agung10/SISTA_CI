<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_PendaftaranPengguna extends CI_Model
{
    public function GET()
    {
        $this->db->select('*')
            ->from('user')
            ->where('role_id', 2)
            ->order_by('id', 'DESC');
        $q = $this->db->get();

        // $q = $this->db->query('SELECT * FROM `user` WHERE `role_id` = 2 ORDER BY `id` DESC');

        return $q->result();
    }

    public function EDIT($where)
    {
        return $this->db->get_where('user', $where)->result();
    }

    public function UPDATE($data, $where)
    {
        $this->db->where($where);
        $this->db->update('user', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function SHOW($where)
    {
        return $this->db->get_where('user', $where)->result();
    }

    function total_terverifikasi()
    {
        $this->db->where('role_id', 2);
        $this->db->where('is_active', 1);
        return $this->db->count_all_results('user');
    }
    function total_verifikasi()
    {
        $this->db->where('role_id', 2);
        $this->db->where('is_active', 0);
        return $this->db->count_all_results('user');
    }
    function total_pengguna()
    {
        $this->db->where('role_id', 2);
        return $this->db->count_all_results('user');
    }
}
