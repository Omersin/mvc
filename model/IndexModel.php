<?php
class IndexModel extends Model {
    public function getHelloWord(){
        return 'Hello Word...';
    }

    public function list(){
      $query = $this->pdo->query('SELECT * FROM `qp_test` WHERE 1')->fetchAll(PDO::FETCH_ASSOC);
      return $query;
    }
}