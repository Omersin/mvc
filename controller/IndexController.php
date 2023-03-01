<?php
class IndexController extends Controller {
	public function index(){
		$data = $this->model('IndexModel')->index();
		$this->view('index', $data);
	}

}