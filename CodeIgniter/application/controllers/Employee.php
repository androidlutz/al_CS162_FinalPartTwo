<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
                //constructor
                public function __construct(){
                parent::__construct();
                $this->load->model('employee_model');
                $this->load->helper('url');

}
    //view employee
    public function view($page = 'employees')         
        {
                if ( ! file_exists(APPPATH.'views/employee/employees.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->library('form_validation');
                $this->load->helper('form');
                
                $data['EmId'] = $this->Employee_model->get_employee('EmId');
                //$data['EmId'] = $EmId;
                /* $data['message'] = "This is your employee info:"; */
                $this->form_validation->set_rules('EmId', 'Employee ID', 'required');

                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                if ($this->form_validation->run() == FALSE)
                {
                       
                        $this->load->view('employee/employees');
                        
                }
                else                   
                       
                        $this->load->view('employee/employees', $data);
                        $this->load->view('templates/footer');

        }
    //add employee
    public function add($page = 'add'){
                

                if ( ! file_exists(APPPATH.'views/employee/add.php'))
                            {
                                    // Whoops, we don't have a page for that
                                    $My_Exceptions->show_404();
                            }
                $data['employeeInfo'] = $this->Employee_model->add_employee();

                //form validation
                $this->load->library('form_validation');
                $this->load->helper('form');

                //validation rules
                $this->form_validation->set_rules('FirstName', 'First Name', 'required');
                $this->form_validation->set_rules('LastName', 'Last Name', 'required');
                $this->form_validation->set_rules('Title', 'Title', 'required');
                 if ($this->form_validation->run() == FALSE)
                {
                       
                        $this->load->view('employee/add');
                        
                }
                else                   
                       
                        $this->load->view('employee/employees', $data);
                        $this->load->view('templates/footer');


                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('employee/add');
                $this->load->view('templates/footer');
        }
    //update Employee
    public function update($page = 'update'){
            
                if ( ! file_exists(APPPATH.'views/employee/add.php'))
                            {
                                    // Whoops, we don't have a page for that
                                    $My_Exceptions->show_404();
                            }

                $data['employeeInfo'] = $this->Employee_model->update_employee();
                $this->load->library('form_validation');
                $this->load->helper('form');
                $this->form_validation->set_rules('FirstName', 'First Name', 'required');
                $this->form_validation->set_rules('LastName', 'Last Name', 'required');
                $this->form_validation->set_rules('Title', 'Title', 'required');
                 if ($this->form_validation->run() == FALSE)
                {
                       
                        $this->load->view('employee/update');
                        
                }
                else                   
                       
                        $this->load->view('employee/employees', $data);
                        $this->load->view('templates/footer');


                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('employee/add');
                $this->load->view('templates/footer');
    }

        //delete Employee
    public function delete($page = 'delete'){
                 {
        $employee_info = $this->Employee_model->get_employee($EmId);

        // check if the employee_info exists before trying to delete it
        if(isset($employee_info['EmId']))
        {
            $this->Employee_info_model->delete_employee($EmId);
            redirect('employee_info/index');
        }
        else
            show_error('The employee_info you are trying to delete does not exist.');
    }

        }

    }