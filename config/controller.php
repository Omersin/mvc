<?php 
class Controller {
    public function view($filename, $data = []){
		require_once 'view/'.$filename.'.php';
	}
	
}