<?php
class ProductController extends Controller {
	public function index(){
		$data = $this->model('ProductModel')->getProduct();
		$this->view('product', $data);
	}

}