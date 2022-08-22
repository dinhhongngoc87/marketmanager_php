<?php
include("add.php");
?>
<h3>Danh mục sản phẩm</h3>
<table class="table">
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    $query = mysqli_query($conn, 'SELECT * FROM categories');
    $i = 0;
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo  $i++; ?></td>
            <td><?php echo $row['cat_id'] ?></td>
            <td><?php echo $row['cat_name'] ?></td>
            <td><a href="?action=quanlydanhmucsanpham&query=update&id=<?php echo$row['cat_id']?>" ><button type="button" class="btn_update btn-warning" >Update</button></a></td>
            <td><a type="button" class="btn-danger" href="modules/quanlydanhmucsanpham/handle.php?id=<?php echo$row['cat_id']; ?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
