<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	$this->load->helper('url');	
	//$data['title'] = ucfirst($page); // Capitalize the first letter
	$simple_pages = array ("contact","policy");
	if (in_array($page,$simple_pages)) {
		$this->load->view('templates/header_simple');
	} else {
		$this->load->view('templates/header');
	}
	$this->load->view('pages/'.$page);
	$this->load->view('templates/footer');		
	}
}
