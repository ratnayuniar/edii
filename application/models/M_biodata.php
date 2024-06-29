<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_biodata extends CI_Model
{
    function simpanBiodata($data)
    {
        $sql = $this->db->query("INSERT INTO biodata 
        (idUser,posisi,nama,noKtp,ttl,jenkel,agama,gol,status,alamatKtp,alamatDom,email,telp,urgent,skill,penempatan,penghasilan) VALUES 
        ('".$data['idUser']."','".$data['posisi']."', '".$data['nama']."','".$data['ktp']."','".$data['ttl']."','".$data['jenkel']."','".$data['agama']."','".$data['golDarah']."',
        '".$data['status']."','".$data['alamatKtp']."','".$data['alamatDom']."','".$data['email']."','".$data['telp']."','".$data['urgent']."','".$data['skill']."','".$data['penempatan']."','".$data['gaji']."') ");
        return $sql;
    }

    function editBiodata($data)
    {
        $sql = $this->db->query("UPDATE biodata SET

        posisi = '".$data['posisi']."',
        nama = '".$data['nama']."',
        noKtp = '".$data['ktp']."',
        ttl = '".$data['ttl']."',
        jenkel='".$data['jenkel']."',
        agama = '".$data['agama']."',
        gol= '".$data['golDarah']."',
        status='".$data['status']."',
        alamatKtp='".$data['alamatKtp']."',
        alamatDom='".$data['alamatDom']."',
        email='".$data['email']."',
        telp='".$data['telp']."',
        urgent='".$data['urgent']."',
        skill='".$data['skill']."',
        penempatan='".$data['penempatan']."',
        penghasilan ='".$data['gaji']."' WHERE idBiodata='".$data['idBiodata']."'");
        return $sql;
    }

    function tampilBiodata($data)
    {
        $sql = $this->db->query("SELECT * FROM biodata WHERE idUser = '".$data['idUser']."' ");
        return $sql;
    }

    function tampilBiodataAll($data)
    {
        $sql = $this->db->query("SELECT * FROM biodata ");
        return $sql;
    }

    function hitungBiodata($data)
    {
        $sql = $this->db->query("SELECT COUNT(idUser) as jumlah FROM biodata WHERE idUser = '".$data['idUser']."' ");
        return $sql->result_array();
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