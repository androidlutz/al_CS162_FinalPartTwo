<?php
class Booking_model extends CI_Model{
    public function __construct()
    {       
        $this->load->database();
        $this->load->model('Customer_model');
    }
    //Get booking by ID
    public function get_booking($bookingNumber = NULL){
      if($bookingNumber != NULL){
            $filter = array("ID" => $bookingNumber);
       }
        else 
            $filter = array();

        $this->db->select('ID, EmId, StartDate, EndDate, AccountNumber, RoomNumber, Notes, RId, PhoneCharge');
        $query = $this->db->get_where("booking",$filter);
        $bookings = $query->result_array();
        return $bookings;
    }
    //add new booking
    function add_booking(){
        $this->load->helper('url');
        $data = array(

            //database columns set data
            'AccountNumber' => $this->input->post('AccountNumber'),
            'EmId' => $this->input->post('EmId'),
            'StartDate' => $this->input->post('StartDate'),
            'EndDate' => $this->input->post('EndDate'), 
            'RoomNumber' => $this->input->post('')
        );

        if($this->Customer_model->get_customer($data['AccountNumber'] >= 1)){
            $result =$this->db->insert('Booking', $data);
            return $this->db->insert_id();
        }
        else{
            return false;
        }
    }

    //update a booking
    function update_booking($ID){
        $this->load->helper('url');

        $this-db-where('ID',$ID);
        return $this->db>update('Booking');
    }

    //delete a booking
    function delete_booking($ID){
        return $this->db->delete('Booking',array('ID'=>$ID));
    }
}