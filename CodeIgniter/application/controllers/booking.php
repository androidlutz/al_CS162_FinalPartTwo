<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
        //constructor
         public function __construct(){
                 parent::__construct();
                 $this->load->model('Booking_model');
                 $this->load->model('Type_model');
                 
        }
        //view the booking page
        public function index($page = 'booking')
                
        {
                if ( ! file_exists(APPPATH.'views/booking/booking.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                //data values for the booking page
                $data['title'] = ucfirst($page); // Capitalize the first letter
               
                $this->load->library('form_validation');
                $this->load->helper('form');

                $this->form_validation->set_rules('AccountNumber', 'Account Number', 'required');
                $data['types'] = $this->Type_model->get_type();

                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('booking/booking', $data);
                }
                else
                {
                        $booked = $this->Booking_model->add_booking();
                        $data['message'] = '';
                        if(isset($booked) && $booked != false){
                                $data['message'] = "Successfully booked with booking ID " . $booked;
                                $data['result'] = 'success';
                        }

                        else{
                                $data['message'] = "Failed to add booking, try again.";
                                $data['result'] = 'failure';
                        }

                        $this->load->view('helpers/success', $data);
                }
                $this->load->view('templates/footer');
               

        }
       
        //update booking       
        public function update($page = 'update')
        {
                if ( ! file_exists(APPPATH.'views/booking/update.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('booking/update', $data);
                $this->load->view('templates/footer', $data);
               
                
        }
        public function view($page = 'view')
        {
                if ( ! file_exists(APPPATH.'views/booking/view.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->library('form_validation');
                $this->load->helper('form');

                //validation rules
                $this->form_validation->set_rules('ID, Booking ID, required');

               $booking = isset($_POST['ID']) ? $_POST['ID'] : null;

                if($booking != false)
                        $data['booking_info'] = $this->Booking_model->get_booking($booking);
                else    
                        $data['booking_info'] = null;

                $this->load->view('templates/header');
                $this->load->view('templates/nav');              
               
                $this->load->view('booking/view', $data);
                $this->load->view('templates/footer');
              

        
        }
        //Delete booking
        function delete($ID){
                $booking = $this->Booking_model->get_booking($ID);

                //does the booking exist?
                if(issset($booking['ID'])){
                        $this->Booking_model->delete_booking($ID);
                        redirect('booking/index');

                }
                else
                        show_error('the booking you are trying to delet does not exist');
        }        
}