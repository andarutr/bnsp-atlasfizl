<?php 

class Mahasiswa extends CI_Controller {
	public function index() {
		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id) {
		$data['detail'] = $this->M_mahasiswa->detail_data($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi() {
		$this->M_mahasiswa->input_data();
		redirect('mahasiswa/index');
	}

	public function edit($id) {
		$data['mahasiswa'] = $this->M_mahasiswa->edit_data($id)->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id) {
		$this->M_mahasiswa->update_data($id);
		redirect('mahasiswa/index');
	}

	public function hapus($id) {
		$this->M_mahasiswa->hapus_data($id);
		redirect('mahasiswa/index');
	}

	public function print() {
		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();
		$this->load->view('print_mahasiswa', $data);
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();

		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$this->dompdf->set_paper($paper_size, $orientation);

		$html = $this->output->get_output();

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Mahasiswa.pdf", array('Attachment' => 0));
	}

	public function excel(){
		$data['mahasiswa'] = $this->M_mahasiswa->tampil_data()->result();

		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();

		$object->getProperties()->setCreator('Andaru Tr');
		$object->getProperties()->setLastModifiedBy('Andaru');
		$object->getProperties()->setTitle('Daftar Mahasiswa');

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','NAMA MAHASISWA');
		$object->getActiveSheet()->setCellValue('C1','NIM');
		$object->getActiveSheet()->setCellValue('D1','TGL LAHIR');
		$object->getActiveSheet()->setCellValue('E1','JURUSAN');
		$object->getActiveSheet()->setCellValue('F1','ALAMAT');
		$object->getActiveSheet()->setCellValue('G1','EMAIL');
		$object->getActiveSheet()->setCellValue('H1','NO. TELEPON');
		
		$baris = 2;
		$no = 1;

		foreach($data['mahasiswa'] as $mhs) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $mhs->nama);
			$object->getActiveSheet()->setCellValue('C'.$baris, $mhs->nim);
			$object->getActiveSheet()->setCellValue('D'.$baris, $mhs->tgl_lahir);
			$object->getActiveSheet()->setCellValue('E'.$baris, $mhs->jurusan);
			$object->getActiveSheet()->setCellValue('F'.$baris, $mhs->alamat);
			$object->getActiveSheet()->setCellValue('G'.$baris, $mhs->email);
			$object->getActiveSheet()->setCellValue('H'.$baris, $mhs->no_telp);

			$baris++;
		}

		$filename = "Data Mahasiswa".'.xlsx';
		$object->getActiveSheet()->setTitle('Data Mahasiswa');

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;
	}
}