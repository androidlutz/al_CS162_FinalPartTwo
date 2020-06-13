<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

        public function __construct(){
                
                parent::__construct();
                $this->load->model('Customer_model');
                //$this->load->model('Emergency_model');
                $this->load->helper('url');
        }

        public function index($page = 'customers')
        {
                if ( ! file_exists(APPPATH.'views/customer/customers.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                //Form validation
                $this->load->library('form_validation');
                $this->load->helper('form');

                //Validation rules
                $this->form_validation->set_rules('Account_Number', 'Account Number', 'required');

                //View your customer profile
                $customer = isset($_POST['AccountNumber']) ? $_POST['AccountNumber'] : null;

                if($customer != false)
                        $data['customer_info'] = $this->Customer_model->get_customer($customer);
                else    
                        $data['customer_info'] = null;

                $this->load->view('templates/header');
                $this->load->view('templates/nav');              
               
                $this->load->view('customer/view', $data);
                $this->load->view('templates/footer');
              
        }

        /*
     * Adding a new customer_info
     */
    public function add($page = 'add')
        {
                if ( ! file_exists(APPPATH.'views/customer/add.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->library('form_validation');
                $this->load->helper('form');

                //Validation rules
                $this->form_validation->set_rules('Account_Number', 'Account Number', 'required');
                $this->form_validation->set_rules('EId', 'Emergency Contact', 'required');
                $this->form_validation->set_rules('First_Name', 'First Name', 'required');
                $this->form_validation->set_rules('Last_Name', 'Last Name', 'required');
                $this->form_validation->set_rules('PhoneNumber', 'Phone Number', 'required');

                $data['customer_info'] = $this->Customer_model->add_customer();
                $data['message'] = 'Successful';
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                        /* if($this->form_validation->run() == FALSE)
                {
                        $this->form->view('helpers/success',$data);
 */
               
                $this->load->view('customer/customers');
                $this->load->view('templates/footer');
              

       
        }
    

    /*
     * Editing a customer_info
     */
    public function update($page = 'update')
        {
                if ( ! file_exists(APPPATH.'views/customer/update.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->library('form_validation');
                $this->load->helper('form');

                //Validation rules
                $this->form_validation->set_rules('Account_Number', 'Account Number', 'required');
                $this->form_validation->set_rules('EId', 'Emergency Contact', 'required');
                $this->form_validation->set_rules('First_Name', 'First Name', 'required');
                $this->form_validation->set_rules('Last_Name', 'Last Name', 'required');
                $this->form_validation->set_rules('PhoneNumber', 'Phone Number', 'required');

                $data['customer_info'] = $this->Customer_model->add_customer();
                $data['message'] = 'Successful';
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                        /* if($this->form_validation->run() == FALSE)
                {
                        $this->form->view('helpers/success',$data);
 */
               
                $this->load->view('customer/customers');
                $this->load->view('templates/footer');
              
       
    } 

    /*
     * Deleting customer_info
     */
    function delete($page = 'delete')
    {
        $customer_info = $this->Customer_model->delete_customer($AccountNumber);


        $this->load->library('form_validation');
        $this->load->helper('form');

        // check if the customer_info exists before trying to delete it
        $data['message'] = 'Successfully Deleted Account';
        if(isset($customer_info['AccountNumber']))
        {
            $this->Customer_model->delete_customer($AccountNumber);
            redirect('customer_info/success', $data);
        }
        else
            show_error('The customer_info you are trying to delete does not exist.');
    }
    
}