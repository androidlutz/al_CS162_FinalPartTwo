<?php
class Customer_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        //$this->load->Emergency_model();
        
    }

    public function get_customer($accountNumber = NULL){
       if($accountNumber != NULL){
            $filter = array("AccountNumber" => $accountNumber);
       }
        else 
            $filter = array();

        $this->db->select('EId, AccountNumber, FirstName, LastName, PhoneNumber');
        $query = $this->db->get_where("customer_info",$filter);
        $customers = $query->result_array();
        return $customers;
    }

    /*
     * function to add new customer_info
     */
    function add_customer()
    {
        $this->db->insert('Customer_Info',);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer_info
     */
    function update_customer($AccountNumber)
    {
        $this->db->where('AccountNumber',$AccountNumber);
        return $this->db->update('Customer_Info');
    }
    
    /*
     * function to delete customer_info
     */
    function delete_customer($AccountNumber)
    {
        return $this->db->delete('Customer_Info',array('AccountNumber'=>$AccountNumber));
    }
}