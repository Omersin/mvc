<?php
class IndexController extends Controller {
	public function index(){
		$data = $this->model('IndexModel')->getHelloWord();
		$this->view('index', $data);
	}

}