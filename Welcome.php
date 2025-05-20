<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

public function send(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$birth=$this->input->post('birth');
		$exp=$this->input->post('exp');

		$file_path ='';

		$config1['upload_path']   = './uploads/';
        $config1['allowed_types'] = '*'; 
        $config1['max_size']      = 5000;

        $this->upload->initialize($config1);

        if (!$this->upload->do_upload('file')) {
        echo json_encode(['status' => 'error']);
           
        } else {
            //  
            $upload_data = $this->upload->data();
            $file_path = $upload_data['full_path'];
		}

		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 587,
			'smtp_user' => 'adityarg2005@gmail.com',
			'smtp_pass' => 'wkxkulydiiriyfka',
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n",
			'crlf'      => "\r\n",
			'smtp_crypto' => "tls"
		);

		$this->email->initialize($config);

		$this->email->from('omkarpatil15@gmail.com','Omkar');
		$this->email->to('aditya@nexmoves.in');
		$this->email->subject('File Attachment Test');
		$this->email->message('<h3>New Registration Details</h3>
            <p><strong>Name: </strong>'.  $name.'</p>
            <p><strong>Email: </strong>'.  $email.'</p>
            <p><strong>Phone: </strong>'. $phone.'</p>
            <p><strong>Birth Date: </strong>'. $birth.'</p>
            <p><strong>Experience: </strong>'. $exp .' <strong>Years</strong></p>');

		if($file_path!=''){
		$this->email->attach($file_path);
		}

		if ($this->email->send()) {
        echo json_encode(['status' => 'success']);

        if (file_exists($file_path)) unlink($file_path);
		} else {
			echo json_encode(['status' => 'error', 'message' => $this->email->print_debugger()]);
		}

	}
}
