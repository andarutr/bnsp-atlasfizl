<?php 

class M_mahasiswa extends CI_Model {
	public function tampil_data(){
		return $this->db->get('tb_mahasiswa');
	}

	public function detail_data($id = NULL){
		$query = $this->db->get_where('tb_mahasiswa', array('id' => $id))->row();
		return $query;
	}

	public function input_data(){
		$foto = $_FILES['foto'];
		
		if($foto = ''){}else{
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('foto')){
				echo "Gagal Upload!";
				die();
			}else{
				$foto = $this->upload->data('file_name');
			}
		}

		$data = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jurusan' => $this->input->post('jurusan'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'foto' => $foto
		];

		$this->db->insert('tb_mahasiswa', $data);
	}

	public function edit_data($id)
	{
		return $this->db->get_where('tb_mahasiswa', array('id' => $id));
	}

	public function update_data($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jurusan' => $this->input->post('jurusan'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp')
		);

		$this->db->where('id', $id);
		$this->db->update('tb_mahasiswa', $data);
	}

	public function hapus_data($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_mahasiswa');
	}
}