<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this ->input->post ('nim');
		$alamat = $this -> input ->post ('alamat');

		$data = array (
			'id' => $id,
			'nama' => $nama,
			'nim' =>$nim,
			'alamat'=> $alamat
			);

		$this->m_data->input_data($data,'mahasiswa');
		redirect('crud');
	}

	function hapus ($id) {
		$where = array('id'=> $id);
		$this->m_data->hapus_data($where, 'mahasiswa');
		redirect ('crud');
	}

	function edit ($id){
		$where = array('id' => $id);
		$data['user'] = $this-> m_data ->edit_data($where,'mahasiswa')->result();
		$this ->load->view('v_edit',$data);
	}

	function update (){
		$id = $this -> input->post('id');
		$nama = $this -> input-> post ('nama');
		$nim = $this -> input->post('nim');
		$alamat = $this -> input->post('alamat');

		$data = array(
			'nama'=> $nama,
			'nim'=>$nim,
			'alamat'=>$alamat
			);

		$where = array (
			'id'=> $id
			);

		$this->m_data->update_data($where,$data,'mahasiswa');
		redirect('crud');
	}
}