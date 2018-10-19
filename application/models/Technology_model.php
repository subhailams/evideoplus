<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Technology_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get technology by tech_id
     */
    function get_technology($tech_id)
    {
        return $this->db->get_where('technology',array('tech_id'=>$tech_id))->row_array();
    }
        
    /*
     * Get all technology
     */
    function get_all_technology()
    {
        $this->db->order_by('tech_id', 'asc');
        return $this->db->get('technology')->result_array();
    }
        
    /*
     * function to add new technology
     */
    function add_technology($params)
    {
        $this->db->insert('technology',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update technology
     */
    function update_technology($tech_id,$params)
    {
        $this->db->where('tech_id',$tech_id);
        return $this->db->update('technology',$params);
    }
    
    /*
     * function to delete technology
     */
    function delete_technology($tech_id)
    {
        return $this->db->delete('technology',array('tech_id'=>$tech_id));
    }
}