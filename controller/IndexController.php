<?php
class IndexController extends Controller {
	public function index(){
		$data = 'SELAMLAR';
		$this->view('index', $data);
	}

}