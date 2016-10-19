<?php
class Ajax_Model extends CI_Model {
    public function __construct()
    {
         $this->load->database();
    }

     //  To get products after filtering (filtering)
    public function get_filtering_product($data) {

        // $start_price= $this->input->post('s_val');
        // $end_price= $this->input->post('e_val');
        
        $start = $data['offset'];
        $limit = $data['limit'];
        if($this->input->post('cat_id')) {
            if($this->input->post('sub_id') && $this->input->post('rec_id')) {
                if( $this->input->post('rec_id') == 0) {
                    $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_subcategory_id="'.$this->input->post('sub_id').'" and cp.product_status=1 and cp.product_totalitems!=0 )';
                }
                else {
                   $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_subcategory_id="'.$this->input->post('sub_id').'" and cp.product_recipient_id="'.$this->input->post('rec_id').'" and cp.product_status=1 and cp.product_totalitems!=0 )';
                }
            }
            else if($this->input->post('sub_id')) {
               $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_subcategory_id="'.$this->input->post('sub_id').'" and cp.product_status=1 and cp.product_totalitems!=0 )';
            }
            else if($this->input->post('rec_id')) {
                if( $this->input->post('rec_id') == 0) {
                    $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_status=1 and cp.product_totalitems!=0 and )';  
                }
                else {
                   $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_recipient_id="'.$this->input->post('rec_id').'" and cp.product_status=1 and cp.product_totalitems!=0 )';
                }
            }
            else {
                $where = '(cp.product_category_id="'.$this->input->post('cat_id').'" and cp.product_status=1 and cp.product_totalitems!=0 )';
            }
            $sub_product=$this->db->select('*');
            $sub_product=$this->db->from('giftstore_product cp');
            $sub_product=$this->db->join('giftstore_product_upload_image cpi','cp.product_id=cpi.product_mapping_id','inner');
            $sub_product=$this->db->where($where);
            $sub_product=$this->db->limit( $limit, $start);
            $sub_product=$this->db->group_by('cp.product_id');

            if($this->input->post('sort') == "pricel") {
                $query['product_category'] = $sub_product->order_by('cp.product_price','asc')->get()->result_array();
            }
            else if($this->input->post('sort') == "priceh") {
                $query['product_category'] = $sub_product->order_by('cp.product_price','desc')->get()->result_array();
            }
            else if($this->input->post('sort') == 'newest') {
                $query['product_category'] = $sub_product->order_by('cp.product_id','desc')->get()->result_array();
            }
            else {
                $query['product_category'] = $sub_product->order_by('cp.product_title','asc')->get()->result_array();
            }

            // count1 
            $sub_product1=$this->db->select('*');
            $sub_product1=$this->db->from('giftstore_product cp');
            $sub_product1=$this->db->join('giftstore_product_upload_image cpi','cp.product_id=cpi.product_mapping_id','inner');
            $sub_product1=$this->db->where($where);
            $sub_product1=$this->db->group_by('cp.product_id');
            $query1 = $sub_product1->get()->result_array();
            $query['product_count'] = count($query1);

        }
        return $query;
    }

    //  To get products after filtering (filtering)
    public function get_filtering_search_product($data) {

        $start = $data['offset'];
        $limit = $data['limit'];

        $cat_product=$this->db->select('*');
        $cat_product=$this->db->from('giftstore_product cp');
        $cat_product=$this->db->join('giftstore_product_upload_image cpi','cp.product_id=cpi.product_mapping_id','inner');
        $where1 = '(cp.product_status=1 and cp.product_totalitems!=0)';
        $cat_product=$this->db->like('cp.product_title',$this->input->post('keyword'));
        $cat_product=$this->db->where($where1);
        $cat_product=$this->db->limit($limit, $start);
        $cat_product=$this->db->group_by('cp.product_id');
        $cat_product=$this->db->order_by('product_price', 'asc');
        $query['product_list'] = $this->db->get()->result_array();
        
        $cat_product1=$this->db->select('*');
        $cat_product1=$this->db->from('giftstore_product cp');
        $cat_product1=$this->db->join('giftstore_product_upload_image cpi','cp.product_id=cpi.product_mapping_id','inner');
        $where1 = '(cp.product_status=1 and cp.product_totalitems!=0)';
        $cat_product1=$this->db->like('cp.product_title',$this->input->post('keyword'));
        $cat_product1=$this->db->where($where1);
        $cat_product1=$this->db->group_by('cp.product_id');
        $cat_product1=$this->db->order_by('product_price', 'asc');
        $query1 = $this->db->get()->result_array();
        $query['cat_pro_count'] = count($query1);  
        return $query;
    }
  
 
}
