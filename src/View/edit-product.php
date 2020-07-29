<div class="col-md-4 offset-md-4 mt-5">
    <form action="" method="post" >
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="<?php echo $product['name']?>">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="category" value="<?php echo $product['category']?>">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="price" value="<?php echo $product['price']?>">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="quality" value="<?php echo $product['quality']?>">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="date" value="<?php echo $product['date']?>">
        </div>
        <div class="form-group">
            <textarea class="form-control" type="text" name="description" ><?php echo $product['description']?></textarea>
        </div>
        
        
    <div class="form-group">
        <button class="btn btn-primary" type="submit" name="sbm" >Update Product</button>
    </div>
</div>