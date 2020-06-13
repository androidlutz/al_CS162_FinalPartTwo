<?php
class Bed_model extends CI_Model{
    public function __construct()
    {
        parent ::__construct();
        $this->load->database();
    }
    //get a bed by ID
    public function get_bed($BId){
      return $this->db->get_where('Bed',array('BId'=>$BId))->row_array();
    }

    //create a new bed type
    public function create_bed($params){
        $this->db->insert('Bed,$params');
        return $this->db->dba_insert_id();
        }

    //update a bed type
    public function update_bed($BId,$params){
        $this->db->where('BId',$BId);
        return $this->db->update('Bed',$params);
        }

    //delete a bed type
    public function delete_bed($BId){
        return $this->db->delete('Bed',array('BId=>$BId'));
    }
}