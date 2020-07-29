<h1 class="text-center" >Danh sách các mặt hàng</h1>

<a class="btn btn-primary" href="index.php?page=add-product">Thêm sản phẩm</a>

<form action="index.php?page=search-product" method="post" class="form-inline  mt-3 mb-3">
        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm" class="form-control mr-sm-2">
        <button type="submit"  class="btn-search btn btn-primary" >Tìm kiếm</button>
</form>

<!-- <a class="btn btn-primary" href="index.php">Xem toàn bộ sản phẩm tên hàng</a> -->

<table class="table table-striped text-center ">
    <tr>
        <th>STT</th>
        <th>Tên hàng</th>
        <th>Loại hàng</th>
        <th colspan="2" >Action</th>

    </tr>

    <?php if(empty($products)): ?>
        <h1>No data</h1>
    <?php else: ?>
        <?php foreach($products as $key=>$product):?>
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $product->getName();?></td>
                <td><?php echo $product->getCategory();?></td>
                <td><a class="btn btn-primary" href="index.php?page=edit-product&id=<?php echo $product->getId()?>">Edit</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')" class="btn btn-primary" href="index.php?page=del-product&id=<?php echo $product->getId()?>">Del</a></td>
             
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>    

</table>