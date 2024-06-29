<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    function simpanBarang($data)
    {
        $sql = $this->db->query("INSERT INTO barang (namaBarang,satuan,hargaBeli,hargaJual,stok) VALUES ('".$data['namaBarang']."', '".$data['satuan']."','".$data['hargaBeli']."','".$data['hargaJual']."','".$data['stok']."') ");
        return $sql;
    }

    function simpanPendidikan($data)
    {
        $sql = $this->db->query("INSERT INTO pendidikan (idBiodata,jenjang,nama,jurusan,tahun,ipk) VALUES ('".$data['idBiodata']."','".$data['jenjang']."', '".$data['nama']."','".$data['jurusan']."','".$data['tahun']."','".$data['ipk']."') ");
        return $sql;
    }

    function simpanPelatihan($data)
    {
        $sql = $this->db->query("INSERT INTO pelatihan (idBiodata,nama,sertifikat,tahun) VALUES ('".$data['idBiodata']."', '".$data['nama']."','".$data['sertifikat']."','".$data['tahun']."') ");
        return $sql;
    }

    function simpanPekerjaan($data)
    {
        $sql = $this->db->query("INSERT INTO pekerjaan (idBiodata,nama,posisi,pendapatan,tahun) VALUES ('".$data['idBiodata']."', '".$data['nama']."','".$data['posisi']."','".$data['pendapatan']."','".$data['tahun']."') ");
        return $sql;
    }

    function getIdBiodata($data)
    {
        $sql = $this->db->query("SELECT * FROM biodata WHERE idUser = '".$data['idUser']."' ");
        // return $sql;
        return $sql->result_array();
    }

    function tampilPendidikan($data)
    {
        $sql = $this->db->query("SELECT a.* FROM pendidikan a
        INNER JOIN biodata b ON a.idBiodata = b.idBiodata
        INNER JOIN user c ON b.idUser= c.idUser
        WHERE b.idUser = '".$data['idUser']."'");
        return $sql;
    }

    function tampilPelatihan($data)
    {
        // $sql = $this->db->query("SELECT * FROM pelatihan ");
        // return $sql;
        $sql = $this->db->query("SELECT a.* FROM pelatihan a
        INNER JOIN biodata b ON a.idBiodata = b.idBiodata
        INNER JOIN user c ON b.idUser= c.idUser
        WHERE b.idUser = '".$data['idUser']."'");
        return $sql;
    }

    function tampilPekerjaan($data)
    {
        // $sql = $this->db->query("SELECT * FROM pekerjaan ");
        // return $sql;
        $sql = $this->db->query("SELECT a.* FROM pekerjaan a
        INNER JOIN biodata b ON a.idBiodata = b.idBiodata
        INNER JOIN user c ON b.idUser= c.idUser
        WHERE b.idUser = '".$data['idUser']."'");
        return $sql;
    }

    function editBarang($id)
    {
        $sql = $this->db->query("SELECT
        [id]
        ,[namaBarang]
        ,[satuan]
        ,[hargaBeli]
        ,[hargaJual]
        ,[stok]
            FROM [itasoft].[dbo].[barang] WHERE id = '".$id."'
        ");
        return $sql;
    }

    function simpanEditBarang($data)
    {
        $sql = $this->db->query("UPDATE barang SET namaBarang='".$data['namaBarang']."', 
        satuan='".$data['satuan']."',
        hargaBeli='".$data['hargaBeli']."',
        hargaJual='".$data['hargaJual']."',
        stok='".$data['stok']."'
        WHERE id = '".$data['id']."'
        ");
        return $sql;
    }

    function hapusBarang($id)
	{
		$sql = $this->db->query("delete from barang where id ='".$id."'");
        return $sql;
	}
}

?>