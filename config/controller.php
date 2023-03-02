<?php 
class Controller {
    public function model($modelname){
        return new $modelname();        
    }
    
    public function view($filename, $data = []){
		require_once 'view/'.$filename.'.php';
	}

}
