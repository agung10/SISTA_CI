<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_SeminarTA extends CI_Model
{
    public function GET()
    {
        $this->db->select(
            'seminar_ta.*, 
            kategori_seminar.nama as nama_seminar, 
            dosen.nidn, dosen.nama as nama_dosen'
        );
        $this->db->from('seminar_ta');
        $this->db->join(
            'kategori_seminar',
            'seminar_ta.kategori_seminar_id = kategori_seminar.id'
        );
        $this->db->join(
            'dosen',
            'seminar_ta.pembimbing_id = dosen.id',
        );
        $this->db->order_by('id', 'DESC');

        $q = $this->db->get();
        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('seminar_ta', $data);
    }

    public function EDIT($where)
    {
        return $this->db->get_where('seminar_ta', $where)->result();
    }

    public function UPDATE($data, $where)
    {
        $this->db->where($where);
        $this->db->update('seminar_ta', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('seminar_ta');
    }

    public function SHOW($where)
    {
        return $this->db->get_where('seminar_ta', $where)->result();
    }

    function total_seminarTA()
    {
        return $this->db->count_all_results('seminar_ta');
    }
}
