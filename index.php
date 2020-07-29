<?php

require __DIR__. "/vendor/autoload.php";

use App\Controller\ProductController;

$productController = new ProductController();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<div class="container">
<?php
  
    if(isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'list-product':
                $productController->getAll();
                break;
            case 'add-product':
                $productController->add();
                break;
            case 'edit-product':
                $productController->edit();
                break;
            case 'del-product':
                $productController->del();
                break;

            case 'search-product':
                $productController->searchPro();
                break;
            
            default:
                $productController->getAll();
                break;
        }
    } else {
        $productController->getAll();
    }

    ?>  
</div>
</body>
</html>

