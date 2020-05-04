<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->model('product_model');
    }  
	public function index()
	{
		$data['categories'] = $this->categories_model->findAll();
		// $condition = array(
		// 	'categories_id' => intval($categoriesId)
		// );
		// $data['products'] = $this->product_model->findAll($condition);
		// print_r($data['products']);
		// exit();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		// $this->load->view('layout/home');
		$this->load->view('contact/content');
		$this->load->view('layout/footer');
	
	}
}
