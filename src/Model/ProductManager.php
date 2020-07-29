<?php
namespace App\Model;

use App\Model\DBConnect;
use App\Model\Product;

class ProductManager {
    protected $database;

    public function __construct()
    {   
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllPro() {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();

        $arr = [];
        foreach ($data as $key => $value) {
            $product = new Product($value['name'],$value['category'],$value['price'],$value['quality'],$value['date'],$value['description']);
            $product->setId($value['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function add($product) {
        $sql = "INSERT INTO `products`(`name`, `category`, `price`, `quality`, `date`, `description`) VALUES (:name,:category,:price,:quality,:date,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quality', $product->getQuality());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }

    public function getProduct($id) {
        $sql = "SELECT * FROM products WHERE  id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function editProduct($product) {
        $sql = "UPDATE `products` SET `name`=:name,`category`=:category,`price`=:price,`quality`=:quality,`date`=:date,`description`= :description WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quality', $product->getQuality());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->bindParam(':id', $product->getId());
        $stmt->execute();
    }

    public function delProduct($id) {
        $sql = "DELETE FROM `products` WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function searchProduct($keyword) {
        $sql = "SELECT * FROM products WHERE name LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':keyword','%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->fetchAll();
        // echo "<pre>";
        // print_r($data);
        $products = [];
        foreach ($data as $key => $value) {
            $product = new Product($value['name'],$value['category'],$value['price'],$value['quality'],$value['date'],$value['description']);
            $product->setId($value['id']);
            array_push($products, $product);
        }
        return $products;
    }   

    
}