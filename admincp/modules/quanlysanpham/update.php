<?php
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM categories WHERE cat_id = " . $_GET['id'] . "";
    $result = executeSingleResult($sql);
}

?>
<form method="POST" action="modules/quanlydanhmucsanpham/handle.php?id=<?php echo $result['cat_id']; ?>">
    <h2 style="text-align:center">Update product</h2>
    <h3>Category ID:<?php echo $_GET['id'] ?> </h3>
    <input type="text" name="cat_name" value="<?php echo $result['cat_name']  ?>" placeholder="Category name">
    <button type="submit" name="btn_update" class="btn-warning">Update</button>
</form>
<select>
    <?php
    $query = mysqli_query($conn, 'SELECT cat_id,cat_name FROM categories');
    while ($row = mysqli_query($conn, $query)) {
    ?>
        <option value="<?php $row['cat_id'] ?>"><?php $row['cat_name'] ?></option>
    <?php
    }
    ?>
</select>