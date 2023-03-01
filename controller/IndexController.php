<?php
class IndexController extends Controller {
	public function index(){
		$data = $this->model('ListModel')->list();
		$this->view('index', $data);
	}

}