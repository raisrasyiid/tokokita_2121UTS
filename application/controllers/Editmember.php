<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['member']=$this->Madmin->get_all_data('tbl_member')->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/member/index', $data);
		$this->load->view('home/layout/footer');
	}

	public function edit(){
		$this->load->view('home/layout/header');
		$this->load->view('home/edit/form_edit');
		$this->load->view('home/layout/footer');
	}

	public function save(){
    $id = $this->session->userdata('idKonsumen');
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('namaKonsumen', 'Nama Konsumen', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('tlpn', 'No Telepon', 'required');
    $this->form_validation->set_message('required', 'Kolom {field} harus diisi.');
    
    if ($this->form_validation->run() == false) {
        $this->load->view('home/layout/header');
        $this->load->view('home/member/form_edit');
        $this->load->view('home/layout/footer');
    } else {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        
        if ($this->Madmin->update()->num_rows()==1) {
            $data_update = array(
                'idKonsumen' => $id,
                'username' => $username,
                'password' => $password,
                'namaKonsumen' => $namaKonsumen,
                'alamat' => $alamat,
                'email' => $email,
                'tlpn' => $tlpn
            );
            $this->Madmin->update('tbl_member', $data_update);
            redirect('editmember');
        } else {
            redirect('editmember/edit');
        }
    }
}
/*
	public function save(){
		$id = $this->session->userdata('idKonsumen');
		$nama_toko = $this->input->post('namaToko');
		$deskripsi = $this->input->post('deskripsi');
		$config['upload_path'] = './assets/logo_toko/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('logo')){
			$data_file = $this->upload->data();
			$data_insert=array('idKonsumen' => $id,
								'namaToko' => $nama_toko,
								'logo' =>  $data_file['file_name'],
								'deskripsi' => $deskripsi,
							'statusAktif' => 'Y');
			$this->Madmin->insert('tbl_toko', $data_insert);
			redirect('toko');
		} else {
			redirect('toko/add');
		}
	}*/
}
