<?php
class Dosen_model extends CI_Model{
    // Buat property atau variable
    public $id, $nama, $nidn, $pendidikan;
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO dosen (nama,nidn,pendidikan) VALUES (?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);    
    }
    public function update($data){
        $sql = "UPDATE dosen SET nama=?,nidn=?,pendidikan=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus table dosen
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>