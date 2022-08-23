<?php
?>
<h1 style="text-align:center">Add product</h1>
<div class="div wide" style="border: 1px solid #dee2e6;padding:20px 15px;">
    <form method="POST" action="modules/quanlysanpham/handle.php?query=add">
        <label>
            <p>Product name</p>
        </label>
        <input name="prod_name" class="input" type="text" placeholder="Enter product name">
        <label>
            <p>Price</p>
        </label>
        <input name="prod_price" class="input" type="number" placeholder="ex: 100000">
        <label>
            <p>Quantity</p>
        </label>
        <input name="prod_qty" class="input" type="number" placeholder="ex: 100">
        <label>
            <p>Image</p>
        </label>
        <input class="input" type="text" name="prod_img">
        
        <label>
            <p>Staus</p>
        </label>
        <select name="prod_status" class="input">
            <?php
            $query = mysqli_query($conn, 'SELECT status_id, status_name FROM status');
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <option value="<?php echo $row['status_id'] ?>"><?php echo $row['status_name'] ?></option>
            <?php
            }
            ?>
        </select>
        <label>
            <p>Category</p>
        </label>
        <select name="prod_category" class="input">
            <?php
            $query = mysqli_query($conn, 'SELECT cat_id,cat_name FROM categories');
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
            <?php
            }
            ?>
        </select>
        <hr>
        <button class="btn-success" type="submit" name="btn_add">Add</button>
    </form>

</div>