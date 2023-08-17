<?php

class DataGaji extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '2') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Anda Belum Login.
		  </div>');
			redirect('welcome');
		}
	}
	public function index()
	{
		$data['title'] = "Data Gaji";
		$nik = $this->session->userdata('nik');
		$data['potongan'] = $this->PendataanModel->get_data('tb_potongan_gaji')->result();
		$data['gaji'] = $this->db->query("SELECT tb_karyawan.nama_karyawan, tb_karyawan.nik, tb_divisi.gaji_pokok,
		tb_divisi.uang_makan, tb_kehadiran.alpha, tb_kehadiran.bulan, tb_kehadiran.id_kehadiran
		FROM tb_karyawan
		INNER JOIN tb_kehadiran ON tb_kehadiran.nik=tb_karyawan.nik
		INNER JOIN tb_divisi ON tb_divisi.nama_divisi=tb_karyawan.divisi
		WHERE tb_kehadiran.nik = '$nik'
		ORDER BY tb_kehadiran.bulan DESC")->result();

		$this->load->view('template_karyawan/header', $data);
		$this->load->view('template_karyawan/sidebar');
		$this->load->view('karyawan/dataGaji', $data);
		$this->load->view('template_karyawan/footer');
	}

	public function cetak($id)
	{
		$data['title'] = "Cetak Slip Gaji";
		$data['potongan'] = $this->PendataanModel->get_data('tb_potongan_gaji')->result();
		$data['cetak_slip'] = $this->db->query("SELECT tb_karyawan.nik, tb_karyawan.nama_karyawan, tb_karyawan.jenis_kelamin,
		tb_divisi.nama_divisi, tb_divisi.gaji_pokok, tb_divisi.uang_makan, tb_kehadiran.bulan, tb_kehadiran.alpha
		FROM tb_karyawan
		INNER JOIN tb_kehadiran ON tb_kehadiran.nik=tb_karyawan.nik
		INNER JOIN tb_divisi ON tb_divisi.nama_divisi=tb_karyawan.divisi
		WHERE tb_kehadiran.id_kehadiran='$id'")->result();
		$this->load->view('template_karyawan/header', $data);
		$this->load->view('karyawan/cetakGaji', $data);
	}

	public function dekripsi()
	{
		function decrypt($data,$encryption_key){
			$key = unpack('H*', "$encryption_key");
			$key =  base_convert($key[1], 16, 2);
			$data = base64_decode($data);
			$nonceSize = openssl_cipher_iv_length('aes-256-ctr');
			$nonce = mb_substr($data, 0, $nonceSize, '8bit');
			$ciphertext = mb_substr($data, $nonceSize, null, '8bit');
			$plaintext= openssl_decrypt(
			  $ciphertext, 
			  'aes-256-ctr', 
			  $key,
			  OPENSSL_RAW_DATA,
			  $nonce
			);
			return $plaintext;
		  }
	}
}
