<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$data['member']=$this->Madmin->get_all_data('tbl_member')->result();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/member/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function get_by_id($id){
		$dataWhere = array('idkonsumen'=>$id);
		$data['member'] = $this->Madmin->get_by_id('tbl_member', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/member/formEdit', $data);
		$this->load->view('admin/layout/footer');
	}

	public function ubah_status(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('namaKonsumen', 'Nama Konsumen', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('tlpn', 'Telepon', 'required');
		$this->form_validation->set_rules('statusAktif', 'Status Aktif', 'required');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/layout/header');
        	$this->load->view('admin/layout/menu');
        	$this->load->view('admin/member/formEdit');
        	$this->load->view('admin/layout/footer');
        } else {
		$id = $this->input->post('id');	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namaKonsumen = $this->input->post('namaKonsumen');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$tlpn = $this->input->post('tlpn');
		$statusAktif = $this->input->post('statusAktif');	
		$dataUpdate = array('username'=>$username,
							'password' => $password,
							'namaKonsumen' => $namaKonsumen,
							'alamat' => $alamat,
							'email' => $email,
							'tlpn' => $tlpn,
							'statusAktif' => $statusAktif
						);
		$this->Madmin->update('tbl_member', $dataUpdate, 'idkonsumen', $id);
		redirect('member');
		}
	}

	public function delete($id){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$this->Madmin->delete('tbl_member', 'idKonsumen', $id);
		redirect('member');
	}

}
