<?php
class Emergency_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_contact($id = NULL){
       if($id != NULL){
            $filter = array("EmId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('FirstName,LastName,PhoneNumber');
        $query = $this->db->get_where("emergency_contact",$filter);
        $emergency_contact = $query->result_array();
        return $emergency_contact;
    }

    public function create_contact(){
        $this->db->insert('emergency_contact');
    
    }

    public function update_contact($EId){
        $this->db->replace('emergency_contact', array('EI' => $EId));
    }

    public function delete_contact(){
        $this->db->delete('emergency_contact', array('id' => $id));
    }
}