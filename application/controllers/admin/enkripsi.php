<?php 
class enkripsi extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Anda Belum Login.
		  </div>');
			redirect('welcome');
		}else{
			$this->load->model('ModelEnkripsi');
		}
	}

    public function index()
    {
        $data['title'] = "Enkripsi";
		$data['karyawan'] = $this->PendataanModel->get_data('tb_karyawan')->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/enkripsi', $data);
		$this->load->view('template_admin/footer');
    }

	public function Encrypt()
	{
		$db = get_instance()->db->conn_id;
		$user 			= $this->input->post('username');
		$key			= mysqli_real_escape_string($db,substr(md5($this->input->post('pwdfile')), 0, 16));
		$deskripsi 		= mysqli_real_escape_string($db,$this->input->post('desc'));

		$file_tmpname 	= $_FILES['file']['tmp_name'];

		//untuk nama file url
		$file           = rand(1000, 100000) . "-" . $_FILES['file']['name'];
		$new_file_name  = strtolower($file);
		$final_file     = str_replace(' ', '-', $new_file_name);

		//untuk nama file
		$filename       = rand(1000, 100000) . "-" . pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
		$new_filename   = strtolower($filename);
		$finalfile      = str_replace(' ', '-', $new_filename);
		$size           = filesize($file_tmpname);
		$size2          = (filesize($file_tmpname)) / 1024;
		$info           = pathinfo($final_file);
		$file_source    = fopen($file_tmpname, 'rb');
		$ext            = $info["extension"];

		if ($ext == "docx" || $ext == "doc" || $ext == "txt" || $ext == "pdf" || $ext == "xls" || $ext == "xlsx" || $ext == "ppt" || $ext == "pptx") {
		} else {
			echo ("<script language='javascript'>
				window.alert('Maaf, file yang bisa dienkrip hanya word, excel, text, ppt ataupun pdf.');
				</script>");
			return;
		}
	
		// window.location.href='enkripsi.php';
		if ($size2 > 5084) {
			echo ("<script language='javascript'>
				window.alert('Maaf, file tidak bisa lebih besar dari 5MB.');
				</script>");
			return;
		}

		$dataFile = [
			'username' => $user,
			'file_name_source' => $final_file,
			'file_name_finish' => $final_file.'.rda',
			'file_url' => '',
			'file_size' => $size2,
			'password' => $key,
			'tgl_upload' => date('Y-m-d H:i:s'),
			'status' => '1',
			'keterangan' => $deskripsi
		];

		$insertFile = $this->ModelEnkripsi->insertFile($dataFile);
		$getEmptyFileUrl = $this->ModelEnkripsi->getEmptyFileUrl();

		$url = $final_file . ".rda";
		$file_url = "assets/file_enkripsi/$url";
		
		$url = [
			'file_url' => $file_url
		];

		$updateFileUrl = $this->ModelEnkripsi->updateFileUrl($url);

		$file_output        = fopen($file_url, 'wb');

		$mod    = $size % 16;
		if ($mod == 0) {
			$banyak = $size / 16;
		} else {
			$banyak = ($size - $mod) / 16;
			$banyak = $banyak + 1;
			$data['banyak'] = $banyak;
		}

		$data['file_tmpname'] = $file_tmpname;
		$data['file_source'] = $file_source;
		$data['file_output'] = $file_output;

		$this->load->view('admin/enkripsi-proses', $data);
	}

	public function File(){
		$data['file'] = $this->ModelEnkripsi->getFileData('file')->result();
		$this->load->view('admin/file', $data);
	}
}

?>