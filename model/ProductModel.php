<?php
class ProductModel extends Model {
    public function getProduct(){
      $query = $this->pdo->query('SELECT * FROM product')->fetchAll(PDO::FETCH_ASSOC);
      return $query;
    }
}