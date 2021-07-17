<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_DetailPenilaian extends CI_Model
{
    public function GET()
    {
        $this->db->select(
            'detail_penilaian.*, 
            penilaian.nama as nama_penilaian, penilaian.keterangan,
            dosen.nidn, dosen.nama as nama_dosen,
            seminar_ta.kategori_seminar_id, seminar_ta.nim, seminar_ta.nama_mahasiswa, seminar_ta.judul'
        );
        $this->db->from('detail_penilaian');
        $this->db->join(
            'penilaian',
            'detail_penilaian.penilaian_id = penilaian.id'
        );
        $this->db->join(
            'dosen',
            'detail_penilaian.dosen_id = dosen.id',
        );
        $this->db->join(
            'seminar_ta',
            'detail_penilaian.seminar_id = seminar_ta.id',
        );
        $this->db->order_by('id', 'DESC');

        $q = $this->db->get();
        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('detail_penilaian', $data);
    }

    public function EDIT($data, $where)
    {
        $this->db->where($where);
        $this->db->update('detail_penilaian', $data);
    }

    public function DELETE($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('detail_penilaian');
    }

    public function SHOW($where)
    {
        return $this->db->get_where('detail_penilaian', $where)->result();
    }
}
