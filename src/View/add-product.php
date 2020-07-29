<div class="col-md-4 offset-md-4 mt-5">
<form action="" method="post" >
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Name product">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="category" placeholder="Category">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="price" placeholder="Price">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="quality" placeholder="Quality">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="date" placeholder="Date">
    </div>
    <div class="form-group">
        <textarea class="form-control" type="text" name="description" placeholder="Description"></textarea>
    </div>

    <!-- $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':category', $product->getCategory());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quality', $product->getQuality());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription()); -->

   <div class="form-group">
     <button class="btn btn-primary" type="submit" name="sbm" >Add</button>
   </div>
    
</form>

</div>

