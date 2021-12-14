<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/
    // To display values from database to pages
    class Products extends CI_Controller{
        public function __construct(){
            parent:: __construct();

            //load products_model
            $this->load->model('products_model');
        }

        public function index(){
            //pass the string value to $title
            $data["title"] = 'Pasta King Menu';

            //access get_products method of products model through $data["products]
            $data["products"] = $this->products_model->get_products();
            
            //all data passed through variable, the data will be viewed in products_display view page
            $this->load->view('pages/products_display', $data);
        }

        public function view($slug = NULL){
            //access get_products method with the slug variable as a parameter to $data ['products]
            $data['products'] = $this->products_model->get_products($slug);
            
            //if get_products($slug) doesn't exists, show error page
            if (empty($data['products'])){
                    show_404();
            }
    
            $data['title'] = $data['products']['product_name'];

            //view all values passed through $data in product_information view page
            $this->load->view('pages/products_information', $data);
        }
}
    
?>