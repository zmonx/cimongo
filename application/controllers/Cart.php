<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->model('product_model');
		$this->load->model('cart_model');
		$this->load->model('customer_model');
	}
	public function index()
	{
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		// $condition = array(
		// 	'categories_id' => intval($categoriesId)
		// );
		// $data['products'] = $this->product_model->findAll($condition);
		// // print_r($data['products']);
		// // exit();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
	public function clear()
	{
		$this->cart_model->clearCart();
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		// $condition = array(
		// 	'categories_id' => intval($categoriesId)
		// );
		// $data['products'] = $this->product_model->findAll($condition);
		// // print_r($data['products']);
		// // exit();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
	public function clearsome($product_id)
	{
		$this->cart_model->clearsomeCart($product_id);
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		// $condition = array(
		// 	'categories_id' => intval($categoriesId)
		// );
		// $data['products'] = $this->product_model->findAll($condition);
		// // print_r($data['products']);
		// // exit();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
	public function checkout()
	{
		
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/checkout/content');
		$this->load->view('layout/footer');
	}
	public function placeorder()
	{
		$data['cart'] = $this->cart_model->findAll();
		$cart = $data['cart'];
        $checkout_name = $this->input->post('checkout_name');
        $checkout_last_name = $this->input->post('checkout_last_name');
        $checkout_country = $this->input->post('checkout_country');
        $checkout_address = $this->input->post('checkout_address');
        $checkout_zipcode = $this->input->post('checkout_zipcode');
        $checkout_province = $this->input->post('checkout_province');
        $checkout_phone = $this->input->post('checkout_phone');
        $checkout_email = $this->input->post('checkout_email');
        $checkout_city = $this->input->post('checkout_city');
        
        $quantity = $this->input->post('quantity');
        $data = array(
            "firstName" => $checkout_name,
            "lastName" =>  $checkout_last_name,
            "country" => $checkout_country,
            "address" => $checkout_address,
            "zipcode" => $checkout_zipcode,
            "city" => $checkout_city,
            "province" => $checkout_province,
            "phone" => $checkout_phone,
            "email" => $checkout_email
        );
        print_r($cart);
        exit();
		$id = $this->customer_model->insert($data);
        if(!empty($id)){
             $this->session->set_flashdata('success-msg', 'Customer Added');
             redirect('cart');
        }else{
            echo "error";
		}

		$oid = $this->customer_model->order($data);
		$data['customer'] = $this->customer_model->findOne();

		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/checkout/content');
		$this->load->view('layout/footer');
	}
}
