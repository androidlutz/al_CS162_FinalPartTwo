<?php
class Room_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_room($id = NULL){
       if($id != NULL){
            $filter = array("RoomNumber" => $id);
       }
        else 
            $filter = array();

        $this->db->select('CeilInn');
        $query = $this->db->get_where("room",$filter);
        $room = $query->result_array();
        return $room;
    }
    /* 
     * function to add new room
     */
    function add_room($params)
    {
        $this->db->insert('Room',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update room
     */
    function update_room($RoomNumber,$params)
    {
        $this->db->where('RoomNumber',$RoomNumber);
        return $this->db->update('Room',$params);
    }
    
    /*
     * function to delete room
     */
    function delete_room($RoomNumber)
    {
        return $this->db->delete('Room',array('RoomNumber'=>$RoomNumber));
    }
}