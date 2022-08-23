<form method="POST" action="?action=quanlysanpham&query=add" style="display:flex">
    <p>Add product</p>
    <button class="btn-success" type="submit" name="btn_add">Add</button>
</form>
<h3>Danh mục sản phẩm</h3>
<table class="table">
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Loại</th>
        <th>Trạng thái</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    $query = mysqli_query($conn, 'SELECT * FROM products');
    $i = 0;
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo  $i++; ?></td>
            <td><?php echo $row['prod_id'] ?></td>
            <td>
                <img class="img-small" src="<?php echo $row['prod_img'] ?>">
            </td>
            <td><?php echo $row['prod_name'] ?></td>
            <td><?php echo $row['prod_price'] ?></td>
            <td><?php echo $row['prod_quantity'] ?></td>
            <td>
            <?php
                $sql = "SELECT * FROM categories WHERE cat_id = ".$row['prod_category']."";
                $result = executeSingleResult($sql);
                echo$result['cat_name'];
            ?>
            </td>
            <td><p>
            <?php 
                $sql = "SELECT * FROM status WHERE status_id = ".$row['prod_status']."";
                $result = executeSingleResult($sql);
                echo$result['status_name'];
            ?>
            </p></td>
            <td><a href="?action=quanlysanpham&query=update&id=<?php echo$row['prod_id']?>" ><button type="button" class="btn_update btn-warning" >Update</button></a></td>
            <td><a type="button" class="btn-danger" href="modules/quanlysanpham/handle.php?id=<?php echo$row['prod_id']; ?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
