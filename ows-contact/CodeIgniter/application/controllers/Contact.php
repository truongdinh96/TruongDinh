<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller
{ // contact ke thua class CI_Controller

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');// dung de load model vao controller
		$this->load->helper('url'); // cần load thư viện này để sử dụng hàm base_url
	}

	public function save($id = 0)
	{
		$postData = array(
			'name' => $this->input->post('name'),
			'phone1' => $this->input->post('phone1'),
			'phone2' => $this->input->post('phone2'),
			'email' => $this->input->post('email'),
			'fb' => $this->input->post('fb'),
			'company' => $this->input->post('company'),
		);

		if ($id == 0) // thêm mới
			$this->contact_model->addContact($postData);
		else // cập nhật
			$this->contact_model->updateContact($postData, $id);

		redirect(base_url('/'));
	}

	public function index()
	{
		// ket qua tra ve tu model ta luu vao trong $data va truyen sang view
		$data['contacts'] = $this->contact_model->getContacts();// goi ham getContacts() cua contact_model
		$this->load->view('contact_list', $data); // goi den file html contact_list trong thu muc view
	}

	public function add()
	{
		$this->load->view('contact_add');
	}

	public function edit($id)
	{
		$data['contact_item'] = $this->contact_model->getContact($id);
		$this->load->view('contact_edit', $data);
	}

	public function del($id)
	{
		$this->contact_model->deleteContact($id);
		echo 'success';
	}
}
