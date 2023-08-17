<?php

class SlipGaji extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Anda Belum Login.
		  </div>');
			redirect('welcome');
		}
	}

	public function index()
	{
		$data['title'] = "Slip Gaji";
		$data['karyawan'] = $this->PendataanModel->get_data('tb_karyawan')->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/slipGaji', $data);
		$this->load->view('template_admin/footer');
	}

	public function cetak()
	{
		$data['title'] = "Cetak Slip Gaji";
		$nama = $this->input->post('nama_karyawan');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$bulantahun = $bulan . $tahun;
		$data['potongan'] = $this->PendataanModel->get_data('tb_potongan_gaji')->result();
		$data['cetak_slip'] = $this->db->query("SELECT tb_karyawan.nik, tb_karyawan.nama_karyawan,
		tb_divisi.nama_divisi, tb_divisi.gaji_pokok, tb_divisi.uang_makan, tb_kehadiran.alpha, tb_kehadiran.bulan
		FROM tb_karyawan
		INNER JOIN tb_kehadiran ON tb_kehadiran.nik=tb_karyawan.nik
		INNER JOIN tb_divisi ON tb_divisi.nama_divisi=tb_karyawan.divisi
		WHERE tb_kehadiran.bulan='$bulantahun' AND tb_karyawan.nama_karyawan='$nama'")->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('admin/cetakSlipGaji', $data);
	}

	public function enkripsi()
	{
		function encrypt($data, $encryption_key){
			$key = unpack('H*', "$encryption_key");
			$key =  base_convert($key[1], 16, 2);
			$nonceSize = openssl_cipher_iv_length('aes-256-ctr');
			$nonce = openssl_random_pseudo_bytes($nonceSize);
			$ciphertext = openssl_encrypt(
			  $data, 
			  'aes-256-ctr', 
			  $key,
			  OPENSSL_RAW_DATA,
			  $nonce
			);
			return base64_encode($nonce.$ciphertext);
		  }


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
