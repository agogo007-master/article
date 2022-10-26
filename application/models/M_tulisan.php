<?php
class M_tulisan extends CI_Model{

	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT * from posts");

	// 	$hsl=$this->db->query("
	// 		SELECT
	// 		  aa.*,
	// 		  DATE_FORMAT(
	// 		    aa.`tulisan_tanggal`,
	// 		    '%d/%m/%Y'
	// 		  ) AS tanggal,
	// 		  case
	// 		    when aa.tulisan_lang = 'en'
	// 		    then 'English'
	// 		    when aa.tulisan_lang = 'id'
	// 		    then 'Indonesia'
	// 		    when aa.tulisan_lang = 'jp'
	// 		    then 'Jepang'
	// 		  end as bahasa
	// 		FROM
	// 		  tbl_tulisan aa
	// 		ORDER BY aa.`tulisan_id` DESC
	// 		");
		return $hsl;
	}

	function get_all_tulisan_admin($kode){
		$hsl = $this->db->query("
			SELECT
			  aa.*,
			  DATE_FORMAT(
			    aa.`tulisan_tanggal`,
			    '%d/%m/%Y'
			  ) AS tanggal,
			  case
			    when aa.tulisan_lang = 'en'
			    then 'English'
			    when aa.tulisan_lang = 'id'
			    then 'Indonesia'
			    when aa.tulisan_lang = 'jp'
			    then 'Jepang'
			  end as bahasa
			FROM
			  tbl_tulisan aa
			WHERE aa.`tulisan_pengguna_id` = '$kode'
			ORDER BY aa.`tulisan_id` DESC
			");
		return $hsl;
	}

	function get_all_tulisan_head($user_dept){
		$hsl = $this->db->query("
			SELECT
			  aa.*,
			  DATE_FORMAT(
			    aa.`tulisan_tanggal`,
			    '%d/%m/%Y'
			  ) AS tanggal,
			  case
			    when aa.tulisan_lang = 'en'
			    then 'English'
			    when aa.tulisan_lang = 'id'
			    then 'Indonesia'
			    when aa.tulisan_lang = 'jp'
			    then 'Jepang'
			  end as bahasa
			FROM
			  tbl_tulisan aa
			WHERE aa.`tulisan_dept_id` = '$user_dept'
			ORDER BY aa.`tulisan_id` DESC
			");
		return $hsl;
	}

	function simpan_tulisan($judul,$isi,$kategori_nama,$status){
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$insert = array(
			'title' => $judul,
			'content' => $isi,
			'category' => $kategori_nama, 
			'status' => $status,
			'created_date' => $now,
		);

		$this->db->insert('posts',$insert);
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT * from posts where id='$kode'");
		return $hsl;
	}
	function update_tulisan($tulisan_id,$judul,$isi,$kategori_nama,$status){
		$update = array(
			'title' => $judul,
			'content' => $isi,
			'category' => $kategori_nama, 
			'status' => $status,
		);
		$this->db->where('id',$tulisan_id);
		$this->db->update('posts',$update);
	}

	function publish_tulisan($kode){
		$hsl=$this->db->query("UPDATE tbl_tulisan set tulisan_status = 'Publish' where tulisan_id='$kode' ");
		return $hsl;
	}

	function close_tulisan($kode){
		$hsl=$this->db->query(" UPDATE tbl_tulisan set tulisan_status = 'Close' where tulisan_id='$kode' ");
		return $hsl;
	}

	function hapus_tulisan($kode){
		// $hsl=$this->db->query("delete from tbl_tulisan where tulisan_id='$kode'");
		// return $hsl;

		$this->db->where('id',$kode);
		$this->db->delete('posts');
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_img_slider='1' and tulisan_status='Publish' ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function get_berita_home_en(){
		$hsl=$this->db->query("SELECT * from posts order by id DESC limit 4");
		return $hsl;
	}

	function get_berita_home_jp(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_lang='jp' and tulisan_status='Publish' ORDER BY tulisan_id DESC limit 4");
		return $hsl;
	}

	function berita_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * from posts limit $offset,$limit");
		return $hsl;
	}

	function berita_perpage_jp($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_lang='jp' and tulisan_status='Publish' ORDER BY tulisan_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita(){
		$hsl=$this->db->query("SELECT * from posts ORDER BY id DESC");
		return $hsl;
	}

	function berita_jp(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_lang = 'jp' and tulisan_status='Publish' ORDER BY tulisan_id DESC");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * from posts where id='$kode'");
		return $hsl;
	}

	function cari_berita($keyword){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_tulisan_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}

	function get_all_bahasa(){
		$hsl=$this->db->query("SELECT * FROM tbl_lang");
		return $hsl;
	}


}
