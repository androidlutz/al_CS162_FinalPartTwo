<?php
class Status_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_status($id = NULL){
       if($id != NULL){
            $filter = array("SId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('CeilInn');
        $query = $this->db->get_where("status",$filter);
        $status = $query->result_array();
        return $status;
    }
/*
     * function to add new statu
     */
    function add_statu($params)
    {
        $this->db->insert('Status',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update statu
     */
    function update_statu($SId,$params)
    {
        $this->db->where('SId',$SId);
        return $this->db->update('Status',$params);
    }
    
    /*
     * function to delete statu
     */
    function delete_statu($SId)
    {
        return $this->db->delete('Status',array('SId'=>$SId));
    }
}