<?php
namespace App\Controller;

use App\Model\Product;
use App\Model\ProductManager;


class ProductController {
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductManager();
    }

    public function getAll() {
        $products = $this->productController->getAllPro();
        // echo "<pre>";
        // print_r($products);
        include('src/View/list-product.php');
    }

    public function add() {
        include('src/View/add-product.php');
        if(isset($_POST['sbm'])) {
            $name = $_POST['name'];
            $category =$_POST['category'];
            $price =$_POST['price'];
            $quality =$_POST['quality'];
            $date =$_POST['date'];
            $description =$_POST['description'];


            $product = new Product($name,$category,$price,$quality,$date,$description);
            
            $this->productController->add($product);
            header('location:index.php');
  
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $product = $this->productController->getProduct($id);

        // echo "<pre>";
        // print_r($product);

        include('src/View/edit-product.php');
        if(isset($_POST['sbm'])) {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $quality = $_POST['quality'];
            $date = $_POST['date'];
            $description = $_POST['description'];

            $product = new Product($name,$category,$price,$quality,$date,$description);
            $product->setId($id);
            $this->productController->editProduct($product);
            header('location:index.php');
        }

    }

    public function del() {
        $id = $_GET['id'];
        $this->productController->delProduct($id);
        header('location:index.php');
    }

    public function searchPro() {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $keyword = $_REQUEST['keyword'];
            $products = $this->productController->searchProduct($keyword);
            include('src/View/search-product.php');
        }
    }
}