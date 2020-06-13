<?php
class Rate_model extends CI_Model{
    public function __construct()
    {
        parent :: __construct();
    }

    public function get_rate($id = NULL){
       if($id != NULL){
            $filter = array("RId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('CeilInn');
        $query = $this->db->get_where("rate",$filter);
        $rate = $query->result_array();
        return $rate;
    }
    /*
     * function to add new rate
     */
    function add_rate($params)
    {
        $this->db->insert('Rate',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update rate
     */
    function update_rate($RId,$params)
    {
        $this->db->where('RId',$RId);
        return $this->db->update('Rate',$params);
    }
    
    /*
     * function to delete rate
     */
    function delete_rate($RId)
    {
        return $this->db->delete('Rate',array('RId'=>$RId));
    }
    
}