<?php 

class Home extends Controller
{
	public function index()
	{
		$data['nama'] = 'Ivank';

		$this->view('templates/header');
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

}