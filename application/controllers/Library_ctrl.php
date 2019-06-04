<?php

class Library_ctrl extends CI_Controller
{
	
	public function index()
	{
		$data['libraries'] = $this->Library_mdl->list();
		$data['innerdata'] = 'library/read';

		$this->load->view('include/backendtemplate',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'library/create';

		$this->load->view('include/backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|xss_clean|is_unique[authors.authors_name]');

		if ($this->form_validation->run() == FALSE ) 
		{
			$data['innerdata'] = 'library/create';
			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			$this->Library_mdl->store();

			$this->session->set_flashdata('delete', 'Your data is delete. You should check in on some of those fields below.');

			return redirect('backend/library','refresh');

		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['library'] = $this->Library_mdl->detail($id);

		$data['innerdata'] = 'library/detail';

		$this->load->view('include/backendtemplate',$data);

	}

	public function delete()
	{
		$id = $this->uri->segment(4);


		$this->Library_mdl->delete($id);

		$this->session->set_flashdata('delete', 'Your data is delete. You should check in on some of those fields below.');

		return redirect('backend/library','refresh');

	}

}

?>