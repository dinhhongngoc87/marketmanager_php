<?php
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM categories WHERE cat_id = " . $_GET['id'] . "";
    $result = executeSingleResult($sql);
}

?>
<form method="POST" action="modules/quanlydanhmucsanpham/handle.php?id=<?php echo$result['cat_id']; ?>">
    <h3>Update category</h3>
    <h3>Category ID:<?php echo $_GET['id'] ?> </h3>
    <input class="input" type="text" name="cat_name" value="<?php echo $result['cat_name']  ?>"  placeholder="Category name">
    <button type="submit" name="btn_update" class="btn-warning">Update</button>
</form>