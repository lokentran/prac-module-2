<h2 class="text-center">Kết quả tìm kiếm mặt hàng</h2>
<a class="btn btn-primary mb-3" href="index.php">Xem toàn bộ các sản phẩm</a>

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