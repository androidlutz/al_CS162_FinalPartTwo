<?php
class Employee_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        
    }

    //get an employee
    public function get_employee($EmId){
       return $this->db->get_where('Employee_Info',array('EmId'=>$EmId))->row_array();
    }

    //add employee
    function add_employee()
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Title' => $this->input->post('Title'),
        );
        
        $result = $this->db->insert('employee_info', $data); 
    }

    //update employee
    function update_employee($EmId)
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Title' => $this->input->post('Title'),
        );
        
        $result = $this->db->insert('employee_info', $data); 
    }
     //delete employee
    function delete_employee($EmId)
    {
        return $this->db->delete('Employee_Info',array('EmId'=>$EmId));
    }

    
}