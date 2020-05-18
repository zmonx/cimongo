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
		$data['categories'] = $this->categories_model->findAll();
		$data['cart'] = $this->cart_model->findAll();
		$cart = $data['cart'];
		$data['customer'] = $this->customer_model->findAll();
		$customer = $data['customer'];
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
		if(sizeof($customer)==0){
			$customer_id = 1;
		}else{
			$customer_id = sizeof($customer)+1;
		}
        $dataCustomer = array(
			"customer_id" => $customer_id,
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
		$id = $this->customer_model->insert($dataCustomer);
		
		// print_r(sizeof($cart));
		// exit();
		for($x = 0; $x < sizeof($cart); $x++) {
			$data['order'] = $this->customer_model->findAllOrder();
			$order = $data['order'];
			if(sizeof($order)==0){
				$order_id = 1;
			}else{
				$order_id = sizeof($customer)+1;
			} 
		 	$dataOrder = array(
				"order_id" => $order_id,
				"customer_id" => $customer_id,
				"product_id" =>  $cart[$x]['product_id'],
				"quantity" => $cart[$x]['quantity']
			);
			$oid = $this->customer_model->insertOrder($dataOrder);
		};

		$data['payment'] = $this->customer_model->findAllPayment();
		$payment = $data['payment'];
		if(sizeof($payment)==0){
			$checkNumber = 1;
		}else{
			$checkNumber = sizeof($payment)+1;
		}
		$dataPayment = array(
			"checkNumber" => $checkNumber,
			"customer_id" => $customer_id,
			"amount" =>  10000
		);
		$pd = $this->customer_model->insertPayment($dataPayment);
		if(!empty($pd)){
			$this->session->set_flashdata('success-msg', 'Customer Added');
			redirect('cart');
		}else{
			echo "error";
		}

		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/checkout/content');
		$this->load->view('layout/footer');
	}
}
