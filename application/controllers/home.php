<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function  __construct()
	{
		parent::__construct();
        $this->load->model('index_model');
		// Load session library
        $this->load->library('session');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
		
		
	}
	
	// Index page
    public function index()
	{
	  $categories_values_reg = $this->index_model->get_register();
      $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
      // $categories['order_details'] = $categories_values_reg['order_details'];
      // $categories['order_count'] = $categories_values_reg['order_count'];
      $categories['giftstore_product'] = $this->index_model->get_latestproduct();
      $categories['recipient_list'] = $this->index_model->get_recipient_list();
      $categories['category_recipient_list'] = $this->index_model->get_category_recipient();
	   
	  $this->load->view('home',$categories);
	}	
	
	public function register()
	{ 
        $categories_values_reg = $this->index_model->get_register();
        $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
		$categories['order_details'] = $categories_values_reg['order_details'];
        $categories['order_count'] = $categories_values_reg['order_count'];
        $categories['recipient_list'] = $this->index_model->get_recipient_list();
		
		$this->load->view('register',$categories);
	}
	
	// Listing page with pagination
    public function category()
	{
		$categories_values_reg = $this->index_model->get_register();
        $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
        // $categories['order_details'] = $categories_values_reg['order_details'];
        // $categories['order_count'] = $categories_values_reg['order_count'];
		$categories['gift_recipient'] = $this->index_model->get_recipient();
    	$category_values = $this->index_model->get_category();
		$categories['cat_name'] = $category_values['cat_name'];
		$categories['gift_subcategory'] = $category_values['gift_subcategory'];
		$categories['cat_pro_count'] = $category_values['cat_pro_count'];
		$categories['product_category'] = $category_values['product_category'];
        $categories['product_price'] = $category_values['product_price'];
        $categories['recipient_list'] = $this->index_model->get_recipient_list();
	
	    $this->load->view('category',$categories);
		
	// echo "<pre>";
		// print_r($categories);
		// echo "</pre>";
	}


     //  Product details page with attribute
	public function detail()
	{
		$categories_values_reg = $this->index_model->get_register();
        $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
        $categories['order_details'] = $categories_values_reg['order_details'];
        $categories['order_count'] = $categories_values_reg['order_count'];
        $categories['recipient_list'] = $this->index_model->get_recipient_list();

		$categories_values = $this->index_model->get_product_details();
		$categories['product_image_details'] = $categories_values['product_image_details'];
        $categories['product_attributes'] = $categories_values['product_attributes'];
		$categories['product_details'] = $categories_values['product_details'];
		$categories['recommanded_products'] = $categories_values['recommanded_products'];
		$categories['product_default_image'] = $categories_values['product_default_image'];
		
		$this->load->view('product', $categories);
	}
	
	public function recipient_category()
    {
        $categories_values_reg = $this->index_model->get_register();
        $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
        $categories['order_details'] = $categories_values_reg['order_details'];
        $categories['order_count'] = $categories_values_reg['order_count'];
        $categories['recipient_list'] = $this->index_model->get_recipient_list();
        $categories_val_details = $this->index_model->get_recipients_category();
        $categories['recipients_category_list'] = $categories_val_details['recipients_category_list'];
        $categories['recipient_name'] = $categories_val_details['recipient_name'];
        if($categories['recipients_category_list']!=null && $categories['recipient_name']!=null)
        {
            $this->load->view('recipient_category',$categories);
        }
        else {
            $this->load->view('no_products',$categories);
        }
    }

	public function nopage()
	    {
	        $categories_values_reg = $this->index_model->get_register();
	        $categories['giftstore_category'] = $categories_values_reg['giftstore_category'];
	        $categories['order_details'] = $categories_values_reg['order_details'];
	        $categories['order_count'] = $categories_values_reg['order_count'];
	        $categories['recipient_list'] = $this->index_model->get_recipient_list();
	        $this->load->view('404',$categories);
	    }
		
	
}
