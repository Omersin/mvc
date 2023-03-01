<?php 
class Controller {
    public function view($filename){
	require_once 'view/'.$filename.'.php';
    }
	
}
