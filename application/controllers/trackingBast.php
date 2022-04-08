<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class trackingBast extends CI_Controller {


	function index()
		{
			$this->load->view('header/headTrackingBast');
			$this->load->view('navigasi/navTrackingBast');
			$this->load->view('trackingBast');
			$this->load->view('footer/footTrackingBast');
		}

}
