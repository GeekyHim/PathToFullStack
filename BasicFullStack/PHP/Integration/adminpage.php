<?php
include 'session.php';
?>
<div class = 'options'>
<a href = 'addCat.php'> Add Category</a>
<a href = 'addPro.php'> Add Product</a>
<a href = 'manageproducts.php'> Manage Product</a>
</div>
<style>

.options a {
    margin : 10px;
    font-size: 25px;
}
.options {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
}
</style>