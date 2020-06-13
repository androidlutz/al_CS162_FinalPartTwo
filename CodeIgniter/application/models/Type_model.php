<?php
class Type_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_type($id = NULL){
       if($id != NULL){
            $filter = array("TId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('TId');
        $query = $this->db->get_where("type",$filter);
        $type = $query->result_array();
        return $type;
    }
      /*
     * function to add new type
     */
    function add_type()
    {
        $this->db->insert();
        return $this->db->insert_id();
    }
    
    /*
     * function to update type
     */
    function update_type($TId)
    {
        $this->db->where('TId',$TId);
        return $this->db->update('Type',$params);
    }
    
    /*
     * function to delete type
     */
    function delete_type($TId)
    {
        return $this->db->delete('Type',array('TId'=>$TId));
    }
}