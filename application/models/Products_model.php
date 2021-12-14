<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Tells if the page should display only the description of a specific product or all the products.
class Products_model extends CI_Model{
    public function __construct(){
      parent::__construct();

      //loads database
      $this->load->database();
    }

    public function get_products($slug=null){
    
        //If there is no equal to slug, display all the list of products. Else, only display the description of a specific product that is equal to the slug 
        if ($slug==null){

            //get values from the products table on the database
            $rs=$this->db->get('products');
        
            //return all the list of products
            return $rs->result_array();

        }else{

            //get the values of a product that has an equal slug to the given slug
            $rs=$this->db->get_where('products', array('product_slug' => $slug));

            //return a row of product
            return $rs->row_array();
        }
    }
}
?>