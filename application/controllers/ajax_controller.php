<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ajax_model');
		// Load session library
        $this->load->library('session');
		$this->load->library('email');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));

        // Load pagination library
        $this->load->library('ajax_pagination');
        $this->perPage = 7;

		
	}
	
	// Filtering for products
	public function filtering_product()
	{	
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        $input['offset'] = $offset;
        $input['limit'] = $this->perPage;
        //get the posts data
        $data_values = $this->ajax_model->get_filtering_product($input);
        $data['product_category'] =  $data_values['product_category'];
        $data['product_count'] =  $data_values['product_count'];
        //pagination configuration
       	// $config['base_url']    = base_url().'index.php/oauth_login/test';
        $config['target']      = '#product-list';
        $config['base_url']    = base_url().'home.php/ajax_controller/filtering_product';
        $config['total_rows']  = $data['product_count'];
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        $this->load->view('category',$data,false);
        // $this->load->view('products_ajax',$data,false);
    	// echo $products_subcategory_list;		
	}
	
    
	
} // end of the class
