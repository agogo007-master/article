<?php
class M_pengguna extends CI_Model{

	function get_all_pengguna(){
		$hsl=$this->db->query("
			SELECT
			  aa.*,
			  bb.`dept_code`,
			  bb.`dept_name`,
			  IF(
			    aa.`pengguna_jenkel` = 'L',
			    'Laki-Laki',
			    'Perempuan'
			  ) AS jenkel
			FROM
			  tbl_pengguna aa
			  LEFT JOIN tbl_departement bb
			    ON aa.`pengguna_dept_id` = bb.`dept_id`
			");
		return $hsl;	
	}

	function get_all_dept(){
		$hsl = $this->db->query("SELECT * FROM tbl_departement ORDER BY dept_name ASC ");
		return $hsl;
	}

	function simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar,$departement){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_jenkel,pengguna_username,pengguna_password,pengguna_email,pengguna_nohp,pengguna_level,pengguna_photo,pengguna_hash,pengguna_dept_id) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar','$password','$departement')");
		return $hsl;
	}

	function simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level,$departement){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_jenkel,pengguna_username,pengguna_password,pengguna_email,pengguna_nohp,pengguna_level,pengguna_hash,pengguna_dept_id) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$password','$departement')");
		return $hsl;
	}

	//UPDATE PENGGUNA //
	function update_pengguna_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar,$departement){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_photo='$gambar',pengguna_dept_id='$departement' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar,$departement){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_password=md5('$password'),pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_photo='$gambar',pengguna_hash='$password',pengguna_dept_id='$departement' where pengguna_id='$kode'");
		return $hsl;
	}

	function update_pengguna_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$departement){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_dept_id='$departement' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$departement){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_jenkel='$jenkel',pengguna_username='$username',pengguna_password=md5('$password'),pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level',pengguna_hash='$password',pengguna_dept_id='$departement' where pengguna_id='$kode'");
		return $hsl;
	}
	//END UPDATE PENGGUNA//

	function hapus_pengguna($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}
	function getusername($id){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$id'");
		return $hsl;
	}
	function resetpass($id,$pass){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_password=md5('$pass'),pengguna_hash='$pass' where pengguna_id='$id'");
		return $hsl;
	}

	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}


}