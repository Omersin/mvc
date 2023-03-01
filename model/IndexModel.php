<?php
class IndexModel extends Model {
    public function index(){
        return 'IndexControllerdan buraya geldiniz, burası IndexModel bu veriler $data değişkeniyle view klasöründeki index.php ye gönderiliyor...';
    }

}