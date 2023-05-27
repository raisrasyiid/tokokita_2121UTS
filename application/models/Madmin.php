<?php

class Madmin extends CI_Model{
	
	public function m_cek_mail() {

		return $this->db->get_where('tbl_admin',array('userName' => $this->input->post('username')));
		return $this->db->get_where('tbl_admin',array('password' => $this->input->post('password')));
   
		}	

	public function m_cek_maill() {

		return $this->db->get_where('tbl_admin',array('password' => $this->input->post('password')));
	   
		}	

	public function cek_login($u, $p){
		$q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
		return $q;
	}

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function updatee($passwordd, $password){
		$this->db->update('tbl_admin');
		$this->db->set('password',$passwordd, true);
		$this->db->where('password=', $password);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

	public function cek_login_member($u, $p){
		$q = $this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p, 'statusAktif'=>'Y'));
		return $q;
	}

	public function update_password($idAdmin, $password) {
		$data = array('password' => password_hash($password, PASSWORD_DEFAULT));
        $this->db->where('idAdmin', $idAdmin);
        $this->db->update('tbl_admin', $data);
    }

	public function cek_kategori($p){
		$q = $this->db->get_where('tbl_kategori', ['namaKat'=>$p]);
		return $q;
	}
	
	public function cek_toko($p){
		$q = $this->db->get_where('tbl_toko', ['namaToko'=>$p]);
		return $q;
	}
}
