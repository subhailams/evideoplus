<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
require APPPATH . '/libraries/BaseController.php'; 
class Technology extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();   
        $this->load->model('Technology_model');
    } 

    /*
     * Listing of technology
     */
    function index()
    {
        $data['technology'] = $this->Technology_model->get_all_technology();
        
        $data['_view'] = 'technology/index';
        $this->global['pageTitle'] = 'eVideoPlus : Technology';
        $this->loadViews("technology/index", $this->global, $data, NULL);
    }

    /*
     * Adding a new technology
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','max_length[3000]|required');
		
		if($this->form_validation->run())     
        {   $today = date("m/d/Y h:i:s a");
            $params = array(
				'name' => $this->input->post('name'),
				'date' => $today,
				'addedBy' => $this->global['name'],
            );
            
            $technology_id = $this->Technology_model->add_technology($params);
            redirect('technology/index');
        }
        else
        {            
            $data['_view'] = 'technology/add';
            $this->global['pageTitle'] = 'eVideoPlus : Add Technology';
            $this->loadViews("technology/add", $this->global, $data, NULL);
        }
    }  

    /*
     * Editing a technology
     */
    function edit($tech_id)
    {   
        // check if the technology exists before trying to edit it
        $data['technology'] = $this->Technology_model->get_technology($tech_id);
        
        if(isset($data['technology']['tech_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','max_length[3000]|required');
		
			if($this->form_validation->run())     
            {   $today = date("m/d/Y h:i:s a");
                $params = array(
					'name' => $this->input->post('name'),
					'date' => $today,
					'addedBy' => $this->global['name'],
                );

                $this->Technology_model->update_technology($tech_id,$params);            
                redirect('technology/index');
            }
            else
            {
                $data['_view'] = 'technology/edit';
                $this->global['pageTitle'] = 'eVideoPlus : Edit Technology';
                $this->loadViews("technology/edit", $this->global, $data, NULL);
            }
        }
        else
            show_error('The technology you are trying to edit does not exist.');
    } 

    /*
     * Deleting technology
     */
    function remove($tech_id)
    {
        $technology = $this->Technology_model->get_technology($tech_id);

        // check if the technology exists before trying to delete it
        if(isset($technology['tech_id']))
        {
            $this->Technology_model->delete_technology($tech_id);
            redirect('technology/index');
        }
        else
            show_error('The technology you are trying to delete does not exist.');
    }
    
}
