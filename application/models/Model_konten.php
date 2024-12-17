<?php

class Model_konten extends CI_Model{

    // public function tampil_data()
    // {
    //    return $this->db->get('product');
    // }

    // public function simpan($data,$table){
    //     $this->db->insert($table,$data);
    // }

    // public function edit_product($where, $table){
    //     return $this->db->get_where($table, $where);
    // }

    // public function update_data($where,$data,$table){
    //     $this->db->where($where);
    //     $this->db->update($table, $data);
    // }

    // public function hapus_product($where,$table){
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }

    public function find($id_konten){
        $result = $this->db->where('id_konten',$id_konten)
                           ->limit(1)
                           ->get('konten');
        if($result->num_rows() > 0){
            return $result->row();

        } else{
            return array();
        }
                        
    }
    public function detail($id_konten)
    {
        $result = $this->db->where('id_konten', $id_konten)->get('konten');
        if($result->num_rows() > 0){
            return($result->result());
        }else{
            return false;
        }
    }
}