<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {
        public function __construct(){
                parent::__construct();
                $this->load->model('Room_model');
                $this->load->helper('url');
        }
        public function view($id = false, $page = "rooms")//route: rooms/view
        {
                if ( ! file_exists(APPPATH.'views/room/rooms.php'))
                {
                        // Whoops, we don't have a page for that
                        $My_Exceptions->show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('room/rooms', $data);
                $this->load->view('templates/footer', $data);
               

        }
        
}